<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];



?>
<link type="text/css" rel="stylesheet" href="css/element.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/Action.js"></script>
<script type="text/javascript" src="js/calculate.js"></script>




<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Staff Top Up Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Wallet</a></li>
                    <li class="breadcrumb-item active ">Staff Top Up Details</li>

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form method="get">
    <input type="hidden" name="d" value="wallet/topupDetail" />
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>StaffId</label>
                                <input type="text" name="staffId" class="form-control" value="<?= $_GET['staffId'] ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" name="mobileNumber" class="form-control" value="<?= $_GET['mobileNumber'] ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" value="<?= $_GET['fullname'] ?>"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" name="strDate" class="form-control" value="<?= $_GET['strDate'] ?>"  onchange="this.form.submit()">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" name="endDate" class="form-control" value="<?= $_GET['endDate'] ?>" onchange="this.form.submit()">
                            </div>
                        </div>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">


                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="example4" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>

                                            <th>transactionDate</th>
                                            <th>Balance</th>
                                            <th>Pay</th>
                                            <th>Total</th>
                                            <th>Describe</th>
                                            <th>Date</th>
                                            <th>To</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $arr = transactionDetailStaffwallet($tokenKey, $userName,$_GET['staffId'],$_GET['strDate'],$_GET['endDate'], $api_url);
                                            $i = 0;
                                            foreach ($arr as $data) {
                                            ?>
                                        <tr>

                                            <!-- <td align="center"><?= $i ?></td> -->
                                            <td><?= $data['transactionDate'] ?></td>
                                            <td><?= $data['beforeBalance'] ?></td>
                                            <td><?= $data['balance'] ?></td>
                                            <td><?= $data['totalBalance'] ?></td>
                                            <td><?= $data['descript'] ?></td>
                                            <td align="center"><?= $data['strDate'] ?></td>
                                            <td align="center"><?= $data['expDate'] ?></td>

                                        </tr>
                                        <?php
                                                $i++;
                                            }  ?>
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /.row -->

</section>