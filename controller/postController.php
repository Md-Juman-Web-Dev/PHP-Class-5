<?php 
session_start();



$author = $_POST ['author'];
$title = $_POST ['title'];
$detail = $_POST ['detail'];
$number = $_POST ['number'];
$date = $_POST ['date'];
$todaysDate = new DateTime();
$selectedDate = new DateTime($date);
$errors = [];

// Author validation
if(empty($author)){
 $errors['author']='Author Name is required';
}else if(strlen($author) < 3 || strlen($author) > 60){
   $errors["author"] = 'Author name must be 3 characters';
};

// Title validation
if(empty($title)){
   $errors['title']='Title is required';
}else if(strlen($title) < 3 || strlen($title) > 100){
   $errors['title'] = 'Title must be between 3 and 100 characters';
}

// Detail validation
if(empty($detail)){
   $errors['detail']='Detail is required';
}else if(strlen($detail) < 5 || strlen($detail) > 200 ){
   $errors['detail'] = 'Detail must be between 5 and 200 characters';
}

// Number validation
if(strlen($number) !== 11){
   $errors['number'] = 'Invalid Phone Number';
}

// Date validation


if($selectedDate < $todaysDate){
   $errors['date'] = 'Pless Enter a fucher date';
} 


if(count($errors) > 0){
   $_SESSION['old'] = $_POST;
   $_SESSION['errors'] = $errors;
   header("Location: ../index.php");
}else{
// Store the selected date
   include "../database/env.php";
   $query = "INSERT INTO user_post( author, title, detail, number, date) VALUES ('$author','$title','$detail','$number','$date')";
    $res = mysqli_query($conn,$query);
    header("Location:../all-post.php");
};