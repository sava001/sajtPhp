 <!-- Jumbtron / Slider -->

 <?php
include("php/konekcija.php");
$upitSlike ="SELECT * from picture";
$sveSlike = $konekcija->query($upitSlike);
$prvaSlika = $sveSlike ->fetchAll(PDO::FETCH_OBJ);

foreach($prvaSlika as $inf){
  // var_dump($inf->name);
}



 ?>
 <div class="jumbotron-wrap clicka">
            <div class="container">
                <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="jumbotron">
                                <h1 class="text-center">Ovde možete naci informacije o sobnim biljkama </h1>
                                <p class="lead text-center">vrste biljaka najbolje za kuću</p>
                                <!-- <p class="lead text-center">
                                    <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i> &nbsp; Learn more</a>
                                    <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i> &nbsp; Buy now</a>
                                </p> -->
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="jumbotron">
                                <h1 class="text-center">Saveti za o čuvanju i održavanju biljaka</h1>
                                <p class="lead text-center">korisni linkovi i saveti</p>
                                <!-- <p class="lead text-center">
                                    <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i> &nbsp; Buy now</a>
                                    <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i> &nbsp; Learn more</a>
                                </p> -->
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main content area -->
        <div class="card-container">
            <div class="container">
   
                <div class="text-center padded-box pb-0">
                        <h2>sobne biljke</h2>
                        <p class="lead">Osim što ulepšavaju prostor, sobne biljke i prečišćavaju vazduh, eliminišu štetne gasove, duvanski dim i smanjuju količinu alergena u vazduhu. Uz nekoliko velikih biljaka krupnih listova rešićete se mnogih bakterija i gljivica prisutnih u vašem životnom prostoru.</p>

                </div>
                


                <div class="padded-box row">
                <?php foreach($prvaSlika as $inf): ?>
                    <div class="col-md-4">
                        <div class="card text-center">
                          <img class="card-img-top" src="images/<?php echo $inf->img_dir?>" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text"><?php echo $inf->textSlika ?> </p>
                          <a href="#"data-id='<?php echo $inf->id ?> ' class="jes">Left link</a>
                              <!--   <a href="#" class="btn btn-secondary">Right link</a> -->
                          </div>
                        </div>
                       
                    </div>
                    <?php endforeach; ?>
                    <!-- <div class="col-md-4">
                        <div class="card text-center">
                          <img class="card-img-top" src="images/" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">></p>
                             <a href="#" class="btn btn-primary">Left link</a>
                              <a href="#" class="btn btn-secondary">Right link</a>
                          </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                        <div class="card text-center">
                          <img class="card-img-top" src="images/" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text"> </p>
                             <a href="#" class="btn btn-primary">Left link</a>
                              <a href="#" class="btn btn-secondary">Right link</a>
                          </div>
                        </div>
                    </div> -->
                <!-- </div>
                
                
                

                <div class="padded-box row">
                    <div class="col-md-4">
                        <div class="card text-center">
                          <img class="card-img-top" src="images/" alt="Card image cap">
                          <div class="card-body">
                            <blockquote class="card-text"></blockquote>
                            <p class="card-text quote-text">- Joe Bloggs, <a href="#">A Company</a></p>
                          </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                        <div class="card text-center">
                          <img class="card-img-top" src="images/e" alt="Card image cap">
                          <div class="card-body">
                            <blockquote class="card-text">  </blockquote>
                            <p class="card-text quote-text">- Jane Doe, <a href="#">Marketing Business</a></p>
                          </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                        <div class="card text-center">
                          <img class="card-img-top" src="images/"  alt="Card image cap">
                          <div class="card-body">
                            <blockquote class="card-text">< </blockquote>
                            <p class="card-text quote-text">- Annaleigh Rose, <a href="#">CEO</a></p>
                          </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <script src="js/main.js"></script>
        </div>
        
        
        
        <!-- Coloured bg jumbotron -->
        