<link href="<?= base_url() ?>assets2/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets2/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="<?= base_url() ?>assets2/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid" style="margin-top: 100px;">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Daftar Anggota</h4>
                            <!-- <p class="sub-title../plugins">The Buttons extension for DataTables
                                provides a common set of options, API methods and styling to display
                                buttons on a page that will interact with a DataTable. The core library
                                provides the based framework upon which plug-ins can built.
                            </p> -->

                            <table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nama Lengkap <br>(Tanpa Gelar)</th>
                                        <th class=" text-center">Tanggal Masuk</th>
                                        <th class="text-center">Nama <br> Panggilan</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Tempat Lahir</th>
                                        <th class="text-center">Pekerjaan <br> Utama</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

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
</style>
<script src="<?= base_url() ?>assets2/js/jquery.min.js"></script>

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
<script>
    // datatable-buttons
    var dtable = $("#datatable").DataTable({
        "responsive": true,
        "processing": true,
        "paging": true,
        "ordering": false,
        "info": true,
        "bFilter": true,
        columns: [{
                data: "nama_lengkap",
                "render": function(data, type, row, meta) {
                    return `<a class="text-primary" href="<?php echo base_url('Admin/detail_member/'); ?>` + row.id + `">` + data + `</a>`
                },
                className: "dt-head-center dt-body-right bodyclick"
            },
            {
                data: "tanggal_masuk",
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
                data: "nama_panggilan",
                className: "dt-head-center dt-body-right bodyclick"
            },
            {
                data: "jenis_kelamin",
                className: "dt-head-center dt-body-right bodyclick"
            },
            {
                data: "tempat_lahir",
                className: "dt-head-center dt-body-right bodyclick"
            },
            {
                data: "pekerjaan",
                className: "dt-head-center dt-body-right bodyclick"
            },
            {
                data: "id_status",
                "render": function(data, type, row, meta) {
                    if (data == 1) {
                        return '<div class="badge bg-success text-white" style="font-size: 14px;">' + row.nama_status + '</div>'
                    } else if (data == 2) {
                        return '<div class="badge bg-danger text-white" style="font-size: 14px;">' + row.nama_status + '</div>'
                    }

                },
                className: "dt-head-center dt-body-right bodyclick"
            },
            {
                data: "id",
                "render": function(data, type, row, meta) {
                    return `<a href="<?php echo base_url('Admin/delete_member/'); ?>` + row.id + `" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus member ini?');"><i class="mdi mdi-delete-outline" style="font-size: 14px;"></i></a>`
                },
                className: "dt-head-center dt-body-right"
            },

        ],
        ajax: {
            url: ' <?php echo base_url("Admin/get_member"); ?>',
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