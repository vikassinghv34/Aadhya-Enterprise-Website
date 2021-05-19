<?php include('header1.php');?>




<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="AdminManageVendor.php">Vendor</a></li>
    
  </ul>

  <a href="AddVendors.php"><button class="btn btn-primary pull-right">+ Add New</button></a>
<div class="col-sm-12" style="background-color:lavender;" align="center">




<div><h1>Manage Vendors</h1>

		
	</div>
	<br>
	<div>
  <div class="card-block">

<div class="table-responsive dt-responsive">
<table class="table table-striped table-bordered nowrap">
<thead>
        <th>UserId</th>
				<th>UserName</th>
				<th>FullName</th>
				<th>Email</th>
				<th>PhoneNumber</th>
				
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `vendors`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
            <td><?php echo $row['Id']; ?></td>
							<td><?php echo $row['UserName']; ?></td>
							<td><?php echo $row['FullName']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><?php echo $row['PhoneNumber']; ?></td>
							
							<td>
              <a href="AdminVendorEdit.php?Id=<?php echo $row['Id']; ?>" class="btn btn-success">Edit</a>
								<a href="AdminDeletevendor.php?Id=<?php echo $row['Id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')" >Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table><br>
	</div>

    </div>
  </div>
</div>

</div>


</body>
<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php"); ?>
</html>
