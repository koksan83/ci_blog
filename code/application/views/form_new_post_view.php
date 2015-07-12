<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sample Blog Sign In</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css"); ?>" />


  </head>
  <body>
    <?php
    echo validation_errors();
    $this->load->helper('form');
    ?>
    <div class="container blog-form">
      <?php echo form_open('post/create');

      $data = array(
                    'name'  => 'title',
                    'maxlength' => '100',
                    'size'      => '100',
                    'placeholder'     => 'Title'
        );
      ?>
    
      <div><?php echo form_input($data); ?></div>
      <?php
      $data = array(
                    'name'  => 'content',
                    'placeholder'     => 'Content'
        );
      ?>
      <div><?php echo form_textarea($data); ?></div>
      <div><?php echo form_submit('submit', 'Submit Post');?></div>
      <?php echo form_close(); ?>

      <footer class="blog-footer">
        <p><a href="/">Back to main</a></p>
      </footer>
    </div>

    
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>