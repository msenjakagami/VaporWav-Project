<?php
include 'dbconn.php'
?>
<!doctype html>
<html lang="en">
<head>
    <!needed this to stop a warning in the validator>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>VaporWav - Share your art</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery.alphanum-master/jquery.alphanum.js"></script>
    <link rel="stylesheet" href="stylesFinal.css">

    <script src="acctscript.js"></script>
</head>
<body>
  <header>
    <div class="padThis">
      <h1>VaporWav</h1>
      <p class="underHeader">Show us what you have been working on.</p>
      <form action="searchUser.php" method="get">
	      <input type="text" name="searchQ" placeholder="Search...">
	      <button type="submit">Submit</button>
      </form>
    </div>
    <nav>
    <!list of the seperate parts of this page>
    <ul>
      <li><a href = "home.php">Home</a>
      <a href = "uploadPage.php">Upload</a>
      <a href = "feed.php">Explore</a>
      <a href = "galleries.php">Galleries</a>
      <a href = "friendPage.php">Friends</a></li>
    </ul>
    <ul class="leftHead">
      <li><a href = "account.php">My Account</a>
      <a href = "logout.php">Logout</a></li>
    </ul>
    </nav>
  </header>

<!--<main class="container">-->