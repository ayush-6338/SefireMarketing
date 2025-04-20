<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | FireShield - Fire Safety Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .hero-bg {
      background-image: url('../img_folder/about_img.jpg');
      background-position: top center;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      clip-path: inset(0 0 0 0);
    }
    .timeline-item:not(:last-child):after {
      content: '';
      position: absolute;
      left: 50%;
      bottom: -20px;
      transform: translateX(-50%);
      width: 2px;
      height: 20px;
      background: #e53e3e;
    }
    .team-card:hover .team-img {
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

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
        <a href="service.php" class="hover:text-red-500 transition-colors duration-200 py-2">Services</a>
        <a href="aboutus.php" class="text-red-500 font-medium transition-colors duration-200 py-2">About Us</a>
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
        <a href="aboutus.php" class="block px-3 py-2 hover:bg-gray-800 text-red-500 rounded-md">About Us</a>
        <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Contact Us</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section with AOS Animations -->
  <section class="hero-bg min-h-[500px] flex items-center justify-center text-center text-white">
    <div class="container mx-auto px-6">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight" data-aos="fade-down" data-aos-duration="800">
        Our Commitment to Fire Safety
      </h1>
      <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        Dedicated to protecting lives and property through innovative fire prevention solutions and education
      </p>
      <a href="#our-story" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition-all" 
         data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
        <i class="fas fa-arrow-down mr-2"></i>Our Journey
      </a>
    </div>
  </section>

  <!-- Our Story Section -->
  <section id="our-story" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Story</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto" data-aos="fade-up" data-aos-delay="200"></div>
      </div>
      
      <div class="relative max-w-4xl mx-auto">
        <!-- Timeline Item 1 -->
        <div class="mb-16 timeline-item relative" data-aos="fade-right">
          <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8 text-right">
              <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto md:mr-0">
                <span class="font-bold">2021</span>
              </div>
            </div>
            <div class="md:w-2/3 bg-white p-8 rounded-xl shadow-lg">
              <h3 class="text-2xl font-bold mb-4 text-red-600">Foundation</h3>
              <p class="text-gray-700">Founded by a team of fire safety professionals with a shared vision to reduce fire-related incidents through education and prevention.</p>
            </div>
          </div>
        </div>
        
        <!-- Timeline Item 2 -->
        <div class="mb-16 timeline-item relative" data-aos="fade-left" data-aos-delay="200">
          <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8 text-right order-2 md:order-1">
              <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto md:mr-0">
                <span class="font-bold">2022</span>
              </div>
            </div>
            <div class="md:w-2/3 bg-white p-8 rounded-xl shadow-lg order-1 md:order-2">
              <h3 class="text-2xl font-bold mb-4 text-red-600">First Major Partnership</h3>
              <p class="text-gray-700">Collaborated with local fire departments to implement community fire safety programs, reaching over 10,000 households.</p>
            </div>
          </div>
        </div>
        
        <!-- Timeline Item 3 -->
        <div class="mb-16 timeline-item relative" data-aos="fade-right" data-aos-delay="400">
          <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8 text-right">
              <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto md:mr-0">
                <span class="font-bold">2024</span>
              </div>
            </div>
            <div class="md:w-2/3 bg-white p-8 rounded-xl shadow-lg">
              <h3 class="text-2xl font-bold mb-4 text-red-600">National Recognition</h3>
              <p class="text-gray-700">Awarded the National Fire Safety Innovation Award for our community outreach programs and training initiatives.</p>
            </div>
          </div>
        </div>
        
        <!-- Timeline Item 4 -->
        <div class="flex flex-col md:flex-row items-center" data-aos="fade-left" data-aos-delay="600">
          <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8 text-right order-2 md:order-1">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto md:mr-0">
              <span class="font-bold">2025</span>
            </div>
          </div>
          <div class="md:w-2/3 bg-white p-8 rounded-xl shadow-lg order-1 md:order-2">
            <h3 class="text-2xl font-bold mb-4 text-red-600">Digital Expansion</h3>
            <p class="text-gray-700">Launched our comprehensive online platform to make fire safety education and resources accessible nationwide.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Values Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Core Principles</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto" data-aos="fade-up" data-aos-delay="200"></div>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <!-- Vision -->
        <div class="bg-gray-50 p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-red-600" 
             data-aos="fade-up" data-aos-delay="0">
          <div class="text-red-600 text-4xl mb-4">
            <i class="fas fa-binoculars"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4">Vision</h3>
          <p class="text-gray-700">To create a fire-safe society where every individual and organization is equipped with the knowledge and tools to prevent and respond to fire emergencies effectively.</p>
        </div>
        
        <!-- Mission -->
        <div class="bg-gray-50 p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-red-600" 
             data-aos="fade-up" data-aos-delay="200">
          <div class="text-red-600 text-4xl mb-4">
            <i class="fas fa-bullseye"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4">Mission</h3>
          <p class="text-gray-700">To provide comprehensive fire safety solutions through education, quality equipment, and professional services that protect lives and property from fire hazards.</p>
        </div>
        
        <!-- Values -->
        <div class="bg-gray-50 p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-red-600" 
             data-aos="fade-up" data-aos-delay="400">
          <div class="text-red-600 text-4xl mb-4">
            <i class="fas fa-heart"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4">Values</h3>
          <ul class="space-y-2 text-gray-700">
            <li class="flex items-start">
              <i class="fas fa-check text-red-600 mr-2 mt-1"></i>
              <span>Safety First in everything we do</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-red-600 mr-2 mt-1"></i>
              <span>Integrity and professionalism</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-red-600 mr-2 mt-1"></i>
              <span>Community-focused solutions</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-red-600 mr-2 mt-1"></i>
              <span>Continuous innovation</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Meet Our Team</h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">Passionate professionals dedicated to fire safety</p>
      <div class="w-20 h-1 bg-red-600 mx-auto mt-4"></div>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Team Member 1 -->
      <div class="team-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
        <div class="overflow-hidden">
          <img src="../img_folder/cv photo.jpeg" 
               alt="Ayush Raj" 
               class="w-full h-96 object-cover team-img transition-all duration-500">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold">Ayush Raj</h3>
          <p class="text-red-600 font-medium mb-2">Backend Developer</p>
          <!-- <p class="text-gray-600 text-sm">Fire safety expert with 15+ years of experience</p> -->
          <div class="flex space-x-3 mt-4">
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      </div>
      
      <!-- Team Member 2 -->
      <div class="team-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
        <div class="overflow-hidden">
          <img src="../img_folder/aryan.jpeg" 
               alt="Ravi Kumar" 
               class="w-full h-96 object-cover team-img transition-all duration-500">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold">Aryan Kumar</h3>
          <p class="text-red-600 font-medium mb-2">Frontend Developer</p>
          <!-- <p class="text-gray-600 text-sm">Former firefighter with specialized training expertise</p> -->
          <div class="flex space-x-3 mt-4">
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      </div>
      
      <!-- Team Member 3 -->
      <div class="team-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
        <div class="overflow-hidden">
          <img src="../img_folder/savita.jpeg" 
               alt="Priya Sharma" 
               class="w-full h-96 object-cover team-img transition-all duration-500">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold">Savita Pant</h3>
          <p class="text-red-600 font-medium mb-2">Project Manager</p>
          <!-- <p class="text-gray-600 text-sm">Certified fire safety instructor and educator</p> -->
          <div class="flex space-x-3 mt-4">
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      </div>
      
      <!-- team member-4 -->
      <div class="team-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
        <div class="overflow-hidden">
          <img src="../img_folder/banti_pic.jpeg" 
               alt="Ashirbad Sewa Sanstha" 
               class="w-full h-96 object-cover team-img transition-all duration-500">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold">Banti Singh</h3>
          <p class="text-red-600 font-medium mb-2">Project Sponsor</p>
          <!-- <p class="text-gray-600 text-sm">NGO focused on disaster preparedness</p> -->
          <div class="flex space-x-3 mt-4">
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fas fa-globe"></i></a>
            <a href="#" class="text-gray-500 hover:text-red-600"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Stats Section -->
  <section class="py-20 bg-red-600 text-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Fire Safety Matters</h2>
        <div class="w-20 h-1 bg-white mx-auto" data-aos="fade-up" data-aos-delay="200"></div>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div class="bg-white bg-opacity-20 p-6 rounded-xl text-center backdrop-blur-sm" data-aos="fade-up" data-aos-delay="0">
          <div class="text-4xl font-bold mb-2">4 min</div>
          <p>A fire incident is reported in India every 4 minutes</p>
        </div>
        <div class="bg-white bg-opacity-20 p-6 rounded-xl text-center backdrop-blur-sm" data-aos="fade-up" data-aos-delay="200">
          <div class="text-4xl font-bold mb-2">80%</div>
          <p>Of fire casualties occur in residential buildings</p>
        </div>
        <div class="bg-white bg-opacity-20 p-6 rounded-xl text-center backdrop-blur-sm" data-aos="fade-up" data-aos-delay="400">
          <div class="text-4xl font-bold mb-2">65%</div>
          <p>Reduction in fire incidents with proper prevention measures</p>
        </div>
        <div class="bg-white bg-opacity-20 p-6 rounded-xl text-center backdrop-blur-sm" data-aos="fade-up" data-aos-delay="600">
          <div class="text-4xl font-bold mb-2">24/7</div>
          <p>Emergency support available through our network</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Join Us in Making a Difference</h2>
      <p class="text-xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">Together, we can create safer communities through fire prevention and education</p>
      
      <div class="flex flex-wrap justify-center gap-4">
        <a href="contactus.php" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition-all" 
           data-aos="zoom-in" data-aos-delay="400">
          <i class="fas fa-phone-alt mr-2"></i>Get in Touch
        </a>
        <a href="productsPage.php" class="bg-white hover:bg-gray-100 text-gray-900 font-bold py-3 px-8 rounded-lg transition-all" 
           data-aos="zoom-in" data-aos-delay="600">
          <i class="fas fa-fire-extinguisher mr-2"></i>Our Products
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        <div data-aos="fade-up" data-aos-delay="0">
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
        <div data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-lg font-bold mb-4">Quick Links</h3>
          <ul class="space-y-2">
            <li><a href="page1.php" class="text-gray-400 hover:text-white">Home</a></li>
            <li><a href="productsPage.php" class="text-gray-400 hover:text-white">Our products</a></li>
            <li><a href="aboutus.php" class="text-gray-400 hover:text-white">About Us</a></li>
            <li><a href="service.php" class="text-gray-400 hover:text-white">Services</a></li>
            <li><a href="contactus.php" class="text-gray-400 hover:text-white">Contact</a></li>
          </ul>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <h3 class="text-lg font-bold mb-4">Customer Service</h3>
          <ul class="space-y-2">
            <li><a href="service.php" class="text-gray-400 hover:text-white">Fire Safety Quiz</a></li>
            <li><a href="service.php" class="text-gray-400 hover:text-white">Training Programs</a></li>
            <li><a href="productsPage.php" class="text-gray-400 hover:text-white">Equipment Supply</a></li>
            <li><a href="service.php" class="text-gray-400 hover:text-white">Emergency Planning</a></li>
          </ul>
        </div>
        <div data-aos="fade-up" data-aos-delay="300">
          <h3 class="text-lg font-bold mb-4">Contact</h3>
          <address class="not-italic text-gray-400">
            <p class="mb-2"><i class="fas fa-map-marker-alt mr-2 text-red-500"></i> West jay prakash nagar,patna-1 </p>
            <p class="mb-2"><i class="fas fa-phone-alt mr-2 text-red-500"></i> 7979051204 </p>
            <p class="mb-2"><i class="fas fa-envelope mr-2 text-red-500"></i> info@sefiremarketing.com</p>
            <p class="mb-2"><i class="fas fa-clock mr-2 text-red-500"></i> Mon-Fri: 9AM-6PM</p>
          </address>
        </div>
      </div>
      <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm" data-aos="fade-up">
        <p>© 2023 Sefiremarketing. All rights reserved. | <a href="#" class="hover:text-white">Privacy Policy</a> | <a href="#" class="hover:text-white">Terms of Service</a></p>
      </div>
    </div>
  </footer>

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

  <!-- AOS Initialization -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      offset: 100
    });
  </script>
</body>
</html>