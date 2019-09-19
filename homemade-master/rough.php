<table>
		<?php
			while ($row=mysql_fetch_array($result)) {
		?>		

			<tr>
				<td><?php echo $row['p_name'] ?></td>
			
				<td><?php echo $row['price'] ?></td>
			
				<td><?php echo $row['qty'] ?></td>
			
				<td><?php
						$amt=$row['price']*$row['qty'];
				 echo $amt ?></td>
			
				<td><input type="checkbox" name="list[]" id="list" value="<?php $row['p_name']?>" ></td>
			</tr>
<?php
			}
		
?>

	</table>