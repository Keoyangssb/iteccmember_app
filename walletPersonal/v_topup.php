<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];

//print("wwwwwwwwwwwwwwwwwww: " . $tokenKey);
?>
<link type="text/css" rel="stylesheet" href="css/element.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/Action.js"></script>
<script type="text/javascript" src="js/calculate.js"></script>

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

    function search(phone) {
        // console.log(phone);
        if (phone.length < 10) {
            document.getElementById("labelAmount").hidden = true;
            document.getElementById("txtAmount").hidden = true;
            document.getElementById("labeltopupTypeCash").hidden = true;
            document.getElementById("txttopupTypeCash").hidden = true;
            document.getElementById("labeltopupTypeTransfer").hidden = true;
            document.getElementById("txttopupTypeTransfer").hidden = true;
            document.getElementById("btnTopUp").hidden = true;
            let table = document.querySelector("tbody");
            // Delete second row
            table.deleteRow(0);
        } else {
            var strURL = "function/checkNumber.php?phone=" + phone;
            var req = new XMLHttpRequest();
            req.open('GET', strURL, true);
            if (req) {
                req.onreadystatechange = function () {
                    if (req.readyState == 4 && req.status == 200) {
                        try {
                            var myObj = JSON.parse(req.responseText);
                            var row = tbody.insertRow(0);
                            if (myObj[0] == "") {
                                document.getElementById("text").innerHTML = "Don't have this phone number in database."
                            } else {

                                document.getElementById("labelAmount").hidden = false;
                                document.getElementById("txtAmount").hidden = false;
                                document.getElementById("labeltopupTypeCash").hidden = false;
                                document.getElementById("txttopupTypeCash").hidden = false;
                                document.getElementById("labeltopupTypeTransfer").hidden = false;
                                document.getElementById("txttopupTypeTransfer").hidden = false;
                                document.getElementById("btnTopUp").hidden = false;

                                document.getElementById("text").innerHTML = ""

                                var cell0 = row.insertCell(0);
                                var cell1 = row.insertCell(1);
                                var cell2 = row.insertCell(2);
                                var cell3 = row.insertCell(3);
                                var cell4 = row.insertCell(4);
                                var cell5 = row.insertCell(5);
                                var cell6 = row.insertCell(6);
                                var cell7 = row.insertCell(7);
                                var cell8 = row.insertCell(8);

                                cell0.innerHTML = "6416";
                                cell1.innerHTML = myObj[1];
                                cell2.innerHTML = myObj[3];
                                cell3.innerHTML = myObj[4];
                                cell4.innerHTML = myObj[5];
                                cell5.innerHTML = myObj[6];
                                cell6.innerHTML = myObj[7];
                                cell7.innerHTML = myObj[8];
                                cell8.innerHTML = myObj[9];

                                document.getElementById("txtPersonalId").value = myObj[0];
                            }
                        } catch (error) {
                            console.error("Error parsing JSON:", error);
                        }
                    }
                };
                //req.open("GET", strURL, true);
                req.send();
            }
        }
        let table = document.querySelector("tbody");
        table.deleteRow(0);
    }

</script>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_personalTopupWallet">Personal Top Up Wallet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item mn_wallet"><a href="#">Wallet</a></li>
                    <li class="breadcrumb-item mn_personalWallet"><a href="#">Personal Wallet</a></li>
                    <li class="breadcrumb-item active mn_personalTopupWallet">Personal Top Up Wallet</li>

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
                    <div class="col-md-4">
                        <div class="card-body">
                            <form method="post" action="?d=walletPersonal/topup" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="inputForTopup">Input Mobile Phone to Topup</label>
                                            <input type="number" placeholder="20XXXXXXXX" maxlength="10"
                                                Name="txtNumber" onkeyup="search(this.value)"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label id="labelAmount" class="amount" hidden>Amount</label>
                                            <input id="txtAmount" type="input" placeholder="ປ້ອນຈຳນວນເງິນ:" hidden
                                                Name="txtAmount" class="form-control number" maxlength="10"
                                                onkeyup="AddAndRemoveSeparator(this);" required>
                                        </div>

                                        <div class="form-group">
                                            <label id="labeltopupTypeCash" hidden>ເງິນສົດ</label>
                                            <input id="txttopupTypeCash" type="radio" hidden checked Name="txttopupType"
                                                value="1">

                                            <label id="labeltopupTypeTransfer" hidden>ເງິນໂອນ</label>
                                            <input id="txttopupTypeTransfer" type="radio" value="2" Name="txttopupType"
                                                hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" id="btnTopUp" name="btnTopUp" hidden
                                        class="btn btn-primary topup">TopUp</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <button type="submit" name="btnRefund" class="btn btn-warning">Refund</button> -->
                                </div>
                                <div>
                                    <input type="text" name="txtPersonalId" id="txtPersonalId" hidden>
                                </div>
                                <div>
                                    <h4 style="color:green;">
                                        <?= $_SESSION['showSuccess'] ?>
                                    </h4>
                                    <h4 style="color:red;">
                                        <?= $_SESSION['showError'] ?>
                                    </h4>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered beautified_report">

                                            <thead>
                                                <tr>

                                                    <th class="id">PersonalId</th>
                                                    <th class="accountName">AccountName</th>
                                                    <th class="fullName">FullName</th>
                                                    <th class="dob">Date of birth</th>
                                                    <th class="gender" style="text-align:center">Gender</th>
                                                    <th class="email">Email</th>
                                                    <th class="address">Address</th>
                                                    <th class="mn_personalWallet">personalWalet</th>
                                                    <th class="personalWalletBalance">personalWaletBL</th>


                                                </tr>
                                            </thead>
                                            <tbody id="tbody">

                                            </tbody>
                                        </table>

                                    </div>


                                </div>
                                <div class="card-footer" id="text"></div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php
unset($_SESSION['showSuccess']);
unset($_SESSION['showError']);
?>
<!-- /.content -->