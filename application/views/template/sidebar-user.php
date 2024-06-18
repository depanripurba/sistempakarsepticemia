        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="<?=base_url('assets/img/')?>logo.png" alt="profile" />
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">Dinas Perkebunan<br> dan Kehutanan</span>
                                <span class="text-secondary text-small">Admin</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('user/diagnosa')?>">
                            <span class="menu-title">Diagnosa Penyakit</span>
                            <i class="fa fa-stethoscope menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('user/logout')?>">
                            <span class="menu-title">Logout</span>
                            <i class="fa fa-close menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- partial -->