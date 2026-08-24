<?php

	// TASK 1: ACCESS MODIFIERS
	class StudentAccount
	{
		// name property can be accessed everywhere
		public $name;
		// studentId can be accessed only inside this class
		private $studentId;
		// department can be accessed in this class in its children
		protected $department;

		function __construct($name, $studentId, $department)
		{
			$this->name = $name;
			$this->studentId = $studentId;
			$this->department = $department;

		}

		// this function shows information of the students
		function showInfo()
		{
			echo "Name: " . $this->name . "\nStudent ID: " . $this->studentId . "\nDepartment: " . $this->department;
		}
		// this function uses the return statement and returns studentId
		function getStudentId()
		{
			return "\nStudent ID from method: " . $this->studentId;
		}
	}
	// creating an object
	$student1 = new StudentAccount("Ahmad", 1001, "Computer Science");
	// $student1->showInfo();
	// echo $student1->getStudentId();

	// testing the expriment which fails on studentId and department
	// echo $student1->name;
	// echo $student1->studentId;
	// echo $student1->department;
	

	// TASK 2: SIMPLE INHERITANCE
	class Person 
	{
		public $name;

		function __construct($name) 
		{
			$this->name = $name;
		}
		// this function introduces the person object
		function introduce() {
			echo "My name is " . $this->name . "<br>";
		}

	}

	// Student inherits properties and methods from the parent class which is Person
	class Student extends Person 
	{
		// this method only belongs to student
		function study() 
		{
			echo $this->name . " is studying.";
		}
	}


	$student1 = new Student("Sara");

	// $student1->introduce();
	
	// $student1->study();


	//TASK 3: COMBINE INHERITANCE AND ACCESS MODIFIERS
	class Employee
	{
		public $company;
		protected $name;
		private $salary;

		function __construct($company, $name, $salary)
		{
			$this->company = $company;
			$this->name = $name;
			$this->salary = $salary;
		}

		// this method displays all the employee information
		function showEmployee()
		{
			echo "Name: " . $this->name . "\nCompany: " . $this->company . "\nSalary: " . $this->salary . "<br>";
		}

		function getSalary()
		{
			echo "Salary from method: " . $this->salary . "<br>";
		}
	}

	// Manager is taking its method and properties from the parent class which is Employee
	class Manager extends Employee
	{
		function manageTeam()
		{
			echo $this->name . " is managing the team.";
		}
	}


?>