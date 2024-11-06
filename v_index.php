  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="mn_home">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item mn_home"><a href="#">Home</a></li> -->
            <li class="breadcrumb-item active mn_home">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php 
  $roleId = $_SESSION['im_roleId'];
  if ($roleId <= "4") { ?>
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=wallet/topup';" style="cursor:pointer">
          <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wallet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text mn_wallet">Wallet</span>
              <span class="info-box-number mn_staffTopupRefundWallet">
               Topup & Refund Wallet
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
    
          <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=account/activeAccount';" style="cursor:pointer">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fab fa-adn"></i></span>

              <div class="info-box-content">
                <span class="info-box-text mn_activeAccount">Active Account</span>
                <span class="info-box-number">

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
       
        <!-- ./col -->
         <?php  if ($roleId == "1") { ?>
        <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=account/allAccount';" style="cursor:pointer">
          <div class="info-box">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-layer-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text mn_allAccount">All Account</span>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <?php } ?>
        <!-- ./col -->
        <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=account/enabledisableAccount';" style="cursor:pointer">
          <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text mn_account">Account</span>
              <span class="info-box-number mn_enabledisable">
                Enable & Disable Account
                
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <?php } ?>


<?php
  if ($roleId == "5") { ?>
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=walletPersonal/topup';" style="cursor:pointer">
          <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wallet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text mn_wallet">Wallet</span>
              <span class="info-box-number mn_staffTopupRefundWallet">
               Topup & Refund Wallet
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      
    
          <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=accountPersonal/activeAccount';" style="cursor:pointer">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fab fa-adn"></i></span>

              <div class="info-box-content">
                <span class="info-box-text mn_activeAccount">Active Account</span>
                <span class="info-box-number">

                </span>
              </div>
            
            </div>
       
          </div>
       
  
      
        <!-- <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=account/allAccount';" style="cursor:pointer">
          <div class="info-box">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-layer-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text mn_allAccount">All Account</span>
             
            </div>
        
          </div>

        </div> -->
     
        <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=accountPersonal/enabledisableAccount';" style="cursor:pointer">
          <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text mn_account">Account</span>
              <span class="info-box-number mn_enabledisable">
                Enable & Disable Account
                
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <?php } ?>