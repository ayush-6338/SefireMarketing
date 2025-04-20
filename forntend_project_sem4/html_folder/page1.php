<?php session_start(); include 'includes/config.php'; // Make sure this path is correct ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FireShield | Premium Fire Safety Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Add AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        html {
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
        .hero-gradient {
            background-image: url(../img_folder/generated\ img.png);
        }
        .emergency-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
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
    <meta name="description" content="FireShield provides NFPA-certified fire safety equipment, professional training, and 24/7 emergency support to protect homes and businesses.">
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-black shadow-md sticky-nav text-white">
        <div class="container mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <img src="../img_folder/logo_pic.jpg" alt="Fire Safety Logo" class="h-11 w-11 mr-2 rounded-full">
                <span class="text-xl font-bold">Sefire<span class="text-red-600">marketing</span></span>
            </div>
            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="page1.php" class="text-red-500 font-medium transition-colors duration-200 py-2">Home</a>
                <a href="productsPage.php" class="hover:text-red-500 transition-colors duration-200 py-2">Products & Equipment</a>
                <a href="service.php" class="hover:text-red-500 transition-colors duration-200 py-2">Services</a>
                <a href="aboutus.php" class="hover:text-red-500 transition-colors duration-200 py-2">About Us</a>
                <a href="contactus.php" class="hover:text-red-500 transition-colors duration-200 py-2">Contact Us</a>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-300"><?php echo htmlspecialchars($_SESSION['email']); ?></span>
                        <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md transition-colors">
                            <i class="fas fa-sign-out-alt mr-1"></i> Logout
                        </a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="hover:text-red-500 transition-colors duration-200 py-2">Login</a>
                <?php endif; ?>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden focus:outline-none p-2">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-900">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="page1.php" class="block px-3 py-2 hover:bg-gray-800 text-red-500 rounded-md">Home</a>
                <a href="productsPage.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Products & Equipment</a>
                <a href="service.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Services</a>
                <a href="aboutus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">About Us</a>
                <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Contact Us</a>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <div class="pt-2 border-t border-gray-700">
                        <div class="px-3 py-2 text-gray-300">Logged in as: <?php echo htmlspecialchars($_SESSION['email']); ?></div>
                        <a href="logout.php" class="block px-3 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Login</a>
                <?php endif; ?>
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

    <!-- Hero Section with AOS Animations -->
    <section class="relative hero-gradient text-white min-h-[80vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight" data-aos="fade-down" data-aos-duration="1000">
                Protecting Lives & Property<br>From Fire Hazards
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                NFPA-certified equipment and expert training to keep your home and business safe
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="productsPage.php" class="bg-white text-red-600 font-bold py-4 px-8 rounded-lg hover:bg-gray-100 transition-all shadow-lg" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
                    <i class="fas fa-fire-extinguisher mr-2"></i>Shop Equipment
                </a>
                <a href="service.php" class="bg-black bg-opacity-40 hover:bg-opacity-60 text-white font-bold py-4 px-8 rounded-lg transition-all border border-white border-opacity-30" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="600">
                    <i class="fas fa-clipboard-check mr-2"></i>Free Safety Audit
                </a>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section class="py-8 bg-white shadow-sm">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="text-3xl font-bold text-red-600">10,000+</div>
                    <div class="text-gray-600">Equipment Sold</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="text-3xl font-bold text-red-600">500+</div>
                    <div class="text-gray-600">Safety Audits</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="text-3xl font-bold text-red-600">24/7</div>
                    <div class="text-gray-600">Emergency Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up">Our Fire Safety Solutions</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto" data-aos="fade-up" data-aos-delay="200"></div>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="0">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Fire Extinguishers</h3>
                    <p class="text-gray-600 mb-4">CO2, Foam, and Powder extinguishers for all fire types.</p>
                    <a href="productsPage.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        Shop Now <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Smoke Detectors</h3>
                    <p class="text-gray-600 mb-4">Smart alarms with mobile alerts and 10-year batteries.</p>
                    <a href="productsPage.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        Explore Options <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-vest"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Safety Kits</h3>
                    <p class="text-gray-600 mb-4">Complete home/office kits with fire blankets and masks.</p>
                    <a href="productsPage.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        View Kits <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md border-t-4 border-red-600" data-aos="fade-up" data-aos-delay="600">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-sprinkler"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sprinkler Systems</h3>
                    <p class="text-gray-600 mb-4">Commercial-grade automatic fire suppression systems.</p>
                    <a href="productsPage.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Quick Actions -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <a href="tel:101" class="emergency-card bg-red-600 hover:bg-red-700 text-white p-6 rounded-xl shadow-md flex flex-col items-center justify-center transition-all" data-aos="zoom-in">
                    <i class="fas fa-fire-alt text-3xl mb-3"></i>
                    <h3 class="text-xl font-bold mb-1">Fire Emergency</h3>
                    <p>Call 101</p>
                </a>
                <a href="tel:102" class="emergency-card bg-blue-600 hover:bg-blue-700 text-white p-6 rounded-xl shadow-md flex flex-col items-center justify-center transition-all" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-ambulance text-3xl mb-3"></i>
                    <h3 class="text-xl font-bold mb-1">Medical Emergency</h3>
                    <p>Call 102</p>
                </a>
                <a href="contactus.php" class="emergency-card bg-orange-600 hover:bg-orange-700 text-white p-6 rounded-xl shadow-md flex flex-col items-center justify-center transition-all" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-headset text-3xl mb-3"></i>
                    <h3 class="text-xl font-bold mb-1">Safety Consultation</h3>
                    <p>Contact Experts</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up">Professional Fire Safety Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">Comprehensive solutions tailored to your needs</p>
                <div class="w-20 h-1 bg-red-600 mx-auto mt-4" data-aos="fade-up" data-aos-delay="400"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="0">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Safety Audits</h3>
                    <p class="text-gray-600 mb-6">Thorough inspection of your property to identify fire risks and compliance gaps.</p>
                    <a href="service.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        Schedule Audit <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Training Programs</h3>
                    <p class="text-gray-600 mb-6">Hands-on workshops for proper equipment use and emergency response.</p>
                    <a href="service.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        View Courses <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Installation & Maintenance</h3>
                    <p class="text-gray-600 mb-6">Professional setup and annual maintenance of all fire safety systems.</p>
                    <a href="service.php" class="text-red-600 font-medium hover:underline inline-flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up">Trusted by Businesses & Homeowners</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto" data-aos="fade-up" data-aos-delay="200"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl mr-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The fire safety audit identified several risks we weren't aware of. Their team helped us implement solutions that made our warehouse much safer."</p>
                    <div class="flex items-center">
                        <img src="../img_folder/naaz.jpeg" alt="Naaz" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Naaz</h4>
                            <p class="text-gray-500 text-sm">Warehouse Manager</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl mr-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The training was excellent! Now I feel confident handling fire extinguishers and executing our evacuation plan."</p>
                    <div class="flex items-center">
                        <img src="../img_folder/balaji.png" alt="Bala ji" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Bala ji</h4>
                            <p class="text-gray-500 text-sm">Our Friend</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl mr-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Installed their smoke detectors throughout our home. Professional service and the equipment is top quality with a 10-year warranty."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Robert T." class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Robert T.</h4>
                            <p class="text-gray-500 text-sm">Homeowner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-red-600 to-orange-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Ready to Enhance Your Fire Safety?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">Contact us today for a free consultation or to schedule a safety audit</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contactus.php" class="bg-white text-red-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all shadow-lg" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-phone-alt mr-2"></i>Call Now
                </a>
                <a href="contactus.php" class="bg-black bg-opacity-30 hover:bg-opacity-40 text-white font-bold py-3 px-8 rounded-lg transition-all shadow-lg border border-white border-opacity-30" data-aos="zoom-in" data-aos-delay="600">
                    <i class="fas fa-envelope mr-2"></i>Email Us
                </a>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div data-aos="fade-up">
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
    
    <!-- Add AOS JS and initialize it -->
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