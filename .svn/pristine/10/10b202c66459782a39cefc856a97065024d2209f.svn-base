<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Personal Refund Wallet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Wallet</a></li>
                    <li class="breadcrumb-item active ">Personal Refund Wallet</li>

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
                            <form method="post" action="?d=walletPersonal/refund" enctype="multipart/form-data">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Input Mobile Phone to Topup</label>
                                            <input type="number" placeholder="20XXXXXXXX" maxlength="10" Name="txtNumber" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="input" placeholder="input amount:" Name="txtAmount" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <button type="submit" name="btnTopUp" class="btn btn-primary">TopUp</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                    <button type="submit" name="btnRefund" class="btn btn-warning">Refund</button>
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
</script>