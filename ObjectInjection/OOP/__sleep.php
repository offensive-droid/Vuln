<?php
class Point {
    private int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
   
}

class ChildClass extends Point{
    
    public function __construct(int $x, int $y = 0) {
        $this->x = 20;
        $this->y = $y;
    }
}

 $test =  new Point(20);
 echo $test->x;

?>