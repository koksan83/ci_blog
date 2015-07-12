<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/favicon.ico"); ?>" />
  </head>

  <body>
    <div class="container">
      <div class="blog-masthead">
        <div class="container">
          <nav class="blog-nav">
            <a class="blog-nav-text">Signed in as <?php echo $this->session->userdata['username']; ?></a>
            <a class="blog-nav-item" href="<?php echo base_url("user/logout"); ?> "/>Sign Out</a>
            <button type="button" class="btn btn-default">
              <a href="post/create"><span class="glyphicon glyphicon-plus" aria-hidden="true" title="Create new post"/></a>
            </button>
          </nav>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>
