<!DOCTYPE html>
<html lang="en">

<?php include("includes/header.php") ?>
<?php


?>

<body>
  <div class="loading">
    <img class="loading-img" src="./images/loading.gif" alt="">
  </div>
  <div class="site-wrapper">
    <header class="header"></header>
    <h1 class="heading-1">Employee Service Request</h1>
    <!-- ========page-wrapper=========== -->
    <div class="page-wrapper">
      <!-- ========page-1=========== -->
      <div class="page page-1" data-page="1">

        <section class="page-1-emp-radio form-group flex-even">
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
            </div>
            <input data-id="userName" value="" id="user-name" type="text" class="input-text page-1-empInfo" name="user-name" placeholder="">
          </div>
          <div class="form-group">
            <div class="label-wrap">
              <label class="input-label" for="deptartment">Department </label>
            </div>
            <input data-id="department" value="" id="department" type="text" class="input-text page-1-empInfo" name="deptartment" placeholder="">
          </div>
          <div class="form-group">
            <div class="label-wrap">
              <label class="input-label" for="action-date">Action Date </label>
            </div>
            <input data-id="actionDate" value="" id="action-date" type="date" class="input-text page-1-empInfo" name="action-date">
          </div>
        </section>

        <div class="form-group">
          <p id="page-1-next" class="btn btn-4-purple btn-full">NEXT</p>
        </div>
      </div>
      <!-- ========END page-1=========== -->

      <!-- ========page-2=========== -->
      <div class="page page-2" data-page="2">
        <div class="flex-stretch">
          <section class="flex-auto">
            <div class="">
              <h3 class="heading-white">Computer Type</h3>
              <div class="flex-check">
                <input data-id="desktopComputer" name="desktopComputer" type="checkbox" class="emp-computer computer-check comp-input">
                <label class="heading-white" for="">Desktop</label>
              </div>
              <div class="flex-check">
                <input data-id="laptop" name="laptop" type="checkbox" class="emp-computer computer-check comp-input">
                <label class="heading-white" for="">Laptop</label>
              </div>
            </div>
            <div class="">
              <h3 class="heading-white">Web Cam</h3>
              <div class="flex-check">
                <input data-id="webcam" name="webcam" type="checkbox" class="emp-computer computer-check comp-input">
                <label class="heading-white" for="">Yes</label>
              </div>
            </div>
            <div class="">
              <h3 class="heading-white">Phone Type</h3>
              <div class="flex-check">
                <input data-id="softPhone" name="softPhone" type="checkbox" class="emp-computer computer-check comp-input">
                <label class="heading-white" for="">Softphone</label>

              </div>
              <div class="flex-check">
                <input data-id="deskPhone" name="deskPhone" type="checkbox" class="emp-computer computer-check comp-input">
                <label class="heading-white" for="">Desk</label>
              </div>
            </div>
            <div class="">
              <h3 class="heading-white">Direct Number Required</h2>
                <div class="flex-check">
                  <input data-id="directNumber" name="directNumber" type="checkbox" class="emp-computer computer-check comp-input">
                  <label class="heading-white" for="">Yes</label>
                </div>
            </div>
            <div class="">
              <h3 class="heading-white">Phone Programming</h2>
                <div class="flex-check">
                  <input data-id="phoneProgramming" name="phoneProgramming" type="checkbox" class="emp-computer computer-check comp-input">
                  <label class="heading-white" for="">Ring Groups</label>
                </div>
            </div>
          </section>
          <section class="left">


          </section>


        </div>
        <section class="drive-printer flex">
          <div class="">
            <h3 class="heading-white">Network Drives</h3>
            <div class="mod-div">
              <label class="input-label-italic" for="">*Please List Drives Needed (Separated By Comma)*</label>
              <input data-id="networkDrives" name="drive" type="text" class="input-text comp-input-text comp-input">
            </div>
          </div>
          <div class="">
            <h3 class="heading-white">Network Printers</h3>
            <div class="mod-div">
              <label class="input-label-italic" for="">*Please List Nearest Printers (Separated By Comma)*</label>
              <input data-id="networkPrinters" name="printer" type="text" class="input-text comp-input-text comp-input">
            </div>
          </div>
        </section>
        <div class="form-group">
          <p id="page-2-next" class="btn btn-4-purple btn-full">NEXT</p>
        </div>
      </div>

    </div>
    <!-- ========END page-wrapper=========== -->
  </div>


  <!-- END SITE WRAPPER -->
  <script src="js/app.js"></script>
</body>

</html>