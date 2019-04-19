<?php
// session_start();

include("php/konekcija.php");
$upitNav ="SELECT * from navMeni";
$nav = $konekcija->query($upitNav);
?>


<footer class="footer">
            <div class="footer-lists">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                        <h4>Nega</h4>
                          <p> Sobne biljke zahtevaju pravi odnos vlage, osveljenja, mešavine zemljišta, temperature i vode, dok su im je veoma bitni dodatni hranjivi sastojci i prava veličina posuda u kojima se nalaze.</p>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul>
                                <li><h4>zanimljivi linkovi</h4></li>
                                <li><a href="http://www.svetbiljaka.com/prodaja/kat=12.html">svet biljaka</a></li>
                                <li><a href="http://uspesnazena.com/korisni-saveti-zene/sobne-biljke-za-prociscavanje-vazduha-7-biljaka-za-vase-zdravlje/">biljke za vase zdravlje </a></li>
                                <li><a href="https://opusteno.rs/zanimljivosti-f19/zanimljivosti-o-biljkama-t22103.html">zanimljivosti o biljkama</a></li>
                                <li><a href="https://stil.kurir.rs/lepi-zdravi/medicina/84063/20-lekovitih-biljaka-i-njihova-primena-ovo-su-najbolji-lekovi-iz-narodne-medicine">20 lekovitih biljaka i njihova primena</a></li>
                                
                            </ul>
                        </div>   
                        <div class="col-sm">
                            <ul>
                            <li><h4>Nav Meni</h4></li>
                            <?php
                            foreach($nav as $red){

                                echo " <li><a href='".$red->Putanja ."'>" .$red->Naziv. "</a></li>";
                            }
                            if( isset($_SESSION['korisnik']) && $_SESSION['korisnik']->ulogaId == 1) {
                                
                               ?>
                             <li><a href="admin.php"> admin </a></li>
                             
                             <li><a href="logout.php"> logout </a></li>
                             <?php
                            }
                             
                                 else if(isset($_SESSION['korisnik']) && $_SESSION['korisnik']->ulogaId == 2){ ?>
                                 <li><a href="info.php"> info </a></li>    

                                <li><a href="logout.php"> logout </a></li>
                                 <?php }

                                 
                                 else{ ?>

                                    <li><a href="login.php"> login </a></li>
                                    <li><a href="register.php"> register </a></li>

                                 <?php  } ?>
                                <!-- <li><h4>Suspendisse</h4></li>
                                <li><a href="#">Morbi hendrerit libero </a></li>
                                <li><a href="#">Proin placerat accumsan</a></li>
                                <li><a href="#">Rutrum nulla a ultrices</a></li>
                                <li><a href="#">Curabitur sit amet tellus</a></li>
                                <li><a href="#">Donec in ligula nisl.</a></li> -->
                            </ul>
                        </div>
                       <!-- < <div class="col-sm">
                            <h4>Suspendisse</h4>
                            <p>Integer mattis blandit turpis, quis rutrum est. Maecenas quis arcu vel felis lobortis iaculis fringilla at ligula. Nunc dignissim porttitor dolor eget porta.</p>

                           
                        </div>  -->
                    </div>
                </div>
            </div>
            
            
            <div class="footer-bottom">
  
                    <p class="text-center"><a href="#">Back to top</a></p>
            </div>
            
        </footer>



        <!-- Bootcamp JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>