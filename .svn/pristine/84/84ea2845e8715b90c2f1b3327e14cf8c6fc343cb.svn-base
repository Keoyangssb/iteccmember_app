<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_paymentByDiary">Payment Diary Report</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_report"><a href="#">Report</a></li>
                    <li class="breadcrumb-item mn_staffWallet"><a href="#">Staff Wallet</a></li>
                    <li class="breadcrumb-item active mn_paymentByDiary">Payment Diary Report</li>

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
                    <form method="get">
                        <input type="hidden" name="d" value="report/payment" />
                        <div class="row">



                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="fromDate">From Date</label>
                                    <input type="date" name="strDate" class="form-control" autocomplete="off"
                                        value="<?= $_GET['strDate'] ?>" required="required">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="toDate">To Date</label>
                                    <input type="date" name="endDate" class="form-control" autocomplete="off"
                                        value="<?= $_GET['endDate'] ?>" required="required">
                                </div>
                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default"
                                onclick="document.location='?d=report/payment'">ຍົກເລີກ</button>
                            <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                            <?php if ($_GET['strDate'] != '' && $_GET['endDate'] != '') { ?>
                        </div>


                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>
                                                <th class="no">no</th>
                                                <th class="staffId">staffId</th>
                                                <th class="accountName">AccountName</th>
                                                <th class="fullName">FullName</th>
                                                <th class="gender">gender</th>
                                                <th class="email">emaillAddr</th>
                                                <th class="paymentDate">payDate</th>
                                                <th class="totalPayment">totalPayment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $arr = paymentStaffWalletByDaily($tokenKey, $userName, $_GET['strDate'], $_GET['endDate'], $api_url);
                                            $i = 1;
                                            foreach ($arr as $data) {
                                            ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $data['staffId'] ?></td>
                                                <td><?= $data['AccountName'] ?></td>
                                                <td><?= $data['firstName'] ?> <?= $data['lastName'] ?></td>
                                                <td><?= $data['gender'] ?></td>
                                                <td><?= $data['emaillAddr'] ?></td>
                                                <td><?= $data['payDate'] ?></td>
                                                <td><?= number_format($data['totalPayment']) ?></td>
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
                <?php } ?>
                </form>

            </div>
        </div>
    </div>
    <!-- /.row -->

</section>