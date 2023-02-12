<?php

define('ecom_store', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'Ecommerce');
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
class Controller {
    function __construct()
    {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this -> db = $connection;
    }

    function register($username, $email, $pass, $usertype)
    {
        $query = mysqli_query($this -> db, "INSERT INTO user(username, useremail, userpass, usertype)
            VALUES ('$username', '$email', '$pass', '$usertype')");
        return $query;
    }

    
    function login($username, $userpass)
    {
        $query = mysqli_query($this -> db, "SELECT userID, usertype, username FROM user WHERE username = '$username' AND userpass = '$userpass'");
        return $query;
    }


   
    function readUsers()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM user");
        return $query;
    }

 
    function readUser()
    {
        $query = mysqli_query($this -> db, "SELECT username,useremail,usertype FROM user WHERE userID=userID");
        return $query;
    } 
  
   
    function addUsers($username, $email, $pass, $usertype)
    {
        $query = mysqli_query($this -> db, "INSERT INTO user(username, useremail, userpass, usertype)
            VALUES ('$username', '$email', '$pass', '$usertype')");
        return $query;
    }
    
    function contact($fname,$lname,$phone,$email,$city,$subjectt)
    {
      $query =mysqli_query($this -> db,"INSERT INTO contact(fname,lname,phone,email,city,subjectt)
      VALUES ('$fname','$lname','$phone','$email','$city','$subjectt')");

      return $query;
    }
   
    function addProducts($image, $name, $price)
    {
        $query = mysqli_query($this -> db, "INSERT INTO products(image, name, price)
            VALUES ('$image', '$name', '$price')");
        return $query;
    }

    function addCart($image, $name, $price)
    {
        $query = mysqli_query($this -> db, "INSERT INTO Cart(image, name, price)
            VALUES ('$image', '$name', '$price')");
        return $query;
    }

    function readCostumers()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM costumers");
        return $query;
    }

    function readCostumer_Orders()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM costumer_order");
        return $query;
    }

    function readManefacturers()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM manefacturers");
        return $query;
    }
    
    function readProducts()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM products");
        return $query;
    }

    function readProduct_Categories()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM product_categories");
        return $query;
    }
    
    function readCart()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM cart");
        return $query;
    }
    
    function readPending_Orders()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM pending_orders");
        return $query;
    }

    function readStore()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM store");
        return $query;
    }
    
    

}


?>