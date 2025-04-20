<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FireShield Pro | Professional Fire Safety Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        
        html {
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
        
        .service-card {
            transition: all 0.3s ease;
            transform: translateY(0);
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.3);
        }
        .booking-calendar {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        /* Custom style to ensure proper stacking of sticky elements */
        .sticky-nav {
          position: sticky;
          top: 0;
          z-index: 50;
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
          <div class="hidden md:flex space-x-8">
            <a href="page1.php" class="hover:text-red-500 transition-colors duration-200 py-2">Home</a>
            <a href="productsPage.php" class="hover:text-red-500 transition-colors duration-200 py-2">Products & Equipment</a>
            <a href="service.php" class="text-red-500 font-medium py-2">Services</a>
            <a href="aboutus.php" class="hover:text-red-500 transition-colors duration-200 py-2">About Us</a>
            <a href="contactus.php" class="hover:text-red-500 transition-colors duration-200 py-2">Contact Us</a>
            <a href="login.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">Client Login</a>
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
            <a href="login.php" class="block px-3 py-2 bg-red-600 text-white rounded-md mt-2">Client Login</a>
          </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Professional Fire Safety Services</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Certified experts providing consultation, safety audits, and equipment installation for residential and commercial properties.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Consultation Card -->
            <div class="service-card bg-white rounded-xl shadow-md overflow-hidden border-t-4 border-blue-500">
                <div class="p-8">
                    <div class="text-blue-500 text-4xl mb-6">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Expert Consultation</h3>
                    <p class="text-gray-600 mb-6">
                        Get personalized advice from NFPA-certified professionals to select the right fire safety equipment for your specific needs.
                    </p>
                    <ul class="text-gray-700 mb-8 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mt-1 mr-2"></i>
                            <span>30 or 60 minute sessions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mt-1 mr-2"></i>
                            <span>Virtual or on-site options</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mt-1 mr-2"></i>
                            <span>Compliance guidance</span>
                        </li>
                    </ul>
                    <button onclick="showForm('consultation')" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-medium transition transform hover:scale-105">
                        <i class="fas fa-calendar-check mr-2"></i> Book Consultation
                    </button>
                </div>
            </div>

            <!-- Audit Card -->
            <div class="service-card bg-white rounded-xl shadow-md overflow-hidden border-t-4 border-green-500">
                <div class="p-8">
                    <div class="text-green-500 text-4xl mb-6">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Comprehensive Safety Audit</h3>
                    <p class="text-gray-600 mb-6">
                        Thorough inspection of your property to identify fire risks and compliance gaps with detailed report.
                    </p>
                    <ul class="text-gray-700 mb-8 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Full property assessment</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Regulatory compliance check</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Prioritized recommendations</span>
                        </li>
                    </ul>
                    <button onclick="showForm('audit')" 
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg font-medium transition transform hover:scale-105">
                        <i class="fas fa-calendar-check mr-2"></i> Schedule Audit
                    </button>
                </div>
            </div>

            <!-- Installation Card -->
            <div class="service-card bg-white rounded-xl shadow-md overflow-hidden border-t-4 border-yellow-500">
                <div class="p-8">
                    <div class="text-yellow-500 text-4xl mb-6">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Installation & Maintenance</h3>
                    <p class="text-gray-600 mb-6">
                        Certified technicians for professional installation and regular maintenance of fire safety systems.
                    </p>
                    <ul class="text-gray-700 mb-8 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                            <span>Equipment installation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                            <span>Annual maintenance plans</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                            <span>24/7 emergency service</span>
                        </li>
                    </ul>
                    <button onclick="showForm('installation')" 
                            class="w-full bg-yellow-600 hover:bg-yellow-700 text-white py-3 px-6 rounded-lg font-medium transition transform hover:scale-105">
                        <i class="fas fa-calendar-check mr-2"></i> Book Service
                    </button>
                </div>
            </div>
        </div>

        <!-- Booking Form Section -->
        <div id="bookingForm" class="hidden bg-white rounded-2xl shadow-xl overflow-hidden mb-16">
            <div class="grid md:grid-cols-2">
                <!-- Form Column -->
                <div class="p-10">
                    <h2 id="formTitle" class="text-3xl font-bold text-gray-900 mb-2"></h2>
                    <p id="formSubtitle" class="text-gray-600 mb-8"></p>
                    
                    <form id="serviceForm" onsubmit="handleSubmit(event)" class="space-y-6">
                        <input type="hidden" id="serviceType" name="service_type">
                        
                        <!-- Dynamic fields inserted here -->
                        <div id="serviceSpecificFields"></div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Date</label>
                                <input type="text" name="date" id="bookingDate" placeholder="Select date" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                       required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Time</label>
                                <input type="text" name="time" id="bookingTime" placeholder="Select time" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                       required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <input type="text" name="name" placeholder="Your name" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                   required>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" name="email" placeholder="your@email.com" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                   required>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" name="phone" placeholder="(123) 456-7890" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                                   required>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Additional Notes</label>
                            <textarea name="notes" rows="4" placeholder="Special requirements or details" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-6 rounded-lg transition transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i> Submit Booking Request
                        </button>
                    </form>
                </div>
                
                <!-- Info Column -->
                <div class="booking-calendar p-10 flex flex-col justify-center">
                    <div id="serviceInfoContent" class="space-y-6"></div>
                </div>
            </div>
        </div>

        <!-- Confirmation Message -->
        <div id="confirmationMessage" class="hidden bg-green-50 border-l-4 border-green-500 p-6 mb-16 rounded-lg">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500 text-3xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-medium text-green-800">Booking Request Received!</h3>
                    <div class="mt-2 text-green-700">
                        <p>Thank you for your booking request. Our team will contact you within 24 hours to confirm your appointment.</p>
                        <p class="mt-2 font-medium">Reference: <span id="bookingReference" class="font-bold"></span></p>
                    </div>
                    <div class="mt-4">
                        <button onclick="window.print()" class="text-green-600 hover:text-green-500 font-medium">
                            <i class="fas fa-print mr-2"></i>Print Confirmation
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Trusted by Businesses Nationwide</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">Michael Johnson</h4>
                            <p class="text-gray-600">Facility Manager</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "FireShield Pro's audit identified several critical issues we had missed. Their detailed report helped us achieve full compliance."
                    </p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">Sarah Williams</h4>
                            <p class="text-gray-600">Hotel Owner</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "The installation team was professional and efficient. Our fire system has never worked better. Highly recommend!"
                    </p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/75.jpg" alt="">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">David Chen</h4>
                            <p class="text-gray-600">School Administrator</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "Their consultation saved us thousands by helping us choose the right equipment for our specific needs."
                    </p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Bookings (Simulated) -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="p-10">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Your Recent Bookings</h2>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="bookingsList">
                            <!-- Example bookings -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-comments text-blue-500"></i>
                                        </div>
                                        <div class="ml-4">
                                            <div class="font-medium">Expert Consultation</div>
                                            <div class="text-gray-500">Basic (30 min)</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="font-medium">Mar 15, 2023</div>
                                    <div class="text-gray-500">2:30 PM - 3:00 PM</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-red-600 hover:text-red-900">View Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-8 text-center">
                    <button onclick="showForm('consultation')" 
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-red-600 hover:bg-red-700 transition">
                        <i class="fas fa-plus mr-2"></i> Book Another Service
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="../img_folder/logo_pic.jpg" alt="Fire Safety Logo" class="h-12 w-12 mr-3 rounded-full">
                        <span class="text-2xl font-bold">Sefire<span class="text-red-500">marketing</span></span>
                    </div>
                    <p class="text-gray-400 mb-4">Your trusted partner for comprehensive fire safety solutions.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="page1.html" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="aboutus.html" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="contactus.html" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Safety Audits</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Consultations</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Installation</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Maintenance</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact</h3>
                    <address class="not-italic text-gray-400">
                        <p class="mb-2"><i class="fas fa-map-marker-alt mr-2 text-red-500"></i> 123 Safety Avenue, City</p>
                        <p class="mb-2"><i class="fas fa-phone-alt mr-2 text-red-500"></i> (123) 456-7890</p>
                        <p class="mb-2"><i class="fas fa-envelope mr-2 text-red-500"></i> info@fireshield.com</p>
                    </address>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
                <p>© 2023 FireShield. All rights reserved. | <a href="#" class="hover:text-white">Privacy Policy</a> | <a href="#" class="hover:text-white">Terms of Service</a></p>
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

        // Initialize date/time pickers
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#bookingDate", {
                minDate: "today",
                dateFormat: "M j, Y",
                disable: [
                    function(date) {
                        // Disable weekends
                        return (date.getDay() === 0 || date.getDay() === 6);
                    }
                ]
            });
            
            flatpickr("#bookingTime", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "h:i K",
                minTime: "8:00 AM",
                maxTime: "6:00 PM",
                minuteIncrement: 30
            });
        });

        // Service information templates
        const serviceTemplates = {
            consultation: {
                title: "Book Your Consultation",
                subtitle: "Schedule a session with our fire safety experts",
                info: `
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h4 class="font-bold text-lg mb-3">What to Expect</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-2"></i>
                                <span>Personalized equipment recommendations</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-2"></i>
                                <span>Compliance with local regulations</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-2"></i>
                                <span>Customized solutions for your space</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm mt-6">
                        <h4 class="font-bold text-lg mb-3">Availability</h4>
                        <p class="text-gray-700 mb-2"><i class="far fa-clock text-blue-500 mr-2"></i> Monday-Friday: 9AM-6PM</p>
                        <p class="text-gray-700"><i class="far fa-clock text-blue-500 mr-2"></i> Saturday: 10AM-4PM</p>
                    </div>
                `
            },
            audit: {
                title: "Schedule Your Safety Audit",
                subtitle: "Comprehensive property inspection by certified professionals",
                info: `
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h4 class="font-bold text-lg mb-3">Audit Includes</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Full property risk assessment</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Equipment functionality testing</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Emergency exit evaluation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Detailed compliance report</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm mt-6">
                        <h4 class="font-bold text-lg mb-3">Preparation Tips</h4>
                        <p class="text-gray-700">Please have your property blueprints and existing fire safety documentation ready for review.</p>
                    </div>
                `
            },
            installation: {
                title: "Request Installation Service",
                subtitle: "Professional setup and maintenance of fire safety equipment",
                info: `
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h4 class="font-bold text-lg mb-3">Our Services</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                                <span>Fire extinguisher installation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                                <span>Smoke alarm system setup</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                                <span>Sprinkler system installation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                                <span>Emergency lighting setup</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-2"></i>
                                <span>Annual maintenance contracts</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm mt-6">
                        <h4 class="font-bold text-lg mb-3">Service Areas</h4>
                        <p class="text-gray-700">We service all of Greater Boston and surrounding areas. Contact us for locations beyond 50 miles.</p>
                    </div>
                `
            }
        };

        // Form field templates
        const formFieldTemplates = {
            consultation: `
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Consultation Type</label>
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-center border border-gray-300 rounded-lg p-4 hover:border-blue-500 cursor-pointer">
                            <input type="radio" name="consultation_type" value="basic" class="h-5 w-5 text-blue-600" checked>
                            <div class="ml-3">
                                <span class="block font-medium">Basic Consultation</span>
                                <span class="block text-sm text-gray-600">30 minute session • $150</span>
                            </div>
                        </label>
                        <label class="flex items-center border border-gray-300 rounded-lg p-4 hover:border-blue-500 cursor-pointer">
                            <input type="radio" name="consultation_type" value="advanced" class="h-5 w-5 text-blue-600">
                            <div class="ml-3">
                                <span class="block font-medium">Advanced Consultation</span>
                                <span class="block text-sm text-gray-600">60 minute session • $275</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Meeting Type</label>
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-center border border-gray-300 rounded-lg p-4 hover:border-blue-500 cursor-pointer">
                            <input type="radio" name="meeting_type" value="virtual" class="h-5 w-5 text-blue-600" checked>
                            <div class="ml-3">
                                <span class="block font-medium">Virtual Meeting</span>
                                <span class="block text-sm text-gray-600">Video call (Zoom/Teams)</span>
                            </div>
                        </label>
                        <label class="flex items-center border border-gray-300 rounded-lg p-4 hover:border-blue-500 cursor-pointer">
                            <input type="radio" name="meeting_type" value="onsite" class="h-5 w-5 text-blue-600">
                            <div class="ml-3">
                                <span class="block font-medium">On-Site Visit</span>
                                <span class="block text-sm text-gray-600">Additional travel fee may apply</span>
                            </div>
                        </label>
                    </div>
                </div>
            `,
            audit: `
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Property Type</label>
                    <select name="property_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none">
                        <option value="residential">Residential (Home/Apartment)</option>
                        <option value="commercial">Commercial (Office/Retail)</option>
                        <option value="industrial">Industrial (Warehouse/Factory)</option>
                        <option value="hospitality">Hospitality (Hotel/Restaurant)</option>
                        <option value="institutional">Institutional (School/Hospital)</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Property Address</label>
                    <textarea name="property_address" rows="3" placeholder="Full property address including city and zip code" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none" required></textarea>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Approximate Square Footage</label>
                    <input type="number" name="square_footage" placeholder="e.g. 2500" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none">
                </div>
            `,
            installation: `
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Service Type</label>
                    <select name="installation_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none">
                        <option value="new">New Installation</option>
                        <option value="maintenance">Maintenance Service</option>
                        <option value="repair">Emergency Repair</option>
                        <option value="inspection">System Inspection</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Equipment Needed</label>
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="equipment[]" value="extinguishers" class="h-5 w-5 text-yellow-600 rounded">
                            <span class="text-gray-700">Fire Extinguishers</span>
                        </label>
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="equipment[]" value="alarms" class="h-5 w-5 text-yellow-600 rounded">
                            <span class="text-gray-700">Smoke Alarms</span>
                        </label>
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="equipment[]" value="sprinklers" class="h-5 w-5 text-yellow-600 rounded">
                            <span class="text-gray-700">Sprinkler Systems</span>
                        </label>
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="equipment[]" value="hydrants" class="h-5 w-5 text-yellow-600 rounded">
                            <span class="text-gray-700">Fire Hydrants</span>
                        </label>
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="equipment[]" value="lighting" class="h-5 w-5 text-yellow-600 rounded">
                            <span class="text-gray-700">Emergency Lighting</span>
                        </label>
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="equipment[]" value="other" class="h-5 w-5 text-yellow-600 rounded">
                            <span class="text-gray-700">Other Equipment</span>
                        </label>
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Property Address</label>
                    <textarea name="property_address" rows="3" placeholder="Where service is needed" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none" required></textarea>
                </div>
            `
        };

        // Show the appropriate booking form
        function showForm(serviceType) {
            const template = serviceTemplates[serviceType];
            
            // Update form header
            document.getElementById('formTitle').textContent = template.title;
            document.getElementById('formSubtitle').textContent = template.subtitle;
            
            // Update service type hidden field
            document.getElementById('serviceType').value = serviceType;
            
            // Update service-specific fields
            document.getElementById('serviceSpecificFields').innerHTML = formFieldTemplates[serviceType];
            
            // Update info content
            document.getElementById('serviceInfoContent').innerHTML = template.info;
            
            // Show form and hide confirmation
            document.getElementById('bookingForm').classList.remove('hidden');
            document.getElementById('confirmationMessage').classList.add('hidden');
            
            // Scroll to form
            document.getElementById('bookingForm').scrollIntoView({ behavior: 'smooth' });
            
            // Reset date/time pickers
            flatpickr("#bookingDate").clear();
            flatpickr("#bookingTime").clear();
        }

        // Handle form submission
        function handleSubmit(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const bookingData = {
                service: formData.get('service_type'),
                date: formData.get('date'),
                time: formData.get('time'),
                name: formData.get('name'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                notes: formData.get('notes')
            };
            
            // Add service-specific data
            switch(bookingData.service) {
                case 'consultation':
                    bookingData.consultation_type = formData.get('consultation_type');
                    bookingData.meeting_type = formData.get('meeting_type');
                    break;
                case 'audit':
                    bookingData.property_type = formData.get('property_type');
                    bookingData.property_address = formData.get('property_address');
                    bookingData.square_footage = formData.get('square_footage');
                    break;
                case 'installation':
                    bookingData.installation_type = formData.get('installation_type');
                    bookingData.equipment = formData.getAll('equipment[]');
                    bookingData.property_address = formData.get('property_address');
                    break;
            }
            
            // Generate random booking reference
            const bookingRef = 'FS-' + Math.floor(100000 + Math.random() * 900000);
            
            // In a real app, you would send bookingData to your server here
            console.log('Booking submitted:', bookingData);
            
            // Show confirmation
            document.getElementById('bookingReference').textContent = bookingRef;
            document.getElementById('bookingForm').classList.add('hidden');
            document.getElementById('confirmationMessage').classList.remove('hidden');
            document.getElementById('confirmationMessage').scrollIntoView({ behavior: 'smooth' });
            
            // Add to bookings list
            addBookingToTable(bookingData, bookingRef);
            
            // Reset form
            event.target.reset();
        }

        // Add booking to the table
        function addBookingToTable(bookingData, bookingRef) {
            const bookingsList = document.getElementById('bookingsList');
            
            // Determine service icon and type
            let serviceIcon, serviceType;
            switch(bookingData.service) {
                case 'consultation':
                    serviceIcon = 'fa-comments';
                    serviceType = bookingData.consultation_type === 'basic' ? 'Basic Consultation' : 'Advanced Consultation';
                    break;
                case 'audit':
                    serviceIcon = 'fa-clipboard-check';
                    serviceType = 'Safety Audit';
                    break;
                case 'installation':
                    serviceIcon = 'fa-tools';
                    serviceType = 'Installation Service';
                    break;
            }
            
            // Create new row
            const newRow = document.createElement('tr');
            newRow.className = 'border-t';
            newRow.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10 bg-${bookingData.service === 'consultation' ? 'blue' : bookingData.service === 'audit' ? 'green' : 'yellow'}-100 rounded-full flex items-center justify-center">
                            <i class="fas ${serviceIcon} text-${bookingData.service === 'consultation' ? 'blue' : bookingData.service === 'audit' ? 'green' : 'yellow'}-500"></i>
                        </div>
                        <div class="ml-4">
                            <div class="font-medium">${serviceType}</div>
                            <div class="text-gray-500">${bookingData.service === 'consultation' ? (bookingData.meeting_type === 'virtual' ? 'Virtual' : 'On-Site') : ''}</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium">${bookingData.date}</div>
                    <div class="text-gray-500">${bookingData.time}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        Pending
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button class="text-red-600 hover:text-red-900">View Details</button>
                </td>
            `;
            
            // Add to beginning of table
            bookingsList.insertBefore(newRow, bookingsList.firstChild);
        }
    </script>
</body>
</html>