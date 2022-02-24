<?php 

App::import('Controller','Users');

?>

<h1> <?php echo $topic['Topic']['title']; ?> </h1>

<?php echo $this->HTML->link('Kreiraj post u ovom topicu', array('controller' => 'posts', 'action' => 'add', $topic['Topic']['id']));  
?>

<br> 
<table>
    <tr> 
        <td>S Broj:</td>
        <td>Korisnik</td>
        <td>Post</td>

    </tr>

 <?php 
 $counter = 1;
 foreach($topic['Post'] as $post) {
     $ucontroller = new UsersController;
     $uname = $ucontroller->getUsernameById($post['user_id']);
     echo " <tr><td>".$counter.":</td>
     <td>".$uname['User']['username']."</td>
     <td>".$post['body']."</td> </tr>";
     $counter++;
 }

 ?>
 </table>