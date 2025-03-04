<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style_mentalWell.css">
    <style>
        .carousel {
            max-width: 100%;  /* Adjust width */
            max-height: 450px; /* Adjust height */
            margin: auto; /* Center it */
        }

        .carousel-inner img {
            width: 100%; /* Ensures responsiveness */
            height: 450px; /* Set fixed height */
            object-fit: cover; /* Prevents image distortion */
        }
    </style>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <section id="header">
        <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="Student.php">Medical Portal</a></li>
                <li><a href="MentalWellness.php">Mindfullness</a></li>
                <li><a href="CheckBMI.php">BMI</a></li>
                <!-- <li><a href="Blog.html">Blog</a></li> -->
                <li><a href="personalinformation.php">Profile</a></li>
                <a href="Logout.html"><button class="normal">Logout</button></a>
            </ul>
        </div>
    </section>

      <!-- carousal -->
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/automation.webp" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/gate.jpg" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/nav mandir.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    

    <!-- personalisation -->
    <section id="profile">
        <div class="section__pic-container">
          <img id="section__pic" src="./images/profile.jpg" alt="profile picture" />
        </div>
        <div class="section_text">
          <h1 class="title">Devanshi Mehta</h1>
          <p class="ID">BTBTC22189</p>
          <p class="Hostel">Shree Shanta Shoudh</p>
        </div>
      </section>

      <!-- upload section -->

      <div class="upload-container">
        <h2>Drag & Drop Files Here</h2>
        <div id="drop-area" class="drop-area">
            <p>Drag & drop files here or <span id="file-label">click to upload</span></p>
            <input type="file" id="file-input" multiple hidden>
        </div>
        <button id="upload-btn">Upload</button>
    </div>

    <div class="uploaded-files-container">
        <h3>Uploaded Files</h3>
        <div id="uploaded-files" class="uploaded-files"></div>
        <button id="show-more-btn" class="hidden">Show More</button>
    </div>


    <!-- our mission and vision section -->

    <!-- <section class="mission-vision">
      <div class="container">
          <h2 class="section-title">Our Mission & Vision</h2>
          
          <div class="content">
              <div class="card">
                  <h3>🌟 Our Mission</h3>
                  <p>
                      To empower individuals by providing innovative and accessible solutions that enhance well-being, foster growth, and promote sustainability.
                  </p>
              </div>

              <div class="card">
                  <h3>🚀 Our Vision</h3>
                  <p>
                      To be a global leader in innovation and technology, creating impactful solutions that transform lives and inspire the future.
                  </p>
              </div>
          </div>
      </div>
  </section> -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Our Mission & Vision | Banasthali Aarogya Seva</title>
      <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  
      <section class="mission-vision">
          <div class="container">
              <h2 class="section-title">Our Mission & Vision</h2>
              
              <div class="content">
                  <div class="card mission">
                      <h3>🔍 Our Mission</h3>
                      <p>
                          To provide students with a "secure, efficient, and digital" healthcare management system that ensures accessibility to medical records, simplifies doctor interactions, and promotes a "healthier campus life".
                      </p>
                  </div>
  
                  <div class="card vision">
                      <h3>🌍 Our Vision</h3>
                      <p>
                          To revolutionize student healthcare at **Banasthali Vidyapith** by integrating "technology with wellness", ensuring every student receives timely and effective medical care with seamless record-keeping.
                      </p>
                  </div>
              </div>
          </div>
      </section>
  
  </body>
  </html>
  

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="script.js"></script>
</body>
</html>
    
    
    
