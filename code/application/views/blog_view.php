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
        <h3 class="blog-title">Sample Blog</h3>
        <p class="lead blog-description">Powered by CodeIgniter, Homestead and Bootstrap</p>
      </div>
 
        <div class="row">
          <div class="col-sm-8 blog-main">
            <?php foreach ($posts as $post): ?>
              <div class="blog-post">
                <div><a href="post/<?php echo $post['slug'] ?>"><h2 class="blog-post-title"><?php echo $post['title']?></h2></a></div>
                <div class="blog-post-meta"><?php echo $post['timestamp']?> by <a href="#"><?php echo $post['author']; ?></a></div>

                <div class="blog-post"><article><?php echo nl2br($post['content']); ?></article></div>
              </div><!-- /.blog-post -->

            <?php endforeach ?>
          </div>
        </div>
    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>