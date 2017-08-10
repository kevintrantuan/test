<?php
/**
 * Created by PhpStorm.
 * User: Kevin Tran
 * Date: 25/04/2017
 * Time: 12:16 AM
 */
namespace Framework
{
    class Hello
    {
        public function world()
        {
            echo "Hello World!";
        }
    }
}

namespace Foo
{
    //allow us to refer to the Hello class
    //without specifying its namespace eachtime use Framework\Hello as Hello;
    class Bar
    {
        function _construct()
        {
            //here we can refer to Framework\Hello as simply Hello
            //due to the preceding "use" statement
            $hello = new Hello();
            $hello->world();
        }
    }
}

namespace
{
    $hello = new Framework\Hello();
    $hello->world(); // prints "Hello World!"

    $foo = new Foo\Bar();
    $foo->bar();
}


?>