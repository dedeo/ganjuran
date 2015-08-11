    <!-- berita -->
    <section id="news" class="section pad-bot5 bg-white">
    <div class="container"> 
        <div class="row mar-bot40">
            <div class="carousel slide" id="newsCarousel">
                    <div class="carousel-inner">
                    <?php 
                    //debug($beritas);
                    echo count($beritas);
                    $n=1;
                    for($i=0; $i<count($beritas);$i++){
                        if($n===1){ ?>
                        <div class="item <?php if($i===0)echo 'active'; ?>">
                            <ul class="thumbnails">
                    <?php
                        } ?>
                            <div class="col-lg-4">
                                <div class="thumbnail news">
<div class="imgBg" style="height:200px;background-image:url(
                '<?php echo $this->webroot.'img/Berita/'.$beritas[$i]['Berita']['gambar'];?>')">
                                        <div class="date_thumnail">
                                        <?php
                                        //$datetime = explode(' ', $beritas[$i]['Berita']['tgl_buat']);
                                        $datetime = $this->MyText->localDate($beritas[$i]['Berita']['tgl_buat']);
                                        $tgl = explode(' ', $datetime);
                                        echo $tgl[0].' '.strtoupper(substr($tgl[1],0,3));
                                        ?>
                                        </div>
                                    </div>
                                    <?php //echo $this->Html->image('Berita/'.$beritas[$i]['Berita']['gambar']); ?>
                                    <div class="caption news">
                                    <?php echo $this->Html->link(strtoupper($beritas[$i]['Berita']['judul']),
                                            array(
                                                'controller'=>'berita',
                                                'action'=>'view', 
                                                $beritas[$i]['Berita']['id'])
                                        ); 
                                    ?>
                                        <hr>
                                    <?php echo $this->Text->truncate($beritas[$i]['Berita']['berita'],
                                                200,
                                                array('elipsis'=>'...', 'exact'=>true)
                                            ); ?>
                                    <?php echo $this->Html->link('baca selengkapnya',
                                                array(
                                                    'controller'=>'berita',
                                                    'action'=>'view',
                                                    $beritas[$i]['Berita']['id']
                                                    ),
                                                array('class'=>'btn btn-mini')
                                            );
                                            ?>
                                    </div>
                                </div>
                            </div>
                        <?php $n++ ?>
                        <?php 
                            if($n===4){ ?>
                                </ul>
                                </div>
                        <?php
                                $n=1;
                            }
                    }
                    ?>  
                    </div>
                    
                 

                    <div class="control-box">                            
                        <a data-slide="prev" href="#newsCarousel" class="carousel-control left"><</a>
                            <li data-target="#newsCarousel" data-slide-to="0">1</li>
                            <li data-target="#newsCarousel" data-slide-to="1">2</li>
                            <li data-target="#newsCarousel" data-slide-to="2">3</li>
                        <a data-slide="next" href="#newsCarousel" class="carousel-control right">></a>
                    </div><!-- /.control-box -->   
                                          
                </div><!-- /#myCarousel -->

        
        </div>  

    </div>
    </section>
    <!--/news-->

        
    <!--jadwal-->
    <section id="section-jadwal" class="section">
        <div class="container">
            <div class="about">
                <div class="row">
                    <div class="row-slider">
                        <div class="col-lg-6 mar-bot30">
                            <img src="files/sample/xample.png" title="Example">
                        </div>
                    
                        <div class="col-lg-6 mar-bot30">
                            <div class="content mar-left10 right">
                                <div class="title_content">
                                <h4>JADWAL MISA</h4>                                    
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum. Morbi leo risus, porta ac, vestibulum at eros.
                                  Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac.</p>
                                <p>Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia.Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia.</p>
                                <a class="btn btn-mini" href="#">baca selengkapnya</a>                                
                            </div>

                        </div>
                    
                    </div>  
                </div>
                    
            </div>
            
        </div>
    </section>
    <!--/about-->
        
    <!-- spacer section:testimonial -->
        <section id="prosesi" class="section">
        <div class="container">
            <div class="row">
            
                    <div class="row-slider">
                        <div class="col-lg-6">
                            <div class="content mar-left10 left">
                                <div class="title_content">
                                <h4>PROSESI</h4>
                                </div>                                  
                                <p>Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia.Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet. </p>
                              <br>
                              <a href="" class="btn">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <div class="col-lg-6 mar-bot30">
                            <img src="files/sample/xample2.png" title="Example">
                        </div>

                    </div>
                
            </div>  
        
        </section>

    <!--sejarah-->
    <section id="section-profil" class="section">
        <div class="container">
            <div class="profil">
                <div class="row">
                    <div class="row-slider">
                        <div class="col-lg-6 mar-bot30">
                            <img src="files/sample/xample3.png" title="Example">
                        </div>
                    
                        <div class="col-lg-6 mar-bot30">
                            <div class="content right">
                                <div class="title_content">
                                <h4>Profil</h4>                                    
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum. Morbi leo risus, porta ac, vestibulum at eros.
                                  Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac.</p>
                                <p>Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia. Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia.Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. Pri id suas salutatus iracundia.</p>
                                <a class="btn btn-mini" href="profiles">baca selengkapnya</a>                                
                            </div>

                        </div>
                    
                    </div>  
                </div>
                    
            </div>
            
        </div>
    </section>
    <!--/sejarah-->

    <!-- event -->
        <section id="section-event" class="section">
        <div class="container">
            <div class="row">
            
                    <div class="row-slider">
                        <div class="col-lg-6 mar-bot30">
                            <div class="content mar-left10 left">
                                <div class="title_content">
                                <h4>Event</h4>
                                </div>                                  
                                12 - 15 MEI 2015
                                <p>Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. Ex duo iisque dissentiunt, ex putent persius oporteat nec. Quo an ipsum ullum dicam, has ad vulputate deseruisse suscipiantur. </p>
                                <hr>
                                01 JUNI 2015
                                <p>Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea.</p>
                                <hr>
                                09 MEI 2015
                                <p>Lorem ipsum dolor sit amet, vim idque torquatos ad. Et vis nonumy libris accusamus. Ubique aliquid iudicabit sed ea. Ius ne nostrum ancillae conceptam, docendi scaevola consequat his ei. </p>
                              <br>
                              <a href="" class="btn">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <div class="col-lg-6 mar-bot30">
                            <img src="files/sample/xample4.png" title="Example">
                        </div>

                    </div>
                
            </div>  
        
        </section>          


        <!-- map -->
        <section id="section-map" class="clearfix">
            <div id="googleMap"></div>
        </section>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
// function initialize() {
//   var mapProp = {
//     center:new google.maps.LatLng(-7.9263178,110.3189634),
//     zoom:25,
//     mapTypeId:google.maps.MapTypeId.ROADMAP
//   };
//   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
// }
// google.maps.event.addDomListener(window, 'load', initialize);
function init_map(){
    var myOptions = {
                zoom:13,
                center:new google.maps.LatLng(-7.9288411,110.32696229999999),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
    map = new google.maps.Map(document.getElementById('googleMap'), myOptions);
    marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(-7.9288411,110.32696229999999)});

    infowindow = new google.maps.InfoWindow({
        content:'<strong>Gereja Hati Kudus Tuhan Yesus Ganjuran</strong><br>ganjuran<br>55764 Yogyakarta<br>'
    });

    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
    infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);
</script>