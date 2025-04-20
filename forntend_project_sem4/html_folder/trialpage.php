<?php
// Start session and check login
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Simple database connection (replace with your credentials)
$conn = new mysqli('localhost', 'username', 'password', 'fire_safety_db');
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $service = $_POST['service_type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $phone = trim($_POST['phone']);
    
    // Basic validation
    if (!empty($date) && !empty($time) && !empty($phone)) {
        $datetime = date('Y-m-d H:i:s', strtotime("$date $time"));
        $stmt = $conn->prepare("INSERT INTO bookings (user_id, service_type, booking_time, contact_phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $_SESSION['user_id'], $service, $datetime, $phone);
        $stmt->execute();
        $success = $stmt->affected_rows > 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Safety Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-red-600">FireShield</a>
            <div class="space-x-6">
                <a href="services.php" class="text-red-600 font-medium">Services</a>
                <a href="logout.php" class="text-gray-600 hover:text-red-600">Logout</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Fire Safety Services</h1>
            <p class="text-xl text-gray-600">Book professional fire safety services</p>
        </div>

        <?php if (isset($success) && $success): ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded">
                <p>Booking successful! We'll contact you soon.</p>
            </div>
        <?php endif; ?>

        <!-- Service Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <!-- Consultation Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-blue-500">
                <div class="p-6">
                    <div class="text-blue-500 text-3xl mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Expert Consultation</h3>
                    <p class="text-gray-600 mb-6">Get professional advice about fire equipment</p>
                    <button onclick="showForm('consultation')" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
                        Book Now
                    </button>
                </div>
            </div>

            <!-- Audit Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-green-500">
                <div class="p-6">
                    <div class="text-green-500 text-3xl mb-4">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Safety Audit</h3>
                    <p class="text-gray-600 mb-6">Comprehensive property inspection</p>
                    <button onclick="showForm('audit')" 
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg transition">
                        Schedule Now
                    </button>
                </div>
            </div>

            <!-- Installation Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-yellow-500">
                <div class="p-6">
                    <div class="text-yellow-500 text-3xl mb-4">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Installation</h3>
                    <p class="text-gray-600 mb-6">Professional equipment setup</p>
                    <button onclick="showForm('installation')" 
                            class="w-full bg-yellow-600 hover:bg-yellow-700 text-white py-2 px-4 rounded-lg transition">
                        Book Service
                    </button>
                </div>
            </div>
        </div>

        <!-- Booking Form (Hidden by default) -->
        <div id="bookingForm" class="hidden bg-white rounded-xl shadow-lg overflow-hidden mb-12">
            <div class="p-8">
                <h2 id="formTitle" class="text-2xl font-bold mb-6"></h2>
                
                <form id="serviceForm" method="POST">
                    <input type="hidden" id="serviceType" name="service_type">
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div>
                            <!-- Dynamic fields will be inserted here by JavaScript -->
                            <div id="serviceSpecificFields"></div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Date</label>
                                <input type="date" name="date" required 
                                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Time</label>
                                <input type="time" name="time" required 
                                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500">
                            </div>
                        </div>
                        
                        <!-- Right Column -->
                        <div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" name="phone" required 
                                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500">
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-gray-700 mb-2">Additional Notes</label>
                                <textarea name="notes" rows="4" 
                                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500"></textarea>
                            </div>
                            
                            <button type="submit" 
                                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg transition">
                                Confirm Booking
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Previous Bookings -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-6">Your Bookings</h2>
                
                <?php
                $stmt = $conn->prepare("SELECT * FROM bookings WHERE user_id = ? ORDER BY booking_time DESC");
                $stmt->bind_param("i", $_SESSION['user_id']);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0): ?>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Service</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date & Time</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php echo ucfirst($row['service_type']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php echo date('M j, Y g:i A', strtotime($row['booking_time'])); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Confirmed
                                        </span>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-gray-500">You don't have any bookings yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <script>
        // Show the appropriate booking form
        function showForm(serviceType) {
            const formTitles = {
                consultation: 'Expert Consultation Booking',
                audit: 'Safety Audit Scheduling',
                installation: 'Installation Service Booking'
            };
            
            const formFields = {
                consultation: `
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Consultation Type</label>
                        <select class="w-full px-4 py-2 border rounded-lg">
                            <option>Basic (30 min)</option>
                            <option>Advanced (60 min)</option>
                        </select>
                    </div>
                `,
                audit: `
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Property Type</label>
                        <select class="w-full px-4 py-2 border rounded-lg">
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Property Address</label>
                        <textarea class="w-full px-4 py-2 border rounded-lg"></textarea>
                    </div>
                `,
                installation: `
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Service Type</label>
                        <select class="w-full px-4 py-2 border rounded-lg">
                            <option>New Installation</option>
                            <option>Maintenance</option>
                            <option>Repair</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Equipment Needed</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2"> Fire Extinguishers
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2"> Smoke Alarms
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2"> Sprinkler System
                            </label>
                        </div>
                    </div>
                `
            };
            
            // Update form
            document.getElementById('formTitle').textContent = formTitles[serviceType];
            document.getElementById('serviceType').value = serviceType;
            document.getElementById('serviceSpecificFields').innerHTML = formFields[serviceType];
            
            // Show form
            document.getElementById('bookingForm').classList.remove('hidden');
            document.getElementById('bookingForm').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>

