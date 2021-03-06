<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css"); ?>" />
  </head>

  <body>
    <div class="container">
      <div class="blog-masthead">
        <div class="container">
          <nav class="blog-nav">
            <div class="blog-nav-text">Signed in as <?php echo $this->session->userdata['username']; ?></div>
            <a class="blog-nav-item" href="<?php echo base_url("user/login"); ?> "/>Sign In</a>
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
