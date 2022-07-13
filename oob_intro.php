<?php
/**

Always creates a class in a new php tag--- avoid more than one class in a single php tag
 * A class is a template of an object eg car, fruit, school, church  etc
 An object is an instance of a class eg car(volvo, toyota, lexus, camry), fruit(mango, apple, orange, banana), school(withGod, futminna, onward, ejigbo high school), church(redeem, winner, assembly church of God )
 the property of each object is refer to as the value--- the value of car class can be coolor, brand, model, engine tye etc
 */
class Cars {
	private $name, $color, $model;
	

	function set_name($name, $color, $model) {
		$this->name = $name;
		$this->color = $color;
		$this->model = $model;
	}

	function get_name (){
		return "Name: " . $this->name . "<br>" . "Color: " . $this->color . "<br>" . "Model: " . $this->model . "<br>";
	}
}

$first_car = new Cars();
// setting the value of the $first_car property
$first_car->set_name("Toyota",  "Blue", "2005");
// overwriting the data
echo $first_car->set_name("Lexus", "Silver", "2020");
// changing one of the property, name
//echo $first_car->name = "Kia";
echo $first_car->get_name();
var_dump($first_car instanceof Cars)




  ?>

  <?php 

  /**
 * Anoother sample of code on OOP using constructor
 Remember to create and call the object outside the class
 A destruct function is autmatically called, no need for the getter method when a destruct function is used.
 */
class Fruits {
	public $name, $color, $store;
	
	function __construct($name, $color){
		$this->name = $name;
		$this->color = $color;	
	}

	function get_fruit(){
		return "Fruit Name: " . $this->name . "<br>" . "Fruit Colour: " . $this->color . "<br>";
	}

	function __destruct(){
		echo "DESTRCT METHOD- " . "Fruit Name: " . $this->name . "<br>" . "Fruit Colour: " . $this->color . "<br>";
	}

}

$myFruit = new Fruits("Orange", "Yellow");
echo $myFruit->get_fruit();
var_dump($myFruit instanceof Fruit);

   ?>