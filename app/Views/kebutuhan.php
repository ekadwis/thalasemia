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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <div class="content-kebutuhan">
        <main class="main">
            <div class="container">
                <div class="col-md-12" style="margin-left: 20px">
                    <ul>
                        <div class="col-md-12" >
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-header">Golongan Darah</div>
                                </div>
                                <div class="number-chart">
                                    <div class="number-badge">
                                        <div class="text-number">57</div>
                                        <div class="text-header">
                                            <div class="card-change">
                                                <i class='bx bx-up-arrow-alt'></i>
                                                <div class="text-14">Jumlah golongan darah yang dibutuhkan</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-chart">
                                        <img src="/img/undraw_undraw_undraw_undraw_love_it_xkc2_gyie_-1-_ty26_-1-_bkkj.svg" style="width: 120px; height: 100px; margin-top: -38px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-card">
                            <div class="card">
                                <div class="modal-header">
                                    <div class="header-card">
                                        <h3>Daftarkan diri anda!</h3>
                                        <div>Isi data dengan lengkap.</div>
                                    </div>
                                </div>
                                <form action="/daftar" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" require>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <input type="text" class="form-control" name="kelas" require>
                                    </div>
                                    <div class="mb-3">
                                        <label for="berat_badan" class="form-label">Berat Badan(kg)</label>
                                        <input type="text" class="form-control" name="berat_badan" require>
                                    </div>
                                    <div class="mb-3">
                                        <label for="golongan_darah" class="form-label">Golongan Darah</label>
                                        <select class="form-select" aria-label="Default select example" name="golongan_darah">
                                            <option value="A" selected>A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    <!--END CONTENT-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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