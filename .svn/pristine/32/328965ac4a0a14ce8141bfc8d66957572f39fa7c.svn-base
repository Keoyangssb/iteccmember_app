<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Enable & Disable Account</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active ">Account</li>
                    <li class="breadcrumb-item active ">Enable & Disable Account</li>
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
                            <form method="post" action="?d=account/enabledisableAccount" enctype="multipart/form-data">
                                <div class="table-responsive">
                                    <table id="example4" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>
                                                <th style="text-align:center"><input type="checkbox" id="cbCheckAll" name="cbCheckAll" onclick="checkAll();"></th>
                                                <th>AccountName</th>
                                                <th>StaffID</th>
                                                <th>MobileNumber</th>

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
                                                        <input type="checkbox" id="cbCheckOne<?= $i ?>" name="cbCheckOne[]" value="<?= $data['staffId'] ?>" onclick="checkOne(<?= $i ?>)">
                                                        <input type="hidden" name="type[]" class="type" value="unchanged" />
                                                        <!-- <input type="hidden" name="txtStaffID[]" value="<?= $data['staffId'] ?>"> -->
                                                    </td>


                                                    <td><?= $data['AccountName'] ?></td>
                                                    <td><?= $data['staffId'] ?></td>
                                                    <td><?= $data['mobileNumber'] ?></td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }  ?>
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="txtNumOfList" value="<?= $i ?>" id="txtNumOfList">
                                </div>
                                <div class="row">
                                    <button type="submit" name="btnEnable" class="btn btn-primary">Enable</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit" name="btnDisable" class="btn btn-warning">Disable</button>
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