    <!-- E50014 -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu mt-5" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="<?= base_url('admin') ?>" class="waves-effect">
                            <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right">9+</span> <span> Dashboard </span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Email Read</a></li>
                            <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li> -->

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-information-outline"></i><span> Lapor <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="<?= base_url('Admin/incident_report') ?>">Kejadian</a></li>
                            <li><a href="<?= base_url('Admin/potention_report') ?>">Potensi</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?= base_url('Admin/anggota') ?>" class="waves-effect"><i class="ti-user"></i><span> Anggota </span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/penduduk') ?>" class="waves-effect"><i class="mdi mdi-account-multiple-outline"></i><span> Penduduk </span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-content-save-outline"></i><span> Manajemen Konten <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="#">Pengumuman</a></li>
                            <li><a href="#">Banner</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="<?= base_url('Admin/maps') ?>" class="waves-effect"><i class="mdi mdi-map-legend"></i><span> Peta </span></a>
                    </li> -->
                    <!-- <li>
                        <a href="https://inatews.bmkg.go.id/wrs/index.html" target="_blank" class="waves-effect"><i class="mdi mdi-map-legend"></i><span> Inatews </span></a>
                    </li> -->
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-legend"></i><span> BMKG <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li>
                                <a href="<?= base_url('Admin/inatews') ?>" class="waves-effect"><span> Inatews </span></a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/mhews') ?>" class="waves-effect"><span> MHEWS </span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" target="_blank" class="waves-effect"><i class="mdi mdi-map-legend"></i><span> Parameter </span></a>
                    </li>




                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->