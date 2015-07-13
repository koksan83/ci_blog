<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_users extends CI_Migration
{
  public function up()
  {
    $this->dbforge->add_field(array(
        'username' => array(
            'type' => 'VARCHAR',
            'constraint' => '20',
          ),
        'password' => array(
            'type' => 'VARCHAR',
            'constraint' => '100'
          )
      )
    );

    $this->dbforge->add_key('username', TRUE);
    $this->dbforge->create_table('users');
  }

  public function down()
  {
    $this->dbforge->drop_table('users');
  }
}