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
                    <div class="col-sm-3">
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
                        <select name="kampung" id="kampung" class="form-control form-control-select">
                            <option value="" selected>Pilih Jenis Kejadian</option>
                            <option value="Cikumpay">Alam</option>
                            <option value="Cimangpang">Non Alam</option>
                            <option value="Panggarangan">Sosial</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="kampung" id="kampung" class="form-control form-control-select">
                            <option value="" selected>Pilih Kampung</option>
                            <option value="Cikumpay">Cikumpay</option>
                            <option value="Cimangpang">Cimangpang</option>
                            <option value="Panggarangan">Panggarangan</option>
                        </select>
                    </div>
                </div>

                <!-- START ROW -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="mt-0 header-title mb-4">Tambah Laporan Kejadian</h4>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Kejadian</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Pengirim</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kejadian</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="incident_name" id="">
                                            <option value="">Pilih Kejadian</option>
                                            <option value="">Banjir</option>
                                            <option value="">Gempa Bumi</option>
                                            <option value="">Longsor</option>
                                            <option value="">Tsunami</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi</label>

                                    <div class="col-sm-8">
                                        <div class="card m-b-30">
                                            <div class="card-body">

                                                <textarea id="elm1" name="area"></textarea>

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-secondary">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ROW -->


            </div>
            <!-- end row -->

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
    <script src="<?= base_url() ?>assets2/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Lightbox -->
    <script src="<?= base_url() ?>assets2/pages/lightbox.js"></script>

    <script src="<?= base_url() ?>assets2/plugins/tinymce/tinymce.min.js"></script>

    <script>
        $(document).ready(function() {
            if ($("#elm1").length > 0) {
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [{
                            title: 'Bold text',
                            inline: 'b'
                        },
                        {
                            title: 'Red text',
                            inline: 'span',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Red header',
                            block: 'h1',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Example 1',
                            inline: 'span',
                            classes: 'example1'
                        },
                        {
                            title: 'Example 2',
                            inline: 'span',
                            classes: 'example2'
                        },
                        {
                            title: 'Table styles'
                        },
                        {
                            title: 'Table row 1',
                            selector: 'tr',
                            classes: 'tablerow1'
                        }
                    ]
                });
            }
        });
    </script>