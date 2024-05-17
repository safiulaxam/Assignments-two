<?php
class Book {
 // TODO: Add properties as Private
 private $availableCopies;
 private $tittle;
 public function __construct($tittle, $availableCopies) {
     // TODO: Initialize properties
     $this->availableCopies = $availableCopies;
     $this->tittle = $tittle;
     }


// TODO: Add getTitle method

public function getTitle() {
    return $this->tittle;
}
 



 // TODO: Add getAvailableCopies method
 
public function getAvailableCopies() {
    return $this->availableCopies;
}


 // TODO: Add borrowBook method
 public function borrowBook() {
     if ($this->availableCopies > 0) {
         $this->availableCopies--;
         return true;
     } else {
         return false;
     }
 }



 // TODO: Add returnBook method
 public function returnBook() {
     if ($this->availableCopies < 5) {
         $this->availableCopies++;
         return true;
     } else {
         return false;
     }
 }
}


class Member {
 // TODO: Add properties as Private

private $name;
private $availableCopies;
 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
     }



 // TODO: Add getName method
 public function getName() {
     return $this->name;
 }
 // TODO: Add borrowBook method
 
public function borrowBook() {
    if ($this->availableCopies > 0) {
        $this->availableCopies--;
        return true;
    } else {
        return false;
    }
}


 // TODO: Add returnBook method
 public function returnBook() {
     if ($this->availableCopies < 5) {
         $this->availableCopies++;
         return true;
     } else {
         return false;
     }
 }
}

$book=new Book("The Great Gatsby", 5);
$member=new Member("John Doe");
$members=new Member("Jane Smith");
echo "Book 1: " . $book->getTitle() . ", Available Copies: " . $book->getAvailableCopies() . "\n";

$books=new Book("To Kill a Mockingbird", 3);
echo "Book 2: " . $books->getTitle() . ", Available Copies: " . $books->getAvailableCopies() . "\n";

echo "Member 1 - Name: ".$member->getName() . " borrowed " . $book->getTitle() . "\n";

echo "Member 2 - Name: ".$members->getName() . " borrowed " . $books->getTitle() . "\n";



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.



// TODO: Create 2 members with the following properties
//Member 1 - Name: John Doe
//Member 2 - Name: Jane Smith



// TODO: Apply Borrow book method to each member



// TODO: Print Available Copies with their names:


