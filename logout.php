<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: log.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: log.php");
  }
?>
<div class="modal fade bd-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-footer">
<div class="header">
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    
</div>
        <?php  if (isset($_SESSION['username'])) : ?><br><br>
      <span>Are you sure id Logout? <br><strong><?php echo $_SESSION['username']; ?></strong></span>
      <p> <br><br><br>
        <a href="" class="dropdown-item" style="color: red;">Cancle</a>
        <a href="index.php?logout='1'" class="dropdown-item" style="color: red;">logout</a> </p>
    <?php endif ?>
  </div>
    </div>
  </div>
</div>