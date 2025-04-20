<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Fire Safety Equipment & Services</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <style>
    /* Custom style to ensure proper stacking of sticky elements */
    .sticky-nav {
      position: sticky;
      top: 0;
      z-index: 50;
    }
    .sticky-alert {
      position: sticky;
      top: 68px; /* Height of the navigation bar */
      z-index: 40;
    }
  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'fire-red': '#E53E3E',
            'fire-orange': '#DD6B20',
            'safety-blue': '#3182CE',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 font-sans antialiased">
<!-- Navigation -->
<nav class="bg-black shadow-md sticky-nav text-white">
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
      <a href="service.php" class="hover:text-red-500 transition-colors duration-200 py-2">Services</a>
      <a href="aboutus.php" class="hover:text-red-500 transition-colors duration-200 py-2">About Us</a>
      <a href="contactus.php" class="text-red-500 font-medium transition-colors duration-200 py-2">Contact Us</a>
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
      <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 text-red-500 rounded-md">Contact Us</a>
    </div>
  </div>
</nav>

<!-- Emergency Alert Banner (Sticky below navigation) -->
<div class="bg-fire-red text-white py-2 px-4 sticky-alert shadow-md">
  <div class="container mx-auto flex justify-between items-center">
    <span class="font-bold"><i class="fas fa-exclamation-triangle mr-2"></i>EMERGENCY: Call 101 immediately if you're experiencing a fire</span>
    <a href="tel:101" class="bg-white text-fire-red font-bold px-4 py-1 rounded-md hover:bg-gray-100 transition-colors">
      <i class="fas fa-phone-alt mr-1"></i>Call Now
    </a>
  </div>
</div>

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

<!-- Main Container -->
<div class="container mx-auto px-4 py-8 max-w-7xl">

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-fire-red to-fire-orange rounded-xl p-8 md:p-12 mb-12 text-white shadow-lg">
    <div class="max-w-3xl mx-auto text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Fire Safety Support & Inquiries</h1>
      <p class="text-xl mb-6">Our team of certified fire safety experts is ready to assist you with equipment, training, and compliance questions.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#contact-form" class="bg-white text-fire-red font-bold px-6 py-3 rounded-lg hover:bg-gray-100 transition-all shadow-md">
          <i class="fas fa-envelope mr-2"></i>Send Message
        </a>
        <a href="tel:0123456789" class="bg-black bg-opacity-30 text-white font-bold px-6 py-3 rounded-lg hover:bg-opacity-40 transition-all shadow-md border border-white border-opacity-20">
          <i class="fas fa-phone-alt mr-2"></i>99344-20315
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Columns -->
  <div class="grid md:grid-cols-2 gap-8 mb-12">
    <!-- Contact Form -->
    <div id="contact-form" class="bg-white p-6 md:p-8 rounded-xl shadow-md border border-gray-100">
      <div class="flex items-center mb-6">
        <div class="bg-fire-red text-white p-3 rounded-full mr-4">
          <i class="fas fa-headset text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">Contact Our Safety Team</h2>
      </div>
      
      <form id="contactForm" class="space-y-5">
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-1">Full Name*</label>
          <input type="text" id="name" placeholder="Your full name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fire-red focus:border-transparent" required>
        </div>
        
        <div>
          <label for="email" class="block text-gray-700 font-medium mb-1">Email Address*</label>
          <input type="email" id="email" placeholder="your@email.com" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fire-red focus:border-transparent" required>
        </div>
        
        <div>
          <label for="phone" class="block text-gray-700 font-medium mb-1">Phone Number</label>
          <input type="tel" id="phone" placeholder="(123) 456-7890" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fire-red focus:border-transparent">
        </div>
        
        <div>
          <label for="subject" class="block text-gray-700 font-medium mb-1">Subject*</label>
          <select id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fire-red focus:border-transparent">
            <option value="">Select a topic</option>
            <option>Fire Equipment Inquiry</option>
            <option>Safety Training</option>
            <option>Site Audit Request</option>
            <option>Product Support</option>
            <option>Other</option>
          </select>
        </div>
        
        <div>
          <label for="message" class="block text-gray-700 font-medium mb-1">Your Message*</label>
          <textarea id="message" rows="5" placeholder="How can we help you with fire safety?" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fire-red focus:border-transparent" required></textarea>
        </div>
        
        <button type="submit" class="w-full bg-fire-red text-white font-bold px-6 py-3 rounded-lg hover:bg-red-700 transition-colors shadow-md">
          <i class="fas fa-paper-plane mr-2"></i>Send Message
        </button>
        
        <div id="formMsg" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Success! </strong>
          <span class="block sm:inline">Your message has been sent. We'll respond within 24 hours.</span>
        </div>
      </form>
    </div>

    <!-- Contact Information -->
    <div class="space-y-6">
      <!-- Office Card -->
      <div class="bg-white p-6 md:p-8 rounded-xl shadow-md border border-gray-100">
        <div class="flex items-center mb-4">
          <div class="bg-safety-blue text-white p-3 rounded-full mr-4">
            <i class="fas fa-building text-xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-gray-800">Our Headquarters</h2>
        </div>
        
        <div class="space-y-4 text-gray-700">
          <div class="flex items-start">
            <i class="fas fa-map-marker-alt text-fire-red mt-1 mr-3"></i>
            <div>
              <h3 class="font-semibold">Address</h3>
              <p>West jay prakash nagar,patna-1</p>
            </div>
          </div>
          
          <div class="flex items-start">
            <i class="fas fa-clock text-fire-red mt-1 mr-3"></i>
            <div>
              <h3 class="font-semibold">Business Hours</h3>
              <p>Monday - Friday: 8:30 AM - 5:30 PM<br>
              Saturday: 9:00 AM - 2:00 PM<br>
              Sunday: Closed</p>
            </div>
          </div>
          
          <div class="flex items-start">
            <i class="fas fa-phone-alt text-fire-red mt-1 mr-3"></i>
            <div>
              <h3 class="font-semibold">Phone</h3>
              <p><a href="tel:9386258010" class="text-safety-blue hover:underline">9386258010</a></p>
            </div>
          </div>
          
          <div class="flex items-start">
            <i class="fas fa-envelope text-fire-red mt-1 mr-3"></i>
            <div>
              <h3 class="font-semibold">Email</h3>
              <p><a href="mailto: anilsefiremarketing@gmail.com" class="text-safety-blue hover:underline"> anilsefiremarketing@gmail.com</a></p>
            </div>
          </div>
        </div>
        
        <button onclick="exportContactInfo()" class="mt-6 w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-lg border border-gray-300 transition-colors">
          <i class="fas fa-download mr-2"></i>Download Contact Info
        </button>
      </div>
      
      <!-- Emergency Contacts Card -->
      <div class="bg-red-50 p-6 md:p-8 rounded-xl shadow-md border border-red-100">
        <div class="flex items-center mb-4">
          <div class="bg-fire-red text-white p-3 rounded-full mr-4">
            <i class="fas fa-exclamation-triangle text-xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-gray-800">Emergency Contacts</h2>
        </div>
        
        <div class="space-y-3 text-gray-700">
          <div class="flex items-center">
            <i class="fas fa-fire-extinguisher text-fire-red mr-3"></i>
            <div>
              <h3 class="font-semibold">Fire Department</h3>
              <a href="tel:101" class="text-safety-blue hover:underline">101 (Emergency)</a>
            </div>
          </div>
          
          <div class="flex items-center">
            <i class="fas fa-ambulance text-fire-red mr-3"></i>
            <div>
              <h3 class="font-semibold">Medical Emergency</h3>
              <a href="tel:911" class="text-safety-blue hover:underline">108 (Emergency)</a>
            </div>
          </div>
          
          <div class="flex items-center">
            <i class="fas fa-shield-alt text-fire-red mr-3"></i>
            <div>
              <h3 class="font-semibold">Poison Control</h3>
              <a href="tel:18002221222" class="text-safety-blue hover:underline">1-800-222-1222</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Map Section -->
  <section class="bg-white p-6 md:p-8 rounded-xl shadow-md mb-12 border border-gray-100">
    <div class="flex items-center mb-6">
      <div class="bg-fire-red text-white p-3 rounded-full mr-4">
        <i class="fas fa-map-marked-alt text-xl"></i>
      </div>
      <h2 class="text-2xl font-bold text-gray-800">Our Location</h2>
    </div>
    
    <div class="rounded-xl overflow-hidden shadow-md">
      <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7196.95200062632!2d85.12153809230043!3d25.589094509842756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5874b11d2d69%3A0x134be659e1fae644!2sJai%20Prakash%20Nagar%2C%20Patna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1744984454213!5m2!1sen!2sin" width="100% " height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>">
    </div>
    
    <div class="mt-4 text-gray-600 text-sm">
      <p><i class="fas fa-info-circle text-fire-red mr-2"></i>Free parking available in front of the building. Our office is wheelchair accessible.</p>
    </div>
  </section>

  <!-- Social & Feedback Section -->
  <div class="grid md:grid-cols-2 gap-8 mb-12">
    <!-- Social Media -->
    <div class="bg-white p-6 md:p-8 rounded-xl shadow-md border border-gray-100">
      <div class="flex items-center mb-6">
        <div class="bg-fire-red text-white p-3 rounded-full mr-4">
          <i class="fas fa-share-alt text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">Connect With Us</h2>
      </div>
      
      <p class="text-gray-700 mb-6">Stay updated with the latest fire safety tips, product updates, and special offers.</p>
      
      <div class="flex flex-wrap gap-4">
        <a href="#" class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition-colors w-12 h-12 flex items-center justify-center">
          <i class="fab fa-facebook-f text-xl"></i>
        </a>
        <a href="#" class="bg-blue-400 text-white p-3 rounded-full hover:bg-blue-500 transition-colors w-12 h-12 flex items-center justify-center">
          <i class="fab fa-twitter text-xl"></i>
        </a>
        <a href="#" class="bg-red-600 text-white p-3 rounded-full hover:bg-red-700 transition-colors w-12 h-12 flex items-center justify-center">
          <i class="fab fa-youtube text-xl"></i>
        </a>
        <a href="#" class="bg-blue-800 text-white p-3 rounded-full hover:bg-blue-900 transition-colors w-12 h-12 flex items-center justify-center">
          <i class="fab fa-linkedin-in text-xl"></i>
        </a>
        <a href="#" class="bg-pink-600 text-white p-3 rounded-full hover:bg-pink-700 transition-colors w-12 h-12 flex items-center justify-center">
          <i class="fab fa-instagram text-xl"></i>
        </a>
      </div>
    </div>
    
    <!-- Feedback -->
    <div class="bg-white p-6 md:p-8 rounded-xl shadow-md border border-gray-100">
      <div class="flex items-center mb-6">
        <div class="bg-fire-red text-white p-3 rounded-full mr-4">
          <i class="fas fa-comment-dots text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">Your Feedback</h2>
      </div>
      
      <p class="text-gray-700 mb-4">We value your opinion. How was your experience with us?</p>
      
      <div class="flex justify-between mb-4">
        <button class="emoji-btn text-4xl hover:scale-110 transition-transform" data-rating="1">😞</button>
        <button class="emoji-btn text-4xl hover:scale-110 transition-transform" data-rating="2">😐</button>
        <button class="emoji-btn text-4xl hover:scale-110 transition-transform" data-rating="3">🙂</button>
        <button class="emoji-btn text-4xl hover:scale-110 transition-transform" data-rating="4">😊</button>
        <button class="emoji-btn text-4xl hover:scale-110 transition-transform" data-rating="5">😀</button>
      </div>
      
      <textarea placeholder="What can we improve? (Optional)" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fire-red focus:border-transparent mb-3"></textarea>
      
      <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-lg border border-gray-300 transition-colors w-full">
        Submit Feedback
      </button>
    </div>
  </div>

  <!-- Safety Tip -->
  <div class="bg-safety-blue bg-opacity-10 p-6 md:p-8 rounded-xl shadow-md border border-safety-blue border-opacity-20">
    <div class="flex items-start">
      <div class="bg-safety-blue text-white p-3 rounded-full mr-4 mt-1">
        <i class="fas fa-lightbulb text-xl"></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Safety Tip of the Day</h2>
        <p class="text-gray-700 mb-3">Test your smoke alarms monthly and replace batteries at least once a year. A working smoke alarm can double your chances of surviving a home fire.</p>
        <a href="quiz.php" class="text-safety-blue font-semibold hover:underline inline-flex items-center">
          Know your knowledge on fire sefety <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!--footer-->
<footer class="bg-gray-800 text-white py-12">
  <div class="container mx-auto px-6">
    <div class="grid md:grid-cols-4 gap-8 mb-8">
      <div>
        <div class="flex items-center mb-4">
          <img src="../img_folder/logo_pic.jpg" alt="Fire Safety Logo" class="h-11 w-15 inline-block mr-2 rounded-full">
          <span class="text-xl font-bold">Sefire<span class="text-red-500">marketing</span></span>
        </div>
        <p class="text-gray-400">Your trusted partner for comprehensive fire safety solutions since 2021.</p>
        <div class="mt-4 flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div>
        <h3 class="text-lg font-bold mb-4">Quick Links</h3>
        <ul class="space-y-2">
          <li><a href="page1.php" class="text-gray-400 hover:text-white">Home</a></li>
          <li><a href="productsPage.php" class="text-gray-400 hover:text-white">Our products</a></li>
          <li><a href="aboutus.php" class="text-gray-400 hover:text-white">About Us</a></li>
          <li><a href="service.php" class="text-gray-400 hover:text-white">Services</a></li>
          <li><a href="contactus.php" class="text-gray-400 hover:text-white">Contact</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-bold mb-4">Customer Service</h3>
        <ul class="space-y-2">
              <li><a href="service.php" class="text-gray-400 hover:text-white">Fire Safety Quiz</a></li>
              <li><a href="service.php" class="text-gray-400 hover:text-white">Training Programs</a></li>
              <li><a href="productsPage.php" class="text-gray-400 hover:text-white">Equipment Supply</a></li>
              <li><a href="service.php" class="text-gray-400 hover:text-white">Emergency Planning</a></li>
            </ul>
      </div>
      <div>
        <h3 class="text-lg font-bold mb-4">Contact</h3>
        <address class="not-italic text-gray-400">
          <p class="mb-2"><i class="fas fa-map-marker-alt mr-2 text-red-500"></i> West jay prakash nagar,patna-1 </p>
          <p class="mb-2"><i class="fas fa-phone-alt mr-2 text-red-500"></i> 7979051204 </p>
          <p class="mb-2"><i class="fas fa-envelope mr-2 text-red-500"></i> info@sefiremarketing.com</p>
          <p class="mb-2"><i class="fas fa-clock mr-2 text-red-500"></i> Mon-Fri: 9AM-6PM</p>
        </address>
      </div>
    </div>
    <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
      <p>© 2023 Sefiremarketing. All rights reserved. | <a href="#" class="hover:text-white">Privacy Policy</a> | <a href="#" class="hover:text-white">Terms of Service</a></p>
    </div>
  </div>
</footer>

<script>
  // Form submission
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formMsg = document.getElementById('formMsg');
    formMsg.classList.remove('hidden');
    
    // Reset form after 3 seconds
    setTimeout(() => {
      this.reset();
      formMsg.classList.add('hidden');
    }, 5000);
  });

  // Emoji rating selection
  document.querySelectorAll('.emoji-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.emoji-btn').forEach(b => b.classList.remove('ring-2', 'ring-fire-red', 'scale-110'));
      this.classList.add('ring-2', 'ring-fire-red', 'scale-110');
    });
  });

  // Export contact info as PDF
  function exportContactInfo() {
    const element = document.querySelector('.grid.md\\:grid-cols-2 > div:last-child > div:first-child');
    const opt = {
      margin: 10,
      filename: 'FireSafety_Contact_Information.pdf',
      image: { type: 'jpeg', quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };
    
    // Create a clone to avoid affecting the visible element
    const clone = element.cloneNode(true);
    clone.style.padding = '20px';
    clone.style.width = '210mm';
    document.body.appendChild(clone);
    
    html2pdf().from(clone).set(opt).save().then(() => {
      document.body.removeChild(clone);
    });
  }
</script>
</body>
</html>