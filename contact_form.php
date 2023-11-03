<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset ($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        $request = " insert into contact_form(name, email, message) values
        ('$name', '$email', '$message')";

        mysqli_query($connection, $request);

        header('location:contact.php');
    }else{
        echo 'p nt cuy, coba lagi';
    }
?>