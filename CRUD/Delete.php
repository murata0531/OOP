<?php 
include 'library_action.php';
$id = $_GET['book_id'];

$lib_obj->delete_book($id);



?>