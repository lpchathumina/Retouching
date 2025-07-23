<?php include('../components/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me - Miracle Retoucher</title>
  <link rel="stylesheet" href="../css/style.css"> <!-- Tailwind CSS -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-black text-white font-montserrat">

<!-- Hero Section -->
<div class="w-full h-[400px] relative">
  <img src="../assets/qaz.jpg" alt="Contact Background" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/40">
    <h1 class="text-4xl tracking-wider md:text-5xl font-semibold mb-6 mt-20">CONTACT ME</h1>
  </div>
</div>

<!-- Contact Section -->
<div class="relative -mt-20 mb-20 px-4 md:px-20 lg:px-32 z-10">
  <div class="rounded-xl shadow-lg p-6 md:p-12 grid md:grid-cols-2 gap-8 bg-black text-white">
    
    <!-- Left: Contact Info -->
    <div class="flex flex-col justify-between">
      <div>
        <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
        <p class="mb-6 text-base">
          Thank you for your interest in Miracle Retoucher. I truly appreciate your<br> time and consideration—it's always a pleasure to connect. 
          I'm here to <br>help bring your vision to life.
        </p>

        <div class="space-y-4 text-base">
          <div class="flex items-center gap-2">
            <span>📞</span><span>+94 74 045 1389</span>
          </div>
          <div class="flex items-center gap-2"> 
            <span>✉️</span><span>miracleretoucher@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="flex gap-6 mt-8 text-2xl">
        <a href="#" class="hover:scale-150 transition hover:text-[#25D366]" aria-label="WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" class="hover:scale-150 transition hover:text-[#E1306C]" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="hover:scale-150 transition hover:text-blue-700" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>
    </div>

    <!-- Right: Form -->
    <div>
      <h2 class="text-2xl font-bold mb-4">GET IN TOUCH</h2>
      <form action="../backend/contact-handler.php" method="POST" class="space-y-4">
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-1">
            <label class="block mb-1 text-base font-medium">First Name</label>
            <input type="text" name="firstName" class="w-full rounded-lg text-white bg-[#1a1a1a] border-b border-white outline-none px-2 py-2" placeholder="John" required>
          </div>
          <div class="flex-1">
            <label class="block mb-1 text-base font-medium">Last Name</label>
            <input type="text" name="lastName" class="w-full rounded-lg text-white bg-[#1a1a1a] border-b border-white outline-none px-2 py-2" placeholder="Doe" required>
          </div>
        </div>
        <div>
          <label class="block mb-1 text-base font-medium">Email</label>
          <input type="email" name="email" class="w-full rounded-lg text-white bg-[#1a1a1a] border-b border-white outline-none px-2 py-2" placeholder="example@email.com" required>
        </div>
        <div>
          <label class="block mb-1 text-base font-medium">Message</label>
          <textarea name="message" rows="3" class="w-full rounded-lg text-white bg-[#1a1a1a] border-b border-white outline-none px-2 py-2 resize-none" placeholder="Write your message.." required></textarea>
        </div>
        <div class="text-right">
          <button type="submit" class="bg-[#121212] text-white border hover:bg-white hover:text-black border-white px-4 py-3 md:px-6 md:py-3 rounded shadow transition-all duration-300 transform hover:scale-105 text-base md:text-base">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include('../components/footer.php'); ?>
</body>
</html>
