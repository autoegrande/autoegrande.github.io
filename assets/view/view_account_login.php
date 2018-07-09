<?php 

$formSignUp = 
[  
  [
    "id" => "fullname",
    "name" => "Full Name :",
    "type" => "text"
  ],
  [
    "id" => "address",
    "name" => "Address :",
    "type" => "text"
  ],
  [
    "id" => "phone",
    "name" => "Phone :",
    "type" => "phone"
  ],
  [
    "id" => "e-mail",
    "name" => "E-mail :",
    "type" => "email"
  ],
  [
    "id" => "username",
    "name" => "Username :",
    "type" => "text"
  ],
  [
    "id" => "password",
    "name" => "Password :",
    "type" => "password"
  ],
  [
    "id" => "confirmpassword",
    "name" => "Confirm Password :",
    "type" => "password"
  ]
];

$formSignIn =
[
  [
    "id" => "username",
    "name" => "Username :",
    "type" => "text"
  ],
  [
    "id" => "password",
    "name" => "Password :",
    "type" => "password"
  ]
]

 ?>

<!-- Mengisi ruang dibawah Navbar -->

<div class="space-navbar"></div>

<!-- Mengisi ruang dibawah Navbar -->

<section id="loginPage">
  <div class="row">

    <!-- Sign Up Area -->
    <form action="" method="POST" id="formSignUp">
      <div class="col-sm-6" id="signUp">

        <div class="col-sm-4 col-sm-offset-4 loginTitle">
          <h3 class="text-center">SIGN UP</h3>
        </div>

        <!-- Menampilkan Form Sign Up -->

        <?php for ($num = 0; $num < count($formSignUp); $num++) : ?>

          <div class="col-sm-6 col-sm-offset-3">
            <label for="<?= $formSignUp[$num]['id']; ?>"><?= $formSignUp[$num]['name']; ?></label>
            <input type="<?= $formSignUp[$num]['type']; ?>" class="form-control" placeholder="" id="<?= $formSignUp[$num]['id']; ?>" value="">
          </div>

        <?php endfor; ?>

        <!-- Menampilkan Form Sign Up -->

        <div class="col-sm-7 col-sm-offset-3">
          <input type="checkbox" placeholder="" id="sentMessaggeAgreement" value="">
          <label for="sentMessaggeAgreement" class="checkbox-label">I agree if there is a message sent to my email</label>
        </div>
        <div class="col-sm-7 col-sm-offset-3">
          <input type="checkbox" placeholder="" id="yearsOldAgreement" value="">
          <label for="yearsOldAgreement" class="checkbox-label">I am already 18 years old</label>
        </div>

        <div class="col-sm-6 col-sm-offset-3 text-center">
          <button name="signupsubmit" type="submit" class="btn btn-default submitbtn">Submit</button>
        </div>

      </div>
    </form>

    <!-- Sign Up Area -->

    <!-- Sign In Area -->

    <form action="" method="POST" id="formSignIn">
      <div class="col-sm-6" id="signIn">

        <div class="col-sm-4 col-sm-offset-4 loginTitle">
          <h3 class="text-center">SIGN IN</h3>
        </div>

        <!-- Menampilkan Form Sign In -->

        <?php for ($num = 0; $num < count($formSignIn); $num++) : ?>

          <div class="col-sm-6 col-sm-offset-3">
            <label for="<?= $formSignIn[$num]['id']; ?>"><?= $formSignIn[$num]['name']; ?></label>
            <input type="<?= $formSignIn[$num]['type']; ?>" class="form-control" placeholder="" id="<?= $formSignIn[$num]['id']; ?>" value="">
          </div>

        <?php endfor; ?>

        <!-- Menampilkan Form Sign In -->

        <div class="col-sm-6 col-sm-offset-3 text-center">
          <button name="signinsubmit" type="submit" class="btn btn-default submitbtn">Login</button>
        </div>

      </div>
    </form>

    <!-- Sign In Area -->

  </div>
</section>
