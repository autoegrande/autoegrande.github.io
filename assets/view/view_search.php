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

      <!-- Mencetak Checkbox Merek Mobil -->

      <div class="col-sm-8 col-sm-offset-2">
        <h5 class="text-center">Merk</h5>
      </div>

      <?php for ($num = 0; $num < count($carCheckbox); $num++) : ?>

        <div class="col-sm-4 col-sm-offset-2">
          <input type="checkbox" id="<?= $carCheckbox[$num]['id'] ?>" value="">
          <label for="<?= $carCheckbox[$num]['id'] ?>" class="checkbox-label"><?= $carCheckbox[$num]['name'] ?></label>
        </div>

      <?php endfor; ?>

      <!-- Mencetak Checkbox Merek Mobil -->

      <!-- Slider Filter Harga -->

      <div class="col-sm-8 col-sm-offset-2">
        <h5 class="text-center">Price</h5>
      </div>

      <div class="progress col-sm-8 col-sm-offset-2">
        <div id="rangePrice" class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <!-- Slider Filter Harga -->

      <!-- Rating -->



      <!-- Rating -->

    </div>
    <div class="col-sm-8">
        
    </div>
  </div>
</section>