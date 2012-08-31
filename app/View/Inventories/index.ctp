<h1>Inventories</h1>
<p>
    <?php
	echo $this->Html->link("Add Inventories", array('action' => 'add'));
    ?>
</p>
<table>
    <thead>
	<tr>
	    <th>No</th>
	    <th>Name</th>
	    <th>Vendor SN</th>
	    <th colspan=2>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
	    $i=1;
	    foreach ($Inventories as $a):
         ?>
	    
            <tr>
                <td><?php echo $i; ?></td>
		<td><?php echo $a['Inventories']['name'] ?></td>
                <td><?php echo $a['Inventories']['vendor_sn'] ?></td>
   
		<td><?php echo $this->Html->link("Edit", array('action' => 'edit', $a['Inventories']['id'])); ?></td>
		<!-- <td><?php echo $this->Html->link("Delete", array('action' => 'delete', $a['Inventories']['id'])); ?></td> -->
		<td>
			<?php
			      echo $this->Form->postLink(
				    'Delete',
				    array('action' => 'delete', $a['Inventories']['id']),
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
