<!DOCTYPE html>
<html lang="en">

<?php include("includes/header2.php") ?>
<?php


?>

<body>
  <div class="site-wrapper">
    <div class="form-content-main">
      <!-- <h2 class="form-group-title-name">Employee Service Request</h2> -->

      <!-- ==========PAGE 1============ -->
      <div class="page-1" data-page="1">
        <section class="form-group employee-type">
          <div class="form-check">
            <input data-id="new" class="emp-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label emp-label heading-2" for="flexRadioDefault1">
              New Employee
            </label>
          </div>
          <div class="form-check">
            <input data-id="transfer" class="emp-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label emp-label heading-2" for="flexRadioDefault2">
              Employee Transfer
            </label>
          </div>
          <div class="form-check">
            <input data-id="separation" class="emp-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
            <label class="form-check-label emp-label heading-2" for="flexRadioDefault2">
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
      <!-- ========== END PAGE 1============ -->

      <!-- ==========PAGE 2============ -->
      <div class="page-2" data-page="2">
        <section class="form-group employee-type">
          <div style="width:100%;">
            <div class="comp-device-type">
              <div class="auto-grid">
                <div class="tester-wrap">
                  <div class="comp-device-type">
                    <h2>Computer</h3>
                      <div class="flex-check">
                        <label for="">Desktop</label>
                        <input data-id="desktop" name="desktop" type="checkbox" class="emp-computer computer-check comp-input">
                      </div>
                      <div class="flex-check">
                        <label for="">Laptop</label>
                        <input data-id="laptop" name="laptop" type="checkbox" class="emp-computer computer-check comp-input">
                      </div>
                  </div>
                  <div class="comp-device-type">
                    <h2 class="">Web Cam</h3>
                      <div class="flex-check">
                        <label for="">Yes</label>
                        <input data-id="webcam" name="webcam" type="checkbox" class="emp-computer computer-check comp-input">
                      </div>
                  </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="tester-wrap">
                  <div class="comp-device-type mod">
                    <h2 class="">Network Drives</h3>
                      <div class="mod-div">
                        <label class="input-label-italic" for="">*Please List Drives Needed (Separated By Comma)*</label>
                        <input data-id="drive" name="drive" type="text" class="input-text comp-input-text comp-input">
                      </div>
                  </div>
                  <div class="comp-device-type mod">
                    <h2 class="">Network Printers</h3>
                      <div class="mod-div">
                        <label class="input-label-italic" for="">*Please List Nearest Printers (Separated By Comma)*</label>
                        <input data-id="printer" name="printer" type="text" class="input-text comp-input-text comp-input">
                      </div>
                  </div>
                </div>
                <!-- END RIGHT SIDE -->
              </div>
              <!-- PAGE 2 END AUTO GRID -->

            </div>

            <div class="form-group">
              <p id="page-2-next" class="btn btn-4-purple btn-full">NEXT</p>
            </div>
          </div>
        </section>

      </div>

    </div>
    <!-- ========== END PAGE 2============ -->
  </div>

  <!-- END MAIN SECTION CONTAINER -->
  </div>
  <!-- END SITE WRAPPER -->
  <script src="js/app.js"></script>
</body>

</html>