<?php
include("header1.php");
include("conn.php");

$sql = "SELECT * from  sales where delete_status='0'
ORDER BY id DESC";
$result = $conn->query($sql);

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


                                </div>
                            </div>

                        </div>
                        <a href="addsales.php"><button class="btn btn-primary pull-right">+ Add New</button></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">

            <div class="card">
                <div class="card-header">
                    <div class="col">

                    </div>

                </div>
                <div class="card-block" style="background-color:lavender;" align="center">

                    <div class="table-responsive dt-responsive">
                        <table id="dom-jqry" class="table table-striped table-bordered nowrap" align="center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Customer Name</th>
                                    <th>Build Date</th>
                                    <th>Total</th>
                                    <th>Remark</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($result)) {
                                    foreach ($result as $rows) {
                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['customer_name']; ?></td>
                                            <td><?php echo $rows['build_date']; ?></td>
                                            <td><?php echo $rows['total']; ?></td>
                                            <td><?php echo $rows['remark']; ?></td>

                                            <td>
                                                <a href="editsales.php?id=<?php echo $rows['id'] ?>"><input id="edit" type="submit" name="edit" value="Edit" class="btn btn-success" /></a>
                                                <a href="dltsales.php?id=<?php echo $rows['id'] ?>" onclick="return confirm('Are you sure to delete this record?')"> <input id="delete" type="submit" name="delete" value="Delete" class="btn btn-danger" /></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
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