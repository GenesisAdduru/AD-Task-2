<?php
require BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>

<?php
$apparels = [
  [
    "name" => "DOSNOVENTA® TEN LS TEE",
    "price" => "$80.00",
    "image" => "1.1.webp",
    "specs" => "250 GSM HEAVYWEIGHT COMBED COTTON JERSEY. 300 GSM HEAVYWEIGHT 1X1 RIB. 100% COTTON CANADIAN MILLED FABRIC. MADE IN CANADA."
  ],
  [
    "name" => "DOSNOVENTA® BIG X LS TEE",
    "price" => "$80.00",
    "image" => "1.2.webp",
    "specs" => "250 GSM HEAVYWEIGHT COMBED COTTON JERSEY. 300 GSM HEAVYWEIGHT 1X1 RIB. 100% COTTON CANADIAN MILLED FABRIC. MADE IN CANADA"
  ],
  [
    "name" => "DOSNOVENTA® VISION SS TEE",
    "price" => "$60.00",
    "image" => "1.3.webp",
    "specs" => "200 GSM MIDWEIGHT COMBED COTTON JERSEY. 200 GSM MIDWEIGHT 1X1 RIB. 100% COTTON CANADIAN MILLED FABRIC. MADE IN CANADA."
  ],
  [
    "name" => "DOSNOVENTA® TEN SS TEE",
    "price" => "$60.00",
    "image" => "1.4.webp",
    "specs" => "200 GSM MIDWEIGHT COMBED COTTON JERSEY. 200 GSM MIDWEIGHT 1X1 RIB 100%. COTTON CANADIAN MILLED FABRIC. MADE IN CANADA."
  ],
  [
    "name" => "DSNVNPN® 202 ™ VEST",
    "price" => "$185.00",
    "image" => "1.5.webp",
    "specs" => "DESIGNED TO EXCEED THE URBAN RIDER’S EVERY NEED, THE DSNVPN®202 DAY AND NIGHT VEST HAS TWO FRONT POCKETS, AMPLE STORAGE SPACE IN ITS BACK PANEL, AND REFINED 3M REFLECTIVE DETAILS. ADDITIONALLY, THIS VERSATILE VEST TRANSFORMS INTO A BELT POUCH TO BE WORN AROUND THE WAIST OR ACROSS THE CHEST–ADAPTABLE LAYERING TO NAVIGATE METROPOLITAN ENVIRONMENTS."
  ],
  [
    "name" => "DSNVNPN® 205 ™ TECH JOGGER PANTS",
    "price" => "$205.00",
    "image" => "1.6.webp",
    "specs" => "SLEEK, ZIPPERED BACK POCKETS AND THE HYPER-STRETCH MESH BELT LOOPS MAKE MOVEMENT AND STORAGE SIMPLE IN THE DSNVPN®204 TECH JOGGER PANTS. NINE POINT NINE® AND DOSNOVENTA®’S SHARED ATTENTION TO AESTHETICS PAIRED WITH NINE POINT NINE®’S TECHNICAL TOUCHES RESULT IN GEAR THAT WORKS WELL ON AND OFF THE BIKE."
  ],
  [
    "name" => "DOSNOVENTA® SIERRA CROSSES SNAPBACK",
    "price" => "$25.00",
    "image" => "1.7.webp",
    "specs" => "NAVY BLUE SIX PANEL IN COLLABORATION WITH SIERRA CROSSES. 293 WHITE EMBROIDERY AT THE FRONT. SNAPBACK CLOSURE. MADE OF COTTON TWILL WITH WOVEN EYELETS. ONE SIZE FITS ALL."
  ],
  [
    "name" => "DOSNOVENTA® BROTHERHOOD",
    "price" => "$15.00",
    "image" => "1.8.webp",
    "specs" => "“BROTHERHOOD: A YEAR INSIDE DOSNOVENTA” BY THE SPANISH PHOTOGRAPHER SERGIO DE ARROLA, UNDER THE PRISM OF DOSNOVENTA AND PORTRAYING THE FLOURISHING “FIXED GEAR” SCENE."
  ]
];

function displayApparel($items) {
  foreach ($items as $item) {
    echo '<div class="flip-card">';
    echo '  <div class="flip-card-inner">';
    echo '    <div class="flip-card-front">';
    echo '      <img src="' . htmlspecialchars($item['image']) . '" alt="' . htmlspecialchars($item['name']) . '">';
    echo '      <h3>' . htmlspecialchars($item['name']) . '</h3>';
    echo '      <p>' . htmlspecialchars($item['price']) . '</p>';
    echo '    </div>';
    echo '    <div class="flip-card-back">';
    echo '      <h4>Details</h4>';
    echo '      <p>' . nl2br(htmlspecialchars($item['specs'])) . '</p>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
  }
}
?>
<main>
    <div class="bike-grid">
    <?php
      displayApparel($apparels);
    ?>
    </div>
  </main>
</body>
</html>