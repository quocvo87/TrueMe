<?php
namespace App\InjectionReflection;

include('./BaseClass/Computer.php');
include('./BaseClass/Laptop.php');
include('./BaseClass/Desktop.php');
include('./Controllers/DeveloperController.php');

use ReflectionClass;

// Binding ở Service Provider
$binding = [
    // Khi cần Laptop thì trả về Laptop
    'App\InjectionReflection\BaseClass\Laptop' => 'App\InjectionReflection\BaseClass\Laptop',
    // Khi cần Desktop thì trả về Desktop
    'App\InjectionReflection\BaseClass\Desktop' => 'App\InjectionReflection\BaseClass\Desktop', 
];

// Sau một công đoạn phức tạp để phân tách URL, Laravel đã tìm được Controller và Action cần thực thi như đây:
$controllerName = 'App\InjectionReflection\Controllers\DeveloperController';
$actionName = 'work';


// Injection with reflection
$reflectorController = new ReflectionClass($controllerName);
$constructorParameters = $reflectorController->getConstructor()->getParameters();

$params = []; // Parameters sẽ truyền vào constructor
foreach ($constructorParameters as $parameter) {
    $paramClass = $parameter->getClass();
    $paramClass = $paramClass->name;
    // Với trường hợp này nó sẽ là Laptop, Desktop...., 
    // nếu không phải Interface/Class name thì nó sẽ là null

    $paramValue = null; // default
    if (!is_null($paramClass) && isset($binding[$paramClass])) {
        // Đến đây, với Laravel thì nó sẽ đệ quy để tìm ra đối tượng của $binding[$paramClass]
        // Chúng ta học thì chúng ta làm đơn giản thôi.
        $paramValue = new $binding[$paramClass](); // Đơn giản ghê! Ahihi.
    }
    $params[] = $paramValue;
}

/*
 * Khởi tạo đối tượng. Tương đương với: 
 * $controller = new DeveloperController(new Laptop, new Desktop)
 */
$controller = $reflectorController->newInstanceArgs($params); 

$doing = $controller->$actionName(); // Gọi action, tương đương với $controller->work()
