<?php
class SQL_Row_Value
{
 private $_table = "SQL Injection";
}
class Example3
{
 protected $obj;
 function __construct()
 {
 $this->obj = new SQL_Row_Value;
 }
}
print serialize(new Example3);
?>