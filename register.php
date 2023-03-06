<?php include("includes/header.php") ?>
<?php include("functions.php"); ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["first-name"];
  $lname = $_POST["last-name"];
  $username = $_POST["user-name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $password_confirm = $_POST["password-confirm"];

  $sql = "INSERT INTO `users` (first_name, last_name, username, email, password, validation_code) VALUES( :first_name, :last_name, :username, :email, :password, :validation_code)";
  $stmt = $pdo->prepare($sql);
  $user_data = [":first_name" => $fname, ":last_name" => $lname, ":username" => $username, ":email" => $email, ':password' => password_hash($password, PASSWORD_BCRYPT), ":validation_code" => 123];
  if ($stmt->execute($user_data)) {
    $_SESSION["registered"] = true;
    redirect("login.php");
  }
} else {
  $fname = '';
  $lname = '';
  $username = '';
  $email = '';
  $password = '';
  $password_confirm = '';
}
?>

<body>
  <section id="form-container" class="new-invoice show invoice-form" data-type="new-invoice">
    <div class="form-wrapper">
      <div class="form-content">
        <!-- <h6 class="error-message">All Fields Must Be Filled...</h6> -->
        <form id="register-form" class="form new-form" method="POST">
          <div class="form-padding-wrapper">
            <div class="form-group form-group-title">
              <h2 class="form-group-title-name">Register</h2>
            </div>
            <div class="auto-grid">
              <div class="form-group">
                <div class="label-wrap">
                  <label class="input-label" for="first-name">First Name </label>
                  <span class="input-label-msg">can't be empty</span>
                </div>
                <input value="<?php echo $fname; ?>" id="first-name" type="text" class="input-text" name="first-name" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <div class="label-wrap">
                  <label class="input-label" for="last-name">Last Name </label>
                  <span class="input-label-msg">can't be empty</span>
                </div>
                <input id="last-name" type="text" class="input-text" name="last-name" placeholder="Enter Last Name" value="<?php echo $lname; ?>">
              </div>
            </div>

            <div class="auto-grid">
              <div class="form-group">
                <div class="label-wrap">
                  <label class="input-label" for="user-name">Username </label>
                  <span class="input-label-msg">can't be empty</span>
                </div>
                <input value="<?php echo $username; ?>" id="user-name" type="text" class="input-text" name="user-name" placeholder="Enter User Name">
              </div>
              <div class="form-group">
                <div class="label-wrap">
                  <label class="input-label" for="email">Email </label>
                  <span class="input-label-msg">can't be empty</span>
                </div>
                <input value="<?php echo $email; ?>" id="email" type="email" class="input-text" name="email" placeholder="Enter Email">
              </div>
            </div>

            <div class="auto-grid">
              <div class="form-group">
                <div class="label-wrap">
                  <label class="input-label" for="password">Password </label>
                  <span class="input-label-msg">can't be empty</span>
                </div>
                <input value="<?php echo $password; ?>" id="password" type="password" class="input-text" name="password" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <div class="label-wrap">
                  <label class="input-label" for="password-confirm">Password Confirm </label>
                  <span class="input-label-msg">can't be empty</span>
                </div>
                <input value="<?php echo $password_confirm; ?>" id="password-confirm" type="password" class="input-text" name="password-confirm" placeholder="Confirm Password">
              </div>
            </div>

            <div class="form-group">
              <button class="btn btn-4-purple btn-full add-item">Register</button>
            </div>

          </div>

        </form>
      </div>
    </div>
  </section>
  <script src="js/app.js"></script>
</body>

</html>