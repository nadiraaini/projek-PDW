<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset ($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $favorite = $_POST['favorite'];

        
        $request = " insert into favorite_form(name, email, favorite) values
        ('$name', '$email', '$favorite')";

        mysqli_query($connection, $request);

        header('location:favorite.php');
    }else{
        echo 'p nt cuy, coba lagi';
    }
?>