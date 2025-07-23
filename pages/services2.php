<?php include('../components/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thanks Card - Miracle Retoucher</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .fade-in-up {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s ease forwards;
    }
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .fade-in-delay-1 { animation-delay: 0.3s; }
    .fade-in-delay-2 { animation-delay: 0.4s; }
  </style>
</head>
<body class="bg-black text-white font-montserrat">

<!-- Hero Section -->
<div class="w-full h-[400px] relative">
  <img src="../assets/111fb.jpg" alt="Hero Background" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/40">
    <h1 class="text-3xl md:text-5xl tracking-wider font-semibold mb-6 mt-20">THANKS CARD</h1>
  </div>
</div>

<!-- Content Section -->
<section class="py-10 px-4 md:px-20 max-w-7xl mx-auto w-full">

  <!-- Intro Text -->
  <div class="fade-in-up fade-in-delay-1">
    <p class="text-base text-center mb-16 max-w-6xl mx-auto">
      Our Photo Retouching Service enhances your images with key adjustments. We remove blemishes, smooth skin,
      and correct colors to give your photos a polished look. This service is ideal for portraits, product images,
      and any visual content that needs a fresh touch.
    </p>
  </div>

  <!-- Block 1: Text Left, Image Right -->
  <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
    <div class="text-left fade-in-up fade-in-delay-1">
      <h2 class="text-3xl md:text-4xl font-aboreto font-semibold mb-4">SINGLE PHOTO THANKS CARD</h2>
      <p class="text-base leading-relaxed max-w-lg mx-auto md:mx-0">
        We enhance your special day’s photos with meticulous care and professional editing techniques. From correcting color tones and smoothing skin to 
        removing unwanted distractions and enhancing lighting, our retouching ensures every image looks polished and elegant. Whether it's a candid smile or a 
        posed portrait, we highlight natural beauty while maintaining authenticity. Each photo receives individual attention to detail, preserving cherished moments 
        in their best light. Perfect for couples seeking high-quality edits for a select few images, this service is ideal when you want to elevate standout memories 
        from your wedding day into timeless visual keepsakes.
      </p>
    </div>
    <div class="flex justify-center fade-in-up fade-in-delay-2">
      <img src="../assets/tsi.jpg" alt="Single Thanks Card" class="w-auto h-auto max-w-full max-h-[500px] rounded shadow">
    </div>
  </div>

  <!-- Block 2: Image Left, Text Right -->
  <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
    <div class="flex justify-center fade-in-up fade-in-delay-1">
      <img src="../assets/tmu.jpg" alt="Multiple Thanks Card" class="w-auto h-auto max-w-full max-h-[500px] rounded shadow">
    </div>
    <div class="text-left fade-in-up fade-in-delay-2">
      <h2 class="text-3xl md:text-4xl font-aboreto font-semibold mb-4">MULTIPLE PHOTO THANKS CARD</h2>
      <p class="text-base text-left mt-10 leading-relaxed max-w-lg mx-auto md:mx-0">
        Our multiple photo retouching service is tailored for clients who need consistent, high-quality edits across an entire collection. 
        Whether it’s a full wedding album, engagement session, or family event, we apply advanced enhancements to ensure every photo reflects 
        clarity, vibrance, and cohesion. Skin tones are evened, colors are brought to life, and lighting is balanced without compromising the natural 
        look of the images. We work to maintain the essence of the moment while enhancing each frame to professional standards. Let your entire gallery 
        shine with elegance, emotion, and visual harmony—perfect for sharing, printing, or preserving for generations.
      </p>
    </div>
  </div>

</section>

<?php include('../components/getus.php'); ?>
<?php include('../components/footer.php'); ?>
</body>
</html>
