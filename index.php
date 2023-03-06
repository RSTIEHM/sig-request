<!DOCTYPE html>
<html lang="en">

<?php include("includes/header.php") ?>
<?php


?>

<body>
  <div class="site-wrapper">

    <section id="form-container" class="new-invoice show invoice-form" data-type="new-invoice">
      <div class="form-wrapper-2">
        <div class="form-content-main">

          <form id="register-form" class="form new-form" method="POST">
            <div class="form-padding-wrapper">
              <div class="form-group form-group-title">
                <h2 class="form-group-title-name">Employee Service Request</h2>
              </div>

              <div class="auto-grid">
                <div>
                  BUTTONS
                </div>
                <div>
                  <div class="form-group">
                    <div class="label-wrap">
                      <label class="input-label" for="user-name">Employee </label>
                      <span class="input-label-msg">can't be empty</span>
                    </div>
                    <input value="" id="user-name" type="text" class="input-text" name="user-name" placeholder="Employee Name">
                  </div>
                  <div class="form-group">
                    <div class="label-wrap">
                      <label class="input-label" for="deptartment">Department </label>
                      <span class="input-label-msg">can't be empty</span>
                    </div>
                    <input value="" id="deptartment" type="text" class="input-text" name="deptartment" placeholder="Department Password">
                  </div>
                  <div class="form-group">
                    <div class="label-wrap">
                      <label class="input-label" for="action-date">Action Date </label>
                      <span class="input-label-msg">can't be empty</span>
                    </div>
                    <input value="" id="action-date" type="date" class="input-text" name="action-date">
                  </div>
                </div>



              </div>


              <div class="form-group">
                <button class="btn btn-4-purple btn-full add-item">Sign In</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

  </div>
</body>

</html>