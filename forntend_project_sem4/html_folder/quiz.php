<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Safety and Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth; /* Smooth scrolling for anchor links */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <meta name="description" content="Fire Safety and Equipment - Your safety is our priority. Explore our range of fire safety products and services.">
    <meta property="og:title" content="Fire Safety and Equipment">
    <meta property="og:description" content="Your safety is our priority. Explore our range of fire safety products and services.">
    <meta property="og:image" content="../img_folder/istockphoto-136916670-2048x2048.jpg">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta name="twitter:card" content="summary_large_image">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Confetti -->
  <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>

  <style>
    canvas {
      pointer-events: none;
    }
    .bg-parallax {
      background-attachment: fixed;
      background-position: left top, right top;
      background-repeat: no-repeat;
      background-size: contain;
    }
  </style>
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
      <a href="service.php" class="block px-3 py-2 hover:bg-gray-800 text-red-500 rounded-md">Services</a>
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

    <section 
    class="min-h-screen flex items-center justify-center px-4 py-10 bg-parallax relative"
    style="background-image: url('../img_folder/graph.png'), url('../img_folder/graph2.png');"
  >
    <div class="absolute inset-0 bg-white/70 backdrop-blur-sm z-0"></div>

    <div class="relative z-10 bg-white shadow-xl rounded-lg p-6 max-w-xl w-full" data-aos="zoom-in">
      <h1 class="text-3xl font-bold text-center text-red-600 mb-6">🔥 Fire Safety Quiz</h1>

      <div id="quiz-box" class="space-y-4">
        <p id="question" class="text-lg font-semibold text-gray-800"></p>
        <div id="answers" class="space-y-2"></div>
        <div id="feedback" class="text-center font-semibold text-red-500 mt-2"></div>
        <button id="nextBtn" class="hidden bg-blue-600 hover:bg-blue-800 text-white px-5 py-2 rounded transition duration-300 mx-auto block">
          Next
        </button>
      </div>

      <!-- Results -->
      <div id="result" class="text-center mt-6 hidden">
        <p id="score-msg" class="text-xl font-bold text-green-600 mb-4"></p>
        <p class="text-lg">✅ Correct: <span id="correct-count"></span></p>
        <p class="text-lg">❌ Wrong: <span id="wrong-count"></span></p>
        <p class="text-lg">📊 Score: <span id="percentage"></span>%</p>

        <div class="mt-6 space-x-3">
          <button id="retryBtn" class="bg-red-600 hover:bg-red-800 text-white px-6 py-2 rounded-md">
            🔁 Retry Quiz
          </button>
          <a href="page1.php" class="bg-gray-600 hover:bg-gray-800 text-white px-6 py-2 rounded-md inline-block">
            🏠 Home
          </a>
        </div>
      </div>
    </div>
  </section>

  <canvas id="confetti-canvas" class="fixed top-0 left-0 w-full h-full hidden z-50"></canvas>

  <script>
    AOS.init();

    const questions = [
      { q: "Where should you install a smoke detector?", a: ["Kitchen", "Bathroom", "Ceiling near bedrooms", "Garage"], c: 2 },
      { q: "What's the emergency fire number in India?", a: ["100", "101", "112", "108"], c: 1 },
      { q: "Which extinguisher is used for electrical fires?", a: ["Water", "Foam", "CO₂", "Sand"], c: 2 },
      { q: "How often should fire drills be conducted?", a: ["Monthly", "Yearly", "Every 6 months", "Once in 2 years"], c: 2 },
      { q: "What does PASS stand for in firefighting?", a: ["Pull Aim Squeeze Sweep", "Push Aim Spray Stop", "Pull Activate Squeeze Spray", "None"], c: 0 },
      { q: "Which material is most fire resistant?", a: ["Wood", "Plastic", "Concrete", "Paper"], c: 2 },
      { q: "What’s the first thing to do in case of fire?", a: ["Run", "Use elevator", "Raise alarm", "Search valuables"], c: 2 },
      { q: "What color are fire exit signs usually?", a: ["Red", "Green", "Blue", "White"], c: 1 },
      { q: "Where should fire extinguishers be placed?", a: ["Only in kitchen", "Only in office", "Near exits and key areas", "Anywhere"], c: 2 },
      { q: "Which gas is commonly used in fire suppression systems?", a: ["CO2", "Nitrogen", "Oxygen", "Helium"], c: 0 }
    ];

    const bgColors = [
      "#fff5f5", "#ffe4e6", "#fef3c7", "#ecfccb", "#dbeafe",
      "#ede9fe", "#e0f2fe", "#f3f4f6", "#fef9c3", "#faf5ff"
    ];

    let current = 0;
    let score = 0;
    let answered = false;

    const questionEl = document.getElementById("question");
    const answersEl = document.getElementById("answers");
    const feedbackEl = document.getElementById("feedback");
    const nextBtn = document.getElementById("nextBtn");
    const resultEl = document.getElementById("result");
    const canvas = document.getElementById("confetti-canvas");
    const retryBtn = document.getElementById("retryBtn");

    function loadQuestion() {
      if (!questions[current]) {
        showResult();
        return;
      }

      document.body.style.backgroundColor = bgColors[current];
      const q = questions[current];
      questionEl.textContent = q.q;
      answersEl.innerHTML = "";
      feedbackEl.textContent = "";
      nextBtn.classList.add("hidden");
      answered = false;

      q.a.forEach((opt, i) => {
        const btn = document.createElement("button");
        btn.textContent = opt;
        btn.className = "w-full py-2 px-4 bg-gray-200 rounded hover:bg-red-200 transition";
        btn.onclick = () => {
          if (!answered) {
            handleAnswer(i, btn);
          }
        };
        answersEl.appendChild(btn);
      });
    }

    function handleAnswer(i, btn) {
      const q = questions[current];
      answered = true;

      if (i === q.c) {
        feedbackEl.textContent = "✅ Correct! You're on fire 🔥";
        score++;
        btn.classList.add("bg-green-300");
        nextBtn.classList.remove("hidden");
      } else {
        const funnyReplies = [
          "❌ Whoa! That's a fire hazard! 😆",
          "❌ The fire alarm just judged you. Try again! 😂",
          "❌ Oops! That answer needs a fire drill! 🔥",
          "❌ Nope! Even the extinguisher cringed 🧯"
        ];
        feedbackEl.textContent = funnyReplies[Math.floor(Math.random() * funnyReplies.length)];
        btn.classList.add("bg-red-300");
        nextBtn.classList.remove("hidden");
      }

      // Disable all buttons after one click
      const allButtons = answersEl.querySelectorAll("button");
      allButtons.forEach(b => b.disabled = true);
    }

    function showResult() {
      document.getElementById("quiz-box").classList.add("hidden");
      document.getElementById("score-msg").innerHTML = `🎉 You scored ${score}/${questions.length}!`;
      document.getElementById("correct-count").textContent = score;
      document.getElementById("wrong-count").textContent = questions.length - score;
      document.getElementById("percentage").textContent = ((score / questions.length) * 100).toFixed(1);
      resultEl.classList.remove("hidden");
      launchConfetti();
    }

    retryBtn.addEventListener("click", () => {
      current = 0;
      score = 0;
      resultEl.classList.add("hidden");
      document.getElementById("quiz-box").classList.remove("hidden");
      canvas.classList.add("hidden");
      loadQuestion();
    });

    nextBtn.addEventListener("click", () => {
      current++;
      loadQuestion();
    });

    function launchConfetti() {
      canvas.classList.remove("hidden");
      const confetti = new ConfettiGenerator({ target: "confetti-canvas" });
      confetti.render();

      setTimeout(() => {
        confetti.clear();
        canvas.classList.add("hidden");
      }, 5000);
    }

    loadQuestion();
  </script>
</body>
</html>


