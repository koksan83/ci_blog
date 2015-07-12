<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_posts extends CI_Migration
{
  public function up()
  {
    $this->dbforge->add_field(array(
        'id' => array(
            'type' => 'INT',
            'unsigned' => TRUE,
            'auto_increment' => TRUE
          ),
        'author' => array(
            'type' => 'VARCHAR',
            'constraint' => '20',
          ),
        'title' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
          ),
        'slug' => array(
            'type' => 'VARCHAR',
            'constraint' => '100'
          ),
        'content' => array(
            'type' => 'TEXT'
          ),
        'timestamp' => array(
            'type' => 'TIMESTAMP'
          )
      )
    );

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('posts');
  }

  public function down()
  {
    $this->dbforge->drop_table('posts');
  }
}