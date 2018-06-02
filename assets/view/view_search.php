<?php

$carCheckbox =
[
  [
    "id" => "ferrari",
    "name" => "Ferrari"
  ],
  [
    "id" => "landRover",
    "name" => "Land Rover"
  ],
  [
    "id" => "lamborghini",
    "name" => "Lamborghini"
  ],
  [
    "id" => "jaguar",
    "name" => "Jaguar"
  ],
  [
    "id" => "lexus",
    "name" => "Lexus"
  ]
];

?>

<!-- Mengisi ruang dibawah Navbar -->

<div class="space-navbar"></div>

<!-- Mengisi ruang dibawah Navbar -->

<section>
  <div class="row" id="filterSearch">
    <div class="col-sm-4">

      <div class="col-sm-4 col-sm-offset-4">
        <h4 class="text-center">Filter</h4>
      </div>

      <?php for ($num = 0; $num < count($carCheckbox); $num++) : ?>

        <div class="col-sm-4 col-sm-offset-2">
          <input type="checkbox" id="<?= $carCheckbox[$num]['id'] ?>" value="">
          <label for="<?= $carCheckbox[$num]['id'] ?>" class="checkbox-label"><?= $carCheckbox[$num]['name'] ?></label>
        </div>

      <?php endfor; ?>

    </div>
    <div class="col-sm-8">
        
    </div>
  </div>
</section>