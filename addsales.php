<?php
include("header1.php");
include("conn.php");

if (isset($_POST['btn_save'])) {
  //echo "<pre>"; print_r($_POST); exit;
  date_default_timezone_set('Asia/Kolkata');

  extract($_POST);
  $build_date = date('Y-m-d', strtotime($build_date));
  // $customer_name=$_POST['#name'];
  $sql_insert = "INSERT INTO `sales`(`build_date`, `customer_name`, `total`, `remark`) VALUES ('$build_date','$Customer_name','$subtotal','$remark')";
  $res_insert = $conn->query($sql_insert);
  $last_billing_id =  mysqli_insert_id($conn);
  $billingid = $last_billing_id;

  $service = count($_POST['select_services']);
  for ($i = 0; $i < $service; $i++) {
    $sql_service = "insert into products(sales_id,product_id, quantity, unit_price, total)values('$billingid','$select_services[$i]','$quantity[$i]','$unit_price[$i]','$total[$i]')";

    mysqli_query($conn,$sql_service);
  }
?>
  <script type="text/javascript">
    window.location = "sales.php";
  </script>
<?php
}
?>




<div class="pcoded-content">
  <div class="pcoded-inner-content">

    <div class="main-body">
      <div class="page-wrapper">

        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-lg-8">
              <div class="page-header-title">
                <div class="d-inline">
                  <h4>Sales</h4>
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="addsales.php">Sales</a></li>

                  </ul>
                </div>

              </div>
            </div>
          </div>

          </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="page-body">

    <div class="card">
      <div class="card-block">
        <form class="form-valide p-2" method="POST" name="userform" enctype="multipart/form-data">

          <div class="row">
            <div class="form-group row col-md-6">
              <label class="col-sm-3 control-label">Build Date:</label>
              <div class="col-sm-9">
                <input type="date" name="build_date" class="form-control datepicker" value="<?= date('m/d/Y') ?>" data-provide="datepicker">
                <!--<input type="text" name="build_date" class="form-control" data-provide="" value="<?= date('m/d/Y') ?>" readonly>-->
              </div>
            </div>


            <div class="form-group row col-md-6">
              <label class="col-sm-3 control-label">Customer</label>
              <div class="col-sm-9">
                <!-- <input type="text" name="customer_name" class="form-control"> -->
                <select name="Customer_name" id="name" class="form-control select_services">
                    <option value="">--SelectProduct--</option>
                    <?php
                    $sql = "SELECT * from  users  ORDER BY UserId DESC";
                    $result = $conn->query($sql);
                    foreach ($result as $r_service) { ?>
                      <option value="<?php echo $r_service['UserFirstName']; ?> <?php echo $r_service['UserLastName'] ?>"><?php echo $r_service['UserFirstName']; ?> <?php echo $r_service['UserLastName']; ?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
          </div>

          <div class="form-group row">

            <div class="col-sm-3">
              <div class="col-sm-12">
                Product
              </div>
            </div>

            <div class="col-sm-2">
              Quantity
            </div>

            <div class="col-sm-2">
              Sale Price
            </div>

            <div class="col-sm-2">
              Total
            </div>
          </div>
          <div class="mydiv">
            <div class="form-group row control-group after-add-more subdiv">

              <div class="col-sm-3">
                <div class="col-sm-12">
                  <select name="select_services[]" class="form-control select_services">
                    <option value="">--SelectProduct--</option>
                    <?php
                    $sql = "SELECT * from  products  ORDER BY ProductID DESC";
                    $result = $conn->query($sql);
                    foreach ($result as $r_service) { ?>
                      <option value="<?php echo $r_service['ProductID']; ?>"><?php echo $r_service['ProductName']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" id="quantity" name="quantity[]" placeholder="Qty" required>
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" id="unit_price" name="unit_price[]" placeholder="Sale Price" required>
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control total" id="total" name="total[]" placeholder="Total" readonly="">
              </div>

              <div class="col-sm-2">
                <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
              </div>
            </div>

          </div>

          <div class="form-group row">
            <label class="col-sm-6 control-label">Total</label>
            <div class="col-sm-3">
              <input type="text" name="subtotal" id="subtotal" class="form-control" placeholder="Subtotal" readonly="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-6 control-label">Remark</label>
            <div class="col-sm-3">
              <input type="text" name="remark" id="remark" class="form-control" placeholder="Remark">
            </div>
          </div>
          <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
        </form>
        <div class="copy hide">
          <div class="form-group control-group row subdiv">

            <div class="col-sm-3">
              <div class="col-sm-12">
                <select name="select_services[]" class="form-control select_services">
                  <option value="">--SelectProduct--</option>
                  <?php
                  $sql = "SELECT * from  products where delete_status='0' ORDER BY id DESC";
                  $result = $conn->query($sql);
                  foreach ($result as $r_service) { ?>
                    <option value="<?php echo $r_service['id']; ?>"><?php echo $r_service['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-sm-2">
              <input type="text" class="form-control" id="quantity" name="quantity[]" placeholder="Qty">
            </div>

            <div class="col-sm-2">
              <input type="text" class="form-control" id="unit_price" name="unit_price[]" placeholder="Sale Price">
            </div>

            <div class="col-sm-2">
              <input type="text" class="form-control total" id="total" name="total[]" placeholder="Total" readonly="">
            </div>
            <div class="col-sm-2">
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php"); ?>


<script type="text/javascript">
  $(".add-more").on('click', function() {

    var html = $(".copy").html();
    $(".after-add-more").after(html);
  });

  $("body").on("click", ".remove", function() {
    $(this).parents(".control-group").remove();
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('div.mydiv').on("keyup", 'input[name^="unit_price"]', function(event) {
      var currentRow = $(this).closest('.subdiv');
      var quantity = currentRow.find('input[name^="quantity"]').val();
      //alert(quantity);
      var unitprice = currentRow.find('input[name^="unit_price"]').val();
      //alert(unitprice);

      var total = Number(quantity) * Number(unitprice);
      var total = +currentRow.find('input[name^="total"]').val(total);
      // $('#subtotal').val(total);
      var sum = 0;
      $('.total').each(function() {
        sum += Number($(this).val());
      });
      $('#subtotal').val(sum);
      $('#final_total').val(sum);
      var sub_text = $('#subtotal').val();
      var disc = $("#view_discount").val();
      var sub_total = Number(sub_text) - Number(disc);
      $("#final_total").val(sub_total);
    });

    $('div.mydiv').on("keyup", 'input[name^="quantity"]', function(event) {
      var currentRow = $(this).closest('.subdiv');
      var quantity = currentRow.find('input[name^="quantity"]').val();
      //alert(quantity);
      var unitprice = currentRow.find('input[name^="unit_price"]').val();
      //alert(unitprice);

      var total = Number(quantity) * Number(unitprice);
      var total = +currentRow.find('input[name^="total"]').val(total);
      // $('#subtotal').val(total);
      var sum = 0;
      $('.total').each(function() {
        sum += Number($(this).val());
      });
      $('#subtotal').val(sum);
      $('#final_total').val(sum);

      var sub_text = $('#subtotal').val();
      var disc = $("#view_discount").val();
      var sub_total = Number(sub_text) - Number(disc);
      $("#final_total").val(sub_total);

      var tot_commi = 0;
    });

    $('form').on("keyup", 'input[name="advanced_amount"]', function(argument) {
      var final_total = $('#final_total').val();
      //alert(final_total);
      var advanced_amount = $(this).val();
      //alert(advanced_amount);
      if (Number(advanced_amount) > Number(final_total)) {
        alert('Your Amount is greater than:' + final_total);
        $("#advanced_amount").val("");
      } else {
        var cust_amt = Number(final_total) - Number(advanced_amount);
        //alert(cust_amt);
        var cust_pending = $("#pending_amount").val(cust_amt);
      }

    });
  });



  $('div.mydiv').on("change", 'select[name^="select_services"]', function(event) {
    var currentRow = $(this).closest('.subdiv');
    var drop_services = $(this).val();
    $.ajax({
      type: "POST",
      url: 'ajax_service.php',
      data: {
        drop_services: drop_services
      },
      success: function(data) {
        currentRow.find('input[name^="quantity"]').val(1);
        currentRow.find('input[name^="unit_price"]').val(data);
        var quantity = currentRow.find('input[name^="quantity"]').val();
        var unitprice = currentRow.find('input[name^="unit_price"]').val();
        var total = parseInt(quantity) * parseInt(unitprice);
        currentRow.find('input[name^="total"]').val(total);
        //var total=+currentRow.find('input[name^="total"]').val(total);
        // $('#subtotal').val(total);
        var sum = 0;
        $('.total').each(function() {
          if ($(this).val() != '') {
            sum += parseInt($(this).val());
          }

        });

        var sub = $('#subtotal').val(sum);
        var fsub = $('#final_total').val(sum);

        var tot_commi = 0;
      }
    });

  });
</script>