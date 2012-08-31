<h1>People</h1>
<p>
    <?php
	echo $this->Html->link("Add People", array('action' => 'add'));
    ?>
</p>
<table>
    <thead>
	<tr>
	    <th>No</th>
	    <th>Username</th>
	    <th>Fullname</th>
            <th>Division</th>
            <th>Job Position</th>
	    <th>Email</th>
	    <th>Phone</th>
	    <th>Address</th>
	    <th colspan=2>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
	    $i=1;
	    foreach ($people as $a):
         ?>
	    
            <tr>
                <td><?php echo $i; ?></td>
		<td><?php echo $a['People']['username'] ?></td>
                <td><?php echo $a['People']['fullname'] ?></td>
                <td><?php echo $a['Division']['name'] ?></td>
                <td><?php echo $a['People']['job_position'] ?></td>
		<td><?php echo $a['People']['email'] ?></td>
		<td><?php echo $a['People']['phone'] ?></td>
		<td><?php echo $a['People']['address'] ?></td>
		<td><?php echo $this->Html->link("Edit", array('action' => 'edit', $a['People']['id'])); ?></td>
		<!-- <td><?php echo $this->Html->link("Delete", array('action' => 'delete', $a['People']['id'])); ?></td> -->
		<td>
			<?php
			      echo $this->Form->postLink(
				    'Delete',
				    array('action' => 'delete', $a['People']['id']),
				    array('confirm' => 'Are you sure?'));
			?>
	        </td>
            </tr>
	    
        <?php
	    $i++;
	    endforeach;
        ?>
    </tbody>
</table>