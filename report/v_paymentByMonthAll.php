<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_payment_staff">Payment-Staff</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_report"><a href="#">Report</a></li>
                    <!-- <li class="breadcrumb-item mn_staffWallet"><a href="#">Staff Wallet</a></li> -->
                    <li class="breadcrumb-item active mn_payment_staff">Payment-Staff</li>
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
                        <input type="hidden" name="d" value="report/paymentByMonthAll" />
                        <div class="row">

                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="month">Month</label>

                                    <select class="form-control select2" name="cb_month" id="cb_month">
                                        <option value="1" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '1')
                                            echo 'selected'; ?>>1</option>
                                        <option value="2" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '2')
                                            echo 'selected'; ?>>2</option>
                                        <option value="3" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '3')
                                            echo 'selected'; ?>>3</option>
                                        <option value="4" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '4')
                                            echo 'selected'; ?>>4</option>
                                        <option value="5" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '5')
                                            echo 'selected'; ?>>5</option>
                                        <option value="6" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '6')
                                            echo 'selected'; ?>>6</option>
                                        <option value="7" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '7')
                                            echo 'selected'; ?>>7</option>
                                        <option value="8" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '8')
                                            echo 'selected'; ?>>8</option>
                                        <option value="9" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '9')
                                            echo 'selected'; ?>>9</option>
                                        <option value="10" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '10')
                                            echo 'selected'; ?>>10</option>
                                        <option value="11" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '11')
                                            echo 'selected'; ?>>11</option>
                                        <option value="12" <?php if (isset($_GET['cb_month']) && $_GET['cb_month'] == '12')
                                            echo 'selected'; ?>>12</option>


                                    </select>

                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="year">Year</label>

                                    <select class="form-control select3" name="cb_year">

                                        <option value="2024" <?php if (isset($_GET['cb_year']) && $_GET['cb_year'] == '2024')
                                            echo 'selected'; ?>>2024</option>
                                        <option value="2025" <?php if (isset($_GET['cb_year']) && $_GET['cb_year'] == '2025')
                                            echo 'selected'; ?>>2025</option>
                                        <option value="2026" <?php if (isset($_GET['cb_year']) && $_GET['cb_year'] == '2026')
                                            echo 'selected'; ?>>2026</option>
                                        <option value="2027" <?php if (isset($_GET['cb_year']) && $_GET['cb_year'] == '2027')
                                            echo 'selected'; ?>>2027</option>



                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="">ປະເພດ</label>

                                    <select class="form-control select4" name="type">

                                        <option value="0">--all--</option>
                                        <option value="1" <?php if (isset($_GET['type']) && $_GET['type'] == '1')
                                            echo 'selected'; ?>>Itecc Member</option>
                                        <option value="2" <?php if (isset($_GET['type']) && $_GET['type'] == '2')
                                            echo 'selected'; ?>>Card</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>BU</label>
                                    <select class="form-control select5" name="bu" required>
                                        <option class="pleaseSelect" value="0">---all---</option>
                                        <?php
                                        $bu = "SELECT * FROM tb_bu WHERE statusId='1'";
                                        $stmt1 = sqlsrv_query($conn, $bu);

                                        if ($stmt1 === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }
                                        while ($data = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC)) {
                                            $selected = $_GET['bu'] == $data['buid'] ? "selected" : "";
                                            ?>
                                            <option value="<?= $data['buid'] ?>" <?= $selected ?>>
                                                <?= $data['buName'] ?>
                                            </option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default"
                                onclick="document.location='?d=report/paymentByMonthAll'">ຍົກເລີກ</button>
                            <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                            <?php if ($_GET['cb_month'] != '' && $_GET['cb_year'] != '') {
                                $cb_month = $_GET['cb_month'];
                                $cb_year = $_GET['cb_year'];
                                $type = $_GET['type'];

                                if ($type == "1") {
                                    $typeName = "Itecc Member";
                                }
                                if ($type == "2") {
                                    $typeName = "Card";
                                }
                                $buValue = $_GET['bu'];
                                $result_explode = explode('|', $buValue);
                                $buId= $result_explode[0];
                                $bu= $result_explode[1];

                                $params = "cb_month=$cb_month&cb_year=$cb_year&type=$type&bu=$bu&typeName=$typeName&buId=$buId";

                                ?>
                                <a href="report/ex_paymentByMonthAll.php?<?= $params ?>" target="_blank">
                                    <input type="button" class="btn btn-success" value="Export To Excel" />
                                </a>
                            </div>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="exampleR" class="table table-bordered beautified_report">

                                            <thead class="centered">

                                                <tr>
                                                    <th class="no" style="width: 40px;">no</th>
                                                    <th>ປະເພດ</th>
                                                    <th>ເບີໂທ / ບັດ</th>
                                                    <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                                    <th>ຫົວໜ່ວຍທຸລະກິດ</th>
                                                    <!-- <th>ພະແນກ</th> -->
                                                    <th>ຈຳນວນເງິນເຕີມ</th>
                                                    <th>ຈຳນວນເງິນຈ່າຍ</th>
                                                    <th>ຈຳນວນເງິນຍັງເຫຼືອ</th>
                                                </tr>
                                            </thead>
                                            <tbody class="centered">
                                                <?php
                                                $arr = ReportEmpCardBalance($tokenKey, $userName, $_GET['type'], $_GET['cb_month'], $_GET['cb_year'], $buId, "0", $api_url);
                                                $i = 1;
                                                $totalTopup = 0;
                                                $totalPayment = 0;
                                                $totalBalance = 0;
                                                foreach ($arr as $data) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $data['cardType'] ?></td>
                                                        <td><?= $data['cardId'] ?></td>
                                                        <td><?= $data['empFullName'] ?></td>
                                                        <td><?= $data['buName'] ?></td>
                                                        <!-- <td><?= $data['depName'] ?></td> -->
                                                        <td><?= $data['cardTopup'] ?></td>
                                                        <td><?= $data['cardPayment'] ?></td>
                                                        <td><?= $data['cardBalance'] ?></td>

                                                    </tr>
                                                    <?php
                                                    $totalTopup = $totalTopup + str_replace(",", "", $data['cardTopup']);

                                                    $totalPayment = $totalPayment + str_replace(",", "", $data['cardPayment']);

                                                    $totalBalance = $totalBalance + str_replace(",", "", $data['cardBalance']);
                                                    $i++;
                                                } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr
                                                    style="background-color: #17a2b8;color: whitesmoke;font-weight: bold;text-align: right;">
                                                    <th colspan="5">ລວມ:</th>
                                                    <th style="text-align: center;"><?= number_format($totalTopup) ?></th>
                                                    <th style="text-align: center;"><?= number_format($totalPayment) ?></th>
                                                    <th style="text-align: center;"><?= number_format($totalBalance) ?></th>
                                                </tr>
                                            </tfoot>
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