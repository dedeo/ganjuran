<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php
  $controller = $this->params['controller'];
  $view = $this->params['action'];
?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <!-- Home -->
        <li id="dashboard" onClick="setActive(this)">
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <!-- Berita -->
        <li id="beritaTopMenu" onclick="setActive(this)">
            <a href="javascript:;" data-toggle="collapse" data-target="#beritaSubMenu">
                <i class="fa fa-fw fa-arrows-v"></i> Berita <i class="fa fa-fw fa-caret-down"></i>
            </a>
            <ul id="beritaSubMenu" class="collapse">
                <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'berita','action'=>'admin_index')); ?>">Semua Berita</a></li>
                <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'berita','action'=>'admin_add')); ?>">Tambah Berita</a></li>
            </ul>
        </li>

        <!-- Renungan -->
        <li id="renunganTopMenu" onclick="setActive(this)">
            <a href="javascript:;" data-toggle="collapse" data-target="#renunganSubMenu">
                <i class="fa fa-fw fa-arrows-v"></i> Renungan <i class="fa fa-fw fa-caret-down"></i>
            </a>
            <ul id="renunganSubMenu" class="collapse">
                <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'renungan','action'=>'admin_index')); ?>">Semua Renungan</a></li>
                <li><a href="<?php echo $this->Html->url(
                    array('controller'=>'renungan','action'=>'admin_add')); ?>">Tambah Renungan</a></li>
            </ul>
        </li>

        <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
<!--         <li class="<?php if($controller==='main')echo 'active'?>" id="homeDashboard">
            <a href="<?php echo $this->Html->url(array('controller'=>'dashboard','action'=>'index')) ?>">
            <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <li class="<?php if($controller==='units')echo 'active'?>" id="topBerita">
            <a href="javascript:;" data-toggle="collapse" data-target="#unitSubMenu">
            <i class="fa fa-fw fa-arrows-v"></i> Berita <i class="fa fa-fw fa-caret-down"></i>
            </a>
                <ul id="beritaSubMenu" class="collapse <?php if($controller==='units')echo 'in'?>">
                <li class="<?php if($controller==='units' && $view==='admin_index')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'berita','action'=>'index','admin'=>true)) ?>">Index Berita</a></li>
                <li class="<?php if($controller==='units' && $view==='add')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'berita','action'=>'admin_add')) ?>">Tambah Berita</a></li>
                </ul>
        </li>


        <li class="<?php if($controller==='items')echo 'active'?>">
            <a href="javascript:;" data-toggle="collapse" data-target="#itemsSubMenu"><i class="glyphicon glyphicon-tag"></i> Renungan <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="itemsSubMenu" class="collapse <?php if($controller==='items')echo 'in'?>">
                <li class="<?php if($controller==='renungan' && $view==='admin_index')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'renungan','action'=>'index')) ?>">Index Renungan</a></li>
                <li class="<?php if($controller==='renungan' && $view==='admin_view')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'renungan','action'=>'add')) ?>">Tambah Renungan</a></li>
                </ul>
        </li>

        <li class="<?php if($controller==='users')echo 'active'?>">
            <a href="javascript:;" data-toggle="collapse" data-target="#usersSubMenu"><i class="glyphicon glyphicon-user"></i> Pengumuman <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="usersSubMenu" class="collapse <?php if($controller==='users')echo 'in'?>">
                <li class="<?php if($controller==='users' && $view==='add')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'add')) ?>">Tambah User</a></li>
                <li class="<?php if($controller==='users' && $view==='index')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')) ?>">List User</a></li>
                </ul>
        </li>

        <li class="<?php if($controller==='users')echo 'active'?>">
            <a href="javascript:;" data-toggle="collapse" data-target="#usersSubMenu"><i class="glyphicon glyphicon-user"></i> Galeri <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="usersSubMenu" class="collapse <?php if($controller==='users')echo 'in'?>">
                <li class="<?php if($controller==='users' && $view==='add')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'add')) ?>">Tambah User</a></li>
                <li class="<?php if($controller==='users' && $view==='index')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')) ?>">List User</a></li>
                </ul>
        </li>

        <li class="<?php if($controller==='users')echo 'active'?>">
            <a href="javascript:;" data-toggle="collapse" data-target="#usersSubMenu"><i class="glyphicon glyphicon-user"></i> Komentar <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="usersSubMenu" class="collapse <?php if($controller==='users')echo 'in'?>">
                <li class="<?php if($controller==='users' && $view==='add')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'add')) ?>">Tambah User</a></li>
                <li class="<?php if($controller==='users' && $view==='index')echo 'active'?>"><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')) ?>">List User</a></li>
                </ul>
        </li> -->


<!--         <li>
            <a href="<?php echo $this->Html->url(array('controller'=>'main','action'=>'bootstrap')) ?>"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li> -->
    </ul>
</div>
<script type="text/javascript">
<?php
    if(!empty($controller)){
        echo 'document.getElementById("'.$controller.'TopMenu").setAttribute("class", "active");';
        if(!empty($view)){
            echo 'document.getElementById("'.$controller.'SubMenu").setAttribute("class", "collapse in");';
            echo 'document.getElementById("'.$controller.'SubMenu").setAttribute("class", "collapse in");';            
        }
    }
?>
</script>