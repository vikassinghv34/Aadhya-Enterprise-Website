<?php
include('header.php');
include('conn.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<!-- <script>
	function event1(id){
		try{
        fetch("cartitemdelete.php?id="+id).then(function(respone)
        {
          if(respone.ok){
            console.log('done');
          }
          console.log(id);
        });
      }
      catch(id){
        console.log(id);
      }
	}
</script> -->
<style>
	.cart-header {
		width: 25%;
		align-self: center;
		padding: 5px;
	}

	.path a:hover {
		color: gray;
		text-decoration: none;
	}

	.path a {
		color: darkgray;
	}

	.path .less {
		color: gray;
		font-weight: bolder;
		font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	}
</style>

<body>
	<div class="container-fluid path">
		<a href="home.php">Home</a> <label for="" class="less">></label>
		<a href="products.php">Products</a><label for="" class="less">></label>
		<a href="">Cart</a>
	</div>
	<div class="container mt-5 mb-5">
		<div class="row">
			<table style="width: 100%;">
				<thead>
					<tr class="row bg-primary">
						<th class="col-2">#</th>
						<th class="col-3">Name</th>
						<th class="col-1">Quantity</th>
						<th class="col-1">Price</th>
						<th class="col-1">Total</th>
					</tr>

				</thead>
				<tbody>

					<?php
					if(isset($_SESSION['email'])){
					$final = 0;
					// $id = $_GET['ProductID'];
					$uid = $_SESSION['id'];
					// $sql1 = "INSERT INTO `cartdetails`(`ProductID`, `UserID`) VALUES ($id,$uid)";
					// mysqli_query($conn,$sql1);

					// $sql = "SELECT * FROM products inner join cartdetails on products.ProductID=cartdetails.ProductID Where cartdetails.UserID=$uid";
					$sql = "SELECT * FROM cartdetails WHERE UserID=$uid";
					$Count = 1;
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						exit;
					}
					if ($result->num_rows == 0) {
						return null;
					} else {
						$rowcount = $result->num_rows;

						while ($pdts = $result->fetch_assoc()) {
							$total = ($pdts['ProductQuantity']) * ($pdts['ProductPrice']);
							$final += $total;
							if ($Count < $rowcount) {
					?>

								<tr class="row" style="background-color: whitesmoke;">
									<th class="col-2" scope="row"><?php echo $Count++; ?></th>
									<!-- <td class="col-3">#</td> -->
									<td class="col-3"><?php echo $pdts["ProductName"] ?></td>
									<td class="col-1"><?php echo $pdts["ProductQuantity"] ?></td>
									<td class="col-1"><i class="fas fa-rupee-sign"></i> <?php echo $pdts["ProductPrice"] ?></td>
									<td class="col-1"><i class="fas fa-rupee-sign"></i> <?php echo $total; ?></td>
									<td class="col-4">
										<a class="col-2" href='cartitemdelete.php?id=<?php echo $pdts["ProductID"]; ?>'>Remove</a>
										<a class="col-2" href='cartitemedit.php?id=<?php echo $pdts["ProductID"]; ?>'>Update</a>
									</td>

								</tr>
							<?php
							} else {
							?>
								<tr class="row" style="background-color: whitesmoke;">
									<th class="col-2" scope="row"><?php echo $Count++; ?></th>
									<!-- <td class="col-3">#</td> -->
									<td class="col-3"><?php echo $pdts["ProductName"] ?></td>
									<td class="col-1"><?php echo $pdts["ProductQuantity"] ?></td>
									<td class="col-1"><i class="fas fa-rupee-sign"></i> <?php echo $pdts["ProductPrice"] ?></td>
									<td class="col-1"><i class="fas fa-rupee-sign"></i> <?php echo $total; ?></td>
									<td class="col-4">
										<a class="col-2" href='cartitemdelete.php?id=<?php echo $pdts["ProductID"]; ?>'>Remove</a>
										<a class="col-2" href='cartitemedit.php?id=<?php echo $pdts["ProductID"]; ?>'>Update</a>
									</td>
								<tr class="row" style="background-color: whitesmoke;">
									<td class="col-6"></td>
									<td class="col-1"><strong>Total:-</strong></td>
									<td class="col-1"><i class="fas fa-rupee-sign"></i> <?php echo $final; ?></td>
								</tr>


								<!-- <tr scope="row"><?php //echo $Count++; 
														?></tr> -->

								<!-- <tr class="row" style="background-color: whitesmoke;">
									<td class="col-10" align="right">Total:</td>
									<td class="col-2"><i class="fas fa-rupee-sign"></i> <?php echo $final; ?></td>
								</tr> -->
								</tr>
				</tbody>
			</table>
		</div>
<?php
							}
						}
					}
				}
				else{
					// header("Location: login.php");
					?>
				<script>
					alert('please login first');
				  location.replace("login.php");
				</script>
			<?php
				}
					?>
	</div>
	<footer class="mb-0"><?php include('footer.php') ?></footer>
</body>

</html>