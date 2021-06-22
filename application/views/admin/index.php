    <!-- Begin page -->
    <!-- <div id="wrapper"> -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Dashboard</h4>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Gugus Mitigasi</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end page-title -->

                <div class="row mb-4">
                    <div class="col-sm-4">
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control form-control-select" id="bulan">
                            <option value="" selected>Semua Bulan</option>
                            <option value="2021-01-11">Januari</option>
                            <option value="2021-02-11">Februari</option>
                            <option value="2021-03-11">Maret</option>
                            <option value="2021-04-11">April</option>
                            <option value="2021-05-11">Mei</option>
                            <option value="2021-06-11">Juni</option>
                            <option value="2021-07-11">Juli</option>
                            <option value="2021-08-11">Agustus</option>
                            <option value="2021-09-11">September</option>
                            <option value="2021-10-11">Oktober</option>
                            <option value="2021-11-11">November</option>
                            <option value="2021-12-11">Desember</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select name="kampung" id="kampung" class="form-control">
                            <option value="" selected>Pilih Kampung</option>
                            <option value="cikumpay">Cikumpay</option>
                            <option value="cimangpang">Cimangpang</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-4 col-xl-4">
                        <div class="card shadow">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-account-multiple-plus-outline bg-primary text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Anggota Baru</h5>
                                </div>
                                <h3 class="mt-4">3</h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xl-4">
                        <div class="card shadow rounded">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-account-star-outline bg-success text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Anggota Tetap</h5>
                                </div>
                                <h3 class="mt-4"><?= $data['anggota']; ?></h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xl-4">
                        <div class="card shadow">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-baby bg-warning text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Masyarakat Rentan</h5>
                                </div>
                                <h3 class="mt-4"><?= $data['prioritas']; ?></h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Data Masyarakat Rentan</h4>
                            </div>

                            <!-- <div id="morris-area-example" class="morris-charts morris-chart-height"></div> -->
                            <canvas id="myChart" width="200" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->

            <!-- START ROW -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Data Penduduk</h4>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal Survey</th>
                                            <th scope="col">Kepala Keluarga</th>
                                            <th scope="col">Pendapatan</th>
                                            <th scope="col">Jumlah Jiwa</th>
                                            <th scope="col">Surveyor</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->

        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->

    <footer class="footer">
        © 2021 Gugus Mitigasi Lebak Selatan.
    </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=+` + lat + `+,+` + long + `+&hl=es&z=14&amp;output=embed">
                    </iframe>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    </div>

    <style>
        .page-link {
            color: #b40a18;
        }

        .page-item.active .page-link {
            background-color: #b40a18;
            border-color: #b40a18;
        }

        .page-item:first-child .page-link {
            color: #b40a18;
        }

        .page-item:last-child .page-link {
            color: #b40a18;
        }

        #datatable_filter,
        .pagination {
            float: right;
        }
    </style>
    <!-- END wrapper -->
    <link rel="stylesheet" href="<?= base_url() ?>assets2/plugins/magnific-popup/magnific-popup.css">
    <script src="<?= base_url() ?>assets2/js/jquery.min.js"></script>

    <script src="<?= base_url() ?>assets2/plugins/chartjs/chart.min.js"></script>
    <script src="<?= base_url() ?>assets2/pages/chartjs.init.js"></script>

    <!-- Required datatable js -->
    <script src="<?= base_url() ?>assets2/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url() ?>assets2/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="<?= base_url() ?>assets2/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url() ?>assets2/pages/datatables.init.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/jquery.magnific-popup.min.js"></script>
    <script>
        // Datatable

        var dtable = $("#datatable").DataTable({
            "responsive": true,
            "processing": true,
            "paging": true,
            "ordering": false,
            "info": true,
            "bFilter": true,
            columns: [{
                    data: "tanggal_survey",
                    "render": function(data, type, row, meta) {
                        var date = new Date(data);
                        var year = date.getFullYear();
                        var month = date.getMonth() + 1;
                        var dt = date.getDate();;

                        if (dt < 10) {
                            dt = '0' + dt;
                        }
                        if (month < 10) {
                            month = '0' + month;
                        }

                        var datenow = dt + '-' + month + '-' + year;
                        return datenow
                    },
                    className: "dt-head-center dt-body-right bodyclick"
                },
                {
                    data: "nama_kk",
                    "render": function(data, type, row, meta) {
                        return `<a class="text-primary" href="<?php echo base_url('Admin/detail_member/'); ?>` + row.id_penduduk + `">` + data + `</a>`
                    },
                    className: "dt-head-center dt-body-right bodyclick"
                },
                {
                    data: "pendapatan",
                    className: "dt-head-center dt-body-right bodyclick"
                },
                {
                    data: "jumlah_jiwa",
                    "render": function(data) {
                        return `` + data + ` Orang`
                    },
                    className: "dt-head-center dt-body-right bodyclick"
                },
                {
                    data: "surveyor",
                    className: "dt-head-center dt-body-right bodyclick"
                },

                {
                    data: "gps",
                    "render": function(data, type, row, meta) {
                        var lat = data.split(',')[0];
                        var long = data.split(',')[1];
                        return `<button class="btn btn-success" onclick="get_maps(` + lat + `,` + long + `)"><i class="mdi mdi-map-marker-outline"></i> Lihat Peta</button>`
                    },
                    className: "dt-head-center dt-body-right bodyclick"
                },
                {
                    data: "id_penduduk",
                    "render": function(data, type, row, meta) {
                        return `<a href="<?php echo base_url('Admin/delete_public'); ?>` + data + `" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus member ini?');"><i class="mdi mdi-delete-outline" style="font-size: 14px;"></i></a>`
                    },
                    className: "dt-head-center dt-body-right"
                },

            ],
            ajax: {
                url: ' <?php echo base_url("Admin/get_public"); ?>',
                method: 'POST',
                "data": function(d) {
                    d.puskesmas = $("#puskesmas").val();
                    d.rs = $("#rs").val();
                    d.status = $("#status").val();
                    d.cari = $("#cari").val();
                }
            },
            lengthMenu: [
                [5, 10, 25, 50, 100, 1000],
                [5, 10, 25, 50, 100, 1000]
            ],
            pagingType: "simple_numbers",
            pageLength: 10,

        });
    </script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Balita Laki-laki', 'Balita Perempuan', 'Lansia Pria', 'Lansia Wanita', 'Disabilitas Fisik', 'Disabilitas Intelektual', 'Disabilitas Mental', 'Disabilitas Sensorik'],
                datasets: [{
                    label: 'Grafik Masyarakat Rentan',
                    data: [<?= $data['balita_laki'] ?>, <?= $data['balita_perempuan'] ?>, <?= $data['lansia_pria'] ?>, <?= $data['lansia_wanita'] ?>, <?= $data['dis_fisik'] ?>, <?= $data['dis_intelektual'] ?>, <?= $data['dis_mental'] ?>, <?= $data['dis_sensor'] ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        scaleLabel: {
                            display: true
                        },
                    }]
                }
            }
        });



        function get_maps(lat, long) {
            document.getElementById("myModal").innerHTML = Date();
        }
    </script>