<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vivana Developers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="images/Vindhya Developers bg.png"
    />
    <!-- Style.css -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
      <nav class="load-animation navbar navbar-expand-md fixed-top">
        <div class="container-fluid px-4">
          <a class="navbar-brand text-white" href="index.php">Logo</a>
          <button
            class="navbar-toggler shadow-none border-0"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
          >
            <i class="fa-solid fa-bars" style="color: #e3e3e3"></i>
          </button>
          <div
            class="sidebar offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header border-bottom">
              <h5
                class="offcanvas-title mx-auto text-white"
                id="offcanvasNavbarLabel"
              >
                Vivana Developers
              </h5>
              <button
                type="button"
                class="btn-close btn-close-white text-reset shadow-none border-0 text-white"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a
                    class="nav-link activeted"
                    aria-current="page"
                    href="index.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Aboutus.html">About</a>
                </li>
              </ul>
              <div class="d-flex align-items-center justify-content-center">
                <a
                  name=""
                  id=""
                  class="btn rounded-5 text-white px-4 d-flex align-items-center justify-content-center"
                  href="php/Login.php"
                  role="button"
                  ><i
                    class="fa-solid fa-right-to-bracket"
                    style="color: #ffffff"
                  ></i>
                  &nbsp;Login</a
                >
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!-- Finest Development -->
      <section>
        <div
          class="load-animation position-relative overflow-hidden p-lg-5 p-md-5 m-md-5 p-sm-2 pt-5"
        >
          <div class="col-md-6 py-5 mx-auto my-5 mb-0">
            <h1 class="display-3 fw-bold">
              <p class="text-center mb-0">Welcome to</p>
              <p class="text-center vivana-dev">Vivana Developer</p>
            </h1>
            <h3 class="fw-normal text-center h5">
              Crafting the world's Finest Developments
            </h3>
          </div>

          <div class="mb-5 d-flex align-items-center justify-content-center">
            <a
              name=""
              id=""
              class="btn rounded-5 mt-4 text-white px-5 d-flex align-items-center justify-content-center"
              href="Aboutus.html"
              role="button"
              >KNOW MORE</a
            >
          </div>
        </div>
      </section>
      <!-- Carousel -->
      <section id="Carousel">
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://www.krahejacorp.com/wp-content/uploads/2022/11/hotel-desktop-new-e1576663207298.jpg"
                class="d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Imperal Heights</h5>
                <p>
                  Some representative placeholder content for the first slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://www.krahejacorp.com/wp-content/uploads/2022/11/Desktop-banner_2.jpg"
                class="d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Project Raheja</h5>
                <p>
                  Some representative placeholder content for the second slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://www.krahejacorp.com/wp-content/uploads/2022/11/1366x626.jpg"
                class="d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Lodha Vivariya</h5>
                <p>
                  Some representative placeholder content for the third slide.
                </p>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <!-- Projects -->
      <section id="projects" class="my-5 pt-5">

         <div class="mx-auto m-5 pb-4">
            <h1 class="display-6 fw-bold">
              <p class="text-center mb-0">New Comming Projects</p>
            </h1>
          </div>

        <?php
        include("php/conn.php");
  
  
        $sql = "SELECT * FROM `products`";
  
        $result = mysqli_query($conn, $sql );
  
        if (mysqli_num_rows($result)>0) {
          
          echo "<div class='container-fluid'>
          <button class='scroll-button left d-flex align-items-center justify-content-center'>
              <i class='fa-solid fa-chevron-left fa-lg'></i>
          </button>
          <button class='scroll-button right d-flex align-items-center justify-content-center'>
              <i class='fa-solid fa-chevron-left fa-flip-horizontal fa-lg'></i>
          </button>
          <div class='horizontal-scroll'>
          <div class='row flex-nowrap'>
        ";
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                      $i++;
                      if ($i <= 8) {

                        $modalId = "modal" . $row['id']; // Unique modal ID
                        $imageUrl = "admin/projects/{$row['image']}"; // Image URL
                        echo "
                        <div style='max-width:300px' class='ms-2 g-3'>
                            <div class='projects-img-box card mb-4 box-shadow'>
                            <!-- Button trigger modal -->
                                <button
                                    type='button'
                                    class='btn p-0 border-0'
                                    data-bs-toggle='modal'
                                    data-bs-target='#$modalId'
                                    data-bs-image='$imageUrl'
                                >
                                    <img style='height: 200px; object-fit: cover;' 
                                        class='card-img-top project-img' 
                                        src='$imageUrl'>
                                </button>
                                <div class='card-body'>
                                    <h3>{$row['name']}</h3>
                                    <p class='card-text'>{$row['location']}</p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Modal -->
                        <div class='modal fade' id='$modalId' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h3 class='modal-title text-dark' id='exampleModalLabel'>{$row['name']}</h3>
                                        <button type='button btn-dark' class='btn-close shadow-none' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <img class='rounded' src='$imageUrl' alt='Image' style='width: 100%; height: 400px;' id='modal-img-$row[id]'>
                                    </div>
                                    <div class='modal-footer'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                    }

                  }

                  echo '<div style="max-width:180px" class="d-flex align-items-center justify-content-center">
                  
                    <div class="mb-5">
                          <a
                            name=""
                            id=""
                            class="btn rounded-5 p-4 text-white d-flex align-items-center justify-content-center"
                            href="Projects.php#projects"
                            role="button"
                            ><i class="fa-solid fa-arrow-right fa-xl fa-fade" style="color: #ffffff;"></i></a
                          >
                      </div>
                  
                  </div>';

        
          echo "</div>
          </div>
          </div>";
        }
        else {
            echo " <small style='color: green;'>No Data Found</small>";
        }
  
        mysqli_close($conn);
  
        ?>
  

      </section>

      <!-- About Us -->
      <section class="aboutUs mb-5">
        <div
          class="position-relative overflow-hidden mb-5 py-3 p-lg-5 pt-lg-3 pt-3 p-md-5 m-md-3"
        >
          <div class="col-md-6 mx-auto my-5 mb-0 pb-2">
            <h1 class="display-4 fw-bold">
              <p class="text-center mb-0">About Us</p>
              <h1 class="display-1 text-center" style="color: #00ab22">
                Vivana Developer
              </h1>
            </h1>
            <h3 class="fw-normal mt-3 mb-3 text-center">
              Crafting the World's Finest Developments
            </h3>
          </div>
          <div class="d-flex align-items-center justify-content-center p-1 px-lg-5 mx-lg-5 mx-auto text-center">
            <div class="px-lg-5 mt-3" style="max-width:800px">
              <p class="h5">
                With a rich legacy of trust spanning four decades, at
                <strong>Vindhya Developers</strong>, we are driven by our
                passion to exceed global standards and deliver iconic addresses.
                We go to extraordinary lengths, from carefully restoring
                heritage buildings to sourcing the best minds in architecture
                and design. Our iconic developments offer unmatched amenities,
                state-of-the-art infrastructure and unparalleled services that
                perfectly orchestrate a celebration of life’s finest moments.
              </p>
            </div>
          </div>
          <div
            class="product-device product-device-2 shadow-sm d-none d-md-block"
          ></div>
        </div>
      </section>
      <!-- Prjects -->
    </main>
    <footer>
      <!-- place footer here -->
       <?php
          include "footer.php";
       ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>

    <script>
      var myCarousel = new bootstrap.Carousel(
        document.getElementById("carouselExampleCaptions"),
        {
          interval: 3000,
        }
      );
    </script>
    <script src="script.js"></script>
  </body>
</html>
