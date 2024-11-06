<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Active Account</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active ">Account</li>
                    <li class="breadcrumb-item active ">Active Account</li>
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
                                            <th>AccountName</th>
                                            <th>StaffID</th>
                                            <th>MobileNumber</th>
                                            <th>FullName</th>
                                            <th>Date of birth</th>
                                            <th style="text-align:center">Gender</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>InfoComplete</th>
                                            <th>Staff Wallet</th>
                                            <th>Personal Wallet</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = PersonalAccountActive($tokenKey, $userName, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $i ?></td>
                                                <td><?= $data['AccountName'] ?></td>
                                                <td><?= $data['staffId'] ?></td>
                                                <td><?= $data['mobileNumber'] ?></td>
                                                <td><?= $data['firstName'] ?> <?= $data['lastName'] ?></td>
                                                <td><?= $data['dob'] ?></td>
                                                <td align="center"><?= $data['gender'] ?></td>
                                                <td><?= $data['emaillAddr'] ?></td>
                                                <td><?= $data['provinceName'] ?> - <?= $data['districtName'] ?> - <?= $data['villageName'] ?></td>
                                                <td><?= $data['infoComplete'] ?></td>
                                                <td><?= $data['staffWalet'] ?></td>
                                                <td><?= $data['personalWalet'] ?></td>

                                             
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