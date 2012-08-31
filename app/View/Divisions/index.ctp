<h1>Division</h1>
<p>
    <?php
	echo $this->Html->link("Add Division", array('action' => 'add'));
    ?>
</p>
<table>
    <thead>
	<tr>
	    <th>No</th>
	    <th>Name</th>
	    <th colspan=2>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
	    $i=1;
	    foreach ($division as $a):
         ?>
	    
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $a['Division']['name'] ?></td>
		<td><?php echo $this->Html->link("Edit", array('action' => 'edit', $a['Division']['id'])); ?>
		    <?php
			echo $this->Form->postLink(
			    'Delete',
			    array('action' => 'delete', $a['Division']['id']),
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
