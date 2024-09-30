<?php
// Include the database connection file
 include "../Inc/dbcon.php";


// Query to fetch blog posts from the database
$sql = "SELECT title, description  FROM blog_posts LIMIT 8"; // Assuming your blog table is 'blog_posts'
$result = $conn->query($sql);
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <style>
    .slider-container {
      position: relative;
      overflow: hidden;
      width: 80%;
      margin: auto;
    }
    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }
  </style>

  </head>
  <body class="bg-orange-200">

  <!-- Navbar -->
  <?php include '../Inc/Navbar.php';?>

<!-- Blog Section -->
<section class="m-5 md:m-0 md:mr-28 md:ml-28 py-8" data-aos="fade-up">
  <h2 class="text-5xl md:text-7xl font-bold text-center text-orange-600 mb-4">Our Blog's</h2>
  <p class="mb-6 text-center text-xl">Latest news and insights</p>
  <div class="container mx-auto overflow-x-auto">
    <div class="flex space-x-4 md:space-x-6">
      <!-- Blog Card 1 -->
      <?php
  // Loop through the fetched rows and display blog posts dynamically
  if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo '
          <!-- Dynamic Blog Card -->
          <div class="bg-gray-50 rounded-lg shadow-lg p-6 min-w-[250px] md:min-w-[300px]">
                <img src="../Assets/Images/image1.jpg"  class="rounded-t-lg mb-4">
              <h3 class="text-2xl font-bold text-gray-900 mb-2">' . $row["title"] . '</h3>
              <p class="text-gray-600 mb-4">' . $row["description"] . '</p>
               <a href="../Pages/Detailed_Pages/BlogDetails.php" class="text-orange-600 font-bold hover:underline">Read More</a>
          </div>';
      }
  } else {
      echo '<p>No blog posts found.</p>';
  }
  ?>

  </div>
</section>


<!-- CTA -->
<?php include '../Inc/CTA.php'; ?>

  

<!-- footer -->
<?php include '../Inc/Footer.php';?>
  
  <!-- Whatsapp -->
  <?php include '../Inc/Whatsapp.php';?>
  

<script src=".././Assets/Scripts/index.js"></script>

</body>
</html>