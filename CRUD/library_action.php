<?php
include 'classes/Library.php'; 
$lib_obj = new Library;

if(isset($_POST['save-book'])){
    $book_name = $_POST['book-name'];
    $book_genre = $_POST['book-genre'];
    $book_author = $_POST['book-author'];
    $date_added = $_POST['book-date-added'];

    $lib_obj->add_book($book_name,$book_genre,$book_author,$date_added);

    
}elseif(isset($_POST['update-book'])){
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book-name'];
    $book_genre = $_POST['book-genre'];
    $book_author = $_POST['book-author'];
    $date_added = $_POST['book-date-added'];

    $lib_obj->update_book($book_name,$book_genre,$book_author,$date_added,$book_id);
   
}



?>