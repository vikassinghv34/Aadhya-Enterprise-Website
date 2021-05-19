<?php include('header1.php'); ?>



<div class="main">
	<br><br>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item"><a href="AdminManageItem.php">Product</a></li>

	</ul>
</div>
<a href="AddItem.php"><button class="btn btn-primary pull-right">+ Add New</button></a><br>
<div class="col-sm-12" style="background-color:lavender;" align="center">
	<div>
		<h1>Manage Item</h1>

	</div>
	<br>
	<div>
		<div class="card-block">

			<div class="table-responsive dt-responsive">
				<table class="table table-striped table-bordered nowrap">
					<thead>

						<th>Id</th>
						<th>ProductName</th>
						<th>ProductPrice</th>


						<th>ProductCategoryID</th>

						<th></th>
					</thead>
					<tbody>
						<?php
						include('conn.php');
						$query = mysqli_query($conn, "select * from `products`");
						while ($row = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $row['ProductID']; ?></td>
								<td><?php echo $row['ProductName']; ?></td>
								<td><?php echo $row['ProductPrice']; ?></td>


								<td><?php echo $row['ProductCategoryID']; ?></td>
								<td>
									<a href="AdminUpdateItem.php?id=<?php echo $row['ProductID']; ?>" class="btn btn-success">Edit</a>
									<a href="AdminDeleteItem.php?id=<?php echo $row['ProductID']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
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




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




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