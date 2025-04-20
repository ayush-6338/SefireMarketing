<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FireShield - Premium Fire Safety Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .product-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px; 
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        .modal-image {
            height: 300px;
            border: 2px solid rgb(69, 65, 65); 
            border-radius: 30px;
            object-fit: contain;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <meta name="description" content="FireShield - Your premier source for fire safety equipment. Shop top-quality fire extinguishers, alarms, and protective gear with secure checkout.">
    <meta property="og:title" content="FireShield - Premium Fire Safety Equipment">
    <meta property="og:description" content="Shop professional-grade fire safety products with secure checkout and fast delivery.">
    <meta property="og:image" content="../img_folder/istockphoto-136916670-2048x2048.jpg">
    <meta property="og:url" content="https://fireshield.com">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body class="font-sans bg-gray-100">

 <!-- Navigation -->
 <nav class="bg-black shadow-md sticky top-0 z-50 text-white">
  <div class="container mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
    <!-- Logo/Brand -->
    <div class="flex items-center">
      <img src="../img_folder/logo_pic.jpg" alt="Fire Safety Logo" class="h-11 w-11 mr-2 rounded-full">
      <span class="text-xl font-bold">Sefire<span class="text-red-600">marketing</span></span>
    </div>
    
    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center space-x-8">
      <a href="page1.php" class="hover:text-red-500 transition-colors duration-200 py-2">Home</a>
      <a href="productsPage.php" class="text-red-500 font-medium transition-colors duration-200 py-2">Products & Equipment</a>
      <a href="service.php" class="hover:text-red-500 transition-colors duration-200 py-2">Services</a>
      <a href="aboutus.php" class="hover:text-red-500 transition-colors duration-200 py-2">About Us</a>
      <a href="contactus.php" class="hover:text-red-500 transition-colors duration-200 py-2">Contact Us</a>
      <!-- <a href="contactus.php" class="hover:text-red-500 transition-colors duration-200 py-2">Login</a> -->
      <div class="relative">
        <button id="cart-button" class="hover:text-red-500 transition-colors duration-200">
          <i class="fas fa-shopping-cart text-xl"></i>
          <span id="cart-count" class="cart-badge hidden">0</span>
        </button>
      </div>
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
      <a href="productsPage.php" class="block px-3 py-2 hover:bg-gray-800 text-red-500 rounded-md">Products & Equipment</a>
      <a href="service.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Services</a>
      <a href="aboutus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">About Us</a>
      <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Contact Us</a>
      <!-- <a href="contactus.php" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md">Login</a> -->
      <button id="mobile-cart-button" class="block px-3 py-2 hover:bg-gray-800 hover:text-red-500 rounded-md text-left w-full">
        <i class="fas fa-shopping-cart mr-2"></i> Cart <span id="mobile-cart-count" class="cart-badge hidden">0</span>
      </button>
    </div>
  </div>
</nav>

<!-- Cart Sidebar -->
<div id="cart-sidebar" class="fixed top-0 right-0 h-full w-full md:w-96 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50 overflow-y-auto">
  <div class="p-6">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold">Your Cart</h2>
      <button id="close-cart" class="text-gray-500 hover:text-gray-800">
        <i class="fas fa-times text-xl"></i>
      </button>
    </div>
    
    <div id="cart-items" class="mb-6">
      <!-- Cart items will be dynamically added here -->
      <p id="empty-cart-message" class="text-gray-500 text-center py-4">Your cart is empty</p>
    </div>
    
    <div class="border-t pt-4">
      <div class="flex justify-between mb-2">
        <span class="font-medium">Subtotal:</span>
        <span id="cart-subtotal" class="font-bold">Rs 0</span>
      </div>
      <div class="flex justify-between mb-4">
        <span class="font-medium">Shipping:</span>
        <span id="cart-shipping" class="font-bold">Rs 0</span>
      </div>
      <div class="flex justify-between text-lg">
        <span class="font-bold">Total:</span>
        <span id="cart-total" class="font-bold text-red-600">Rs 0</span>
      </div>
      
      <button id="checkout-button" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-bold mt-6">
        Proceed to Checkout
      </button>
    </div>
  </div>
</div>

<!-- Product Listing -->
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center mb-2">Fire Safety Products</h1>
    <p class="text-center text-gray-600 mb-8">Premium quality fire safety equipment for home and business</p>
    
    <div class="flex justify-between items-center mb-6">
      <div class="flex items-center">
        <span class="mr-2">Sort by:</span>
        <select id="sort-products" class="border rounded px-3 py-1">
          <option value="price-asc">Price: Low to High</option>
          <option value="price-desc">Price: High to Low</option>
          <option value="name-asc">Name: A-Z</option>
          <option value="name-desc">Name: Z-A</option>
        </select>
      </div>
      <div>
        <span id="product-count" class="font-medium">20 products</span>
      </div>
    </div>
    
    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Products will be dynamically injected here -->
    </div>
</div>

<!-- Product Modal -->
<div id="product-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg p-6 w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 bg-white rounded-full p-2 shadow">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="md:flex gap-6">
          <div class="md:w-1/2">
            <img id="modal-image" src="" alt="Product Image" class="modal-image rounded-md mb-4" />
          </div>
          
          <div class="md:w-1/2">
            <h2 id="modal-title" class="text-2xl font-bold mt-4"></h2>
            <div class="flex items-center my-2">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <span class="text-gray-600 ml-2">(24 reviews)</span>
            </div>
            <p id="modal-price" class="text-2xl font-bold text-red-600 my-3"></p>
            <p id="modal-description" class="text-gray-600 mb-6"></p>
            
            <div class="mb-6">
              <label for="quantity" class="block mb-2 font-medium">Quantity:</label>
              <div class="flex items-center">
                <button id="decrease-qty" class="bg-gray-200 px-3 py-1 rounded-l">-</button>
                <input type="number" id="quantity" value="1" min="1" class="w-16 text-center border-t border-b border-gray-300 py-1">
                <button id="increase-qty" class="bg-gray-200 px-3 py-1 rounded-r">+</button>
              </div>
            </div>
            
            <div class="flex gap-3">
              <button id="add-to-cart-modal" class="flex-1 bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-bold">
                <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
              </button>
              <button id="buy-now-button" class="flex-1 bg-black hover:bg-gray-800 text-white py-3 rounded-lg font-bold">
                Buy Now
              </button>
            </div>
            
            <div class="mt-6 pt-6 border-t">
              <h3 class="font-bold mb-2">Product Details</h3>
              <ul id="product-details" class="list-disc pl-5 text-gray-600">
                <!-- Details will be added dynamically -->
              </ul>
            </div>
          </div>
        </div>
    </div>
</div>

<!-- Checkout Modal -->
<div id="checkout-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
  <div class="bg-white rounded-lg p-6 w-full max-w-2xl max-h-[90vh] overflow-y-auto">
    <button onclick="closeCheckoutModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 bg-white rounded-full p-2 shadow">
      <i class="fas fa-times"></i>
    </button>
    
    <h2 class="text-2xl font-bold mb-6">Checkout</h2>
    
    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <h3 class="font-bold text-lg mb-4">Shipping Information</h3>
        <form action="https://api.web3forms.com/submit" method="POST">

          <input type="hidden" name="access_key" value="18a7d0a0-726a-4509-9574-353aaff57cc0">
          <div class="mb-4">
            <label for="full-name" class="block mb-1">Full Name</label>
            <input type="text" id="full-name" name="name" class="w-full border rounded px-3 py-2" required>
          </div>
          <div class="mb-4">
            <label for="email" class="block mb-1">Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" required>
          </div>
          <div class="mb-4">
            <label for="phone" class="block mb-1">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="w-full border rounded px-3 py-2" required>
          </div>
          <div class="mb-4">
            <label for="address"  name="address"  class="block mb-1">Address</label>
            <textarea id="address" rows="3" name="address" class="w-full border rounded px-3 py-2" required></textarea>
          </div>
          <div class="mb-4">
            <label for="city"  class="block mb-1">City</label>
            <input type="text" id="city" name="city" class="w-full border rounded px-3 py-2" required>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label for="state" class="block mb-1">State</label>
              <input type="text" id="state" name="state"class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
              <label for="zip" class="block mb-1">ZIP Code</label>
              <input type="text" id="zip" name="zip" class="w-full border rounded px-3 py-2" required>
            </div>
          </div>
        </form>
      </div>
      
      <div>
        <h3 class="font-bold text-lg mb-4">Order Summary</h3>
        <div id="checkout-items" class="mb-4">
          <!-- Checkout items will be added here -->
        </div>
        
        <div class="border-t pt-4">
          <div class="flex justify-between mb-2">
            <span>Subtotal:</span>
            <span id="checkout-subtotal">Rs 0</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Shipping:</span>
            <span id="checkout-shipping">Rs 0</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Tax:</span>
            <span id="checkout-tax">Rs 0</span>
          </div>
          <div class="flex justify-between font-bold text-lg mt-4">
            <span>Total:</span>
            <span id="checkout-total" class="text-red-600">Rs 0</span>
          </div>
        </div>
        
        <div class="mt-6">
          <h3 class="font-bold text-lg mb-4">Payment Method</h3>
          <div class="space-y-3">
            <div class="flex items-center">
              <input type="radio" id="credit-card" name="payment" value="credit-card" checked class="mr-2">
              <label for="credit-card">Credit/Debit Card</label>
            </div>
            <div class="flex items-center">
              <input type="radio" id="paypal" name="payment" value="paypal" class="mr-2">
              <label for="paypal">PayPal</label>
            </div>
            <div class="flex items-center">
              <input type="radio" id="cod" name="payment" value="cod" class="mr-2">
              <label for="cod">Cash on Delivery</label>
            </div>
          </div>
          
          <div id="credit-card-form" class="mt-4">
            <div class="mb-3">
              <label for="card-number" class="block mb-1">Card Number</label>
              <input type="text" id="card-number" placeholder="1234 5678 9012 3456" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-3">
              <label for="card-name" class="block mb-1">Name on Card</label>
              <input type="text" id="card-name" placeholder="John Doe" class="w-full border rounded px-3 py-2">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="card-expiry" class="block mb-1">Expiry Date</label>
                <input type="text" id="card-expiry" placeholder="MM/YY" class="w-full border rounded px-3 py-2">
              </div>
              <div>
                <label for="card-cvv" class="block mb-1">CVV</label>
                <input type="text" id="card-cvv" placeholder="123" class="w-full border rounded px-3 py-2">
              </div>
            </div>
          </div>
          
          <button id="place-order-button" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-bold mt-6">
            Place Order
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Order Confirmation Modal -->
<div id="confirmation-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
  <div class="bg-white rounded-lg p-8 w-full max-w-md text-center">
    <div class="text-green-500 text-5xl mb-4">
      <i class="fas fa-check-circle"></i>
    </div>
    <h2 class="text-2xl font-bold mb-2">Order Confirmed!</h2>
    <p class="text-gray-600 mb-6">Thank you for your purchase. Your order has been placed successfully.</p>
    <p class="mb-4">Order ID: <span id="order-id" class="font-bold">FS-2023-12345</span></p>
    <p class="mb-6">We've sent a confirmation email to <span id="confirmation-email" class="font-bold">your@email.com</span></p>
    <button onclick="closeConfirmationModal()" class="bg-red-600 hover:bg-red-700 text-white py-2 px-6 rounded-lg font-bold">
      Continue Shopping
    </button>
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
    // Enhanced Product Data with more details
    const products = [
        { 
            id: 1, 
            name: "Fire Extinguisher (5kg)", 
            image: "../img_folder/fire_extinguisher.jpg", 
            description: "High-performance ABC dry chemical fire extinguisher suitable for most fire types including electrical, liquid, and solid material fires.", 
            price: "Rs 1,499",
            details: [
                "5kg capacity",
                "ABC dry chemical powder",
                "Suitable for Class A, B, and C fires",
                "2-year warranty",
                "ISI certified"
            ],
            stock: 15
        },
        { 
            id: 2, 
            name: "Smart Smoke Detector", 
            image: "../img_folder/smoke_detector.jpg", 
            description: "Smart smoke detector with 85dB alarm and mobile app connectivity for real-time alerts and battery monitoring.", 
            price: "Rs 2,999",
            details: [
                "Wi-Fi enabled with mobile app",
                "10-year sensor life",
                "85dB alarm sound",
                "Low battery warning",
                "Test button for regular checks"
            ],
            stock: 8
        },
        { 
            id: 3, 
            name: "Fire Blanket (1m x 1m)", 
            image: "../img_folder/fire_blanket.jpg", 
            description: "Premium fire blanket made from fiberglass for smothering small fires, especially kitchen fires.", 
            price: "Rs 599",
            details: [
                "1m x 1m size",
                "Fiberglass material",
                "Withstands up to 500°C",
                "Easy to use - just pull and place",
                "Reusable (after inspection)"
            ],
            stock: 22
        },
        { 
            id: 4, 
            name: "Industrial Safety Helmet", 
            image: "../img_folder/safety_helmet.jpg", 
            description: "Durable safety helmet with adjustable headband and ventilation slots for firefighting and industrial use.", 
            price: "Rs 1,599",
            details: [
                "High-density polyethylene",
                "Adjustable headband",
                "Ventilation slots",
                "Chin strap included",
                "Meets IS 2925 standards"
            ],
            stock: 14
        },
        { 
            id: 5, 
            name: "Fire Hose (20m)", 
            image: "../img_folder/fire_hose.jpg", 
            description: "Flexible and durable fire hose with brass fittings, suitable for commercial and industrial use.", 
            price: "Rs 3,815",
            details: [
                "20 meters length",
                "2.5 inch diameter",
                "Reinforced rubber construction",
                "Brass fittings",
                "Working pressure: 10 bar"
            ],
            stock: 5
        },
        { 
            id: 6, 
            name: "LED Emergency Light", 
            image: "../img_folder/emergency_light.jpg", 
            description: "Bright LED emergency light with 3-hour battery backup and automatic activation during power outages.", 
            price: "Rs 997",
            details: [
                "10W LED brightness",
                "3-hour backup",
                "Auto on/off",
                "Wall mountable",
                "Includes test button"
            ],
            stock: 18
        },
        { 
            id: 7, 
            name: "Wireless Fire Alarm", 
            image: "../img_folder/fire_alarm.jpg", 
            description: "Wireless interconnected fire alarm system with 85dB sounder and 10-year battery life.", 
            price: "Rs 1,249",
            details: [
                "Wireless interconnection",
                "85dB alarm",
                "10-year sealed battery",
                "Test button",
                "LED status indicator"
            ],
            stock: 12
        },
        { 
            id: 8, 
            name: "Heat-Resistant Gloves", 
            image: "../img_folder/safety_gloves.jpg", 
            description: "Pair of heat-resistant gloves suitable for handling hot objects up to 500°C for short periods.", 
            price: "Rs 600",
            details: [
                "Withstands up to 500°C",
                "Kevlar and fiberglass construction",
                "Reinforced palms",
                "Adjustable wrist strap",
                "Pair included"
            ],
            stock: 25
        },
        { 
            id: 9, 
            name: "Gas Mask with Filter", 
            image: "../img_folder/gas_mask.jpg", 
            description: "Full-face gas mask with replaceable filters for protection against smoke and toxic gases.", 
            price: "Rs 849",
            details: [
                "Full face coverage",
                "Replaceable filters",
                "Adjustable straps",
                "Anti-fog lens",
                "Includes carrying case"
            ],
            stock: 7
        },
        { 
            id: 10, 
            name: "Fire Axe (5lb)", 
            image: "../img_folder/fire_axe.jpg", 
            description: "Heavy-duty fire axe with fiberglass handle and rubber grip for rescue operations.", 
            price: "Rs 590",
            details: [
                "5lb head weight",
                "Fiberglass handle",
                "Rubber grip",
                "Includes wall mount",
                "Sharp blade and pick"
            ],
            stock: 9
        },
        { 
            id: 11, 
            name: "Fireproof Suit", 
            image: "../img_folder/fireproof_suit.jpg", 
            description: "Complete fire-resistant suit for industrial workers and firefighters with reflective stripes.", 
            price: "Rs 1,20,000",
            details: [
                "Full body coverage",
                "Withstands 1000°C for 30 seconds",
                "Reflective stripes",
                "Includes hood and gloves",
                "Multiple size options"
            ],
            stock: 3
        },
        { 
            id: 12, 
            name: "Sprinkler System Kit", 
            image: "../img_folder/sprinkler_system.jpg", 
            description: "Complete automatic fire sprinkler system kit for home or small business installation.", 
            price: "Rs 4,599",
            details: [
                "4 sprinkler heads",
                "Temperature activated",
                "Includes piping and fittings",
                "Covers 20 sqm area",
                "Professional installation recommended"
            ],
            stock: 4
        },
        { 
            id: 13, 
            name: "Steel-Toe Safety Boots", 
            image: "../img_folder/safety_boots.jpg", 
            description: "Industrial-grade safety boots with steel toe cap and slip-resistant sole.", 
            price: "Rs 8,599",
            details: [
                "Steel toe protection",
                "Slip-resistant sole",
                "Waterproof",
                "Ankle support",
                "Available in multiple sizes"
            ],
            stock: 6
        },
        { 
            id: 14, 
            name: "First Aid Kit (50 items)", 
            image: "../img_folder/first_aid_kit.jpg", 
            description: "Comprehensive first aid kit with 50 essential items for emergency treatment.", 
            price: "Rs 2,999",
            details: [
                "50 essential items",
                "Includes bandages, antiseptics, tools",
                "Durable plastic case",
                "Wall-mountable",
                "5-year shelf life"
            ],
            stock: 11
        },
        { 
            id: 15, 
            name: "Fire Extinguisher Stand", 
            image: "../img_folder/extinguisher_stand.jpg", 
            description: "Sturdy metal stand for mounting fire extinguishers in visible, accessible locations.", 
            price: "Rs 4,999",
            details: [
                "Heavy-duty steel",
                "Wall mountable",
                "Fits most extinguishers",
                "Red powder coating",
                "Includes mounting hardware"
            ],
            stock: 8
        },
        { 
            id: 16, 
            name: "Safety Goggles", 
            image: "../img_folder/safety_goggles.jpg", 
            description: "Anti-fog safety goggles with UV protection and comfortable fit for industrial use.", 
            price: "Rs 3,900",
            details: [
                "Anti-fog coating",
                "UV protection",
                "Adjustable strap",
                "Ventilated design",
                "Meets ANSI Z87.1 standards"
            ],
            stock: 15
        },
        { 
            id: 17, 
            name: "2-Story Fire Escape Ladder", 
            image: "../img_folder/fire_escape_ladder.jpg", 
            description: "Portable fire escape ladder that hooks onto windows for emergency evacuation from second floors.", 
            price: "Rs 8,199",
            details: [
                "Supports up to 150kg",
                "Folds for compact storage",
                "Anti-slip rungs",
                "Easy to deploy",
                "Tested to safety standards"
            ],
            stock: 5
        },
        { 
            id: 18, 
            name: "Carbon Monoxide Detector", 
            image: "../img_folder/co_detector.jpg", 
            description: "Digital carbon monoxide detector with LCD display and 85dB alarm.", 
            price: "Rs 3,359",
            details: [
                "Digital LCD display",
                "85dB alarm",
                "Battery operated",
                "Peak level memory",
                "Test/reset button"
            ],
            stock: 9
        },
        { 
            id: 19, 
            name: "Emergency Whistle", 
            image: "../img_folder/emergency_whistle.jpg", 
            description: "Loud emergency whistle with lanyard for attracting attention during emergencies.", 
            price: "Rs 499",
            details: [
                "120dB sound",
                "Includes lanyard",
                "Plastic construction",
                "Pea-less design",
                "Floats in water"
            ],
            stock: 30
        },
        { 
            id: 20, 
            name: "Fire Safety Manual", 
            image: "../img_folder/safety_manual.jpg", 
            description: "Comprehensive fire safety manual with prevention tips and emergency procedures.", 
            price: "Rs 599",
            details: [
                "200 pages",
                "Illustrated instructions",
                "Prevention and response guide",
                "Checklists and templates",
                "Spiral bound"
            ],
            stock: 20
        }
    ];

    // Shopping Cart
    let cart = [];
    
    // DOM Elements
    const productList = document.getElementById("product-list");
    const cartCount = document.getElementById("cart-count");
    const mobileCartCount = document.getElementById("mobile-cart-count");
    const cartItems = document.getElementById("cart-items");
    const emptyCartMessage = document.getElementById("empty-cart-message");
    const cartSubtotal = document.getElementById("cart-subtotal");
    const cartShipping = document.getElementById("cart-shipping");
    const cartTotal = document.getElementById("cart-total");
    const checkoutItems = document.getElementById("checkout-items");
    const checkoutSubtotal = document.getElementById("checkout-subtotal");
    const checkoutShipping = document.getElementById("checkout-shipping");
    const checkoutTax = document.getElementById("checkout-tax");
    const checkoutTotal = document.getElementById("checkout-total");
    const productCount = document.getElementById("product-count");
    
    // Modal Elements
    const modalImage = document.getElementById("modal-image");
    const modalTitle = document.getElementById("modal-title");
    const modalDescription = document.getElementById("modal-description");
    const modalPrice = document.getElementById("modal-price");
    const quantityInput = document.getElementById("quantity");
    const productDetails = document.getElementById("product-details");
    
    // Buttons
    const cartButton = document.getElementById("cart-button");
    const mobileCartButton = document.getElementById("mobile-cart-button");
    const closeCartButton = document.getElementById("close-cart");
    const checkoutButton = document.getElementById("checkout-button");
    const placeOrderButton = document.getElementById("place-order-button");
    const buyNowButton = document.getElementById("buy-now-button");
    const addToCartModal = document.getElementById("add-to-cart-modal");
    const decreaseQty = document.getElementById("decrease-qty");
    const increaseQty = document.getElementById("increase-qty");
    
    // Modals
    const cartSidebar = document.getElementById("cart-sidebar");
    const productModal = document.getElementById("product-modal");
    const checkoutModal = document.getElementById("checkout-modal");
    const confirmationModal = document.getElementById("confirmation-modal");
    
    // Sort Selector
    const sortSelector = document.getElementById("sort-products");
    
    // Current product in modal
    let currentProduct = null;
    
    // Initialize the page
    document.addEventListener("DOMContentLoaded", function() {
        loadProducts();
        updateCartCount();
        
        // Event listeners
        cartButton.addEventListener("click", toggleCart);
        mobileCartButton.addEventListener("click", toggleCart);
        closeCartButton.addEventListener("click", toggleCart);
        checkoutButton.addEventListener("click", openCheckoutModal);
        placeOrderButton.addEventListener("click", placeOrder);
        buyNowButton.addEventListener("click", buyNow);
        addToCartModal.addEventListener("click", addToCartFromModal);
        decreaseQty.addEventListener("click", decreaseQuantity);
        increaseQty.addEventListener("click", increaseQuantity);
        sortSelector.addEventListener("change", sortProducts);
        
        // Payment method toggle
        document.querySelectorAll('input[name="payment"]').forEach(radio => {
            radio.addEventListener("change", function() {
                document.getElementById("credit-card-form").style.display = 
                    this.value === "credit-card" ? "block" : "none";
            });
        });
    });
    
    // Mobile menu toggle functionality
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    
    mobileMenuButton.addEventListener("click", function() {
        mobileMenu.classList.toggle("hidden");
        
        // Change icon based on menu state
        const icon = mobileMenuButton.querySelector("i");
        if (mobileMenu.classList.contains("hidden")) {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
        } else {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");
        }
    });
    
    // Close mobile menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll("a");
    mobileLinks.forEach(link => {
        link.addEventListener("click", function() {
            mobileMenu.classList.add("hidden");
            mobileMenuButton.querySelector("i").classList.remove("fa-times");
            mobileMenuButton.querySelector("i").classList.add("fa-bars");
        });
    });
    
    // Function to Load Products with sorting
    function loadProducts() {
        productList.innerHTML = "";
        productCount.textContent = `${products.length} products`;
        
        products.forEach(product => {
            const productCard = `
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative overflow-hidden" style="height: 300px;">
                        <img src="${product.image}" alt="${product.name}" class="product-image w-full h-full object-cover hover:scale-105 transition duration-300" />
                        ${product.stock < 5 ? `<span class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded">Low Stock</span>` : ""}
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-1">${product.name}</h3>
                        <p class="text-gray-500 text-sm mb-2 line-clamp-2">${product.description}</p>
                        <p class="text-red-600 font-bold mb-3">${product.price}</p>
                        <div class="flex justify-between items-center">
                            <button onclick="openModal(${product.id})" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View Details</button>
                            <button onclick="addToCart(${product.id}, 1, event)" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">
                                <i class="fas fa-shopping-cart mr-1"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
            `;
            productList.innerHTML += productCard;
        });
    }
    
    // Sort products
    function sortProducts() {
        const value = sortSelector.value;
        
        if (value === "price-asc") {
            products.sort((a, b) => parseFloat(a.price.replace(/[^0-9.]/g, "")) - parseFloat(b.price.replace(/[^0-9.]/g, "")));
        } else if (value === "price-desc") {
            products.sort((a, b) => parseFloat(b.price.replace(/[^0-9.]/g, "")) - parseFloat(a.price.replace(/[^0-9.]/g, "")));
        } else if (value === "name-asc") {
            products.sort((a, b) => a.name.localeCompare(b.name));
        } else if (value === "name-desc") {
            products.sort((a, b) => b.name.localeCompare(a.name));
        }
        
        loadProducts();
    }
    
    // Function to Open Modal and Show Product Details
    function openModal(id) {
        currentProduct = products.find(p => p.id === id);
        if (currentProduct) {
            modalImage.src = currentProduct.image;
            modalTitle.textContent = currentProduct.name;
            modalDescription.textContent = currentProduct.description;
            modalPrice.textContent = currentProduct.price;
            quantityInput.value = 1;
            
            // Add product details
            productDetails.innerHTML = "";
            currentProduct.details.forEach(detail => {
                const li = document.createElement("li");
                li.textContent = detail;
                productDetails.appendChild(li);
            });
            
            productModal.classList.remove("hidden");
        }
    }
    
    // Function to Close Modal
    function closeModal() {
        productModal.classList.add("hidden");
        currentProduct = null;
    }
    
    // Close checkout modal
    function closeCheckoutModal() {
        checkoutModal.classList.add("hidden");
    }
    
    // Close confirmation modal
    function closeConfirmationModal() {
        confirmationModal.classList.add("hidden");
    }
    
    // Toggle cart sidebar
    function toggleCart() {
        cartSidebar.classList.toggle("translate-x-full");
        if (!cartSidebar.classList.contains("translate-x-full")) {
            updateCartDisplay();
        }
    }
    
    // Open checkout modal
    function openCheckoutModal() {
        if (cart.length === 0) return;
        updateCheckoutDisplay();
        checkoutModal.classList.remove("hidden");
        cartSidebar.classList.add("translate-x-full");
    }
    
    // Update cart count display
    function updateCartCount() {
        const count = cart.reduce((total, item) => total + item.quantity, 0);
        cartCount.textContent = count;
        mobileCartCount.textContent = count;
        
        if (count > 0) {
            cartCount.classList.remove("hidden");
            mobileCartCount.classList.remove("hidden");
        } else {
            cartCount.classList.add("hidden");
            mobileCartCount.classList.add("hidden");
        }
    }
    
    // Update cart display
    function updateCartDisplay() {
        cartItems.innerHTML = "";
        
        if (cart.length === 0) {
            emptyCartMessage.classList.remove("hidden");
            cartSubtotal.textContent = "Rs 0";
            cartShipping.textContent = "Rs 0";
            cartTotal.textContent = "Rs 0";
            return;
        }
        
        emptyCartMessage.classList.add("hidden");
        
        let subtotal = 0;
        
        cart.forEach(item => {
            const product = products.find(p => p.id === item.id);
            const itemTotal = parseFloat(product.price.replace(/[^0-9.]/g, "")) * item.quantity;
            subtotal += itemTotal;
            
            const cartItem = document.createElement("div");
            cartItem.className = "flex justify-between items-center py-3 border-b";
            cartItem.innerHTML = `
                <div class="flex items-center">
                    <img src="${product.image}" alt="${product.name}" class="w-16 h-16 object-cover rounded mr-3">
                    <div>
                        <h4 class="font-medium">${product.name}</h4>
                        <p class="text-sm text-gray-600">${product.price} x ${item.quantity}</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="font-medium mr-4">Rs ${itemTotal.toFixed(2)}</span>
                    <button onclick="removeFromCart(${item.id})" class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            cartItems.appendChild(cartItem);
        });
        
        // Calculate shipping (free over Rs 5000, otherwise Rs 200)
        const shipping = subtotal >= 5000 ? 0 : 200;
        const total = subtotal + shipping;
        
        cartSubtotal.textContent = `Rs ${subtotal.toFixed(2)}`;
        cartShipping.textContent = shipping === 0 ? "FREE" : `Rs ${shipping.toFixed(2)}`;
        cartTotal.textContent = `Rs ${total.toFixed(2)}`;
    }
    
    // Update checkout display
    function updateCheckoutDisplay() {
        checkoutItems.innerHTML = "";
        
        let subtotal = 0;
        
        cart.forEach(item => {
            const product = products.find(p => p.id === item.id);
            const itemTotal = parseFloat(product.price.replace(/[^0-9.]/g, "")) * item.quantity;
            subtotal += itemTotal;
            
            const checkoutItem = document.createElement("div");
            checkoutItem.className = "flex justify-between items-center py-2 border-b";
            checkoutItem.innerHTML = `
                <div class="flex items-center">
                    <img src="${product.image}" alt="${product.name}" class="w-12 h-12 object-cover rounded mr-2">
                    <div>
                        <h4 class="text-sm font-medium">${product.name}</h4>
                        <p class="text-xs text-gray-600">${item.quantity} x ${product.price}</p>
                    </div>
                </div>
                <span class="text-sm font-medium">Rs ${itemTotal.toFixed(2)}</span>
            `;
            checkoutItems.appendChild(checkoutItem);
        });
        
        // Calculate shipping and tax
        const shipping = subtotal >= 5000 ? 0 : 200;
        const tax = subtotal * 0.18; // 18% tax
        const total = subtotal + shipping + tax;
        
        checkoutSubtotal.textContent = `Rs ${subtotal.toFixed(2)}`;
        checkoutShipping.textContent = shipping === 0 ? "FREE" : `Rs ${shipping.toFixed(2)}`;
        checkoutTax.textContent = `Rs ${tax.toFixed(2)}`;
        checkoutTotal.textContent = `Rs ${total.toFixed(2)}`;
    }
    
    // Add to cart from product card
    function addToCart(id, quantity, event) {
        event.stopPropagation();
        const existingItem = cart.find(item => item.id === id);
        
        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            cart.push({ id, quantity });
        }
        
        updateCartCount();
        
        // Show added notification
        const button = event.target.closest("button");
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-check mr-1"></i> Added';
        button.classList.remove("bg-red-600", "hover:bg-red-700");
        button.classList.add("bg-green-600", "hover:bg-green-700");
        
        setTimeout(() => {
            button.innerHTML = originalText;
            button.classList.remove("bg-green-600", "hover:bg-green-700");
            button.classList.add("bg-red-600", "hover:bg-red-700");
        }, 1000);
    }
    
    // Add to cart from modal
    function addToCartFromModal() {
        if (!currentProduct) return;
        
        const quantity = parseInt(quantityInput.value);
        const existingItem = cart.find(item => item.id === currentProduct.id);
        
        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            cart.push({ id: currentProduct.id, quantity });
        }
        
        updateCartCount();
        closeModal();
        
        // Show notification
        showNotification(`${currentProduct.name} added to cart (${quantity})`);
    }
    
    // Buy now function
    function buyNow() {
        if (!currentProduct) return;
        
        const quantity = parseInt(quantityInput.value);
        cart = [{ id: currentProduct.id, quantity }];
        
        updateCartCount();
        closeModal();
        openCheckoutModal();
    }
    
    // Remove from cart
    function removeFromCart(id) {
        cart = cart.filter(item => item.id !== id);
        updateCartCount();
        updateCartDisplay();
    }
    
    // Place order
    function placeOrder() {
        // In a real app, you would process payment here
        // For demo, we'll just show confirmation
        
        // Generate random order ID
        const orderId = "FS-" + new Date().getFullYear() + "-" + Math.floor(10000 + Math.random() * 90000);
        document.getElementById("order-id").textContent = orderId;
        
        // Get email from form
        const email = document.getElementById("email").value || "your@email.com";
        document.getElementById("confirmation-email").textContent = email;
        
        // Close checkout and show confirmation
        checkoutModal.classList.add("hidden");
        confirmationModal.classList.remove("hidden");
        
        // Clear cart
        cart = [];
        updateCartCount();
    }
    
    // Quantity controls
    function decreaseQuantity() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    }
    
    function increaseQuantity() {
        let value = parseInt(quantityInput.value);
        if (value < 10) { // Limit to 10 per order
            quantityInput.value = value + 1;
        }
    }
    
    // Show notification
    function showNotification(message) {
        const notification = document.createElement("div");
        notification.className = "fixed top-4 right-4 bg-green-600 text-white px-4 py-2 rounded shadow-lg z-50";
        notification.textContent = message;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.add("opacity-0", "transition-opacity", "duration-300");
            setTimeout(() => notification.remove(), 300);
        }, 2000);
    }
</script>
</body>
</html>