
<?php require 'header.php' ?>
<?php include 'session.php' ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="userControls" class="well well-sm">
              <a href="logout.php" class="btn" role="button">Logout</a>
            </div>
            <form method="post" action="newPost.php" class="form-group well well-sm">
              <h2 class="text-center">New Post:</h2>
              <textarea class="form-control" type="text" rows="5" cols="40" name="body" required='true'></textarea><br>
              <input type="submit" class="btn btn-block" role="button"></input><br>
            </form>
            <?php
            require 'posts.php';
            ?>
          </div>
        </div>
      </div>
      <a href="#top">
        <i class="fa fa-caret-square-o-up" aria-hidden="true" id="to-top"></i>
      </a>
<?php require 'footer.php' ?>
