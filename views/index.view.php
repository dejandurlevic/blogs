<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['loggedUser'])): ?>
            <li class="nav-item">
                <a href="index.php" class="btn btn-warning"><?= $_SESSION['loggedUser']->name ?></a>
            </li>
            <li class="nav-item">
                <a href="add_posts.php" class="nav-link">Add posts</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        <?php else: ?>
            <li class="nav-item">
                <a href="login_register.php" class="nav-link">Login/Register</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>

<div class="jumbotron text-center">
    <h4 class="display-4">Blogger Posts</h4>
</div>

<div class="container my-5">
    <div class="row">
    <?php if(isset($_SESSION['loggedUser'])): ?>
        <?php foreach($posts as $post): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post->title; ?> <small class="float-right">
                            <?php if(isset($_SESSION['loggedUser']) && $post->user_id == $_SESSION['loggedUser']->id): ?>
                                    <a href="index.php?post_id=<?=$post->id?>" class="btn btn-sm btn-danger">Delete</a>
                            <?php endif; ?>
                        </small></h5>
                        <p class="card-text"><?= $post->description; ?></p>
                    </div>
                    <button class="btn btn-info btn-sm float-right">
                    Created on: <?= $post->created_at; ?>
                    </button>
                    <button class="btn btn-warning btn-sm float-left">
                    Blog owner: <?= $user->getUserWithId($post->user_id)->name; ?>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else: ?>
            <div><h1>You must be logged to see blogs!</h1></div>
         <?php endif; ?>
    </div>
</div>

<?php require_once 'partials/bottom.php'; ?>
