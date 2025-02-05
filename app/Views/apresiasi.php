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

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">


    <title>APRESIASI</title>
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
        <div class="nav_bar">
            <i class="fa fa-bars nav_btn"></i>
        </div>
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

    <!--- START CONTENT--->
    <div class="content">
        <div class="col-md-4"  style="margin-left: 40px;">
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

        <div class="content-apresiasi"  style="margin-left: 40px;">
            <div class="col-md-4">
                <div class="card2">
                    <div class="apreciate">
                        <p>Terimakasih karena sudah mendaftar menjadi pendonor darah</p>
                    </div>
                </div>
            </div>
            <div class="content-page">
                <div class="title">
                    <h5>Daftar Pendonor</h5>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data_pendonor as $results) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $results['nama']; ?></td>
                                <td><?= $results['tanggal']; ?></td>
                                <td><?= $results['kelas']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--- END CONTENT--->

        <!-- TAMBAH LAPORAN -->
        <div id="modal" class="modal">
            <div class="modal-wrap">
                <div class="modal-header">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 8px; flex: 1 0 0;">
                        <div class="text-18">Daftarkan Diri Anda!</div>
                        <div class="text-14">Isi daat dengan lengkap.</div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <button id="close" class="button-gray">Batal</button>
                        <button class="button-base">Simpan</button>
                    </div>
                </div>
                <div class="modal-content">
                    <div class="input-base">
                        <label for="" class="label">Nama</label>
                        <div class="input-container container-label">
                            <input class="input-field" type="text" placeholder="Masukkan nama tugas">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Tanggal</label>
                        <div class="input-container container-label">
                            <input class="input-field" type="datetime-local" placeholder="Masukan jadwal">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Berat Badan</label>
                        <div class="input-container container-label">
                            <input class="input-field" type="text" placeholder="Masukkan nama tugas">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Golongan Darah</label>
                        <div class="input-container container-label">
                            <select name="status-pekerjaan" id="status" class="input-field">
                                <option value="-">--Pilih Golongan Darah--</option>
                                <option value="belum dikerjakan">A</option>
                                <option value="dalam proses">B</option>
                                <option value="selesai">O</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
        <script src="https://cdn.datatables.net/datetime/1.5.2/js/dataTables.dateTime.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });

            new DataTable('#example', {
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });
        </script>
        <script>
            // Get the modal
            var modal = document.getElementById("modal");

            // Get the button that opens the modal
            var btn = document.getElementById("tambahLaporan");

            // Get the <span> element that closes the modal
            var batal = document.getElementById("close");

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            batal.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </div>

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