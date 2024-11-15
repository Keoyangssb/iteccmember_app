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
                <h1 class="mn_staffTopupWallet">Staff Top Up Wallet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item mn_wallet"><a href="#">Wallet</a></li>
                    <li class="breadcrumb-item mn_staffWallet"><a href="#">Staff Wallet</a></li>
                    <li class="breadcrumb-item active mn_staffTopupWallet">Staff Top Up Wallet</li>

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form method="post" action="?d=wallet/topup" enctype="multipart/form-data">
        <div class="card">
            <div class="row p-2">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="monthYear">Month & Year</label>
                        <input type="month" name="txtMonth" class="form-control" onchange="console.log(this.value)"
                            required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="amount">Amount</label>
                        <div class="input-group mb-3">

                            <!-- Declare an input box -->
                            <input type="input" style="text-align: right; " placeholder="ປ້ອນຈຳນວນເງິນ:"
                                Name="txtAmount" class="form-control number" onkeyup="AddAndRemoveSeparator(this);"
                                required>

                            <!-- Append the following content to the input box -->
                            <div class="input-group-append">

                                <!-- Declare a button -->
                                <button type="submit" name="btnTopUp" class="btn btn-primary topup">TopUp</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>



        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card">


                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>
                                                <th style="text-align:center"><input type="checkbox" id="cbCheckAll"
                                                        name="cbCheckAll" onclick="checkAll();"></th>

                                                <th class="accountName">AccountName</th>
                                                <th class="staffId">StaffID</th>
                                                <th class="fullName">FullName</th>
                                                <th class="dob">Date of birth</th>
                                                <th class="gender" style="text-align:center">Gender</th>
                                                <th class="email">Email</th>
                                                <th class="address">Address</th>
                                                <th class="infoComplete">InfoComplete</th>
                                                <th class="staffWalletBalance">Total Balance</th>
                                                <th class="more">More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $date = date("Y-m-d", strtotime('-7 days'));
                                            $fromDate = $date;

                                            $toDate = date("Y-m-d");

                                            $arr = staffAccountActive($tokenKey, $userName, $api_url);
                                            $i = 0;
                                            foreach ($arr as $data) {
                                                ?>
                                                <tr>
                                                    <td align="center">
                                                        <input type="checkbox" id="cbCheckOne<?= $i ?>" name="cbCheckOne[]"
                                                            value="<?= $data['staffId'] ?>" onclick="checkOne(<?= $i ?>)">
                                                        <input type="hidden" name="type[]" class="type" value="unchanged" />

                                                    </td>
                                                    <!-- <td align="center"><?= $i ?></td> -->
                                                    <td><?= $data['AccountName'] ?></td>
                                                    <td><?= $data['staffId'] ?></td>

                                                    <td><?= $data['firstName'] ?>     <?= $data['lastName'] ?></td>
                                                    <td><?= $data['dob'] ?></td>
                                                    <td align="center"><?= $data['gender'] ?></td>
                                                    <td><?= $data['emaillAddr'] ?></td>
                                                    <td><?= $data['provinceName'] ?> - <?= $data['districtName'] ?> -
                                                        <?= $data['villageName'] ?>
                                                    </td>
                                                    <td><?= $data['infoComplete'] ?></td>
                                                    <!-- <td><?= $data['staffWalet'] ?></td>
                                                    <td><?= $data['personalWalet'] ?></td> -->
                                                    <td align="right"><?= number_format($data['staffWaletBL']) ?></td>
                                                    <td><a class="details"
                                                            href="?d=wallet/topupDetail&staffId=<?= $data['staffId'] ?>&mobileNumber=<?= $data['mobileNumber'] ?>&fullname=<?= $data['firstName'] ?> <?= $data['lastName'] ?>&strDate=<?= $fromDate ?>&endDate=<?= $toDate ?>">details</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="txtNumOfList" value="<?= $i ?>" id="txtNumOfList">
                                </div>

    </form>
    </div>
    </div>
    </div>


    </div>
    </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
<script language="javascript" type="text/javascript">
    function checkAll() {
        var all = document.getElementById("txtNumOfList").value;

        var checked = document.getElementById("cbCheckAll").checked;
        // alert(all);
        // alert(checked);
        for (i = 0; i < all; i++) {
            if (checked == false) {
                document.getElementById("cbCheckOne" + i).checked = false;

            } else {
                document.getElementById("cbCheckOne" + i).checked = true;

            }

        }
    }

    function checkOne(id) {
        var checked = document.getElementById("cbCheckOne" + id).checked;


        // if (checked == false) {
        //     document.getElementById("cbCheckAll" + id).value = 0;

        // } else {
        //     document.getElementById("cbCheckAll" + id).value = 1;
        // }
    }
</script>