<?php include('../components/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Photo Retouching - Miracle Retoucher</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://unpkg.com/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.css" />
  <style>
    .fade-in-up {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body class="bg-black text-white font-montserrat">

<!-- Hero Section -->
<div class="w-full h-[400px] relative">
  <img src="../assets/land1.jpg" alt="Retouching Banner" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/40">
    <h1 class="text-3xl md:text-4xl lg:text-5xl tracking-wider font-semibold mb-6 mt-20">PHOTO RETOUCHING</h1>
  </div>
</div>

<!-- Intro Text -->
<section class="py-16 px-4 md:px-20 max-w-[1300px] mx-auto">
  <div class="fade-in-up">
    <p class="text-base text-center max-w-6xl mx-auto mb-16">
      Our Photo Retouching Service enhances your images with key adjustments. We remove blemishes, smooth skin,
      and correct colors to give your photos a polished look. This service is ideal for portraits, product images,
      and any visual content that needs a fresh touch.
    </p>
  </div>

  <!-- RETOUCHING SECTIONS -->
  <?php
    $sections = [
      [
        "title" => "WEDDING PHOTO RETOUCHING",
        "text" => "Every wedding photograph holds a unique moment — a smile exchanged, a tear shed, a glance captured in time. Through precise retouching...",
        "before" => "../assets/before(weddings).jpg",
        "after" => "../assets/after(weddings).jpg",
        "reverse" => false
      ],
      [
        "title" => "PRE WEDDING PHOTO RETOUCHING",
        "text" => "Pre-wedding moments are filled with anticipation, romance, and quiet elegance — all captured through the lens of thoughtful photography...",
        "before" => "../assets/prebe.jpg",
        "after" => "../assets/preaf.jpg",
        "reverse" => true
      ],
      [
        "title" => "BIRTHDAY PHOTO RETOUCHING",
        "text" => "Birthday portraits capture joy, laughter, and personality in their purest form. Through meticulous retouching, each image is enhanced...",
        "before" => "../assets/bibe.jpg",
        "after" => "../assets/biaf.jpg",
        "reverse" => false
      ],
      [
        "title" => "BRIDAL & FASHION PHOTO RETOUCHING",
        "text" => "Bridal and fashion imagery demands a balance of sophistication and authenticity. Through detailed retouching...",
        "before" => "../assets/bribe.jpg",
        "after" => "../assets/briaf.jpg",
        "reverse" => true
      ],
      [
        "title" => "COMMERCIAL PHOTO RETOUCHING",
        "text" => "Commercial retouching focuses on precision and visual impact. Each image is refined to highlight key details...",
        "before" => "../assets/cobe.jpg",
        "after" => "../assets/coaf.jpg",
        "reverse" => false
      ],
    ];

    foreach ($sections as $section) {
      $imgBlock = '
        <div class="flex justify-center fade-in-up">
          <div class="image-compare w-full max-w-[420px] h-[600px]" data-viewer>
            <img slot="first" src="' . $section["before"] . '" alt="Before" />
            <img slot="second" src="' . $section["after"] . '" alt="After" />
          </div>
        </div>
      ';
      $textBlock = '
        <div class="fade-in-up">
          <h2 class="text-3xl md:text-4xl font-aboreto font-semibold mb-4">' . $section["title"] . '</h2>
          <p class="mt-10 text-base leading-relaxed whitespace-pre-line">' . $section["text"] . '</p>
        </div>
      ';

      echo '
      <div class="grid md:grid-cols-2 gap-10 items-center mb-24">
        ' . ($section["reverse"] ? $textBlock . $imgBlock : $imgBlock . $textBlock) . '
      </div>';
    }
  ?>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".image-compare").forEach(el => {
      new ImageCompare(el, {
        controlColor: "#ffffff",
        smoothing: true
      }).mount();
    });
  });
</script>

<?php include('../components/getus.php'); ?>
<?php include('../components/footer.php'); ?>
</body>
</html>
