<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </head>
  <body class="bg-orange-200">

<!-- Navbar -->
<div class="header-2 p-5 z-50">
      <nav class="bg-orange-50 py-2 md:py-4 rounded-2xl p-2">
        <div class="container px-4 mx-auto md:flex md:items-center">
          <div class="flex justify-between items-center">
            <a href="#" class="font-bold text-xl text-orange-600">
              <img src="../Assets/Icons/D-logo.png" class="w-28" alt="">
            </a>
            <button class="px-3 py-1 rounded text-orange-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
              </svg>
            </button>
          </div>
    
          <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Home</a>
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">About</a>
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Services</a>
    
            <!-- Media dropdown -->
            <div class="relative group z-50">
              <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300 flex items-center">
                Media
                <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </a>
              <!-- Dropdown menu -->
              <div class="absolute left-0 hidden group-hover:block bg-orange-100 shadow-lg rounded mt-2 w-48 z-50">
                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-orange-600 hover:text-white">News</a>
                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-orange-600 hover:text-white">Blogs</a>
              </div>
            </div>
    
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Sustainability</a>
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-orange-600 rounded-lg hover:bg-orange-500 transition-colors duration-300">Contact</a>
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-solid border-orange-600 rounded hover:bg-orange-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Signup</a>
          </div>
        </div>
      </nav>
</div>

<!-- Add Services of dvsmining -->

<!-- Services Section -->
<section class="py-12 mr-0 md:mr-24 ml-0 md:ml-24">
    <div class="container mx-auto px-4">
        <h2 class="text-5xl md:text-7xl font-bold text-center text-orange-600 mb-4">Our Services</h2>
        <p class="mb-6 text-center text-xl">Latest news and insights</p>

      <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
        <!-- Service 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
          <img src="https://dummyimage.com/600x400/000/fff" alt="Service 1" class="h-48 w-full object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2 text-orange-500">Exploration Services</h3>
          <p class="text-gray-600">Comprehensive mineral exploration services to identify high-quality mining locations.</p>
        </div>
  
        <!-- Service 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
          <img src="https://dummyimage.com/600x400/000/fff" alt="Service 2" class="h-48 w-full object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2 text-orange-500">Drilling Services</h3>
          <p class="text-gray-600">Advanced drilling technologies for deep and surface mining projects.</p>
        </div>
  
        <!-- Service 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
          <img src="https://dummyimage.com/600x400/000/fff" alt="Service 3" class="h-48 w-full object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2 text-orange-500">Mine Development</h3>
          <p class="text-gray-600">Professional mine development, including planning, infrastructure, and safety measures.</p>
        </div>
  
        <!-- Service 4 -->
        <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
          <img src="https://dummyimage.com/600x400/000/fff" alt="Service 4" class="h-48 w-full object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2 text-orange-500">Mineral Processing</h3>
          <p class="text-gray-600">Efficient mineral processing techniques to maximize resource recovery.</p>
        </div>
  
        <!-- Service 5 -->
        <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
          <img src="https://dummyimage.com/600x400/000/fff" alt="Service 5" class="h-48 w-full object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2 text-orange-500">Equipment Rental</h3>
          <p class="text-gray-600">Providing specialized mining equipment on lease for various mining activities.</p>
        </div>
  
        <!-- Service 6 -->
        <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
          <img src="https://dummyimage.com/600x400/000/fff" alt="Service 6" class="h-48 w-full object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2 text-orange-500">Environmental Consulting</h3>
          <p class="text-gray-600">Sustainable mining solutions with environmental impact assessments and management.</p>
        </div>
      </div>
    </div>
  </section>
  

<!-- footer -->
<div class="bg-gray-900">
      <footer
        class="bg-transparent text-white p-5 md:p-10 py-8 mt-20 mr-5 md:mr-36 ml-5 md:ml-36 py-8 mt-20"
      >
        <div class="flex flex-wrap justify-between">
          <div class="w-full md:w-auto mb-6 text-center md:text-left">
            <img src=".././Assets/Images/DVS_Logo.png" class="h-28 mx-auto md:mx-0" alt="" data-aos="zoom-in"/>
            <div class="flex justify-center md:justify-start mt-5 space-x-7">
              <a href="#" class="text-sm text-white hover:text-orange-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="26"
                  height="26"
                  fill="currentColor"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                  />
                </svg>
              </a>
              <a href="#" class="text-sm text-white hover:text-orange-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                  />
                </svg>
              </a>
              <a href="#" class="text-sm text-white hover:text-orange-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-twitter-x"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
                  />
                </svg>
              </a>
              <a href="#" class="text-sm text-white hover:text-orange-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-linkedin"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                  />
                </svg>
              </a>
            </div>
            
          </div>
          <div class="w-full md:w-auto text-center md:text-left mb-6">
            <h6
              class="text-2xl font-bold mb-2 text-orange-500"
              data-aos="zoom-in"
            >
            Quick links
            </h6>
            <ul class="list-none">
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >About Us</a
                >
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >Our Team</a
                >
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >Our Gallery</a
                >
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >Our Projects</a
                >
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >Our Blog's</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full md:w-auto text-center md:text-left mb-6">
            <h6
              class="text-2xl font-bold mb-2 text-orange-500"
              data-aos="zoom-in"
            >
              Terms of Policies
            </h6>
            <ul class="list-none">
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600">Cookie Policies</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >Terms & Conditions</a
                >
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  >Privacy Policy</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full md:w-auto text-center md:text-left">
            <h6
              class="text-2xl font-bold mb-2 text-orange-500"
              data-aos="zoom-in"
            >
              Get in Touch
            </h6>
            <ul class="list-none">
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  ><b>Email :</b> info@dvsmining.com</a
                >
              </li>
              <li class="mb-2">
                <a class="text-white hover:text-orange-600"
                  ><b>Telphone :</b> (0712)-2589851</a
                ><br>
                <b>Phone No.:</b> 9503865798</a
                ><br>
                <b>Phone No.:</b> 9561453202</a
                >
              </li>
              <li class="mb-2">
                <a href="#" class="text-white hover:text-orange-600"
                  ><b>Address :</b> G-4 Rachana Madhuban, <br />Behind IOCL
                  Petrol Pump, Koradi Road, <br /> Faras, NAGPUR - 440030 (MH)
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center md:justify-between items-center md:items-start mt-10">
          <p class="mb-2 text-center md:mb-0">Dvsmining Pvt. Ltd. All Rights Reserved. ©2020-2024.</p>
          <p>Design & Development by <a href="https://iconicpages.com/" target="_blank"><b>Iconicpages</b></a></p>
        </div>
        
      </footer>
</div>
  
 

      <script>
        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");

        toggleBtn.onclick = () => {
        collapse.classList.toggle("hidden");
        collapse.classList.toggle("flex");
        };

      </script>

<script src=".././Assets/Scripts/index.js"></script>

</body>
</html>