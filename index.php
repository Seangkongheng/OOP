<?php 
class Fruit{
    public $name;
    public $color;
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_color() {
        return $this->color;
      }
}   
$app= new Fruit();

?>