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
            'custom-style',
            // 'full-slider'
        )
    );

    ?>

</head>
<body>

    <?php
    echo $this->element('top-nav');
    echo $this->element('slider');
    ?>

    <?php
    echo $this->element('footer');
    ?>

    <a href="#header" class="scrollup"><i class="glyphicon glyphicon-arrow-up"></i></a> 
    <?php
    echo $this->Html->script(
        array(
            'jquery-2.1.3.min',
            'bootstrap.min',
            'jquery.easing.1.3',
            'jquery.scrollTo-1.4.3.1-min',
            'jquery.localscroll-1.2.7-min'
        )
    );
    ?>
    <script>
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
                return false;
        });

       $('#myCarousel').carousel({
            interval: 6000 //changes the speed
        });

        $('#newsCarousel').carousel({
            interval: 50000000
        });        

        $('.navbar-nav').localScroll({hash:true, offset: {top: 0},duration: 800, easing:'easeInOutExpo'});
    </script>


    </body>
</html>