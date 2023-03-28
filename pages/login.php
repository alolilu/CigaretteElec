<div id="PageRegister">
  <form class="row g-3" method="POST" id="formRegister" style="margin-top: 100px;">
  <?php include "functions/login.php" ?>
    <div class="col-12 formCol">
      <h1>Log in</h1>
      <p style="margin-top: 10px;">Connect to your account</p>
    </div>
    <div class="col-12 formCol">
      <input placeholder="Email" type="email" name="email" id="inputEmail4">
    </div>
    <div class="col-12 formCol">
      <input placeholder="Password" type="password" name="password" id="inputEmail4">
    </div>
    <div class="col-12 formCol">
      <button style="margin: 40px;" type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </form>
</div>