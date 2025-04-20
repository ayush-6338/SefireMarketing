<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Safety Services | FireShield</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        html {
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, rgba(229,62,62,0.9) 0%, rgba(221,107,32,0.9) 100%);
        }
        .checklist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .faq-item {
            transition: all 0.3s ease;
        }
        .faq-item:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .video-container {
            aspect-ratio: 16/9;
        }
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
    <meta name="description" content="Comprehensive fire safety services including training, equipment, and emergency planning from FireShield professionals.">
    <meta property="og:title" content="Fire Safety Services | FireShield">
    <meta property="og:description" content="Professional fire safety services, training programs, and equipment to protect your home or business.">
    <meta property="og:image" content="../img_folder/istockphoto-136916670-2048x2048.jpg">
    <meta property="og:url" content="https://yourwebsite.com/services">
</head>
<body class="font-sans bg-gray-100 text-gray-800">

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
      <a href="page1.php" class="hover:text-red-500  transition-colors duration-200 py-2">Home</a>
      <a href="productsPage.php" class="hover:text-red-500 transition-colors duration-200 py-2">Products & Equipment</a>
      <a href="service.php" class="text-red-500 transition-colors duration-200 py-2">Services</a>
      <a href="aboutus.php" class="hover:text-red-500 font-medium transition-colors duration-200 py-2">About Us</a>
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
      <a href="service.php" class="block px-3 py-2 hover:bg-gray-800 text-red-500 rounded-md">Services</a>
      <a href="aboutus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">About Us</a>
      <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Contact Us</a>
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
  
<!-- Hero Section -->
<section class="relative py-20 hero-gradient text-white overflow-hidden">
    <div class="absolute inset-0 flex justify-between">
        <img src="../img_folder/graph2.png" alt="Fire Safety" class="w-1/4 max-w-xs opacity-100 object-contain">
        <img src="../img_folder/graph.png" alt="Fire Safety Graph" class="w-1/4 max-w-xs opacity-70 object-contain">
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">Professional Fire Safety Services</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Comprehensive solutions to protect your home or business from fire hazards
        </p>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#training" class="bg-white text-red-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all shadow-lg">
                <i class="fas fa-certificate mr-2"></i>Training Programs
            </a>
            <a href="#resources" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-bold py-3 px-8 rounded-lg transition-all border border-white border-opacity-30">
                <i class="fas fa-file-alt mr-2"></i>Safety Resources
            </a>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white" id="training">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Fire Safety Services</h2>
            <div class="w-20 h-1 bg-red-600 mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-gray-50 p-8 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="100">
                <div class="text-red-600 text-4xl mb-4">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Training Programs</h3>
                <p class="text-gray-700 mb-4">Certified fire safety training for individuals and organizations, covering prevention, equipment use, and emergency response.</p>
                <a href="appointment.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="200">
                <div class="text-red-600 text-4xl mb-4">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Safety Audits</h3>
                <p class="text-gray-700 mb-4">Comprehensive fire risk assessments for residential and commercial properties with actionable recommendations.</p>
                <a href="appointment.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                    Schedule Audit <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="300">
                <div class="text-red-600 text-4xl mb-4">
                    <i class="fas fa-people-carry"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Equipment Installation</h3>
                <p class="text-gray-700 mb-4">Professional installation of fire extinguishers, alarms, and suppression systems by certified technicians.</p>
                <a href="productsPage.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                    View Products <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Fire Safety Quiz Section -->
<section class="py-16 bg-gray-50" data-aos="fade-up" id="quiz">
    <div class="container mx-auto px-6 text-center">
        <div class="bg-white p-8 md:p-12 rounded-xl shadow-md max-w-4xl mx-auto">
            <div class="text-red-600 text-5xl mb-4">🧠</div>
            <h2 class="text-3xl font-bold mb-4">Test Your Fire Safety Knowledge</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Take our quick 5-minute quiz to assess your fire safety readiness and identify areas for improvement.</p>
            <a href="quiz.php" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-md">
                Start Fire Safety Quiz
            </a>
        </div>
    </div>
</section>

<!-- Downloadable Checklists Section -->
<section class="py-16 bg-white" data-aos="fade-up" id="resources">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Essential Fire Safety Resources</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Download our free checklists and guides to improve your fire safety preparedness</p>
            <div class="w-20 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="checklist-card bg-white p-6 rounded-xl shadow-md border border-gray-100 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="../img_folder/home_icon.png" alt="Home Icon" class="w-12 h-12 mr-4">
                    <h3 class="text-xl font-bold">Home Safety Checklist</h3>
                </div>
                <p class="text-gray-600 mb-6">Comprehensive guide to fireproofing your home and creating an effective evacuation plan.</p>
                <a href="checklistpage.php" class="inline-flex items-center text-red-600 font-medium">
                    Download PDF <i class="fas fa-download ml-2"></i>
                </a>
            </div>
            
            <div class="checklist-card bg-white p-6 rounded-xl shadow-md border border-gray-100 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="../img_folder/office_icon.png" alt="Office Icon" class="w-12 h-12 mr-4">
                    <h3 class="text-xl font-bold">Workplace Safety Guide</h3>
                </div>
                <p class="text-gray-600 mb-6">OSHA-compliant checklist for businesses to meet fire safety regulations and protect employees.</p>
                <a href="checklistpage.php" class="inline-flex items-center text-red-600 font-medium">
                    Download PDF <i class="fas fa-download ml-2"></i>
                </a>
            </div>
            
            <div class="checklist-card bg-white p-6 rounded-xl shadow-md border border-gray-100 transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="../img_folder/family_icon.png" alt="Family Icon" class="w-12 h-12 mr-4">
                    <h3 class="text-xl font-bold">Family Preparedness Kit</h3>
                </div>
                <p class="text-gray-600 mb-6">Child-friendly fire safety materials and family evacuation planning tools.</p>
                <a href="checklistpage.php" class="inline-flex items-center text-red-600 font-medium">
                    Download PDF <i class="fas fa-download ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Video Guide Section -->
<section class="py-16 bg-gray-50" data-aos="fade-up">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Video Learning Resources</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Watch our expert-led tutorials on essential fire safety practices</p>
            <div class="w-20 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div>
                <div class="video-container w-full bg-black rounded-xl overflow-hidden shadow-lg mb-4">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Vc7ZqtGNmTY" frameborder="0" allowfullscreen></iframe>
                </div>
                <h3 class="text-xl font-semibold mb-2">Fire Extinguisher Training</h3>
                <p class="text-gray-600">Learn the PASS technique for proper extinguisher use</p>
            </div>
            
            <div>
                <div class="video-container w-full bg-black rounded-xl overflow-hidden shadow-lg mb-4">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Q3LDGOFxJAE" frameborder="0" allowfullscreen></iframe>
                </div>
                <h3 class="text-xl font-semibold mb-2">Home Fire Prevention</h3>
                <p class="text-gray-600">Top 10 tips to fireproof your living space</p>
            </div>
            
            <div>
                <div class="video-container w-full bg-black rounded-xl overflow-hidden shadow-lg mb-4">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/2CFiL0FAggg" frameborder="0" allowfullscreen></iframe>
                </div>
                <h3 class="text-xl font-semibold mb-2">Emergency Evacuation</h3>
                <p class="text-gray-600">Creating and practicing your escape plan</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Answers to common questions about our fire safety services</p>
            <div class="w-20 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-4">
            <div class="faq-item bg-gray-50 p-6 rounded-lg shadow-sm">
                <button class="w-full flex justify-between items-center text-left faq-btn" data-id="1">
                    <span class="text-lg font-semibold">What should I do during a kitchen fire?</span>
                    <i class="fas fa-chevron-down transition-transform duration-200"></i>
                </button>
                <div id="faq-1" class="mt-4 hidden text-gray-700">
                    <p>During a kitchen fire, it's important to stay calm and act wisely. The first step is to turn off the heat source to prevent the fire from growing. If it's a small grease fire, carefully cover the pan with a metal lid or use baking soda to smother the flames. Never use water on a grease fire as it can cause the flames to spread. If the fire seems too strong to handle safely, evacuate immediately and call emergency services.</p>
                </div>
            </div>
            
            <div class="faq-item bg-gray-50 p-6 rounded-lg shadow-sm">
                <button class="w-full flex justify-between items-center text-left faq-btn" data-id="2">
                    <span class="text-lg font-semibold">How often should fire extinguishers be inspected?</span>
                    <i class="fas fa-chevron-down transition-transform duration-200"></i>
                </button>
                <div id="faq-2" class="mt-4 hidden text-gray-700">
                    <p>Fire extinguishers should be visually inspected monthly to ensure they are in their designated place, the pressure gauge shows adequate pressure, and there are no visible signs of damage or tampering. A professional maintenance check should be performed annually. Additionally, extinguishers typically require internal maintenance every 5-12 years depending on the type.</p>
                </div>
            </div>
            
            <div class="faq-item bg-gray-50 p-6 rounded-lg shadow-sm">
                <button class="w-full flex justify-between items-center text-left faq-btn" data-id="3">
                    <span class="text-lg font-semibold">What's included in your fire safety training programs?</span>
                    <i class="fas fa-chevron-down transition-transform duration-200"></i>
                </button>
                <div id="faq-3" class="mt-4 hidden text-gray-700">
                    <p>Our comprehensive training programs cover fire prevention strategies, proper use of fire extinguishers and other safety equipment, emergency evacuation procedures, and first responder basics. We offer customized training for different environments (homes, offices, industrial sites) and can include hands-on fire extinguisher practice. All training is conducted by certified fire safety professionals.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-red-600 to-orange-500 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Enhance Your Fire Safety?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Contact us today to schedule a consultation or learn more about our services</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contactus.php" class="bg-white text-red-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all shadow-lg">
                <i class="fas fa-phone-alt mr-2"></i>Contact Us
            </a>
            <a href="productsPage.php" class="bg-white bg-opacity-0 hover:bg-opacity-10 text-white font-bold py-3 px-8 rounded-lg transition-all border border-white">
                <i class="fas fa-fire-extinguisher mr-2"></i>View Products
            </a>
        </div>
    </div>
</section>

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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        once: true
    });

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
    
    // FAQ toggle functionality
    document.querySelectorAll('.faq-btn').forEach(button => {
        button.addEventListener('click', function() {
            const faqId = this.getAttribute('data-id');
            const answer = document.getElementById(`faq-${faqId}`);
            const icon = this.querySelector('i');
            
            // Toggle answer visibility
            answer.classList.toggle('hidden');
            
            // Rotate chevron icon
            icon.classList.toggle('rotate-180');
            
            // Close other FAQs
            document.querySelectorAll('.faq-btn').forEach(otherBtn => {
                if (otherBtn !== this) {
                    const otherId = otherBtn.getAttribute('data-id');
                    document.getElementById(`faq-${otherId}`).classList.add('hidden');
                    otherBtn.querySelector('i').classList.remove('rotate-180');
                }
            });
        });
    });
</script>

</body>
</html>