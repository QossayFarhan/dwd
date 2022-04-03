

<table width="100%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr>
		
		<th><strong>Name</strong></th>
		<th><strong>email</strong></th>
		</tr>
	</thead>

         
			<?php $length = count($variables);
				for ($i = 0; $i < $length; $i++ )
				{
					echo " <tr> <td align='center'>".$variables[$i]['name']."</td> 
						 <td align='center'>".$variables[$i]['email']."</td>
						 <td align='center'>
						 <a href=Views/profile.php?id=" .$variables[$i]["id"]. ">profile</a></td></tr>";
						
				}
            ?>
            <!-- <td align="center"></td> -->
        
    
    
        </tbody></table>

		<?php // echo $variables[0]['id']; ?>  