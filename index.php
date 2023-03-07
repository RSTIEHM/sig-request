<!DOCTYPE html>
<html lang="en">

<?php include("includes/header.php") ?>
<?php


?>

<body>
  <div class="site-wrapper">
    <div class="form-content-main">
      <h2 class="form-group-title-name">Employee Service Request</h2>
      <!-- PAGE 1 -->
      <div class="page-1" data-page="1">
        <section class="form-group employee-type">
          <div class="form-check">
            <input data-id="new" class="emp-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label emp-label" for="flexRadioDefault1">
              New Employee
            </label>
          </div>
          <div class="form-check">
            <input data-id="transfer" class="emp-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label emp-label" for="flexRadioDefault2">
              Employee Transfer
            </label>
          </div>
          <div class="form-check">
            <input data-id="separation" class="emp-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
            <label class="form-check-label emp-label" for="flexRadioDefault2">
              Employee Separation
            </label>
          </div>
        </section>

        <section class="page-1-emp-inputs">
          <div class="form-group">
            <div class="label-wrap">
              <label class="input-label" for="user-name">Employee Name </label>
              <span class="input-label-msg">can't be empty</span>
            </div>
            <input data-id="userName" value="" id="user-name" type="text" class="input-text page-1-empInfo" name="user-name" placeholder="">
          </div>
          <div class="form-group">
            <div class="label-wrap">
              <label class="input-label" for="deptartment">Department </label>
              <span class="input-label-msg">can't be empty</span>
            </div>
            <input data-id="department" value="" id="department" type="text" class="input-text page-1-empInfo" name="deptartment" placeholder="">
          </div>
          <div class="form-group">
            <div class="label-wrap">
              <label class="input-label" for="action-date">Action Date </label>
              <span class="input-label-msg">can't be empty</span>
            </div>
            <input data-id="actionDate" value="" id="action-date" type="date" class="input-text page-1-empInfo" name="action-date">
          </div>
        </section>
        <div class="form-group">
          <p id="page-1-next" class="btn btn-4-purple btn-full">NEXT</p>
        </div>
      </div>
      <!-- END PAGE 1 -->
    </div>

    <!-- END MAIN SECTION CONTAINER -->
  </div>
  <!-- END SITE WRAPPER -->
  <script src="js/app.js"></script>
</body>

</html>