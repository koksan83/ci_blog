<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css"); ?>" />
  </head>

  <body>
    <div class='row'>
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Signed in as <?php echo $this->session->userdata['username']; ?></a></li>
                <li><a class="blog-nav-item" href="<?php echo base_url("user/logout"); ?> "/>Sign Out</a></li>
                <li><a href="<?php echo base_url("/"); ?>/post/create"><span class="glyphicon glyphicon-plus" aria-hidden="true" title="New post"/></a></li>
              </ul>
            </div>
          </div>   
        </nav>
    </div>
