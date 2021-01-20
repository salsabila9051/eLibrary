<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="shortcut icon" href="library_(2).png">
    <title>Perpustakaan &mdash; Sekolah</title>


    <!-- General CSS Files -->
    <link rel="stylesheet" href="dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="dist/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="dist/assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="dist/assets/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="dist/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="dist/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="dist/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="dist/assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="dist/assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="dist/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="dist/assets/css/style.css">
    <link rel="stylesheet" href="dist/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="dist/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $_SESSION['username']; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <img src="library3.png">
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <img src="library3.png" alt="">
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown">
                            <a href="dashboard.php" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Data Master</li>
                        <li><a class="nav-link" href="home.php?page=anggota"><i class="fas fa-user"></i> <span>Data Anggota</span></a></li>

                        <li><a class="nav-link" href="home.php?page=buku"><i class="fas fa-book"></i>
                        <span>Data Buku</span></a></li>

                        <li><a class="nav-link" href="home.php?page=petugas"><i class="fas fa-user"></i> <span>Data Petugas</span></a></li>
                        
                        <li class="menu-header">Pengelolaan</li>
                        <li><a class="nav-link" href="home.php?page=transaksi"><i class="fas fa-shopping-cart"></i> <span>Transaksi</span></a></li>


                        <li><a class="nav-link" href="home.php?page=sanksi"><i class="fas fa-edit"></i> <span>Sanksi</span></a></li>
                        
                        <li><a class="nav-link" href="home.php?page=pengadaan"><i class="fas fa-book"></i> <span>Pengadaan</span></a></li>

                        <li><a class="nav-link" href="home.php?page=laporan"><i class="fas fa-chart-area"></i> <span>Data Laporan</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <?php
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];
                        if ($page == "buku") {
                            if ($aksi == "") {
                                include "buku/buku.php";
                            } elseif ($aksi == "tambah") {
                                include "buku/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "buku/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "buku/hapus.php";
                            }
                        } elseif ($page == "anggota") {
                            if ($aksi == "") {
                                include "anggota/anggota.php";
                            } elseif ($aksi == "tambah") {
                                include "anggota/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "anggota/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "anggota/hapus.php";
                            }
                        } elseif ($page == "petugas") {
                            if ($aksi == "") {
                                include "petugas/petugas.php";
                            } elseif ($aksi == "tambah") {
                                include "petugas/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "petugas/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "petugas/hapus.php";
                            }
                        } elseif ($page == "transaksi") {
                            if ($aksi == "") {
                                include "transaksi/transaksi.php";
                            } elseif ($aksi == "tambah") {
                                include "transaksi/tambah.php";
                            } elseif ($aksi == "kembali") {
                                include "transaksi/kembali.php";
                            } elseif ($aksi == "perpanjang") {
                                include "transaksi/perpanjang.php";
                            }
                         } elseif ($page == "pengadaan") {
                            if ($aksi == "") {
                                include "pengadaan/pengadaan.php";
                            } elseif ($aksi == "tambah") {
                                include "pengadaan/pengadaan.php";
                            } elseif ($aksi == "ubah") {
                                include "pengadaan/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "pengadaan/hapus.php";
                            }
                        } elseif ($page == "sanksi") {
                            if ($aksi == "") {
                                include "sanksi/sanksi.php";
                            } elseif ($aksi == "tambah") {
                                include "sanksi/sanksi.php";
                            } elseif ($aksi == "ubah") {
                                include "sanksi/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "sanksi/hapus.php";
                            }   
                        } elseif ($page == "laporan") {
                            if ($aksi == "") {
                                include "laporan/laporan.php";
                            } elseif ($aksi == "tambah") {
                                include "laporan/tambah.php";
                            } elseif ($aksi == "kembali") {
                                include "transaksi/kembali.php";
                            } elseif ($aksi == "perpanjang") {
                                include "transaksi/perpanjang.php";
                            }
                        }
                    }
                    ?>

                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Sal Sabila W 
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- Modal Popup untuk delete-->
    <div class="modal fade" id="modal_delete">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Apakah Anda Yakin Akan Menghapus Data Ini ?</h4>
                </div>

                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="dist/assets/modules/jquery.min.js"></script>
    <script src="dist/assets/modules/popper.js"></script>
    <script src="dist/assets/modules/tooltip.js"></script>
    <script src="dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="dist/assets/modules/moment.min.js"></script>
    <script src="dist/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="dist/assets/modules/sweetalert/sweetalert.min.js"></script>
    <script src="dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="dist/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="dist/assets/modules/datatables/datatables.min.js"></script>
    <script src="dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="dist/assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="dist/assets/modules/chart.min.js"></script>
    <script src="dist/assets/modules/cleave-js/dist/cleave.min.js"></script>
    <script src="dist/assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
    <script src="dist/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="dist/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="dist/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="dist/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="dist/assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="dist/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <script type="text/javascript">
        // based on prepared DOM, initialize echarts instance
        var ctx = document.getElementById("cetak").getContext('2d');
        var myChart = new Chart(ctx, {
            title: {
                text: 'Grafik Pengunjung Perpustakaan (Siswa)',
                subtext: 'Dari tanggal <?php echo $dari . " - " . $sampai; ?>'
            },
            tooltip: {},

            toolbox: {
                show: true,
                showTitle: true,
                feature: {
                    mark: {
                        show: true
                    },
                    dataView: {
                        show: true,
                        readOnly: false,
                        title: 'Data',
                        lang: ['Data Pengunjung', 'Kembali', 'refresh']
                    },
                    restore: {
                        show: true,
                        title: 'Refresh'
                    },
                    saveAsImage: {
                        show: true,
                        title: 'Simpan'
                    },
                    magicType: {
                        show: true,
                        type: ['line', 'bar'],
                        title: 'line'
                    }
                }
            },
            calculable: true,
            xAxis: {
                data: [<?php while ($r = mysqli_fetch_array($q)) {
                            echo "'" . $r["bulan"] . "',";
                        } ?>]
            },
            yAxis: {},
            series: [{
                name: 'Pengunjung',
                type: 'bar',
                label: {
                    normal: {
                        show: true,
                        position: 'top'
                    }
                },
                data: [<?php while ($t = mysqli_fetch_array($s)) {
                            echo $t["total"] . ",";
                        } ?>]
            }]
        });

        // use configuration item and data specified to show chart
        myChart.setOption(option);
    </script>

    <script>
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Buku", "Anggota"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $jumlah_teknik = mysqli_query($koneksi, "SELECT * FROM tbl_buku");
                        echo mysqli_num_rows($jumlah_teknik);
                        ?>,
                        <?php
                        $jumlah_ekonomi = mysqli_query($koneksi, "SELECT * FROM tbl_anggota");
                        echo mysqli_num_rows($jumlah_ekonomi);
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script type="text/javascript">
        function confirm_modal(delete_url) {
            $('#modal_delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <!-- Page Specific JS File -->
    <script src="dist/assets/js/page/modules-chartjs.js"></script>
    <script src="dist/assets/modules/chart.min.js"></script>
    <script src="dist/assets/js/page/index-0.js"></script>
    <script src="dist/assets/js/page/modules-sweetalert.js"></script>
    <script src="dist/assets/js/page/modules-datatables.js"></script>
    <script src="dist/assets/js/page/forms-advanced-forms.js"></script>


    <!-- Template JS File -->
    <script src="dist/assets/js/scripts.js"></script>
    <script src="dist/assets/js/custom.js"></script>
</body>

</html>