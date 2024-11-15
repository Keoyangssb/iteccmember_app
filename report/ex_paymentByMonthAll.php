<style>
    .font {
        font-family: Noto Sans Lao;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: Noto Sans Lao;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }
</style>
<?php
session_start();
date_default_timezone_set('Asia/Vientiane');
require_once("../config.php");
require_once("m_paymentByMonthAll.php");

$date = date('Y-m');
$output_filename = "ລາຍງານການຈ່າຍ-ເງິນນະໂຍບາຍ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");
if (isset($_GET['cb_month']) && (isset($_GET['cb_year']))) {
    $cb_month = $_GET['cb_month'];
    $cb_year = $_GET['cb_year'];

}
if ($_GET['type'] !="0" || $_GET['buId'] !="0") {
    $type = $_GET['typeName'];
    $bu = $_GET['bu'];
  
}else{
    $type = "--";
    $bu = "--";
}
echo "<h4 class='font' >ລາຍງານ ການຈ່າຍ-ເງິນນະໂຍບາຍ  ປະຈໍາເດຶອນ " . $cb_month . " ປີ " . $cb_year . " ປະເພດ: " . $type . " ຫົວໜ່ວຍທຸລະກິດ: " . $bu . "</h4> ";

echo "<table id='transactionsTable' class='styled-table' border='1'> \n";
?>
<thead class="centered">

    <tr>
        <th  style="width: 40px;">no</th>
        <th>ປະເພດ</th>
        <th>ເບີໂທ</th>
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
    $arr = ReportEmpCardBalance($tokenKey, $userName, $_GET['type'], $_GET['cb_month'], $_GET['cb_year'], $_GET['buId'], "0", $api_url);
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
    <tr style="background-color: #17a2b8;color: whitesmoke;font-weight: bold;text-align: right;">
        <th colspan="5">ລວມ:</th>
        <th style="text-align: center;"><?= number_format($totalTopup) ?></th>
        <th style="text-align: center;"><?= number_format($totalPayment) ?></th>
        <th style="text-align: center;"><?= number_format($totalBalance) ?></th>
    </tr>
</tfoot>
</table>
