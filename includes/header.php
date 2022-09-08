<?php

function main_header(){

    $url = "http://localhost/hireach-ui/";
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hireach</title>
        <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
            .navbar {
                background-color: #012c6d;
            }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="'.$url.'">
                    <img src="Hireach-Logo-Final.jpg" width="180" alt="">
                </a>
    
    
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" style="color:white;font-family:sans-serif" href="'.$url.'">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="aboutdrop" role="button" style="color:white;font-family:sans-serif" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
    
                            <ul class="dropdown-menu" aria-labelledby="aboutdrop">
                                <li><a class="dropdown-item " href="'.$url.'about.php">About Us</a></li>
                                <li><a class="dropdown-item " href="# ">Media Room</a></li>
                                <li><a class="dropdown-item " href="# ">Awards and Accolades</a></li>
    
                            </ul>
    
                        </li>
    
    
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle " href="# " style="color:white;font-family:sans-serif" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown ">
                                <li><a class="dropdown-item " href="# ">Broadband Services</a></li>
                                <li><a class="dropdown-item " href="# ">Managed Services</a></li>
                                <li><a class="dropdown-item " href="# ">Enterprise Services</a></li>
                            </ul>
                        </li>
    
    
                        <li class="nav-item ">
                            <a class="nav-link" style="color:white;font-family:sans-serif" href="#">Partners</a>
                        </li>
    
    
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" style="color:white;font-family:sans-serif" id="plansdrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Plans</a>
                            <ul class="dropdown-menu " aria-labelledby="plansdrop ">
                                <li><a class="dropdown-item " href="# ">Plans</a></li>
                                <li><a class="dropdown-item " href="# ">Plans</a></li>
                                <li><a class="dropdown-item " href="# ">Plans</a></li>
                                <li><a class="dropdown-item " href="# ">Plans</a></li>
    
    
                            </ul>
                        </li>
    
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" style="color:white;font-family:sans-serif" id="applydrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Apply Online</a>
                            <ul class="dropdown-menu " aria-labelledby="applydrop ">
                                <li><a class="dropdown-item " href="'.$url.'apply-online.php">Apply Online</a></li>
                                <li><a class="dropdown-item " href="# ">Reset Password</a></li>
    
                            </ul>
    
                        </li>
    
    
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" style="color:white;font-family:sans-serif" id="opendrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Current Opening</a>
                            <ul class="dropdown-menu " aria-labelledby="opendrop ">
                                <li><a class="dropdown-item " href="# ">Web Designer</a></li>
                                <li><a class="dropdown-item " href="# ">PHP Developer</a></li>
    
    
                            </ul>
    
                        </li>
                    </ul>
                </div>
            </div>
            <a href="'.$url.'new-connection.php" id="connection-btn"> NEW CONNECTION</a>
    
    
        </nav>';
}
