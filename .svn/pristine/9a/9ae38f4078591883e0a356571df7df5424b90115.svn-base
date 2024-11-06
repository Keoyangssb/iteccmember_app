<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_masterBu">Business Unit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item mn_masterBu ">Business Unit</li>
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
                                <h4 class="modal-title ">Add BU</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/bu" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Business Unit Code</label>
                                                <input type="input" Name="txtBuCode" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Business Unit Name</label>
                                                <input type="input" Name="txtBuName" class="form-control">
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
                                            <th class="mn_masterBuCodeName">Business Unit Code/Name</th>
                                            <th style="text-align:center;">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM tb_bu WHERE statusId='1'";
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
                                                            <h4 class="modal-title ">Edit BU</h4>

                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/bu"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="">Business Unit Code</label>
                                                                            <input type="hidden" name="id"
                                                                                value="<?= $row['buid'] ?>"
                                                                                class="form-control" autocomplete="off" />
                                                                            <input type="input" Name="txtBuCode"
                                                                                value="<?= $row['buCode'] ?>"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="">Business Unit Name</label>
                                                                            <input type="input" Name="txtBuName"
                                                                                value="<?= $row['buName'] ?>"
                                                                                class="form-control">
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
                                                <td><?= $row['buCode'] ?> | <?= $row['buName'] ?></td>
                                                <td style="text-align:center;">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal"
                                                            data-target="#modal-lg-Edit<?= $i ?>"></i></a>
                                                    <a href="?d=master/bu&del=<?= $row['buid'] ?>"
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