<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css"); ?>" />
  </head>

  <body>
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Sample Blog</h1>
        <p class="lead blog-description">Powered by CodeIgniter, Homestead and Bootstrap</p>
      </div>

      <div class="row">
        <div class="col-sm-8 blog-main">
          <div>
            <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
            <?php
            if (isset($this->session->userdata['username']))
            {
              if ($this->session->userdata['username'] == $post['author'])
              {
                echo '<button type="button" class="btn btn-xs"><a href="edit/';
                echo $post['slug'];
                echo '"';
                echo '><span class="glyphicon glyphicon-pencil" aria-hidden="true" title="Edit Post"/></a></button>';

                echo form_open("post/delete/{$post['slug']}");
                echo '<button type="submit" class="btn btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true" title="Delete Post"/></button>';
                echo form_close('');
              }           
            }
            ?>
           

            <p class="blog-post-meta"><?php echo $post['timestamp']?> by <a href="#"><?php echo $post['author']; ?></a></p>

          <div class="blog-post">
            <p><?php echo nl2br($post['content']); ?></p>
          </div><!-- /.blog-post -->

        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>
        <a href="/">Back to main</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>