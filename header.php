<?php
include_once 'classes/global.php';
include_once 'classes/user.php';

session_start();
ob_start();
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
  <title>Falcontrac</title>
</head>

<body>
<?php
require('components/navbar.php') ;
require('components/menu.php');
?>