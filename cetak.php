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
                        <li><a class="nav-link" href="home.php?page=buku"><i class="fas fa-book"></i> <span>Data Buku</span></a></li>
                        <li><a class="nav-link" href="home.php?page=petugas"><i class="fas fa-user"></i> <span>Data Petugas</span></a></li>
                        <li class="menu-header">Pages</li>
                        <li><a class="nav-link" href="home.php?page=transaksi"><i class="fas fa-shopping-cart"></i> <span>Transaksi</span></a></li>
                        <li><a class="nav-link" href="home.php?page=laporan"><i class="fas fa-chart-area"></i> <span>Data Laporan</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 
                </div>
                <div class="footer-right">

                </div>
            </footer>
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
    <script src="dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="dist/assets/modules/chart.min.js"></script>
    <script src="dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="dist/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables/jquery.dataTables.js"></script>
    <script src="dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables/dataTables.bootstrap.js"></script>
    <?php
    $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $dari = date('d', strtotime($_GET['dari'])) . ' ' . $bulan[date('n', strtotime($_GET['dari']))] . ' ' . date('Y', strtotime($_GET['dari']));
    $sampai = date('d', strtotime($_GET['sampai'])) . ' ' . $bulan[date('n', strtotime($_GET['sampai']))] . ' ' . date('Y', strtotime($_GET['sampai']));
    $k = mysqli_query($koneksi, "select * from tbl_transaksi");
    $q = mysqli_query($koneksi, "SELECT date_format(tgl_pinjam,'%d/%b/%y') as bulan from tbl_transaksi WHERE tgl_pinjam between '$_GET[dari]' and '$_GET[sampai]' group by tgl_pinjam having(tgl_pinjam)>1 order by tgl_pinjam asc");
    $s = mysqli_query($koneksi, "select count(tgl_pinjam) as total from tbl_transaksi where tgl_pinjam between '$_GET[dari]' and '$_GET[sampai]' group by tgl_pinjam having(tgl_pinjam)>1 order by tgl_pinjam asc");
    ?>
    <script type="text/javascript">
        // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('main'));

        // specify chart configuration item and data
        var option = {
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
        };

        // use configuration item and data specified to show chart
        myChart.setOption(option);
    </script>

    <!-- Page Specific JS File -->
    <script src="dist/assets/js/page/index-0.js"></script>

    <!-- Template JS File -->
    <script src="dist/assets/js/scripts.js"></script>
    <script src="dist/assets/js/custom.js"></script>
</body>

</html>