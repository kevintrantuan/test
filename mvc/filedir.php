<?php
class trick
{
    function doit()
    {
        echo " Tuấn";
        echo "</br>";
    }

    function doitagain()
    {
        echo "xin chào ";
        trick::doit();
        echo __DIR__;
        echo "</br>";
        echo __FILE__;
    }

}
$obj = new trick();
$obj->doit();

//output will be ---- doit
$obj->doitagain();
//output will be ------ trick::doitagain
?>