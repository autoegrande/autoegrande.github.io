<?php 

$carList =
[
  [
    "name" => "Ferrari Berlenitta",
    "image" => "listferrariberlenitta",
    "link" => ""
  ],
  [
    "name" => "Ferrari FF",
    "image" => "listferrariff",
    "link" => ""
  ],
  [
    "name" => "Ferrari GTB",
    "image" => "listferrarigtb",
    "link" => ""
  ],
  [
    "name" => "Jaguar F Type",
    "image" => "listjaguarftype",
    "link" => ""
  ],
  [
    "name" => "Jaguar XE",
    "image" => "listjaguarxe",
    "link" => ""
  ],
  [
    "name" => "Jaguar XF",
    "image" => "listjaguarxf",
    "link" => ""
  ],
  [
    "name" => "Land Rover Defender",
    "image" => "listlandroverdefender",
    "link" => ""
  ],
  [
    "name" => "Land Rover Discovery",
    "image" => "listlandroverdiscovery",
    "link" => ""
  ],
  [
    "name" => "Lexus IS",
    "image" => "listlexusis",
    "link" => ""
  ],
  [
    "name" => "Land Rover Freelander",
    "image" => "listlandroverfreelander",
    "link" => ""
  ],
  [
    "name" => "Lexus LX",
    "image" => "listlexuslx",
    "link" => ""
  ],
  [
    "name" => "Lexus RX",
    "image" => "listlexusrx",
    "link" => ""
  ],
  [
    "name" => "Land Rover Rangerover",
    "image" => "listlandroverrangerover",
    "link" => ""
  ],
  [
    "name" => "Lexus IS",
    "image" => "listlexusis",
    "link" => ""
  ],
  [
    "name" => "Land Rover Freelander",
    "image" => "listlandroverfreelander",
    "link" => ""
  ],
  [
    "name" => "Lexus LX",
    "image" => "listlexuslx",
    "link" => ""
  ],
  [
    "name" => "Lexus RX",
    "image" => "listlexusrx",
    "link" => ""
  ],
  [
    "name" => "Land Rover Rangerover",
    "image" => "listlandroverrangerover",
    "link" => ""
  ]
]

 ?>

<!-- Mengisi ruang dibawah Navbar -->

<div class="space-navbar"></div>

<!-- Mengisi ruang dibawah Navbar -->

<!-- Car List -->

<section id="carList">
  <div class="row">
    <div class="col-sm-11 col-sm-offset-1">

      <!-- Item List -->

      <?php for ($num = 0; $num < count($carList); $num++) : ?>

        <?php 
          if ($num % 3 == 0) 
          {
            echo '<div class="row">';
          }
        ?>

        <div class="col-sm-3 <?php
          if($num % 3 != 0)
          {
            echo 'col-sm-offset-1';
          } ?> itemList text-center">

          <h4><?= $carList[$num]['name']; ?></h4>
          <img src="assets/images/carlist/<?= $carList[$num]['image']; ?>.jpg" alt="<?= $carList[$num]['image']; ?>">
          <div class="col-sm-6 text-left">
            <button type="button" class="btn btn-default">Detail <?= $num; ?></button>
          </div>
          <div class="col-sm-6 text-right">
            <button type="button" class="btn btn-default">Buy Now</button>
          </div>

        </div>

        <?php 
          if ($num % 3 == 2) 
          {
            echo '</div>';
          }
        ?>

      <?php endfor; ?>

      <!-- Item List -->
      
    </div>
  </div>
</section>

<!-- Car List -->
