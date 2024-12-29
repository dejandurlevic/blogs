<?php require_once 'partials/top.php' ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
    </ul>
</nav>
<div class="jumbotron text-center">
    <h4>Add a New Post</h4>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if($posts->post_status): ?>
                <div class="alert alert-success">Post succes added!</div>
            <?php endif; ?>
            <form method="POST" action="add_posts.php">
                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" name="post_title" class="form-control" id="postTitle" placeholder="Enter post title" required>
                </div>
                <div class="form-group">
                    <label for="postDescription">Description</label>
                    <textarea name="post_description" class="form-control" id="postDescription" rows="5" placeholder="Enter post description" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="savePost">Add Post</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php'; ?>

