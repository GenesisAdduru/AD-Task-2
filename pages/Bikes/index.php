<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>
<?php
$bikes = [
  [
    "name" => "DOSNOVENTA®05 TYO / THE UNSEEN PATH ™",
    "price" => "$6,160.00",
    "image" => "./assets/img/1.webp",
    "specs" => "A LIMITED EDITION OF THE DOSNOVENTA® FULL-CARBON TOKYO FRAME, HAS BEEN CRAFTED USING A UNIQUE PROCESS CALLED SPUTTERING, WHICH ACHIEVES A CHROME-LIKE FINISH THROUGH A DIFFERENT TECHNIQUE."
  ],
  [
    "name" => "DOSNOVENTA®03 DET / JET BLACK BIKE",
    "price" => "$2,990.00",
    "image" => "./assets/img/2.webp",
    "specs" => "THE MOST AGGRESSIVE SHAPE OF ALL DOSNOVENTA® FRAMES. THANKS TO ITS PURSUIT GEOMETRY, IT WILL TAKE YOU TO THE NEXT LEVEL. COMPETITIVE, FAST, LIGHT, STIFF, REACTIVE AND VERY UNIQUE. SINCE 2012, THE DETROIT BIKE HAS BEEN THE CHOICE OF MANY PRO RIDERS AROUND THE WORLD."
  ],
  [
    "name" => "DOSNOVENTA®01 BCN / JET BLACK BIKE",
    "price" => "$3,350.00",
    "image" => "./assets/img/3.webp",
    "specs" => "THE BARCELONA, THE CLASSIC STEEL FRAME SET FROM DOSNOVENTA. HIGH-QUALITY, SMOOTH, LONG-LASTING AND VERY ICONIC"
  ],
  [
    "name" => "DOSNOVENTA®02 LA / SIERRA CROSSES BIKE",
    "price" => "$3,890.00",
    "image" => "./assets/img/4.webp",
    "specs" => "LIMITED EDITION LOS ANGELES BIKE IN COLLABORATION WITH SIERRA CROSSES. MATTE SIERRA CROSSES HOUSE KLEIN BLUE ON FRAME AND FORK, WITH WHITE DECALS."
  ],
  [
    "name" => "DOSNOVENTA®02 LA / TALKING TERPS BIKE",
    "price" => "$2,890.00",
    "image" => "./assets/img/5.webp",
    "specs" => "LIMITED EDITION FIXED GEAR BICYCLE IN SOFT LAVENDER WITH PLAYFUL, INTRICATE ILLUSTRATED LINEWORK THAT NODS TO THE HISTORY OF CYCLING AS WELL AS THE MIND-EXPANDING CAPABILITIES OF PSYCHEDELICS."
  ],
  [
    "name" => "DOSNOVENTA®03 DET / NINEpointNINE",
    "price" => "$4,500.00",
    "image" => "./assets/img/6.webp",
    "specs" => "DOSNOVENTA®'S MOST AGGRESSIVE GEOMETRY, THE DSNVNPN®201 DETROIT FRAME, IS THE FINAL PIECE IN THE DOSNOVENTA® X NINE POINT NINE® COLLABORATION. THIS SWIFT, REACTIVE FRAME’S GEOMETRY AND THE SUBTLE 3M REFLECTIVE TOUCHES MEAN THE URBAN RIDER’S ALWAYS READY TO TAKE THE STREETS."
  ],
  [
    "name" => "DOSNOVENTA®03 DET / HI-VIS",
    "price" => "$2.990.00",
    "image" => "./assets/img/7.jpg",
    "specs" => "THE DETROIT, THE MOST AGGRESSIVE SHAPE OF DOSNOVENTA. COMPETITIVE, FAST, LIGHT, STIFF, REACTIVE AND VERY UNIQUE"
  ],
  [
    "name" => "DOSNOVENTA®05 TYO / JET BLACK BIKE",
    "price" => "$4,650.00 ",
    "image" => "./assets/img/8.webp",
    "specs" => "THE TOKYO, DOSNOVENTA HIGH-END FULL CARBON FRAME SET. SUPERLIGHT, EXCEPTIONALLY STIFF AND HIGH-PERFORMANCE"
  ],
];

function displayBikes($bikes) {
  foreach ($bikes as $bike) {
    echo '<div class="flip-card">';
    echo '  <div class="flip-card-inner">';
    echo '    <div class="flip-card-front">';
    echo '      <img src="' . htmlspecialchars($bike['image']) . '" alt="' . htmlspecialchars($bike['name']) . '">';
    echo '      <h3>' . htmlspecialchars($bike['name']) . '</h3>';
    echo '      <p class="price">' . htmlspecialchars($bike['price']) . '</p>';
    echo '    </div>';
    echo '    <div class="flip-card-back">';
    echo '      <h4>Specifications</h4>';
    echo '      <p class="specs">' . nl2br(htmlspecialchars($bike['specs'])) . '</p>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
  }
}
  ?>
<main>
    <div class="bike-grid">
    <?php
      displayBikes($bikes);
    ?>
    </div>
  </main>
</body>
</html>