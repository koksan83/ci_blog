    <?php
    echo validation_errors();
    $this->load->helper('form');
    ?>
    <div class='container'>
      <div class="col-sm-4">
        <h2>Edit Post</h2>
        <?php 
        echo form_open("post/edit/{$post['slug']}");
        echo form_hidden('slug', $post['slug']);
        echo form_hidden('author', $this->session->userdata['username']);


        $data = array(
                      'name'        => 'title',
                      'maxlength'   => '100',
                      'size'        => '100',
                      'placeholder' => 'Title',
                      'value'       => $post['title'],
                      'class'       => 'form-control'
          );
        ?>
        
        <div class="form-group"><?php echo form_input($data); ?></div>
        <?php
        $data = array(
                      'name'  => 'content',
                      'placeholder'     => 'Content',
                      'value'           => $post['content'],
                      'class'       => 'form-control'
          );
        ?>
        <div class="form-group"><?php echo form_textarea($data); ?></div>

        <?php
          $attributes = array(
                      'class'    => 'btn btn-default',
                      'type'     => 'submit'
            );
          echo form_button($attributes, 'Edit Post');
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