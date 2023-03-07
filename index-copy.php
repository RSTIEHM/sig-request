<!DOCTYPE html>
<html lang="en">

<?php include("includes/header.php") ?>
<?php


?>

<body>
  <div class="site-wrapper">
    <!-- MAIN SECTION CONTAINER -->
    <section enctype="multipart/form-data" action="" method="POST" id="form-container" class="new-invoice show invoice-form" data-type="new-invoice">
      <div class="form-wrapper-2">
        <div class="form-content-main">

          <form id="register-form" class="form new-form" method="POST">
            <div class="form-padding-wrapper">
              <div class="form-group form-group-title">
                <h2 class="form-group-title-name">Employee Service Request</h2>
              </div>

              <div class="auto-grid">
                <div class="left">
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
                  <div class="test-color">
                    <div>
                      <div class="comp-device-type">
                        <h4 class="italic">Computer Device Type</h4>
                        <div>
                          <label for="">Desktop</label>
                          <input name="desktop" type="checkbox" class="emp-radio">
                        </div>
                        <div>
                          <label for="">Laptop</label>
                          <input name="laptop" type="checkbox" class="emp-radio">
                        </div>
                      </div>
                      <div class="comp-device-type">
                        <h4 class="italic">Web Cam</h4>
                        <div>
                          <label for="">Yes</label>
                          <input name="webcam" type="checkbox" class="emp-radio">
                        </div>
                      </div>
                      <div class="comp-device-type mod">
                        <h4 class="italic">Network Drives</h4>
                        <div class="mod-div">
                          <label class="input-label" for="">*Please List Drives Needed (Separate By Comma)*</label>
                          <input name="drive" type="text" class="input-text">
                        </div>
                      </div>
                      <div class="comp-device-type mod">
                        <h4 class="italic">Network Printers</h4>
                        <div class="mod-div">
                          <label class="input-label" for="">*Please List Nearest Printers (Separate By Comma)*</label>
                          <input name="printer" type="text" class="input-text">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END LEFT -->

                <div class="right">
                  <div>
                    <div class="form-group">
                      <div class="label-wrap">
                        <label class="input-label" for="user-name">Employee </label>
                        <span class="input-label-msg">can't be empty</span>
                      </div>
                      <input value="" id="user-name" type="text" class="input-text" name="user-name" placeholder="">
                    </div>
                    <div class="form-group">
                      <div class="label-wrap">
                        <label class="input-label" for="deptartment">Department </label>
                        <span class="input-label-msg">can't be empty</span>
                      </div>
                      <input value="" id="deptartment" type="text" class="input-text" name="deptartment" placeholder="">
                    </div>
                    <div class="form-group">
                      <div class="label-wrap">
                        <label class="input-label" for="action-date">Action Date </label>
                        <span class="input-label-msg">can't be empty</span>
                      </div>
                      <input value="" id="action-date" type="date" class="input-text" name="action-date">
                    </div>
                  </div>

                  <div>

                    <div class="auto-grid">
                      <div class="comp-device-type">
                        <h4 class="italic">Phone Type</h4>
                        <div>
                          <label for="">Softphone</label>
                          <input name="softphone" type="checkbox" class="emp-radio">
                        </div>
                        <div>
                          <label for="">Deskphone</label>
                          <input name="deskphone" type="checkbox" class="emp-radio">
                        </div>

                      </div>
                      <div class="comp-device-type">
                        <h4 class="italic">Direct Number Required</h4>
                        <div>
                          <label for="">Yes</label>
                          <input name="directNumber" type="checkbox" class="emp-radio">
                        </div>
                      </div>
                      <div class="comp-device-type">
                        <h4 class="italic">Phone Programming</h4>
                        <div>
                          <label for="">Ring Groups</label>
                          <input name="ringGroups" type="checkbox" class="emp-radio">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- END RIGHT -->
              </div>
              <br>
              <div class="form-group">
                <button class="btn btn-4-purple btn-full add-item">Sign In</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- END MAIN SECTION CONTAINER -->
  </div>
  <!-- END SITE WRAPPER -->
</body>

</html>