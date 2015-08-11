<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gereja Ganjuran - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <?php
    echo $this->Html->css(
        array(
            'bootstrap.min',
            'sb-admin',
            'plugins/morris',
            'custom-dashboard',
            'font-awesome.min.css'
            )
    );
    ?>

</head>
<body>
    <!-- DASHBOARD LAYOUT -->
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php
        echo $this->element('admin-navbar');
        echo $this->element('admin-sidebar');
        ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <?php
                echo $this->fetch('content');
                ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        <div class="footer">
            <p>&copy; www.gerejaganjuran.org, Komunikasi Sosial 2015</p>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php
    echo $this->Html->script(array(
        'jquery-2.1.3.min',
        'bootstrap.min',
        'plugins/morris/raphael.min',
        // 'plugins/morris/morris.min',
        // 'plugins/morris/morris-data.js'
        ));
            
    echo $this->fetch('cssBlock');
    echo $this->fetch('script');
    ?>
<script>
    $(document).ready(function(){
        $('#message').delay(3000).slideUp();
    });    
</script>

    <!-- Morris Charts JavaScript -->
<!-- 
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
 -->
</body>

</html>
