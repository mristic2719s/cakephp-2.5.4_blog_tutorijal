<h1>Login korisnika</h1>

<?php 
echo $this->form->create('User');
echo $this->form->input('username');
echo $this->form->input('password');
echo $this->form->end('Prijavi se');


?>