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

$carList =
[
  [
    "id" => "",
    "name" => "",
    "thumb" => "",
    "link" => ""
  ]
];

?>

<!-- Mengisi ruang dibawah Navbar -->

<div class="space-navbar"></div>

<!-- Mengisi ruang dibawah Navbar -->

<section id="searchPage">
  <div class="row">

    <!-- Filter Area -->

    <div class="col-sm-4" id="filterSearch">

      <div class="col-sm-4 col-sm-offset-4">
        <h4 class="text-center">Filter</h4>
      </div>

      <!-- Mencetak Checkbox Merek Mobil -->

      <div class="col-sm-8 col-sm-offset-2 filterTitle">
        <h5 class="text-center">Brand</h5>
      </div>

      <?php for ($num = 0; $num < count($carCheckbox); $num++) : ?>

        <div class="col-sm-4 col-sm-offset-2">
          <input type="checkbox" id="<?= $carCheckbox[$num]['id'] ?>" value="">
          <label for="<?= $carCheckbox[$num]['id'] ?>" class="checkbox-label"><?= $carCheckbox[$num]['name'] ?></label>
        </div>

      <?php endfor; ?>

      <!-- Mencetak Checkbox Merek Mobil -->

      <!-- Slider Filter Harga -->

      <div class="col-sm-8 col-sm-offset-2 filterTitle">
        <h5 class="text-center">Price</h5>
      </div>

      <div class="progress col-sm-8 col-sm-offset-2">
        <div id="rangePrice" class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <!-- Slider Filter Harga -->

      <!-- Rating -->



      <!-- Rating -->

    </div>

    <!-- Filter Area -->

    <!-- Result Area -->

    <div class="col-sm-6" id="filterResult">

      <!-- Mencetak hasil pencarian -->

      <?php for ($num = 0; $num < count($carList); $num++) : ?>

        <div class="col-sm-3 col-sm-offset-1">
          <div class="col-sm-12">
            <img src="" id="<?= $carList[$num]['id']; ?>" class="">
            <label for="<?= $carList[$num]['id']; ?>"><?= $carList[$num]['name']; ?></label>
          </div>
        </div>

      <?php endfor; ?>

      <!-- Mencetak hasil pencarian -->

    </div>

    <!-- Result Area -->

  </div>
</section>