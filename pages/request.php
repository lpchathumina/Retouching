<?php include('../components/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Request a Quote - Miracle Retoucher</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-black text-white font-montserrat">

<!-- Hero Section -->
<div class="w-full h-[400px] md:h-[400px] relative">
  <img src="../assets/z2.jpg" alt="Banner" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/40">
    <h1 class="text-3xl md:text-4xl lg:text-5xl tracking-wider font-semibold mb-6 mt-20">REQUEST A QUOTE</h1>
  </div>
</div>

<!-- Form Section -->
<div class="relative md:-mt-24 mb-10 md:mb-20 px-4 sm:px-6 md:px-20 lg:px-40 z-10">
  <div class="bg-black rounded-xl shadow-lg p-4 md:p-8 lg:p-12">
    <p class="text-center mb-6 md:mb-10 text-base">
      With a commitment to professionalism and precision, I offer high-quality photo retouching services tailored to your needs.
      Whether you're looking for detailed portrait enhancements, background edits, or creative digital transformations,
      I deliver pixel-perfect results. Let's work together to bring your vision to life—reach out today for a custom quote.
    </p>

    <form method="POST" action="../backend/request-handler.php" class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 text-base" id="quoteForm">
      <!-- Row 1 -->
      <div>
        <label class="block mb-1 font-medium">Photographer Name</label>
        <input type="text" name="photographerName" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" required>
      </div>
      <div>
        <label class="block mb-1 font-medium">Customer Name</label>
        <input type="text" name="customerName" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none">
      </div>

      <!-- Row 2 -->
      <div>
        <label class="block mb-1 font-medium">Gave Date</label>
        <input type="date" name="gaveDate" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" required>
      </div>
      <div>
        <label class="block mb-1 font-medium">Last Date</label>
        <input type="date" name="lastDate" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" required>
      </div>

      <!-- Row 3 -->
      <div>
        <label class="block mb-1 font-medium">Email</label>
        <input type="email" name="email" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" required>
      </div>
      <div>
        <label class="block mb-1 font-medium">Mobile Number</label>
        <input type="tel" name="mobile" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" pattern="[0-9]{10,15}" required>
      </div>

      <!-- Row 4 -->
      <div>
        <label class="block mb-1 font-medium">How Many Images</label>
        <input type="number" name="imagesCount" min="0" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" required>
      </div>
      <div>
        <label class="block mb-1 font-medium">Category</label>
        <select name="category" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-3 outline-none" required>
          <option value="" disabled selected>Select Category</option>
          <option value="retouching">Retouching</option>
          <option value="thankcard">Thank Card</option>
          <option value="photography">Photography</option>
        </select>
      </div>

      <!-- Message -->
      <div class="md:col-span-2 relative">
        <label class="block mb-1 font-medium">Message</label>
        <textarea name="message" rows="4" placeholder="Write your message and click the attach link icon to add a Google Drive link if needed." class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-2 py-2 pr-12 outline-none resize-none" required></textarea>
        
        <!-- Toggle Link Input -->
        <div class="absolute bottom-2 right-2 text-white">
          <button type="button" onclick="toggleLinkInput()" title="Add Drive Link" class="p-1">
            <i class="fas fa-link"></i>
          </button>
        </div>
        <div id="linkInput" class="hidden mt-3">
          <input type="url" name="driveLink" placeholder="Paste Drive Link" class="w-full rounded-lg bg-[#1a1a1a] border-b border-white px-3 py-2 text-base">
        </div>
      </div>

      <!-- Submit -->
      <div class="md:col-span-2 flex justify-end mt-4">
        <button type="submit" class="bg-[#121212] text-white border hover:bg-white hover:text-black border-white px-6 py-3 rounded shadow transition-all duration-300 transform hover:scale-105 text-base">
          Request a Quote
        </button>
      </div>
    </form>
  </div>
</div>

<script>
function toggleLinkInput() {
  const input = document.getElementById("linkInput");
  input.classList.toggle("hidden");
}
</script>

<?php include('../components/footer.php'); ?>
</body>
</html>
