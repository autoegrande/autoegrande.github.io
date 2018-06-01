<?php 

$formSignUp = 
[
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

 ?>

<!-- Mengisi ruang dibawah Navbar -->

<div class="space-navbar"></div>

<!-- Mengisi ruang dibawah Navbar -->

<div class="row" id="signup">
  <div class="col-sm-6">

    <div class="col-sm-4 col-sm-offset-4">
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

    <div class="col-sm-8 col-sm-offset-3">
      <input type="checkbox" placeholder="" id="sentMessaggeAgreement" value="">
      <label for="sentMessaggeAgreement" class="checkbox-label">I agree if there is a message sent to my email</label>
    </div>
    <div class="col-sm-8 col-sm-offset-3">
      <input type="checkbox" placeholder="" id="yearsOldAgreement" value="">
      <label for="yearsOldAgreement" class="checkbox-label">I am already 18 years old</label>
    </div>

    <div class="col-sm-6 col-sm-offset-3 text-right">
      <button type="button" class="btn btn-default submitbtn">Submit</button>
    </div>

  </div>
</div>
