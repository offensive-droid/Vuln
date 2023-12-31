<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 2 - Insecure Deserialization</title>
</head>
<body>
    <h1>Level 2</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="r">
  <input type="submit">
</form>

<?php
class Level2{
    protected $obj;
    
    function __construct(){
        $this->obj = $obj;
    }
     function __toString(){
         if(isset($this->obj)) return $this->obj->getValue();
        }
    }
    $user_data = isset($_POST['r']) ? unserialize($_POST['r']) : null;
    
    class SQL_Row_Value{
     private $_table;
     // some PHP code...
     function getValue($id)
     {
     $sql = "SELECT * FROM {$this->_table} WHERE id = " . (int)$id;
     $result = mysql_query($sql, $DBFactory::getConnection());
     $row = mysql_fetch_assoc($result);
    return $row['value'];
     }
    }
    ?>

</body>
</html>