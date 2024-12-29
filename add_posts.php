<?php
require_once 'bootstrap.php';


if(!isset($_SESSION['loggedUser'])){
    header("Location: index.php");
}

if(isset($_POST['savePost'])){
    $posts->addNewPost();
}

require_once 'views/add.posts.view.php';

?>