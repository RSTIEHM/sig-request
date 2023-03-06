<?php include("includes/header.php") ?>
<?php include("functions.php"); ?>
<?php


?>


<body>
  <section id="form-container" class="new-invoice show invoice-form" data-type="new-invoice">
    <div class="form-wrapper">
      <div class="form-content">
        <!-- <h6 class="error-message">All Fields Must Be Filled...</h6> -->
        <form id="register-form" class="form new-form" method="POST">
          <div class="form-padding-wrapper">
            <div class="form-group form-group-title">
              <h2 class="form-group-title-name">Log In</h2>
            </div>
            <div class="form-group">
              <div class="label-wrap">
                <label class="input-label" for="user-name">Username </label>
                <span class="input-label-msg">can't be empty</span>
              </div>
              <input value="" id="user-name" type="text" class="input-text" name="user-name" placeholder="Enter User Name">
            </div>

            <div class="form-group">
              <div class="label-wrap">
                <label class="input-label" for="password">Password </label>
                <span class="input-label-msg">can't be empty</span>
              </div>
              <input value="" id="password" type="password" class="input-text" name="password" placeholder="Enter Password">
            </div>

            <div class="form-group">
              <button class="btn btn-4-purple btn-full add-item">Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="js/app.js"></script>
</body>

</html>