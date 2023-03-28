<div id="PageRegister">
  <form class="row g-3" method="POST" id="formRegister">
    <?php include "functions/register.php" ?>
    <div class="col-12 formCol">
      <h1>Register</h1>
      <p style="margin-top: 10px;">Create your account. it's free and only takes a minute.</p>
    </div>
    <div class="col-md-12 formCol" style="flex-direction: row;">
      <input style="width: 30%; margin-right: 1%;" placeholder="First Name" type="name" name="FirstName" id="inputFname4">
      <input style="width: 30%; margin-left: 1%;" placeholder="Last Name" type="name" name="SecondName" id="inputSname4">
    </div>
    <div class="col-12 formCol">
      <input placeholder="Email" type="email" name="email" id="inputEmail4">
    </div>
    <div class="col-12 formCol">
      <input type="password" name="password" placeholder="Password" id="inputPassword4">
    </div>
    <div class="col-12 formCol" style="flex-direction: row;">
      <input style="width: 5%; margin-top:2.5px" type="checkbox"><p style="margin-right: 3px;">I accept the <p style="margin-right: 5px; color:black;"> Terms of Use </p><p> &</p> <p style="margin-left: 5px; color:black;">Privacy Policy</p></p>
    </div>
    <div class="col-12 formCol">
      <button type="submit" name="register" class="btn btn-primary">Sign in</button>
    </div>
  </form>
</div>