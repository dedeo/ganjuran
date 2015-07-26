<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active">
            <div class="ico"></div>
        </li>
        <li data-target="#myCarousel" data-slide-to="1"><div class="ico"></div></li>
        <li data-target="#myCarousel" data-slide-to="2"><div class="ico"></div></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo $this->webroot;?>img/banner/slide.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo $this->webroot;?>img/banner/1.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo $this->webroot;?>img/banner/8.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>