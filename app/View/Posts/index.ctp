<h1>Postovi</h1>

<table> 

<tr>
    <th>ID</th>
    <th>Topic ID</th>
 
</tr>

<?php 
foreach($posts as $post) : ?>
<tr>
    <td><?php echo $this->HTML->link($post['Post']['id'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
    
    <td><?php echo $this->HTML->link($post['Topic']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
 
</tr>
<?php endforeach; ?>
<?php unset($post); ?>

</table>
