<?php

require_once 'bootstrap.php';

if(isset($_GET['post_id']) && isset($_SESSION['loggedUser'])){
    $posts->deletePost($_GET['post_id']);
}

$posts = $posts->selectAll('posts');



require_once 'views/index.view.php';

?>