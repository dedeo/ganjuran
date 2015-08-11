    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                <img src="img/logo-small.jpg">

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $this->Html->url(array('controller'=>'/')) ?>">beranda</a></li>
                    <li><a href="<?php echo $this->Html->url(array('controller'=>'berita')) ?>">berita</a></li>
                    <!-- <li><a href="#section-profil">profil</a></li> -->
                    <li><a href="<?php echo $this->Html->url(array('controller'=>'renungan')) ?>">renungan</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $this->Html->url(array('controller'=>'profile','action'=>'ganjuran')) ?>">Gereja Ganjuran</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller'=>'profile','action'=>'paguyuban')) ?>">Paguyuban</a></li>
                            <!-- <li><a href="#">Paguyuban</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengumuman <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Jadwal Misa</a></li>
                            <li><a href="#">Aktifitas</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">paguyuban</a></li> -->
                    <li><a href="#">galeri</a></li>
                    <li><a href="#">komentar</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
