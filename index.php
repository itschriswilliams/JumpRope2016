<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JumpRope</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Vendor CSS -->
    <link href="css/vendor.min.css" rel="stylesheet">    

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Questrial|Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php $page = htmlspecialchars($_GET["page"]);
    if ($page == '') {
        $page = "home";
    }
?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?php include '_includes/svg-defs.svg' ?>


<?php
    $v2 = array("blog-detail", "privacy", "security", "terms");

    if(in_array($page, $v2)){
        include ('includes/header2.php');
    }
    else{
        include ('includes/header.php');
    }
?>

<?php include ("pages/$page.php"); ?>

<?php include 'includes/footer.php' ?>  



    <!-- jQuery Lib -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Vendor Plugin JavaScript -->
    <script src="js/vendor.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script src="js/production.min.js"></script>

</body>

</html>
