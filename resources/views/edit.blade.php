<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MediCare | Edit Details</title>
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

    <style>
        /* Custom CSS for increasing spacing between table rows */
        table tr {
            margin-bottom: 20px;
            /* Adjust this value to increase or decrease spacing */
        }




.re {border-radius: 77px;
  background-color: #166ab5;
  color:#fff;
}


    </style>

</head>

<body>



    <main id="main">
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

                <a href="PatientLogin" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
                    Appointment</a>

            </div>
        </header><!-- End Header -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1></h1>
                    <ol>
                        <li><a href="{{ route('Home') }}">Home</a></li>
                        <li>Patients Booking </li>
                    </ol>
                </div>
            </div>



            <!-- ======= Appointment Section ======= -->
            <section id="appointment" class="appointment section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Patients Booking Details edit & Update</h2>
                        <p>

                        </p>
                    </div>

                    <form action="{{ url('update-booking/' . $booking->id) }}" method="POST">
                        @csrf
                        @method('PUT')

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

                        <div class="row">

                            <div class="col-md-4 form-group">
                                <input type="text" name="patientName" class="form-control" id="name"
                                    placeholder="Patient Name" value="{{ $booking->patientName }}">
                                <div class="validate"> @error('patientName')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 form-group mt-3 mt-md-0">
                                <input type="number" class="form-control" name="patientAge" id="patientAge"
                                    placeholder="Patient Age" value="{{ $booking->patientAge }}">
                                <div class="validate"> @error('patientAge')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 form-group mt-3 mt-md-0">

                                <input type="text" name="category" value="{{ $booking->category }}"
                                    class="form-control">
                                <div class="validate">
                                    @error('category')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group mt-3">
                                <input type="text" name="doctorname" value="{{ $booking->doctorname }}"
                                    class="form-control">
                                <div class="validate">
                                    @error('doctorname')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 form-group mt-3">
                                <input type="date" name="date" id="date" class="form-control"
                                    value="{{ $booking->date }}">
                                <div class="validate">
                                    @error('date')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 form-group mt-3">
                                <input type="text" name="time" id="time" class="form-control"
                                    value="{{ $booking->time }}">
                                <div class="validate">
                                    @error('time')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="text-center" style="padding-top: 30px">
                                <input type="submit" name="submit" id="submit" value="Update"
                                    class="btn btn-primary btn-lg btn-block re" style="width: 100%;">
                            </div>


                    </form>

                </div>
            </section><!-- End Appointment Section -->



            <!-- ======= Footer ======= -->
            <footer id="footer">

                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h3>Medilab</h3>
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
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a>
                                    </li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a>
                                    </li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
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
                            &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

            <div id="preloader"></div>
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i


            class="bi bi-arrow-up-short"></i></a>



            <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>MediCare</h3>
        <p>
          new Street <br>
          colombo road,<br>
          Negombo <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
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
        <form action="" method="post">
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
            <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="/js/main.js"></script>

</body>

</html>
