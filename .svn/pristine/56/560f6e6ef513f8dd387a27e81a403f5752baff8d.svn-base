<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Personal Top Up Wallet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Wallet</a></li>
                    <li class="breadcrumb-item active ">Personal Top Up Wallet</li>

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
                                            <label>Input Mobile Phone to Topup</label>
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
                                            <label id="labelAmount"  hidden>Amount</label>
                                            <input id="txtAmount" type="number" placeholder="input amount:" Name="txtAmount" hidden
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" id="btnTopUp" hidden name="btnTopUp" class="btn btn-primary">TopUp</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <button type="submit" name="btnRefund" class="btn btn-warning">Refund</button> -->
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
                                               
                                                <th>PersonalId</th>
                                                <th>AccountName</th>
                                                <th>mobileNumber</th>
                                                <th>FullName</th>
                                                <th>Date of birth</th>
                                                <th style="text-align:center">Gender</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>personalWalet</th>
                                                <th>personalWaletBL</th>
                                             

                                            </tr>
                                        </thead>
                                       
                                    </table>
                                  
                                </div>
                          
                         
                        </div>
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
    console.log(phone);
    document.getElementById("labelAmount").hidden=false;
    document.getElementById("txtAmount").hidden=false;
    document.getElementById("btnTopUp").hidden=false;

}
</script>