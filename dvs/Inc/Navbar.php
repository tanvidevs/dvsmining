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
            <a href="../Pages/Home.php" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Home</a>
            <a href="../Pages/About.php" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">About</a>
            <a href="../Pages/Services.php" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Services</a>
    
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
                <a href="../Pages/News.php" class="block px-4 py-2 text-gray-600 hover:bg-orange-600 hover:text-white">News</a>
                <a href="../Pages/Blogs.php" class="block px-4 py-2 text-gray-600 hover:bg-orange-600 hover:text-white">Blogs</a>
              </div>
            </div>
    
            <a href="../Pages/Sustainability.php" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Sustainability</a>
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Login</a>
            <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-solid border-orange-600 rounded hover:bg-orange-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 ">Signup</a>
          </div>
        </div>
      </nav>
  </div>


  <script>
        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");

        toggleBtn.onclick = () => {
        collapse.classList.toggle("hidden");
        collapse.classList.toggle("flex");
        };
</script>