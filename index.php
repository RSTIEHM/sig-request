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
          <!-- <section class="left">


          </section> -->


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
      <!-- ========END page-2=========== -->
      <div class="page page-3" data-page="3">
        <h3 class="heading-white-lg">Email Accounts</h3>
        <div class="flex-stretch">
          <section class="flex-auto">
            <div class="flex-check">
              <input data-id="SIGEmail" name="SIGEmail" type="checkbox" class="emp-email computer-check comp-input">
              <h3 class="heading-white">SIG</h3>
            </div>
            <div class="flex-check">
              <input data-id="AAEmail" name="AAEmail" type="checkbox" class="emp-email computer-check comp-input">
              <h3 class="heading-white">AA</h3>
            </div>
            <div class="flex-check">
              <input data-id="SISEmail" name="SISEmail" type="checkbox" class="emp-email computer-check comp-input">
              <h3 class="heading-white">SIS</h3>
            </div>
            <div class="flex-check">
              <input data-id="SFGEmail" name="SFGEmail" type="checkbox" class="emp-email computer-check comp-input">
              <h3 class="heading-white">SFG</h3>
            </div>
            <div>
              <div class="flex-check">
                <input data-id="AdditionalEmails" name="AdditionalEmails" type="checkbox" class="emp-email computer-check comp-input">
                <h3 class="heading-white">Additonal Mailboxes</h3>
              </div>
              <input data-id="userName" value="" id="user-name" type="text" class="input-text page-1-empInfo" name="user-name" placeholder="Separate With A Comma">
            </div>
        </div>

        <div>
          <h3 class="heading-white-lg">Software Accounts</h3>
          <div class="">
            <section id="flex-auto-wrap">
              <div class="flex-check">
                <input data-id="Act!" name="Act!" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Act!</h3>
              </div>
              <div class="flex-check">
                <input data-id="AssetBook" name="AssetBook" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Asset Book</h3>
              </div>
              <div class="flex-check">
                <input data-id="BloomGrowth" name="BloomGrowth" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Bloom Growth</h3>
              </div>
              <div class="flex-check">
                <input data-id="BombBomb" name="BombBomb" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">BombBomb</h3>
              </div>
              <div class="flex-check">
                <input data-id="CellTrust" name="CellTrust" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Cell Trust</h3>
              </div>
              <div class="flex-check">
                <input data-id="ClickUp" name="ClickUp" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">ClickUp</h3>
              </div>
              <div class="flex-check">
                <input data-id="DesignSoftware" name="DesignSoftware" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Design Software</h3>
              </div>
              <div class="flex-check">
                <input data-id="Dropbox" name="Dropbox" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Dropbox</h3>
              </div>
              <div class="flex-check">
                <input data-id="Fidelity" name="Fidelity" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Fidelity</h3>
              </div>
              <div class="flex-check">
                <input data-id="FileMaker" name="FileMaker" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">FileMaker</h3>
              </div>
              <div class="flex-check">
                <input data-id="GoogleDrive" name="GoogleDrive" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Google Drive</h3>
              </div>
              <div class="flex-check">
                <input data-id="HubSpot" name="HubSpot" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">HubSpot</h3>
              </div>
              <div class="flex-check">
                <input data-id="OneDrive" name="OneDrive" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">OneDrive</h3>
              </div>
              <div class="flex-check">
                <input data-id="OpenPath" name="OpenPath" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">OpenPath</h3>
              </div>
              <div class="flex-check">
                <input data-id="ProSeries" name="ProSeries" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">ProSeries</h3>
              </div>
              <div class="flex-check">
                <input data-id="QuickBooks" name="QuickBooks" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">QuickBooks</h3>
              </div>
              <div class="flex-check">
                <input data-id="RedBlack" name="RedBlack" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">RedBlack</h3>
              </div>
              <div class="flex-check">
                <input data-id="RedTail" name="RedTail" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">RedTail</h3>
              </div>
              <div class="flex-check">
                <input data-id="RiskAlyze" name="RiskAlyze" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">RiskAlyze</h3>
              </div>
              <div class="flex-check">
                <input data-id="SchwabAdvisor" name="SchwabAdvisor" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Schwab–Advisor</h3>
              </div>
              <div class="flex-check">
                <input data-id="SureLC" name="SureLC" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">SureLC</h3>
              </div>
              <div class="flex-check">
                <input data-id="TDThinkPipes" name="TDThinkPipes" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">TD–ThinkPipes</h3>
              </div>
              <div class="flex-check">
                <input data-id="TDVeo" name="TDVeo" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">TD–Veo</h3>
              </div>
              <div class="flex-check">
                <input data-id="WordPress" name="WordPress" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">WordPress</h3>
              </div>
              <div class="flex-check">
                <input data-id="Zoom" name="Zoom" type="checkbox" class="emp-software computer-check comp-input">
                <h3 class="heading-white">Zoom</h3>
              </div>
          </div>
        </div>
        </section>
      </div>
    </div>
    <!-- ========END page-wrapper=========== -->
  </div>


  <!-- END SITE WRAPPER -->
  <script src="js/app.js"></script>
</body>

</html>