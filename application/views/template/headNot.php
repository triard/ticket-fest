<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Odibee+Sans&display=swap" rel="stylesheet">
  <style>
      body{
        background-color: #f0c80e;
      }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm  navbar-dark" style="background-color:#159d8c">
  <style>
      .nav-link{
        font-weight: bold;
      }

  </style>
  <ul class="navbar-nav">
    <li  class="nav-item">
      <a class="nav-link " href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./shows.html">Shows</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./venue.html">Venue</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="./contact.html">Contact</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              ...
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">FAQ</a>
              <a class="dropdown-item" href="#">Imprint & Terms</a>
              <ul style="list-style: none; ">
                <style>
                .a{
                  padding:5px 5px;
                  text-decoration:none; /*menghilangkan underline pada menu*/
                  color:black; /*Merubah warna tulisan menjadi putih*/
                }
                .a:active{
                    background-color: black;
                }
                </style>
                <a class="a" href="#"><i class="fa fa-instagram" style="font-size:20px"></i></a>
                <a class="a" href="#"><i class="fa fa-facebook" style="font-size:20px"></i></a>
                <a class="a" href="#"><i class="fa fa-twitter" style="font-size:20px"></i></a>

             </ul>
            </div>
          </li>
  </ul>
  <a class="navbar-brand    " style="margin-left:20%" ><img src="./img/logo.png" alt="" style="display: block; height: 70%; width: 70%;"></a>
  <!-- <a href="#" class="nav-item" style=" color: white; margin-left: 12%;">Submit your Band </a>
  <a style="color: white; margin-left: 1%; margin-right: 1%; font-size: 30px;">|</a>  -->
  <a href="./login/index.html" class="nav-item" style=" color: white;margin-left: 15%; text-decoration: none;"> login</a>
  <a href="./login/signup.html" class="nav-item" style=" color: white; margin-left: 2%; text-decoration: none;">Join free</a>
</nav>