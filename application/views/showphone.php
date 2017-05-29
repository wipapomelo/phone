<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Phone</title>



	<table  class="table table-hover"  >

	<thead >
	<tr >
	<th class="t"><?php echo "รหัส" ?></th>
	<th class="t"><?php echo "ชื่อ" ?></th>
	<th class="t"><?php echo "สกุล" ?></th>

	</tr>
	</thead>
	<tr>

	<?php foreach ($data as $row): ?>

	<td><?php echo $row['id_phone'] ?></td>
	<td><?php echo $row['price'] ?></td>
	<td><?php echo $row['num_phone'] ?></td>



	<br>


	<?php endforeach; ?>
	</td>
	</tr>
	</table>
</body>
</html>
