<h1> Napravi topic </h1>


<?php 

echo $this->Form->create('Topic');
//echo $this->Form->input('user_id');
echo $this->Form->select('visible',array('1' => 'Objavljeno', '2' => 'Sakriveno'), array('empty' => false));
echo $this->Form->input('title');
echo $this->Form->end('Snimi topic');

?>