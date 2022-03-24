<?php
include_once 'classes/global.php';
include_once 'classes/user.php';

ob_start();
session_start();

$global = new _global;
if (!isset($_SESSION['user'])) {

  header("Location: ../index.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=$global->SITE_URL?>/assets/styles/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=$global->SITE_URL?>/assets/styles/bootstrap-icons.css">
  <link rel="stylesheet" href="<?=$global->SITE_URL?>/assets/styles/styles.css">
  <link rel="stylesheet" href="<?=$global->SITE_URL?>/assets/styles/jquery-ui.css">
  <script src="<?=$global->SITE_URL?>/assets/js/jquery-3.6.0.js"  ></script>
<script src="<?=$global->SITE_URL?>/assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><!-- <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="<?=$global->SITE_URL?>/assets/js/jquery-ui.js"></script>
  <script src="<?=$global->SITE_URL?>/assets/js/falcon.js"></script>
  
  <title>Falcontrac</title>
</head>

<body>
<?php
require('components/navbar.php') ;
require('components/menu.php');
?>