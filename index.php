<?php include 'dbconnect.php'; ?>
	<table>
		<thead>
			<tr>
				<th>Sl.No.</th>
				<th>Name</th>
				<th>pass</th>
				<th>Share</th>
				<th>Check Error</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			$r = "SELECT * FROM `login` LIMIT 10";
			$query = mysqli_query($conn,$r);
			$i = 1;
			while($row = mysqli_fetch_assoc($query))
			{ ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['pass']; ?></td>
					<td>
					    <?php
    				    	$value = $row['id'];
    				    	$text = rawurlencode("http://xyz.com/page_id.php?page_id=".$value);
    					?>
    					<a  href="https://web.whatsapp.com/send?text=<?php echo $text; ?>" target="_blank" data-action="share/whatsapp/share">
    					    Share via Whatsapp
    					</a>
    				</td>
    				<td>
    					<a target="_blank" href="page_id.php?page_id=<?php echo $row['id'] ?>">Check Error of Share Page</a>
					</td>
				</tr>
				<?php
			   $i++;	
			}?>
		</tbody>
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

