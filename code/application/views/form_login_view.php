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
    <div class='container'>
      <div class="col-sm-4">
        <?php
        $attributes = array('role' => 'form'); 
        echo form_open('user/login', $attributes);

        $data = array(
                      'name'        => 'username',
                      'maxlength'   => '20',
                      'size'        => '20',
                      'placeholder' => 'Username',
                      'class'       => 'form-control'
          );
        ?>
        <h2>Sign In</h2>
        <?php echo form_input($data); ?>
        <?php
        $data = array(
                      'name'    => 'password',
                      'maxlength'   => '20',
                      'size'        => '20',
                      'placeholder' => 'Password',
                      'class'       => 'form-control'
          );
        ?>
        <?php echo form_password($data); ?>


        <?php
        $attributes = array(
                    'class'    => 'btn btn-default',
                    'type'     => 'submit'
          );
        echo form_button($attributes, 'Sign In');
        echo form_close();
        ?>
      </div>
    </div>

    <footer class="blog-footer">
      <p><a href="/">Back to main</a></p>
    </footer>
    
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>