
<?php
session_start();

include("php/konekcija.php");
$upitNav ="SELECT * from navMeni";
$nav = $konekcija->query($upitNav);



?>

<body>
        
        <!-- Main navigation -->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                
                <!-- Company name shown on mobile -->
                <a class="navbar-brand" href="index.php"><span>Nase</span>Biljke</a>

                <!-- Mobile menu toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main navigation items -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav mr-auto">
                    <?php
                            foreach($nav as $red){
                            echo"<li class='nav-item'>
                            <a class='nav-link' href='".$red->Putanja."'>".$red->Naziv. "</a> 
                            </li>";
                            }
                            if( isset($_SESSION['korisnik']) && $_SESSION['korisnik']->ulogaId == 1) { ?>
                             <li class='nav-item'>   <a class='nav-link' href='logout.php'>logout</a>  </li>
                             <li class='nav-item'>   <a class='nav-link' href='admin.php'>admin</a>  </li>

                  
                      <?php          
                         }
                            else if(isset($_SESSION['korisnik']) && $_SESSION['korisnik']->ulogaId == 2){ ?>
                                                 <li class='nav-item'>   <a class='nav-link' href='logout.php'>logout</a>  </li>
                                                 <li class='nav-item'>   <a class='nav-link' href='nesto.php'>nesto</a>  </li>


                       <?php     }
                       else{?>
                        <li class='nav-item'>   <a class='nav-link' href='login.php'>login</a>  </li>
                        <li class='nav-item'>   <a class='nav-link' href='register.php'>register</a>  </li>
                    <?php   }
                        ?>
                        <!-- <li class="nav-item">
                                <a class="nav-link" href="index.php">Home </a>
                        </li>
                    
                        <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="register.php">register</a>
                        </li> -->
                    </ul>
                    <div class="form-inline header-search-form my-2 my-lg-0">
                    <!-- <form class="form-inline header-search-form my-2 my-lg-0"> -->
                        <!-- <input class="form-control mr-sm-2" type="text" size="7"  placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button> -->
                        
                        <?php  if( isset($_SESSION['korisnik'])){  ?>
                        <h2 class="form-control mr-sm-2">
                        
                       
                     <?php   echo ($_SESSION['korisnik']->userName) ;
                        }
                        
                        ?>
                         </h2>
                    <!-- </form> -->
                            </div>  
                </div>
                
                
                
            </div>
        </nav>

                        </body>