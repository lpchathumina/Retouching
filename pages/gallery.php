<?php include('../components/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery - Miracle Retoucher</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-black text-white font-montserrat">

<!-- Hero Section -->
<div class="w-full h-[400px] relative">
  <img src="../assets/qa.jpg" alt="Gallery Banner" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/40">
    <h1 class="text-4xl md:text-5xl tracking-wider font-semibold mb-6 mt-10">GALLERY</h1>
  </div>
</div>

<!-- Filter Button for Mobile -->
<div class="md:hidden mt-6">
  <button onclick="toggleFilter()" class="px-8 py-2 bg-[#121212] text-white font-medium text-lg rounded-r-full rounded-l-none">
    Filter
  </button>
</div>

<!-- Main Layout -->
<div class="flex flex-col md:flex-row flex-1 px-4 md:px-20 mt-6 gap-6">

  <!-- Sidebar Filter -->
  <div id="filterSidebar" class="w-full md:w-1/4 border-r border-gray-300 md:block hidden md:relative fixed top-0 left-0 h-full z-50 bg-black p-4 overflow-y-auto">
    <div class="flex justify-between items-center md:hidden mb-4">
      <h3 class="text-lg font-bold">Filters</h3>
      <button onclick="toggleFilter()" class="text-white text-xl">✕</button>
    </div>

    <!-- FILTER FORM -->
    <form method="GET" action="gallery.php" class="space-y-4">
      <div>
        <label class="block mb-1 font-semibold">Category</label>
        <select name="category" class="w-full px-3 py-2 bg-[#1a1a1a] border border-gray-600 rounded">
          <option value="">All</option>
          <option value="fashion">Fashion</option>
          <option value="wedding">Wedding</option>
          <option value="portrait">Portrait</option>
        </select>
      </div>
      <!-- Add more filters like subcategory, country etc. -->
      <div>
        <button type="submit" class="w-full bg-white text-black font-semibold py-2 rounded hover:bg-gray-200">Apply Filters</button>
      </div>
    </form>
  </div>

  <!-- Image Grid -->
  <div class="w-full md:w-3/4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <?php
    // Simulated image list (you can replace this with database logic)
    $images = [
      ['src' => '../assets/gallery1.jpg', 'category' => 'fashion'],
      ['src' => '../assets/gallery2.jpg', 'category' => 'wedding'],
      ['src' => '../assets/gallery3.jpg', 'category' => 'portrait'],
    ];

    $selectedCategory = $_GET['category'] ?? '';

    foreach ($images as $img) {
      if ($selectedCategory === '' || $img['category'] === $selectedCategory) {
        echo '<div><img src="' . $img['src'] . '" alt="Gallery Image" class="w-full rounded shadow-md"></div>';
      }
    }
    ?>
  </div>
</div>

<script>
function toggleFilter() {
  const sidebar = document.getElementById("filterSidebar");
  sidebar.classList.toggle("hidden");
}
</script>

<?php include('../components/footer.php'); ?>
</body>
</html>
