<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_enabledisable">Enable & Disable Account</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_account">Account</li>
                    <li class="breadcrumb-item active mn_personalAccount">Personal Account</li>
                    <li class="breadcrumb-item active mn_enabledisable">Enable & Disable Account</li>
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
                            <form method="post" action="?d=accountPersonal/enabledisableAccount"
                                enctype="multipart/form-data">
                                <div class="table-responsive">
                                    <table id="example4" class="table table-bordered beautified_report">

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
                                                <th class="mn_personalWallet">Personal Wallet</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $arr = allAccount($tokenKey, $userName, $api_url);
                                            $i = 0;
                                            foreach ($arr as $data) {
                                            ?>
                                            <tr>
                                                <td align="center">
                                                    <input type="checkbox" id="cbCheckOne<?= $i ?>" name="cbCheckOne[]"
                                                        value="<?= $data['staffId'] ?>" onclick="checkOne(<?= $i ?>)">
                                                    <input type="hidden" name="type[]" class="type" value="unchanged" />
                                                    <!-- <input type="hidden" name="txtStaffID[]" value="<?= $data['staffId'] ?>"> -->
                                                </td>


                                                <td><?= $data['AccountName'] ?></td>
                                                <td><?= $data['staffId'] ?></td>
                                               
                                                <td><?= $data['firstName'] ?> <?= $data['lastName'] ?></td>
                                                <td><?= $data['dob'] ?></td>
                                                <td align="center"><?= $data['gender'] ?></td>
                                                <td><?= $data['emaillAddr'] ?></td>
                                                <td><?= $data['provinceName'] ?> - <?= $data['districtName'] ?> -
                                                    <?= $data['villageName'] ?></td>
                                                <td><?= $data['infoComplete'] ?></td>
                                         
                                                <td><?= $data['personalWalet'] ?></td>
                                            </tr>
                                            <?php
                                                $i++;
                                            }  ?>
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="txtNumOfList" value="<?= $i ?>" id="txtNumOfList">
                                </div>
                                <div class="row">
                                    <button type="submit" name="btnEnable" class="btn btn-primary enable">Enable</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit" name="btnDisable" class="btn btn-warning disable">Disable</button>
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