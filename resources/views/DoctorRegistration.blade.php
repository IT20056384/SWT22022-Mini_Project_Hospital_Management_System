<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MediCare | Doctor Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style >


.re {border-radius: 77px;
  background-color: #166ab5;
  color:#fff;
}

</style>
</head>

<body>

   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">info@medicare.com</a>
        <i class="bi bi-phone"></i>0112254398
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="/"> <img src="img/logo.png"  width="165px" alt="" class="img-fluid mt-3"></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('Home') }}">Home</a></li>
          <li class="dropdown"><a href="#"><span>LogIn</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="PatientLogin">Patient</a></li>
              <li><a href="DoctorLogin">Doctor</a></li>
              <li><a href="EmployeeLogin">Employee</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="PatientLogin" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2></h2>
                    <ol>
                        <li><a href="{{ route('Home') }}">Home</a></li>
                        <li>Doctor Registration</li>
                    </ol>
                </div>
            </div>





            {{-- form --}}
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <div class="section-title">
                                    <h2>Doctor Registration</h2>
                                  </div>


                                <form action="{{ route('DoctorRegistration') }}" method="post" class="mx-1 mx-md-4">
                                    @csrf

                                    @if (Session::has('sucuss'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('sucuss') }}
                                        </div>
                                    @endif

                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif


                                    {{-- Name --}}
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user-doctor fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="name" class="form-control"
                                                value="{{ old('name') }}" name="name" placeholder=" Enter your Name" />
                                            @error('name')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- gender --}}
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-list fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">

                                            <select name="special" id="special" class="form-select">
                                                <option value="">Select..</option>
                                                <option value="Dermatologist">Dermatologist</option>
                                                <option value="Neurologist">Neurologist</option>
                                                <option value="Oncologist">Oncologist</option>
                                                <option value="Cardiologist">Cardiologist</option>
                                                <option value="Endocrinologist">Endocrinologist</option>
                                                <option value="Gastroenterology">Gastroenterology</option>
                                                <option value="Gynecologist">Gynecologist</option>
                                                <option value="Psychiatrist">Psychiatrist</option>
                                                <option value="Allergist">Allergist</option>
                                                <option value="Pediatrician">Pediatrician</option>
                                                <option value="Anesthesiology">Anesthesiology</option>
                                                <option value="Nephrologist">Nephrologist</option>
                                                <option value="Family Medicine">Family Medicine</option>
                                            </select>
                                            @error('special')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- email --}}
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" name="email"
                                                class="form-control" value="{{ old('email') }}" placeholder=" Enter your Email"  />
                                            @error('email')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- password --}}
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control"
                                                name="password" value="{{ old('password') }}" placeholder=" Enter Password"  />
                                            @error('password')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- confirm Password --}}
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" class="form-control" name="password_confirmation"
                                                id="password_confirmation" placeholder=" Confirm Password"  />
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-6 mb-3 mb-lg-4 text-center">
                                        <input type="submit" name="submit" id="submit"
                                            value="Register" class="btn btn-primary btn-lg btn-block re" style="width: 100%;">

                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5 text-center">
                                        <label class="form-check-label" for="form2Example3">
                                            Have already an account ? <a href="DoctorLogin">Login here</a>
                                        </label>
                                    </div>
                                </form>



                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-2">

                                <img src="/img/docreg.jfif"
                                    class="img-fluid" alt="Sample image" style="width: 100%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </ol>
            </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        {{-- <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section> --}}

    </main><!-- End #main -->





  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MediCare</h3>
            <p>
                Medicare Hospital <br>
                Baseline road,<br>
                Katunayake <br><br>
                <strong>Phone:</strong>0112254398<br>
              <strong>Email:</strong> info@medicare.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#departments">Departments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#doctors">Doctors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Channeling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">checkups</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Healthcare</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Most people came us for medical needs</p>
            <form action="{{ route('user-subscribe') }}" method="post">
                @csrf
                <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
        </div>

    </div>
</div>
</div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MedCare</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">MediCare IT crew</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>



</body>

</html>
