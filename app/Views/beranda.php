<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link CSS external -->
  <link rel="stylesheet" href="/css/sidebar.css">
  <link rel="stylesheet" href="/css/style.css">

  <!-- Link Font Awesome -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <!-- Font Inter  -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <!-- JQuery  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Dashboard</title>
</head>

<body>
  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class='bx bx-menu' id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <img src="/img/logo9-removebg-preview.png" class="mobile_profile_image" alt="" style="width: 65px; height: 80px;">
    </div>
  </header>
  <!--header area end-->
  <!--mobile navigation bar start-->
  <div class="mobile_nav pt-5">
    <div class="mobile_nav_items">
      <a href="/"><i class='bx bx-home'></i><span>Beranda</span></a>
      <a href="/kebutuhan"><i class='bx bx-layer'></i><span>Kebutuhan</span></a>
      <a href="/apresiasi"><i class='bx bx-party'></i><span>Apresiasi</span></a>
    </div>
  </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <div class="sidebar pt-5">
    <a href="/"><i class='bx bx-home'></i></i><span>Beranda</span></a>
    <a href="/kebutuhan"><i class='bx bx-bar-chart'></i><span>Kebutuhan</span></a>
    <a href="/apresiasi"><i class='bx bx-party'></i><span>Apresiasi</span></a>
  </div>
  <!--sidebar end-->

  <!--START CONTENT-->
  <div class="content kebutuhan-content">
    <main class="main">
      <div class="col-md-12">
        <ul>
          <div class="col-md-12" style="margin-left: 20px;">
            <div class="form-card">
              <div class="card">
                <div class="modal-header">
                  <div class="header-card">

                    <h3 class="fw-bold">Selamat Datang di Thalasemia - Bersama untuk Kehidupan</h3>
                    <h4 class="fw-bold">Bergabunglah Menjadi Pahlawan Sejati dengan Donor Darah</h4>
                    <p>
                      Setiap tetes darah yang Anda sumbangkan bisa menyelamatkan nyawa seseorang. Di [Nama Website], kami menghubungkan <br>pendonor darah dengan mereka yang membutuhkan, menciptakan komunitas yang peduli dan siap membantu. </p>
                    <h4 class="fw-bold">Mengapa Donor Darah?</h4>
                    <p style="margin-left: 20px;">
                      1. Menyelamatkan Nyawa: Setiap donor darah dapat membantu tiga orang yang membutuhkan transfusi.<br>
                      2. Kesehatan Pendonor: Donor darah secara rutin dapat membantu menjaga kesehatan jantung dan menurunkan risiko kanker.<br>
                      3. Kepedulian Sosial: Berpartisipasi dalam kegiatan donor darah memperkuat solidaritas dan kepedulian terhadap sesama. </p>
                    <h4 class="fw-bold">Bagaimana Caranya?</h4>
                    <a class="btn btn-success w-25" href="/kebutuhan"> Daftar disini</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </ul>
      </div>
  </div>
  </main>
  </div>
  <!--END CONTENT-->

  <!-- Optional JavaScript -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
      });
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>