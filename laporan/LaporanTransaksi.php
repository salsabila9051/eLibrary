<main id="main-container">

    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Data Siswa
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>Informasi</li>
                    <li><a class="link-effect" href="">Data Siswa</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header">
                <ul class="block-options">
                </ul>
            </div>
            <div class="block-content">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                <div id="main" style="height:400px;"></div>
                <!-- END FORM-->
                <?php
                $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                $dari = date('d', strtotime($_GET['dari'])) . ' ' . $bulan[date('n', strtotime($_GET['dari']))] . ' ' . date('Y', strtotime($_GET['dari']));
                $sampai = date('d', strtotime($_GET['sampai'])) . ' ' . $bulan[date('n', strtotime($_GET['sampai']))] . ' ' . date('Y', strtotime($_GET['sampai']));
                $k = mysqli_query($koneksi, "select * from tbl_transaksi");
                $q = mysqli_query($koneksi, "select date_format(tgl_pinjam,'%d/%b/%y') as bulan from tbl_transaksi where tgl_pinjam between '$_GET[dari]' and '$_GET[sampai]' and status='Pinjam' group by tgl_pinjam having(tgl_pinjam)>1 order by tgl_pinjam asc");
                $s = mysqli_query($koneksi, "select count(tgl_pinjam) as total from tbl_transaksi where tgl_pinjam between '$_GET[dari]' and '$_GET[sampai]' and status='Pinjam' group by tgl_pinjam having(tgl_pinjam)>1 order by tgl_pinjam asc");
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
            </div>
        </div>
</main>