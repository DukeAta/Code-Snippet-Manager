<?php include "header.php"; 
$select  = "select * from  uprofile ";
$res =mysql_query($select);


?>
<!------------------ Header Close ------------------->
	

   <div id="content-wrapper">

		<div class="page-header">
			<h1>All Users</h1>
		</div> <!-- / .page-header -->

		<div class="row">
			<div class="col-sm-12">


<!-- 11. $JQUERY_DATA_TABLES ===========================================================================

				jQuery Data Tables
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('Languages List');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
					});
				</script>
				<!-- / Javascript -->

				<div class="panel">
                    
					<div class="panel-body">
						<div class="table-primary">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
								<thead>
									<tr>
										<th>Serial#</th>
										<th>User Full Name</th>
                                        <th>User Email</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        
									</tr>
								</thead>
								<tbody>
 <?php 
									$i=1;
									while($row=mysql_fetch_array($res))
									{
										
									echo"
                                        <tr class='odd gradeX'>
                                            <td>".$i."</td>
											
                                            <td>".$row['fname'].''.$row['name']."</td> 
                                            <td>".$row['email']."</td>"; ?>
                                            <td><a class="btn btn-primary btn_block btn-md" href="edit_user.php?id=<?php  echo $row['id'];?>">Update</a></td>
                                            <td class="center"><a class="btn btn-danger btn_block btn-md" onClick="return confirm('Are you sure to delete this record ?');" href="deluser.php?id=<?php  echo $row['id'];?>">Delete</a></td>
                                        </tr>
                                        
   							<?php $i++;}?>
									

								</tbody>
							</table>
						</div>
					</div>
				</div>
<!-- /11. $JQUERY_DATA_TABLES -->

								<!-- Info table -->
								
								<!-- / Info table -->
								
							</div>
						</div>
					</div> 
    


<!---------------- Footer Start ----------------->
<?php include "footer.php"; ?>