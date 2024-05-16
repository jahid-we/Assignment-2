<?php
class Book{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    function getTitle(){
        return $this->title;
    }

    function getAvailableCopies(){
        return $this->availableCopies;
    }

    function borrowBook(){
        if ($this->availableCopies <= 0) {
            throw new Exception("Number must be greater than 0");
        }else{
            $this->availableCopies--;
        }
    }

    function returnBook(){
        $this->availableCopies++;
    }
}

class Member{

    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function borrowBook($book){
        $book->borrowBook();
    }

    public function returnBook($book){
        $book->returnBook();
    }
}

$Book1 = new Book("The Great Gatsby", 5);
$Book2 = new Book("To Kill a Mockingbird", 3);

$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");

$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);

print "Available Copies of '{$Book1->getTitle()}': {$Book1->getAvailableCopies()} \n";
print "Available Copies of '{$Book2->getTitle()}': {$Book2->getAvailableCopies()} \n";
