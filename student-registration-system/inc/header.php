<?php 
include "student.php";
include('connect.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Online Registation</title>
        <link href='//fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
        <link href='//fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
        <!---FontAwesome---->
        <link type="text/css" href="CSS/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!---Jquery ui--->
        <link href="CSS/jquery-ui.min.css" rel="stylesheet">
        
        <link href="CSS/jquery.validity.css" rel="stylesheet">
        <!---Main CSS-->
        <link href="CSS/style.css" type="text/css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="container-fluid">
            <div class="well text text-center"> Assignment 3 </div>
            <P class="text-center text-success"> <?php if(isset($mgs)){
                      echo $mgs;
                    }
                ?>
            </P>
            <P class="text-center text-danger"><?php if(isset($err)){
                      echo $err;
                    }?>
                </P>
                     
            <hr>
  
            <div class="form">
                <div class="form_area">