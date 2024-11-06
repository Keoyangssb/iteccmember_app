<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_activeAccount">Active Account</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_account">Account</li>
                    <li class="breadcrumb-item active mn_staffAccount">Staff Account</li>
                    <li class="breadcrumb-item active mn_activeAccount">Active Account</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">


                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No</th>
                                            <th class="accountName">AccountName</th>
                                            <th class="staffId">StaffID</th>
                                            <th class="fullName">FullName</th>
                                            <th class="dob">Date of birth</th>
                                            <th class="gender" style="text-align:center">Gender</th>
                                            <th class="email">Email</th>
                                            <th class="address">Address</th>
                                            <th class="infoComplete">InfoComplete</th>
                                            <th class="mn_staffWallet">Staff Wallet</th>
                                            <th class="staffWalletBalance">Staff Wallet Balance</th>
                                            <th style="text-align:center;width: 15%;">Business Unit</th>
                                            <!-- <th class="mn_personalWallet">Personal Wallet</th>
                                            <th class="personalWalletBalance">Personal Wallet Balance</th> -->
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = staffAccountActive($tokenKey, $userName, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {
                                        ?>
                                        <tr>
                                            <td align="center"><?= $i ?></td>
                                            <td><?= $data['AccountName'] ?></td>
                                            <td><?= $data['staffId'] ?></td>
                                            <td><?= $data['firstName'] ?> <?= $data['lastName'] ?></td>
                                            <td><?= $data['dob'] ?></td>
                                            <td align="center"><?= $data['gender'] ?></td>
                                            <td><?= $data['emaillAddr'] ?></td>
                                            <td><?= $data['provinceName'] ?> - <?= $data['districtName'] ?> -
                                                <?= $data['villageName'] ?></td>
                                            <td><?= $data['infoComplete'] ?></td>
                                            <td><?= $data['staffWalet'] ?></td>
                                            <td align="right"><?= number_format($data['staffWaletBL']) ?></td>
                                            <td align="center">
                                            <select class="form-control select2" name="cb_deptId" id="cb_deptId<?=$i?>" onchange="updateToDatabase(this.value,<?=$data['staffId']?>)">
                                                    <option class="pleaseSelect" value="0">--Select--</option>
                                                    <?php
                                                    $dept = "SELECT * FROM tb_bu WHERE statusId='1'";
                                                    $stmt1 = sqlsrv_query($conn, $dept);
                                                    if ($stmt1 === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }
                                                    while ($row = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC)) {
                                                        $selected = $data['buid'] == $row['buid'] ? "selected" : "";
                                                        ?>
                                                        <option value="<?= $row['buid'] ?>" <?= $selected ?>>
                                                            <?= $row['buName'] ?>
                                                        </option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </td>
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
<!-- /.content -->
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
function updateToDatabase(value,sId) {


    // var deptId = document.getElementById("deptId" + i).value;

    console.log("deptId:" + value);

    console.log("sId:" + sId);


 


    var strURL =
        "function/updateDept.php?deptId=" + value + "&sId=" + sId;
    $.ajax({
        type: "POST",
        url: strURL,
        data: {
            deptId: value,
            sId: sId
        },
        cache: false,
        success: function(data) {
          
            console.log("data:" + data);
        
            toastr.success(data);
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    });
}
</script>