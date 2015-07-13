Sample blog powered by Homestead, CodeIgniter and Bootstrap

To start:

- From the root of the project, start up the Vagrant VM
vagrant up

- Log into the VM
vagrant ssh

- cd into the "blog" directory and start the database migration to set up the tables
php index.php cli/migrate

- Access the blog from 127.0.0.1:8000

- Click on "Sign up" to sign up

- Sign in to proceed to create a new blog post
