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
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">AAES</span>
      </a>

      <a href="dashboard.php">Dashboard</a>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <section class="section">
      <form action = "formselements.php" method="post">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CONSULTANT ON-CALL</h5>

              <!-- Horizontal Form -->
              
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Anaethethist :</label>
                  <input type="text" name="anaethethist" id="anaethethist" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Cardiac Surgeon :</label>
                  <input type="text" name="cardiac" id="cardiac" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Ear, Nose & Throat Surgeon :</label>
                  <input type="text" name="earnose" id="earnose" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">General Surgeon :</label>
                  <input type="text" name="gsurgeon" id="gsurgeon" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">General Physician :</label>
                  <input type="text" name="gphysician" id="gphysician" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Nephrologist :</label>
                  <input type="text" name="nephrologist" id="nephrologist" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Gastroentologist :</label>
                  <input type="text" name="gastroentologist" id="gastroentologist" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Neurosurgeon :</label>
                  <input type="text" name="neurosurgeon" id="neurosurgeon" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Obstetrician :</label>
                  <input type="text" name="obstetrician" id="obstetrician" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Ophtalmologist :</label>
                  <input type="text" name="ophtalmologist" id="ophtalmologist" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Orthopaedic Surgeon :</label>
                  <input type="text" name="orthopaedic" id="orthopaedic" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Paediatrician :</label>
                  <input type="text" name="paediatrician" id="paediatrician" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Plastic Surgeon :</label>
                  <input type="text" name="plasticsurgeon" id="plasticsurgeon" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inpuText" class="form-label">Urologist :</label>
                  <input type="text" name="urologist" id="urologist" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Psychiatrist:</label>
                  <input type="text" name="psychiatrist" id="psychiatrist" class="form-control">
                </div>
                <br>
          <!-- End Horizontal Form -->
            </div>
          </div>

        </div>
        <!--End Consultants On-Call-->

        <!--Personnel On-Call-->

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">HOSPITAL PERSONNEL ON-CALL</h5>

              <!-- Multi Columns Form -->
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Medical Director :</label>
                  <input type="text" name="md" id="md" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Head Of Department :</label>
                  <input type="text" name="hod" id="hod" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">Medical Officer In-Charge :</label>
                  <input type="text" name="moic" id="moic" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Unit Manager (AM) :</label>
                  <input type="text" name="um_am" id="um_am" class="form-control"><br>
                  <input type="text" name="um_am" id="um_am" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Unit  Manager (PM) :</label>
                  <input type="text" name="um_pm" id="um_pm" class="form-control"><br>
                  <input type="text" name="um_pm" id="um_pm" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Unit  Manager (Night) :</label>
                  <input type="text" name="um_night" id="um_night" class="form-control"><br>
                  <input type="text" name="um_night" id="um_night" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Medical Officer (AM) :</label>
                  <input type="text" name="mo_am" id="moa_am" class="form-control"><br>
                  <input type="text" name="mo_am" id="mo_am" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Medical Officer (PM) :</label>
                  <input type="text" name="mo_pm" id="mo_pm" class="form-control"><br>
                  <input type="text" name="mo_pm" id="mo_pm" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Medical Officer(Night) :</label>
                  <input type="text" name="mo_night" id="mo_night" class="form-control"><br>
                  <input type="text" name="mo_night" id="mo_night" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="inputText" class="form-label">Lab 1 :</label>
                  <input type="text" name="lab1" id="lab1" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="inputText" class="form-label">Lab 2 :</label>
                  <input type="text" name="lab2" id="lab2" class="form-control">
                </div>
                <div class="col-12">
                  <label for="inputText" class="form-label">Radiologist :</label>
                  <input type="text" name="radiologist" id="radiologist" class="form-control">
                </div>
                <div class="col-12">
                  <label for="inputText" class="form-label">Radiograph :</label>
                  <input type="text" name="radiograph" id="radiograph" class="form-control">
                </div>
            </div>
          </div>
        </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CONSULTANT ON LEAVE</h5>

              <!-- Multi Columns Form -->
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Doctor : </label>
                  <input type="text" name="" id="" class="form-control">
                </div>
                 <div class="col-md-4">
                  <label for="inputDate" class="form-label">Date :</label>
                  <div class="col-md-12">
                    <input type="date" name="date" id="date" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label">Cover :</label>
                  <input type="text" class="form-control" id="id_consultant">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                  <button type="reset" name="reset" id="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
          </div>

        </div>
      </div>
      </form>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright 2023<strong><span>KPJ Klang</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>