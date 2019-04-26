<?php
session_start();
include 'access.php';


$pseudo = $_POST['pseudo'];
$_SESSION['pseudo']=$pseudo;

header('Location: quiz.php');

