// Name: Mohammad Sadiq Hanan
// Student ID: Q01000570

<?php
	
	// TASK 1
	class Library {
		// a constant value means it can not be changed after it is assgined to a specific value.
		const MAX_BOOKS = 3;

	}

	echo "Maximum books allowed: " . Library::MAX_BOOKS . "\n";

	// TASK 2
	class StudentCounter {
		public static $count = 0;

		public static function addStudent() {
			self::$count++;
		}
	}

	StudentCounter::addStudent();
	StudentCounter::addStudent();
	StudentCounter::addStudent();

	echo "Total students: " . StudentCounter::$count . "\n";

	// TASK 3
	abstract class Vehicle {
		abstract public function start();
	}

	class Car extends Vehicle {
		function start() {
			echo "Car engine started.\n";
		}
	}

	class Bike extends Vehicle {
		function start() {
			echo "Bike started.\n";
		}
	}


	$car1 = new Car();
	$bike1 = new Bike();

	$car1->start();
	$bike1->start();
?>