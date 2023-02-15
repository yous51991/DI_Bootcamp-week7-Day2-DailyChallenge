<?php
// User class definition
class User {
  // Private member variables
  private $name;
  private $age;

  // Method to set the name of a user
  public function setName($name) {
    // Trim white spaces from the name
    $name = trim($name);
    // Validate the length of the name and throw an exception if it is less than 3 characters
    if (strlen($name) < 3) {
      throw new Exception("The name should be at least 3 characters long");
    }
    // Set the name for the user
    $this -> name = $name;
  }

  // Method to set the age of a user
  public function setAge($age) {
    // Cast the age to an integer type
    $age = (int)$age;
    // Validate the age and throw an exception if it is zero or less
    if ($age <= 0) {
      throw new Exception("The age cannot be zero or less");
    }
    // Set the age for the user
    $this -> age = $age;
  }

  // Method to get the name of a user
  public function getName() {
    return $this -> name;
  }

  // Method to get the age of a user
  public function getAge() {
    return $this -> age;
  }
}

// Function to test the User class
function test() {
  // An array of data for different users
  $dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
  );

  // Loop through the data of each user
  foreach ($dataForUsers as $data) {
    try {
      // Try to set the name and age of the user
      $user = new User();
      $user->setName($data[0]);
      $user->setAge($data[1]);
      // If there are no exceptions, display the user information
      echo $user->getName() . " is " . $user->getAge() . " years old." . "<br>";
    } catch (Exception $e) {
      // If there is an exception, display the error message and the file name
      echo "Error: " . $e->getMessage() . " in the file: " . $e->getFile() . "<br>";
    }
  }
}

// Call the test function
test();