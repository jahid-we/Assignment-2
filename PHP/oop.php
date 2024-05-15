<?php
class Book{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method

    function getTitle(){
        return $this->title;
    }


    // TODO: Add getAvailableCopies method

    function getAvailableCopies(){
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method

    function borrowBook(){
        if ($this->availableCopies <= 0) {
            throw new Exception("Number must be greater than 0");
        }else{
            $this->availableCopies--;
        }
    }

    // TODO: Add returnBook method
    function returnBook(){
        $this->availableCopies++;
    }
}

class Member{
    // TODO: Add properties as Private

    private $name;

    public function __construct($name){
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method

    public function getName(){
        return $this->name;
    }

    // TODO: Add borrowBook method

    public function borrowBook($book){
        $book->borrowBook();
    }

    // TODO: Add returnBook method

    public function returnBook($book){
        $book->returnBook();
    }
}


// Usage

// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// TODO: Create 2 books with the following properties
$Book1 = new Book("The Great Gatsby", 5);
$Book2 = new Book("To Kill a Mockingbird", 3);


// TODO: Create 2 members with the following properties
$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");


// TODO: Apply Borrow book method to each member

$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);


// TODO: Print Available Copies with their names:

print "Available Copies of '{$Book1->getTitle()}': {$Book1->getAvailableCopies()} \n";
print "Available Copies of '{$Book2->getTitle()}': {$Book2->getAvailableCopies()} \n";
