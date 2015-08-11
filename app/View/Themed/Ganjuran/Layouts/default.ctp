<!DOCTYPE html>
<html>
<head>
    <title>Gereja Ganjuran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    echo $this->Html->css(
        array(
            'bootstrap.min',
            // 'docs',
            // 'bootstrap-theme',
            // 'bootstrap-responsive',
            'custom-style'
        )
    );

    ?>

</head>
    <body>

        <div id="wrapper">
            <?php
            echo $this->element('top-nav');
            ?>
            <div class="clear-top"></div>
            <div class="breadcrumb">
              <div class="wrapContent">
              <?php
                echo $this->Html->getcrumbs(' / ', 'Home');
              ?>
              </div>
            </div>
            <div class="wrapContent">
            <?php
              echo $this->fetch('content');
            ?>
            </div>

            
            <?php
            echo $this->element('footer');
            ?>


        </div>

<?php
        echo $this->Html->script(
            array(
                'jquery-2.1.3.min',
                'bootstrap.min',
            )
        );
?>
        
    </body>
</html>