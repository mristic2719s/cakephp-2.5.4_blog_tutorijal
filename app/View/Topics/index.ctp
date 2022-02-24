<h1>Teme</h1>

<?php echo $this->HTML->link('Kreiraj novu temu', array('controller' => 'topics', 'action' => 'add'));

?>

<br> 

<?php 

if(AuthComponent::user()){
    echo $this->HTML->link('Odjavi se', array('controller' => 'users', 'action' => 'logout'));

}
else 
{
    echo $this->HTML->link('Prijavi se', array('controller' => 'users', 'action' => 'login'));
}



?>


<br>

<table> 

<tr>
    <th>Titl</th>
    <th>User Id</th>
    <th>Objavljeno</th>
    <th>Napravljeno</th>
    <th>Izmenjeno</th>
    <th>Edituj</th>
    <th>Izbrisi</th>
</tr>


<?php 
if(AuthComponent::user('role') == 2) {
    echo "Prijavljeni ste kao admin!";
}
foreach($topics as $topic) : ?>
<tr>
    <?php if(AuthComponent::user('role') == 2) : ?>
        <?php if($topic['Topic']['visible'] == 2) : ?>
    <td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller' => 'Topics', 'action' => 'view', $topic['Topic']['id'])); ?></td>
    <td><?php echo $topic['User']['username'];  ?></td>
    <td><?php echo $topic['Topic']['visible'];  ?></td>
    <td><?php echo $topic['Topic']['created'];  ?></td>
    <td><?php echo $topic['Topic']['modified'];  ?></td>

     <td><?php echo $this->HTML->link('Edituj', array('controller' => 'Topics', 'action' => 'edit', $topic['Topic']['id'])); ?></td>
     <td><?php echo $this->Form->postLink('Izbrisi', array('controller' => 'Topics', 'action' => 'delete', $topic['Topic']['id']), array('confirm' => 'Da li ste sigurni da zelite da obrisete ovu temu?')); ?></td>
</tr>
<?php  endif;  ?>
<?php endif;  ?>
<?php endforeach; ?>


<?php 
if(AuthComponent::user('role') == 1)  {
    echo "Prijavljeni ste kao obican korisnik!";
}
foreach($topics as $topic) : ?>
<tr>
    <?php if( AuthComponent::user('role') == 1 || !AuthComponent::user()) : ?>
        <?php if($topic['Topic']['visible'] == 1) : ?>
   
    <td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller' => 'Topics', 'action' => 'view', $topic['Topic']['id'])); ?></td>
    <td><?php echo $topic['User']['username'];  ?></td>
    <td><?php echo $topic['Topic']['visible'];  ?></td>
    <td><?php echo $topic['Topic']['created'];  ?></td>
    <td><?php echo $topic['Topic']['modified'];  ?></td>
</tr>
<?php endif ?>
<?php  endif;  ?>

<?php endforeach; ?>






</table>
