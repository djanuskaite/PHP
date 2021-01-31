<h5 style="color:SlateBlue;">CONSTRUCTORS</h5>
<?php
class Book{
    var $title;
    var $author;
    var $pages;

    // we call constructor everytime new book is created
//    function __construct($name){
//        echo "$name <br>";
//    }

function __construct($aTitle, $aAuthor, $aPages){
    $this->title = $aTitle;
    $this->author = $aAuthor;
    $this->pages = $aPages;
}
}
$book1 = new Book("Harry Potter", "JK Rowling", 400);
$book1->title="Hunger Games";
$book2 = new Book("Lord Of the Rings", "Tolkien", 700);

echo $book1->title;

//$book1 = new Book("Mike");
//$book1->title = "Harry Potter";
//$book1->author = "JK Rowling";
//$book1->pages = 400;


?>