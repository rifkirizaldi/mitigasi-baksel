<!-- Begin page -->
<!-- <div id="wrapper"> -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <iframe id="iFrame1" frameborder="0" onload="resizeIframe(this)" src="https://mhews.bmkg.go.id/banten-forecast?kabkota=Kab.+Lebak" title="Mhews" style="width: 100%; height: 100vh;"></iframe>
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
<script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    }
</script>