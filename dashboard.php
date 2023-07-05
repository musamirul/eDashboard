<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accident & Emergency Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">E-Portal A&E</span>
      </a>

      <a href="dashboard.php">Dashboard</a>

    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CONSULTANT ON-CALL</h5>

              <form action="formsupdate.php">

                <div class="col-md-12">
                  <label for="anaethethist">Anaethethist :</label>
                  <input type="text" class="form-control" name="anaethethist">
                </div>
                <div class="col-md-12">
                  <label for="cardiac">Cardiac Surgeon :</label>
                  <input type="text" class="form-control" name="cardiac">
                </div>
                <div class="col-md-12">
                  <label for="earnose" class="form-label">Ear, Nose & Throat Surgeon :</label>
                  <input type="text" class="form-control" name="earnose">
                </div>
                <div class="col-md-12">
                  <label for="gsurgeon">General Surgeon :</label>
                  <input type="text" class="form-control" name="gsurgeon">
                </div>
                <div class="col-md-12">
                  <label for="gphysician" class="form-label">General Physician :</label>
                  <input type="text" class="form-control" name="gphysician">
                </div>
                <div class="col-md-12">
                  <label for="nephrologist" class="form-label">Nephrologist :</label>
                  <input type="text" class="form-control" name="nephrologist">
                </div>
                <div class="col-md-12">
                  <label for="gastroentologist" class="form-label">Gastroentologist :</label>
                  <input type="text" class="form-control" name="gastroentologist">
                </div>
                <div class="col-md-12">
                  <label for="neurosurgeon" class="form-label">Neurosurgeon :</label>
                  <input type="text" class="form-control" name="neurosurgeon">
                </div>
                <div class="col-md-12">
                  <label for="obstetrician" class="form-label">Obstetrician :</label>
                  <input type="text" class="form-control" name="obstetrician">
                </div>
                <div class="col-md-12">
                  <label for="ophtalmologist" class="form-label">Ophtalmologist :</label>
                  <input type="text" class="form-control" id="inputName5" name="ophtalmologist">
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Orthopaedic Surgeon :</label>
                  <input type="text" class="form-control" name="orthopaedic">
                </div>
                <div class="col-md-12">
                  <label for="paediatrician" class="form-label">Paediatrician :</label>
                  <input type="text" class="form-control" name="paediatrician">
                </div>
                <div class="col-md-12">
                  <label for="plasticsurgeon" class="form-label">Plastic Surgeon :</label>
                  <input type="text" class="form-control" name="plasticsurgeon">
                </div>
                <div class="col-md-12">
                  <label for="urologist">Urologist :</label>
                  <input type="text" class="form-control" name="urologist">
                </div>
                <div class="col-md-12">
                  <label for="psychiatrist">Psychiatrist:</label>
                  <input type="text" class="form-control" name="psychiatrist">
                </div>
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!--End Consultants On-Call-->

        <!--Personnel On-Call-->

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">HOSPITAL PERSONNEL ON-CALL</h5>

              <form class="row g-3">
                <div class="col-md-12">
                  <label for="md" class="form-label">Medical Director :</label>
                  <input type="text" class="form-control" name="md">
                </div>
                <div class="col-md-12">
                  <label for="hod" class="form-label">Head Of Department :</label>
                  <input type="text" class="form-control" name="hod">
                </div>
                <div class="col-md-12">
                  <label for="moic" class="form-label">Medical Officer In-Charge :</label>
                  <input type="text" class="form-control" name="moic">
                </div>
                <div class="col-md-4">
                  <label for="um_am">Unit Manager (AM) :</label>
                  <input type="text" class="form-control" name="um_am"><br>
                  <input type="text" class="form-control" name="um_am">
                </div>
                <div class="col-md-4">
                  <label for="um_pm" class="form-label">Unit  Manager (PM) :</label>
                  <input type="text" class="form-control" name="um_pm"><br>
                  <input type="text" class="form-control" name="um_pm">
                </div>
                <div class="col-md-4">
                  <label for="um_night" class="form-label">Unit  Manager (Night) :</label>
                  <input type="text" class="form-control" name="um_night"><br>
                  <input type="text" class="form-control" name="um_night">
                </div>
                <div class="col-md-4">
                  <label for="mo_am" class="form-label">Medical Officer (AM) :</label>
                  <input type="text" class="form-control" name="mo_am"><br>
                  <input type="text" class="form-control" name="mo_am">
                </div>
                <div class="col-md-4">
                  <label for="mo_pm" class="form-label">Medical Officer (PM) :</label>
                  <input type="text" class="form-control" name="mo_pm"><br>
                  <input type="text" class="form-control" name="mo_pm">
                </div>
                <div class="col-md-4">
                  <label for="mo_night" class="form-label">Medical Officer(Night) :</label>
                  <input type="text" class="form-control" name="mo_night"><br>
                  <input type="text" class="form-control" name="mo_night">
                </div>
                <div class="col-md-6">
                  <label for="lab1" class="form-label">Lab 1 :</label>
                  <input type="text" class="form-control" name="lab1">
                </div>
                <div class="col-md-6">
                  <label for="lab2" class="form-label">Lab 2 :</label>
                  <input type="text" class="form-control" name="lab2">
                </div>
                <div class="col-12">
                  <label for="radiologist" class="form-label">Radiologist :</label>
                  <input type="text" class="form-control" name="radiologist">
                </div>
                <div class="col-12">
                  <label for="radiograph" class="form-label">Radiograph :</label>
                  <input type="text" class="form-control" name="radiograph">
                </div>
              </form>

            </div>
          </div>
        </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CONSULTANT ON LEAVE</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3">
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Doctor : </label>
                  <input type="text" class="form-control" id="inputName5" name="id_onleave">
                </div>
                 <div class="col-md-4">
                  <label for="inputDate" class="form-label">Date :</label>
                  <div class="col-md-12">
                    <input type="date" class="form-control" name="date">
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Cover :</label>
                  <input type="text" class="form-control" id="inputName5" name="id_consultant">
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright 2023 <strong><span>KPJ Klang</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>