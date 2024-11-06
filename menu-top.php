   <?php
    $tokenKey = $_SESSION['im_tokenKey'];
    ?>

   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="index.php" class="nav-link mn_home">Home</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="#" class="nav-link mn_contact">Contact</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="logout.php" class="nav-link mn_logout">Logout</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <!-- <p href="#"><?= $_SESSION['im_perName_1'] ?> | <?= $_SESSION['im_perName_35'] ?> | <?= $_SESSION['im_perName_36'] ?> | <?= $_SESSION['im_perName_37'] ?>
       | <?= $_SESSION['im_perName_38'] ?> | <?= $_SESSION['im_perName_39'] ?> | <?= $_SESSION['im_perName_42'] ?> |</p> -->
     </li>
   </ul>