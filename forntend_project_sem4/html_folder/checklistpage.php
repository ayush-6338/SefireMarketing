<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Fire Safety and Equipment - Your safety is our priority. Explore our range of fire safety products and services." />
  <meta property="og:title" content="Fire Safety and Equipment" />
  <meta property="og:description" content="Your safety is our priority. Explore our range of fire safety products and services." />
  <meta property="og:image" content="../img_folder/istockphoto-136916670-2048x2048.jpg" />
  <meta property="og:url" content="https://yourwebsite.com" />
  <meta name="twitter:card" content="summary_large_image" />
  <title>Fire Safety Checklist</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-image: 
        url('../img_folder/graph17.png'), 
        url('../img_folder/graph7.png');
      background-repeat: no-repeat, no-repeat;
      background-position: left top, right bottom;
      background-size: 500px 500px, 400px 400px;
      background-color: #f3f4f6; /* Light gray fallback background */
    }
    html {
      scroll-behavior: smooth; /* Smooth scrolling for anchor links */
    }
  </style>
</head>
<body class="text-gray-800">

<!-- Navigation -->
<nav class="bg-black shadow-md sticky top-0 z-50 text-white">
  <div class="container mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
    <!-- Logo/Brand -->
    <div class="flex items-center">
      <img src="../img_folder/logo_pic.jpg" alt="Fire Safety Logo" class="h-11 w-11 mr-2 rounded-full">
      <span class="text-xl font-bold">Sefire<span class="text-red-600">marketing</span></span>
    </div>
    
    <!-- Desktop Navigation -->
    <div class="hidden md:flex space-x-8">
      <a href="page1.php" class="hover:text-red-500 transition-colors duration-200 py-2">Home</a>
      <a href="productsPage.php" class="hover:text-red-500 transition-colors duration-200 py-2">Products & Equipment</a>
      <a href="service.php" class="text-red-500 font-medium transition-colors duration-200 py-2">Services</a>
      <a href="aboutus.php" class="hover:text-red-500 transition-colors duration-200 py-2">About Us</a>
      <a href="contactus.php" class="hover:text-red-500 transition-colors duration-200 py-2">Contact Us</a>
    </div>
    
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="md:hidden focus:outline-none p-2">
      <i class="fas fa-bars text-xl"></i>
    </button>
  </div>
  
  <!-- Mobile Menu (Hidden by default) -->
  <div id="mobile-menu" class="hidden md:hidden bg-gray-900">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="page1.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Home</a>
      <a href="productsPage.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Products & Equipment</a>
      <a href="service.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Services</a>
      <a href="aboutus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">About Us</a>
      <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Contact Us</a>
    </div>
  </div>
</nav>

<script>
  // Mobile menu toggle functionality
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  mobileMenuButton.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
    
    // Change icon based on menu state
    const icon = mobileMenuButton.querySelector('i');
    if (mobileMenu.classList.contains('hidden')) {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
    } else {
      icon.classList.remove('fa-bars');
      icon.classList.add('fa-times');
    }
  });
  
  // Close mobile menu when clicking on a link
  const mobileLinks = mobileMenu.querySelectorAll('a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', function() {
      mobileMenu.classList.add('hidden');
      mobileMenuButton.querySelector('i').classList.remove('fa-times');
      mobileMenuButton.querySelector('i').classList.add('fa-bars');
    });
  });
</script>

  <!-- ✅ Checklist Container -->
  <div class="max-w-7xl mx-auto bg-white bg-opacity-90 rounded-2xl shadow-xl p-6 space-y-8 mt-8" id="checklistContainer">
    <h1 class="text-4xl font-bold text-center text-red-600">🔥 Fire Safety Checklist</h1>

    <!-- Export Button -->
    <div class="text-center">
      <button onclick="exportToPDF()" class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600 transition">
        📄 Export to PDF
      </button>
    </div>

    <!-- Progress Bar -->
    <div class="w-full bg-gray-200 rounded-full h-4">
      <div id="progressBar" class="h-4 rounded-full transition-all duration-500" style="width: 0%; background-color: red;"></div>
    </div>

    <!-- Checklist Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="checklistGrid">
      <!-- Checklist sections will be injected here -->
    </div>

    <!-- Completion Summary -->
    <div id="summary" class="text-center text-lg font-medium text-green-600 hidden"></div>
  </div>

  <!-- ✅ Reset Button -->
  <div class="text-center mt-6">
    <button onclick="resetChecklist()" class="bg-yellow-400 text-white px-6 py-3 rounded-lg hover:bg-yellow-500 transition">
      🔄 Reset Checklist
    </button>
  </div>

  <!-- ✅ Go to Landing Page Button -->
  <div class="text-center mt-8">
    <a href="page1.php" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition">
      🔙 Go to Landing Page
    </a>
  </div>

  <script>
    const checklistData = [
      {
        title: "🏠 Home Safety",
        items: [
          "Smoke detectors installed",
          "Fire extinguisher available",
          "Exit routes clear",
          "Gas lines checked",
          "Electrical cords safe"
        ],
        prefix: "home"
      },
      {
        title: "🏢 Office Safety",
        items: [
          "Emergency exits marked",
          "Extinguishers serviced",
          "Sprinklers functional",
          "Flammable items stored safely",
          "Fire drill practiced"
        ],
        prefix: "office"
      },
      {
        title: "👨‍👩‍👧‍👦 Family & Child Safety",
        items: [
          "Fire plan discussed with kids",
          "Safety corners and locks in place",
          "Matches/lighters out of reach",
          "Fire escape ladder ready",
          "Emergency contact visible"
        ],
        prefix: "family"
      },
      {
        title: "🚨 Emergency Preparation",
        items: [
          "First aid kit stocked",
          "Emergency numbers saved",
          "Family meeting point set",
          "Fire drill done this year",
          "Flashlights working"
        ],
        prefix: "emergency"
      },
      {
        title: "⚙️ Appliance Safety",
        items: [
          "Heaters inspected",
          "Stove/oven turned off",
          "Frayed cords replaced",
          "Overloaded outlets avoided",
          "Unused electronics unplugged"
        ],
        prefix: "appliance"
      }
    ];

    const checklistGrid = document.getElementById("checklistGrid");
    const progressBar = document.getElementById("progressBar");
    const summary = document.getElementById("summary");

    checklistData.forEach((section, i) => {
      const itemsHtml = section.items.map((item, j) => {
        const id = `${section.prefix}${j + 1}`;
        return `<li><label><input type="checkbox" data-id="${id}" class="mr-2"> ${item}</label></li>`;
      }).join("");

      checklistGrid.innerHTML += `
        <div class="border border-red-300 rounded-lg shadow-md p-4 space-y-2 bg-red-50">
          <h2 class="text-xl font-semibold text-red-600">${section.title}</h2>
          <ul class="space-y-2">${itemsHtml}</ul>
        </div>
      `;
    });

    function updateProgress() {
      const checkboxes = document.querySelectorAll("input[type='checkbox']");
      const total = checkboxes.length;
      const checked = [...checkboxes].filter(cb => cb.checked).length;
      const percent = Math.floor((checked / total) * 100);

      progressBar.style.width = percent + "%";
      progressBar.style.backgroundColor = getColor(percent);

      if (percent === 100) {
        summary.innerText = "✅ You're fully fire-safe! Amazing work!";
        summary.classList.remove("hidden");
      } else if (percent >= 60) {
        summary.innerText = `⚠️ Almost done! You're ${percent}% fire-safe.`;
        summary.classList.remove("hidden");
      } else {
        summary.classList.add("hidden");
      }
    }

    function getColor(percent) {
      const r = Math.max(0, 255 - Math.floor(percent * 2.55));
      const g = Math.min(255, Math.floor(percent * 2.55));
      return `rgb(${r}, ${g}, 0)`; // From red to green
    }

    function exportToPDF() {
      const element = document.getElementById("checklistContainer");
      const opt = {
        margin: 0.5,
        filename: 'Fire_Safety_Checklist.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      html2pdf().set(opt).from(element).save();
    }

    document.addEventListener("DOMContentLoaded", () => {
      const checkboxes = document.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(cb => {
        const id = cb.dataset.id;
        if (localStorage.getItem(id) === "checked") cb.checked = true;
      });

      updateProgress();

      checkboxes.forEach(cb => {
        cb.addEventListener("change", () => {
          const id = cb.dataset.id;
          cb.checked ? localStorage.setItem(id, "checked") : localStorage.removeItem(id);
          updateProgress();
        });
      });
    });

    function resetChecklist() {
      const checkboxes = document.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(cb => {
        cb.checked = false;
        localStorage.removeItem(cb.dataset.id);
      });
      updateProgress();
    }
  </script>

</body>
</html>