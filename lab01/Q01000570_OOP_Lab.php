<?php


	// PART A, B, C
	// -----------------------------------------------
	// first we are gonna make a class called Student
	// class Student {

	// 	// declaring properties for student class
	// 	public $name;
	// 	public $studentId;
	// 	public $department;


	// 	// this is the constructor method to initiate student objects with properties
	// 	function __construct($name, $studentId, $department)
	// 	{
	// 		// store the values in the properties
	// 		$this->name = $name;
	// 		$this->studentId = $studentId;
	// 		$this->department = $department;
	// 	}

	// 	// this method displays all the student properties
	// 	function showInfo()
	// 	{
	// 		// display student information
	// 		echo "Name: " . $this->name . "\nStudent ID: " . $this->studentId . "\nDepartment: " . $this->department;
	// 	}


	// 	// creating a method called sayHello for students
	// 	function sayHello() {
	// 		echo "Hello! I am a Student";
	// 	}

	// }


	// // creating an object called student1 when student class has no properties
	// // $student1 = new Student();
	// // at the end, we are calling the sayHello method for student1
	// // $student1->sayHello();


	// // modifying $student1 to have properties
	// $student1 = new Student(
	// 	"Ahmad", 1001, "Computer Science"
	// );

	// // $student1->showInfo();



	// // creating a second object and then calling the showInfo method
	// $student2 = new Student(
	// 	"Sara", 1002, "Information Systems"
	// );

	// // $student2->showInfo();


	// PART D
	// --------------------------------------
	class BankAccount
	{
		public $ownerName;
		private $balance;

		function __construct($ownerName, $balance)
		{
			$this->ownerName = $ownerName;
			$this->balance = $balance;
		}

		function showBalance()
		{
			echo "You balance is $" . $this->balance;
		}


	}

	$account1 = new BankAccount(
		"Ahmad", 5000
	);

	// echo "Owner: " . $account1->ownerName . "<br>";
	// $account1->showBalance();


	// this line fails because balance is a private property and cannot be accessed only inside the same class
	// echo $account1->balance;


	// PART E
	// -------------------------------------
	class Person 
	{
		public $name;


		function __construct($name) 
		{
			$this->name = $name;
		}

		function introduce() {
			echo "My name is " . $this->name . "<br>";
		}

	}


	class Student extends Person 
	{
		function study() 
		{
			echo $this->name . " is studying.";
		}
	}


	$student1 = new Student("Ahmad");

	// $student1->introduce();
	
	// $student1->study();



	// PART G
	// ---------------------------------
	class Vehicle 
	{
		protected $brand;

		function __construct($brand) 
		{
			$this->brand = $brand;
		}

		function start()
		{
			echo "The vehicle is starting.<br>";
		}

	}


	class Car extends Vehicle
	{
		function showBrand() 
		{
			echo "Car brand: " . $this->brand;
		}
	}


	$car1 = new Car("Toyota");
	$car1->start();
	$car1->showBrand();


?>