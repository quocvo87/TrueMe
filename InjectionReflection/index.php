<?php
namespace App\InjectionReflection;

include('./BaseClass/Computer.php');
include('./BaseClass/Laptop.php');
include('./BaseClass/Desktop.php');


use ReflectionClass;
use App\InjectionReflection\BaseClass\Computer;
use App\InjectionReflection\BaseClass\Laptop;
use App\InjectionReflection\BaseClass\Desktop;


class Developer
{
    protected $computer;

    public function __construct(Computer $computer, Desktop $desktop)
    {
        $this->computer = $computer;
        var_dump('desktop', $desktop);
    }

    public function work()
    {
        $this->computer->run();
    }
}


// Binding ở Service Provider
$binding = [
    'App\InjectionReflection\BaseClass\Computer' => 'App\InjectionReflection\BaseClass\Laptop', // Khi cần Computer thì trả về Laptop
    'App\InjectionReflection\BaseClass\Desktop' => 'App\InjectionReflection\BaseClass\Desktop', 
];

// Sau một công đoạn phức tạp để phân tách URL, Laravel đã tìm được Controller và Action cần thực thi như đây:
$controllerName = 'App\InjectionReflection\Developer';
$actionName = 'work';


// Injection with reflection
$reflectorController = new ReflectionClass($controllerName);
$constructorParameters = $reflectorController->getConstructor()->getParameters();

$params = []; // Parameters sẽ truyền vào constructor

foreach ($constructorParameters as $parameter) {

    $paramClass = $parameter->getClass();
    $paramClass = $paramClass->name;
    // Với trường hợp này nó sẽ là Computer, nếu không phải Interface/Class name thì nó sẽ là null

    $paramValue = null; // default
    if (!is_null($paramClass) && isset($binding[$paramClass])) {
        // Đến đây, với Laravel thì nó sẽ đệ quy để tìm ra đối tượng của $binding[$paramClass]
        // Chúng ta học thì chúng ta làm đơn giản thôi.
        $paramValue = new $binding[$paramClass](); // Đơn giản ghê! Ahihi.
    }
    $params[] = $paramValue;
}

$controller = $reflectorController->newInstanceArgs($params); // Khởi tạo đối tượng. Tương đương với: $controller = new Developer(new Laptop)

$doing = $controller->$actionName(); // Gọi action, tương đương với $controller->work()
