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

  <!-- About Section -->
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

  <!-- footer -->
  <?php include '../Inc/Footer.php';?>
  
  <!-- Whatsapp -->
  <?php include '../Inc/Whatsapp.php';?>
  
  <script src=".././Assets/Scripts/index.js"></script>
  
  </body>
  </html>