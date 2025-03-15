            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
                    <div class="sidebar-brand-icon">
                        <img src="<?= base_url('/assets/img/home/home.png') ?>"
                            style="width:50px; height:50px; margin-right:3%">
                    </div>
                    <div class="sidebar-brand-text mx-3">Kelurahan Palmerah</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Dashboard</span></a>
                </li>


                <div class="sidebar-heading">
                    Menu Admin
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Permintaan Persuratan</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pembuatan:</h6>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/ktp'); ?>"><i
                                    class="icon-credit-card"></i> KTP</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/kk'); ?>"><i
                                    class="icon-picture"></i> KK</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/sktm'); ?>"><i
                                    class="icon-cogs"></i> SKTM</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/skck'); ?>"><i
                                    class="icon-police"></i> SKCK</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/domisili'); ?>"><i
                                    class="icon-globe"></i> Surat
                                Domisili</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/pindah'); ?>"><i
                                    class="icon-moving"></i> Surat
                                Pindah</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/kelahiran'); ?>"><i
                                    class="icon-baby"></i> Surat
                                Kelahiran</a>
                            <a class="collapse-item" href="<?= base_url('dashboard/surat/lihat/kematian'); ?>"><i
                                    class="icon-dead"></i> Surat
                                Kematian</a>
                        </div>
                    </div>

                <li class="nav-item ">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThre"
                        aria-expanded="true" aria-controls="collapseThre">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Info Terbaru</span>
                    </a>
                    <div id="collapseThre" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Portal Berita:</h6>
                            <a class="collapse-item" href="<?= base_url('dashboard/berita'); ?>"><i
                                    class="icon-credit-card"></i> Info terbaru</a>
                        </div>
                    </div>

                    <div class="sidebar-heading">
                        Menu User
                    </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('layanan/managemen_user'); ?>" data-toggle="collapse" data-target="#collapseFour"
                        aria-expanded="true" aria-controls="collapseFour">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Modul Users</span>
                    </a>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pengaturan:</h6>
                            <a class="collapse-item" href="<?= base_url('layanan/managemen_user'); ?>"><i
                                    class="icon-user"></i> Users</a>
                        </div>
                    </div>

                    <hr class="sidebar-divider mt-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End  of Sidebar -->