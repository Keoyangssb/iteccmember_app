<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_masterDept">Department</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item mn_masterDept ">Department</li>
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
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg-New">
                        <i class="fas fa-plus-circle"></i> Add</button>
                </div>
                <!-- /.card-header -->
                <div class="modal fade" id="modal-lg-New">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title ">Add Department</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/dept" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Department Unit Code</label>
                                                <input type="input" Name="txtDeptCode" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Department Unit Name</label>
                                                <input type="input" Name="txtDeptName" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mn_masterBu">Business Unit</label>
                                                <select class="form-control select2" name="cb_bu" required>
                                                    <option class="pleaseSelect" value="0">---please select---</option>
                                                    <?php
                                                    $bu = "SELECT * FROM tb_bu WHERE statusId='1'";
                                                    $stmt1 = sqlsrv_query($conn, $bu);

                                                    if ($stmt1 === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }
                                                   
                                                    while ($data = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC)) {
                                                        ?>
                                                        <option value="<?= $data['buid'] ?>" <?= $selected ?>>
                                                            <?= $data['buCode'] ?> | <?= $data['buName'] ?>
                                                        </option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                                    <button type="submit" name="btnSave" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>
                                            <th class="no" style="text-align:center;width: 5%;">No</th>
                                            <th class="mn_masterDeptCodeName">Department Code/Name</th>
                                            <th class="mn_masterBuCodeName">Business Unit Code/Name</th>
                                            <th style="text-align:center;">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM v_department WHERE statusId='1'";
                                        $stmt = sqlsrv_query($conn, $sql);

                                        if ($stmt === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }
                                        $i = 1;
                                        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                            ?>
                                            <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title ">Edit Department</h4>

                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/dept"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="">Department Code</label>
                                                                            <input type="hidden" name="deptId"
                                                                                value="<?= $row['deptId'] ?>"
                                                                                class="form-control" autocomplete="off" />
                                                                            <input type="input" Name="txtDeptCode"
                                                                                value="<?= $row['deptCode'] ?>"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="">Department Name</label>
                                                                            <input type="input" Name="txtDeptName"
                                                                                value="<?= $row['deptName'] ?>"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="mn_masterBu">Business Unit</label>
                                                                            <select class="form-control select2"
                                                                                name="cb_bu" required>
                                                                                <option class="pleaseSelect" value="0">
                                                                                    ---please select---</option>
                                                                                <?php
                                                                                $bu = "SELECT * FROM tb_bu WHERE statusId='1'";
                                                                                $stmt1 = sqlsrv_query($conn, $bu);

                                                                                if ($stmt1 === false) {
                                                                                    die(print_r(sqlsrv_errors(), true));
                                                                                }
                                                                             
                                                                                while ($data = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC)) {
                                                                                    $selected = $data['buid'] == $row['buid'] ? "selected" : "";
                                                                                    ?>
                                                                                    <option value="<?= $data['buid'] ?>" <?=$selected?>
                                                                                        <?= $selected ?>>
                                                                                        <?= $data['buCode'] ?> |
                                                                                        <?= $data['buName'] ?>
                                                                                    </option>
                                                                                <?php }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default "
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" name="btnEdit"
                                                                    class="btn btn-success">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>
                                            <tr>
                                                <td style="text-align:center;"><?= $i ?></td>
                                                <td><?= $row['deptCode'] ?> | <?= $row['deptName'] ?></td>
                                                <td><?= $row['buCode'] ?> | <?= $row['buName'] ?></td>
                                                <td style="text-align:center;">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal"
                                                            data-target="#modal-lg-Edit<?= $i ?>"></i></a>
                                                    <a href="?d=master/dept&del=<?= $row['deptId'] ?>"
                                                        onclick="return confirm('do you want to delete this...?')"><i
                                                            class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>

                                            <?php $i++;
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
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->