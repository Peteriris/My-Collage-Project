<?php
include 'header.php';
include 'sidebar.php'
?>
		  <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
				<h4 class="card-category">Book / Journal</h4>
                <h2 class="card-title"> Edition</h2>
				<a href="./addedition.php">
				<input type="button" value="Add "></a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Edition ID
                        </th>
                        <th>
                          Edition Name
                        </th>
                        <th class="text-center">
                          Status
                        </th>
						 <th>
                          Change
                        </th>
                      </tr>
                    </thead>
                         <tbody>
				  <?php
					include 'connect.php';
					$query="select * from public.edition;";
					$res=pg_query($connect,$query);		
					$i=1;
					while($row=pg_fetch_array($res)){
				  ?>	<tr>
						<td><?php echo $row[0];?></td>
						<td><?php echo $row[1];?></td>
						<td align="center"><?php echo $row[2];?></td>
					<td>
                          <?php $eid=$row[0];?><a href="editedition.php?id=<?php echo $eid;?> "><input type="submit" value="Edit"></a>
                        </td>
						</tr>
				<?php
					$i++;
					}	
				  ?>                    
                  
                </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php
include 'footer.php';
?>