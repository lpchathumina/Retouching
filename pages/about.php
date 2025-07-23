<?php include('../components/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Me - Miracle Retoucher</title>
  <link href="../css/style.css" rel="stylesheet"> <!-- Tailwind CSS -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-black text-white font-montserrat">

<!-- Hero Section -->
<div class="w-full h-[400px] relative">
  <img src="../assets/11ww.jpg" alt="About Us Background" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/40">
    <h1 class="text-4xl md:text-5xl tracking-wider font-semibold mb-6 mt-20">ABOUT ME</h1>
  </div>
</div>

<!-- Main Content -->
<div class="mt-10 px-4 max-w-6xl mx-auto">
  <div class="flex flex-col md:flex-row items-center gap-8">
    <div class="w-full md:w-1/2 flex justify-center">
      <img src="../assets/malli2.jpg" alt="Miracle Retoucher" class="w-[350px] h-[350px] md:w-[600px] md:h-[550px] rounded-full shadow-lg object-cover">
    </div>
    <div class="w-full md:w-1/2 text-center p-4">
      <h2 class="text-2xl md:text-3xl mb-2">Hey I'm Thaveesha Kaushith</h2>
      <h2 class="text-2xl md:text-3xl font-light leading-snug mb-4">
        I'm a <br>
        <span class="block font-semibold">| RETOUCHER |</span>
        <span class="block font-semibold">| DESIGNER |</span>
      </h2>
      <div class="text-base mb-6">
        <p class="mb-2">I am a passionate and detail-oriented professional photo retoucher dedicated to enhancing the natural beauty and emotional impact of every image. With a refined eye for aesthetics and a commitment to preserving authenticity, I specialize in high-end portrait retouching, skin correction, color grading, and beauty edits.</p>
        <p class="italic font-semibold">"Let your photos speak their best version — I'm here to bring out the brilliance within every frame"</p>
      </div>

      <!-- Contact Section -->
      <h4 class="text-lg md:text-xl font-semibold mb-3">Contact Us</h4>
      <div class="flex justify-center space-x-4">
        <a href="https://wa.me/+94740451389" class="hover:scale-150 hover:text-[#25D366] transition" target="_blank" aria-label="WhatsApp">
          <i class="fab fa-whatsapp text-2xl"></i>
        </a>
        <a href="https://www.instagram.com/thaveesha_kaushith_" class="hover:scale-150 hover:text-[#E1306C] transition" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram text-2xl"></i>
        </a>
        <a href="https://www.facebook.com/share/1GHuQtdjzT/" class="hover:scale-150 hover:text-blue-700 transition" target="_blank" aria-label="Facebook">
          <i class="fab fa-facebook text-2xl"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Retoucher Section -->
  <div class="mt-20 mb-20 px-4 md:px-20">
    <div class="flex flex-col md:flex-row-reverse items-center gap-10">
      <div class="w-[370px] h-[500px] md:w-[500px] md:h-[700px]">
        <img src="../assets/44qq.jpg" alt="Professional Retoucher" class="w-full h-full object-cover rounded-lg">
      </div>
      <div class="leading-relaxed text-justify mt-6 md:mt-0">
        <div class="bg-[#3a3a3a] text-white px-6 py-2 rounded-full w-fit text-base font-semibold">MISSION</div>
        <p class="mt-4">My mission is to transform photographs into powerful visual stories — images that not only look flawless but also feel real...</p>
        <p class="mt-4">I love retouching and pay attention to detail. Every image I work on is carefully analyzed...</p>
        <p class="mt-4">I offer a full range of photo retouching services—no matter what you envision, I can bring it to life...</p>
      </div>
    </div>
  </div>
</div>

<?php include('../components/getus.php'); ?>
<?php include('../components/footer.php'); ?>
</body>
</html>
