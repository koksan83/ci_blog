<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sample Blog Sign Up</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css"); ?>" />

  </head>
  <body>
    <?php
    echo validation_errors();
    $this->load->helper('form');
    echo form_open('user/register');

    $data = array(
                  'name'  => 'username',
                  'maxlength' => '20',
                  'size'      => '20',
                  'placeholder'     => 'Username'
      );
    ?>
    <div class="container blog-form">
      <div><?php echo form_input($data); ?></div>
      <?php
        $data = array(
                      'name'  => 'password',
                      'maxlength' => '20',
                      'size'      => '20',
                      'placeholder'     => 'Password'
          );
      ?>
      <div><?php echo form_password($data); ?></div>
          <?php
            $data = array(
            'name'  => 'password_cfm',
            'maxlength' => '20',
            'size'      => '20',
            'placeholder'     => 'Confirm password'
          );
          ?>
      <div><?php echo form_password($data); ?></div>
      <div><?php echo form_submit('submit', 'Sign Up');?></div>
      <?php echo form_close(); ?>

      <footer class="blog-footer">
        <p><a href="/">Back to main</a></p>
      </footer>      
    </div>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>