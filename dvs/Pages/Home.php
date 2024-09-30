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
  <?php include '../Inc/Navbar.php';?>


  <!-- Hero Section with Background Video -->
  <section class="relative text-gray-600 body-font md:mr-28 md:ml-28 mb-20 p-5 mt-0 md:mt-2" data-aos="fade-up">
  <!-- Background Video -->
  <div class="absolute inset-0 w-full h-full overflow-hidden">
    <video class="w-full h-full object-cover rounded-none md:rounded-lg filter grayscale md:grayscale-2" autoplay muted loop playsinline>
      <source src="../Assets/Videos/bg.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>


  <!-- Hero Banner -->
  <div class="container mx-auto relative flex flex-col items-center px-4 py-8 md:py-10 z-10">
    <!-- Text Section -->
    <div class="flex-grow text-center p-4 md:p-20">
      <h1 id="dynamic-heading" class="title-font text-2xl sm:text-3xl md:text-5xl mb-4 font-medium text-white">
        <span class="text-orange-500 font-extrabold">Real Estate Mastery</span>
      </h1>
      <h2 id="dynamic-subheading" class="title-font text-xl sm:text-2xl md:text-3xl mb-4 font-medium text-white">
        Your Blueprint to Success Starts Here
      </h2>
      <p class="mb-6 md:mb-8 leading-relaxed text-gray-200 text-sm sm:text-base">
        I’m Prathamesh Bansod, With over 20 years of experience in real estate investment, I have successfully helped hundreds of investors grow their portfolios, avoid costly mistakes, and unlock new opportunities.
      </p>

      <div class="flex justify-center">
        <button class="inline-flex text-white bg-orange-500 border-0 py-2 px-4 md:px-6 focus:outline-none hover:bg-orange-600 rounded-full text-base md:text-lg">
          Book a Consultation Call
        </button>
      </div>
    </div>
  </div>
  </section>   
  
  
<!-- About Us -->
<section class="mr-5 md:mr-24 ml-5 md:ml-24 mb-24">
      <div class="p-6 rounded-2xl" data-aos="fade-up">
        <h2
          class="text-5xl md:text-5xl font-bold mb-1 text-center text-orange-600 mb-4"
        >
          Our Intro
        </h2>
        <p class="mb-6 text-center text-xl">
          Mining Services For Growth and Betterment!
        </p>
        <div class="flex flex-col md:flex-row items-center">
          <img
            src="https://dummyimage.com/600x400/000/fff"
            alt="About Us"
            class="w-full md:w-1/2 h-auto mb-6 md:mb-0 md:mr-6 rounded-2xl"
            data-aos="zoom-in"
          />
          <p
            class="text-gray-600 text-lg text-justify md:w-1/2"
            data-aos="fade-up"
          >
            At DVSMining, we are dedicated to sustainable and innovative mining
            solutions that prioritize both efficiency and environmental
            responsibility. Our team of experts is committed to pushing the
            boundaries of the mining industry, delivering top-notch services
            that meet the evolving needs of our clients. With years of
            experience and a passion for excellence, we are your trusted partner
            in mining operations worldwide. DVS Mining is committed to providing
            end-to-end mining solutions and also creates abiding sustainable
            value for stakeholders and companies at a global pitch. Our robust
            portfolio consists of reliable mining management services that
            include Design, Development, Engineering, Construction and Financial
            Evaluation of small or large-scale mining projects.
          </p>
        </div>
      </div>
</section>


<!-- KPA Section -->
<section class="text-gray-600 body-font mr-0 md:mr-24 ml-0 md:ml-24 -mt-10">
      <div class="container px-5 py-5 mx-auto">
        <!-- Wrapper for horizontal scrolling -->
        <div class="flex flex-nowrap md:flex-wrap -m-4 overflow-x-auto">
          <!-- Card 1 -->
          <div class="p-4 min-w-[250px] md:w-1/3 flex-shrink-0" data-aos="flip-up"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-10 rounded-lg overflow-hidden text-center relative bg-[url('https://www.bworldonline.com/wp-content/uploads/2024/05/heavy-machinery-used-construction-industry-engineering.jpg')] bg-gray-600 hover:bg-orange-500 bg-cover bg-center bg-blend-multiply">
              <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Sustainability</h1>
              <p class="leading-relaxed mb-3 text-white">We care for the environment</p>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="p-4 min-w-[250px] md:w-1/3 flex-shrink-0" data-aos="flip-up"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-10 rounded-lg overflow-hidden text-center relative bg-[url('https://www.bworldonline.com/wp-content/uploads/2024/05/heavy-machinery-used-construction-industry-engineering.jpg')] bg-gray-600 hover:bg-orange-500 bg-cover bg-center bg-blend-multiply">
              <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Investor Relations</h1>
              <p class="leading-relaxed mb-3 text-white">We care for our investors</p>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="p-4 min-w-[250px] md:w-1/3 flex-shrink-0" data-aos="flip-up"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-10 rounded-lg overflow-hidden text-center relative bg-[url('https://www.bworldonline.com/wp-content/uploads/2024/05/heavy-machinery-used-construction-industry-engineering.jpg')] bg-gray-600 hover:bg-orange-500 bg-cover bg-center bg-blend-multiply">
              <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Code of Conduct</h1>
              <p class="leading-relaxed mb-3 text-white">We care for our people</p>
            </div>
          </div>
        </div>
      </div>
</section>


<!-- Our Business -->
<section class="text-gray-600 body-font mr-0 md:mr-24 ml-0 md:ml-24 mt-10"  data-aos="fade-up">
    <div class="container px-5 py-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-10">
        <h2 class="text-5xl md:text-7xl font-bold mb-1 text-center text-orange-600 mb-4">Our Business</h2>
          <p class="mb-6 text-center text-xl">Trusted by industry leaders worldwide</p>
        <div class="flex md:flex-wrap md:justify-between -m-4 overflow-x-auto md:overflow-visible no-scrollbar">
        <div class="p-4 flex-shrink-0 w-2/3 sm:w-1/2 md:w-1/3">
            <div class="h-64 relative group rounded-lg overflow-hidden">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('../Assets/Images/Business/Phosphate.png');"></div>
              <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg font-semibold">Phophate</p>
              </div>
            </div>
          </div>  
        <div class="p-4 flex-shrink-0 w-2/3 sm:w-1/2 md:w-1/3">
            <div class="h-64 relative group rounded-lg overflow-hidden">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('../Assets/Images/Business/Aluminium.png');"></div>
              <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg font-semibold">Aluminium</p>
              </div>
            </div>
          </div>
          <div class="p-4 flex-shrink-0 w-2/3 sm:w-1/2 md:w-1/3">
            <div class="h-64 relative group rounded-lg overflow-hidden">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('../Assets/Images/Business/Copper.png');"></div>
              <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg font-semibold">Copper</p>
              </div>
            </div>
          </div>
          <div class="p-4 flex-shrink-0 w-2/3 sm:w-1/2 md:w-1/3">
            <div class="h-64 relative group rounded-lg overflow-hidden">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('../Assets/Images/Business/Gold.png');"></div>
              <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg font-semibold">Gold</p>
              </div>
            </div>
          </div>
          <div class="p-4 flex-shrink-0 w-2/3 sm:w-1/2 md:w-1/3">
            <div class="h-64 relative group rounded-lg overflow-hidden">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('../Assets/Images/Business/Industrial Minerals.png');"></div>
              <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg font-semibold">Industrial Minerals</p>
              </div>
            </div>
          </div>
          <div class="p-4 flex-shrink-0 w-2/3 sm:w-1/2 md:w-1/3">
            <div class="h-64 relative group rounded-lg overflow-hidden">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('../Assets/Images/Business/More.png');"></div>
              <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg font-semibold">More</p>
              </div>
            </div>
          </div>
          
          <!-- Repeat for other boxes -->
        </div>
      </div>
    </div>
</section>


<!-- Clients Section -->
 <?php include '../Inc/Client.php';?>

<!-- Blog Section -->
<?php include '../Inc/Blog.php';?>


<!-- footer -->
<?php include '../Inc/Footer.php';?>
  
<!-- Whatsapp -->
<?php include '../Inc/Whatsapp.php';?>

<script src=".././Assets/Scripts/index.js"></script>

</body>
</html>