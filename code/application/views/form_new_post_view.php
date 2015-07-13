    <?php
    echo validation_errors();
    $this->load->helper('form');
    ?>
    <div class='container'>
      <div class="col-sm-4">
      <h2>Create new post</h2>
      <?php
      $attributes = array('role' => 'form'); 
      echo form_open('post/create', $attributes);

      $data = array(
                    'name'  => 'title',
                    'maxlength' => '100',
                    'size'      => '100',
                    'placeholder'     => 'Title',
                    'class'       => 'form-control'
        );
      ?>

      <div><?php echo form_input($data); ?></div>
      <?php
      $data = array(
                    'name'  => 'content',
                    'placeholder'     => 'Content',
                    'class'       => 'form-control'
        );
      ?>
      <div><?php echo form_textarea($data); ?></div>
      <?php 
        $attributes = array(
                    'class'    => 'btn btn-default',
                    'type'     => 'submit'
          );
        echo form_button($attributes, 'Submit Post');

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