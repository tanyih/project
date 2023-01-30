<?php

session_start();

require "config.php";
require "includes/functions.php";
require "includes/class-user.php";
require "includes/class-form-validation.php";
require "includes/class-csrf.php";
require "includes/class-db.php";
require "includes/class-authentication.php";
require "includes/class-cart.php";
require "includes/class-orders.php";
require "includes/class-products.php";

// get route from the global variable
$path = $_SERVER["REQUEST_URI"];

// remove beginning slash & ending slash 
$path = trim( $path, '/' );

// remove all the URL parameters that stars from ?
$path = parse_url( $path, PHP_URL_PATH );

// var_dump( $path);

switch( $path ) {
    case 'login':
        require "pages/login.php";
        break;
    case 'signup':
        require "pages/signup.php";
        break;
    case 'cart':
        require "pages/cart.php";
        break;
    case 'orders':
        require "pages/orders.php";
        break;
    case 'checkout':
        require "pages/checkout.php";
        break;
    case 'dashboard':
        require "pages/dashboard.php";
        break;
    case 'payment-verification';
        require "pages/payment-verification.php";
        break;
    case 'logout':
        require "pages/logout.php";
        break;
    case 'manage-users-add':   
        require 'pages/manage-users-add.php';   
        break;   
    case 'manage-users-edit':   
        require 'pages/manage-users-edit.php';  
        break;  
    case 'manage-users':  
        require 'pages/manage-users.php';  
        break;  
    default:
        require "pages/home.php";
        break;

}