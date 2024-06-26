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
      <nav class="navbar navbar-expand-md fixed-top">
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
            <div class="offcanvas-header border-bottom text-white">
              <h5 class="offcanvas-title mx-auto" id="offcanvasNavbarLabel">
                Vivana Developers
              </h5>
              <button
                type="button"
                class="btn-close btn-close-white text-reset shadow-none border-0"
                style="color: #e3e3e3"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Projects.php">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link activeted" href="Contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Aboutus.php">About</a>
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
      <!-- Contact Form -->
      <section class="py-5" style="background-color: #bae9ff68">
        <div
          class="container pt-5 d-flex justify-content-center align-items-center flex-column"
        >
          <h2 class="h1-responsive font-weight-bold text-center my-4">
            <strong>Contact us</strong>
          </h2>
          <div class="my-4 col-lg-6 col-md-12 col-sm-12">
            <p class="text-center w-responsive mx-auto mb-5 h5">
              Do you have any questions? Please do not hesitate to contact us
              directly. Our team will come back to you within a matter of hours.
            </p>
          </div>
        </div>
        <div
          class="shadow container p-5 rounded-5 mx-auto m-1"
          style="max-width: 500px; background-color: #d0efffc7"
        >
          <!-- form -->
          <form action="php/Contact.php" method="post">
            <div class="mb-3">
              <label for="" class="form-label text-dark">Name</label>
              <input
                type="text"
                class="form-control shadow-none"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder="Vivana Developer"
                required
              />
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-dark">Email</label>
              <input
                type="email"
                class="form-control shadow-none"
                name="email"
                id=""
                aria-describedby="emailHelpId"
                placeholder="abc@mail.com"
                required
              />
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-dark">Query</label>
              <textarea
                class="form-control shadow-none"
                name="query"
                id=""
                rows="3"
                placeholder="Ask your any quetions..."
                required
              ></textarea>
            </div>
            <button type="submit" class="btn rounded-5 w-100 mt-5 text-white">
              Send
            </button>
          </form>
        </div>
      </section>

      <!-- Address -->
      <section class="Address py-5">
        <div class="container mt-5 pt-5 mx-auto">
          <div class="row p-3 p-lg-5">
            <div class="col-md-5 p-0 px-lg-5 pe-0">
              <div class="contact-info">
                <h1 class="text-white">Reach out to us</h1>
                <div class="desc">
                  <h4 class="text-white">Address</h4>
                  <p class="h5 text-white">
                    <strong>Vindhya Developers Limited</strong>
                  </p>
                  <p class="text-white h5">
                    Commerz, 3rd Floor, International Business Park, Oberoi
                    Garden City, Off Western Express Highway, Goregaon (East),
                    Mumbai, India- 400 063
                  </p>
                </div>
                <div class="container mt-4">
                  <ul class="ps-0 ps-lg-4 mt-2 d-flex">
                    <li class="m-4">
                      <a href=""
                        ><i
                          class="fa-brands fa-instagram fa-xl"
                          style="color: #e3e3e3"
                        ></i
                      ></a>
                    </li>
                    <li class="m-4">
                      <a href=""
                        ><i
                          class="fa-brands fa-youtube fa-xl"
                          style="color: #e3e3e3"
                        ></i
                      ></a>
                    </li>

                    <li class="m-4">
                      <a href=""
                        ><i
                          class="fa-brands fa-facebook-f fa-xl"
                          style="color: #e3e3e3"
                        ></i
                      ></a>
                    </li>
                    <li class="m-4">
                      <a href=""
                        ><i
                          class="fa-brands fa-linkedin-in fa-xl"
                          style="color: #e3e3e3"
                        ></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 p-0 px-lg-5 pe-0">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6335.605444331011!2d72.8511216019513!3d19.231267321863584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0d0d3ad9ebd%3A0xea2f66f6a2145e90!2sBorivali!5e0!3m2!1sen!2sin!4v1706071611394!5m2!1sen!2sin"
                width="100%"
                height="366px"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
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
  </body>
</html>
