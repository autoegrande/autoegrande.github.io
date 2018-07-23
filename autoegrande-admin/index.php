<!-- Footer -->
<?php include_once "./assets/view/view_navbar.php"; ?>
<!-- Footer -->

<?php 

$formSignIn =
[
  [
    "id" => "loginusername",
    "name" => "Username :",
    "type" => "text"
  ],
  [
    "id" => "loginpassword",
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


    <!-- Sign In Area -->

    <form action="login.php" method="POST" id="formSignIn">
      <div class="container" id="signIn">

        <div class="col-sm-4 col-sm-offset-4 loginTitle">
          <h3 class="text-center">SIGN IN</h3>
        </div>

        <!-- Menampilkan Form Sign In -->

        <?php for ($num = 0; $num < count($formSignIn); $num++) : ?>

          <div class="col-sm-6 col-sm-offset-3">
            <label for="<?= $formSignIn[$num]['id']; ?>"><?= $formSignIn[$num]['name']; ?></label>
            <input type="<?= $formSignIn[$num]['type']; ?>" class="form-control" placeholder="" id="<?= $formSignIn[$num]['id']; ?>" name="<?= $formSignIn[$num]['id']; ?>" value="" required>
          </div>

        <?php endfor; ?>

        <!-- Menampilkan Form Sign In -->

        <div class="col-sm-6 col-sm-offset-3 text-center">
          <button name="loginsubmit" type="submit" value="signin" class="btn btn-default submitbtn">Login</button>
        </div>

      </div>
    </form>

    <!-- Sign In Area -->

  </div>
</section>


<!-- Footer -->
<?php include_once "./assets/view/view_footer.php"; ?>
<!-- Footer -->

  <!-- cek pesan notifikasi -->
  <?php 


  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>

