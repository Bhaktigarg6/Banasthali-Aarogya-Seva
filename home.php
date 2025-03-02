<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="style_mentalWell.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a  href="home.php">Home</a></li>
                <li><a class="active" href="Student.php">Medical Portal</a></li>
                <li><a href="MentalWellness.php">Mindfullness</a></li>
                <li><a href="CheckBMI.php">BMI</a></li>
                <!-- <li><a href="Blog.html">Blog</a></li> -->
                <li><a href="personalinformation.php">Profile</a></li>
                <a href="Logout.html"><button class="normal">Logout</button></a>
            </ul>
        </div>
    </section>

    <section id="home-header" class="blog-header">
        <h2>Welcome to Banasthali Aarogya Seva</h2>
        <a href="Student.php"><button class="normal">Get Started</button></a>
    </section>
    <!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
    let links = document.querySelectorAll("#navbar li a");
    let currentUrl = window.location.href;

    links.forEach((link) => {
      if (link.href === currentUrl) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
</script> -->

</body>
</html>