<header id="header">
    <!--Main header-->

    <div class="main-header">
        <!--Profile image-->
        <figure class="img-profile">
            <img src="<?php echo base_url('assets1/') ?>img/profile.jpg" alt="" />


        </figure>
        <!--End profile image-->

        <!--Main navigation-->
        <nav id="main-nav" class="main-nav clearfix tabbed">
            <ul>
                <li><a href=<?php echo base_url('C_guru/guru_home') ?>> <i class="fa fa-user"></i>PROFIL</a></li>
                <li><a href=<?php echo base_url('C_guru/guru_jadwal') ?>> <i class="fa fa-calendar-o"></i>JADWAL</a></li>
                <li><a href=<?php echo base_url('C_guru/guru_daftar_siswa') ?>> <i class="fa fa-file-text"></i>NILAI SISWA</a></li>
                <li><a href=<?php echo base_url('C_login/logout') ?>> <i class="fa fa-power-off"></i>keluar</a></li>

            </ul>
        </nav>
        <!--End main navigation-->
    </div>
    <!--End main header-->

</header>