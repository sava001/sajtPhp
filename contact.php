<?php
require_once "views/head.php";
require_once "views/nav.php";

?>

<div class="row jdg">

<!-- Sidebar -->
    <div id="sidebar" class="3u koka">
        <section>
            <header>
                <div class="wraper">
                    <div class="contact-us">
                      <div class="nemam jasar">
                        <div class="title">Kontaktirajte nas mail-om</div> <br/>
              
                        <div class="input-fields">
                          <div class="items">
                            <label for="name" class="label">Ime i Prezime</label> <br/>
                            <input id="name" type="text" class="input" />
                          </div>
              
                          <div class="items">
                            <label for="email" class="label">Mail</label> <br/>
                            <input id="email" type="text" class="input" />
                          </div>
              
                          <div class="items">
                            <label for="subject" class="label">Naslov</label> <br/>
                            <input id="subject" type="text" class="input" />
                          </div>
              
                          <div class="items">
                            <label for="msg" class="label">Poruka</label> <br/>
                            <textarea id="msg" class="input"></textarea>
                          </div>
                        </div>
              
                        <form method="get" action="#" id="jes" name="aha">
                          <input
                            type="button"
                            class="btn"
                            value="send"
                            onclick="provera();"
       
                          />
                          <input
                          type="button"
                          class="btn zajs"
                          value="reset"
                          onclick="ponisti();"
                         
                        />
                        </form>
                        
                        <div id="zagresku"></div>
                      </div>
            </header>
        
        </section>
    </div>
<!-- Sidebar -->

<!-- Content -->

<!-- /Content -->
    
<!-- Sidebar -->

    <div id="sidebar" class="3u">
        <section>
            <header>
                <div class="nemam mare">
                    <div class="title">Ili nas pozovite telefonom</div>
          
                    <div class="input-fields">
                      <div class="items">
                        <h5 class="htag">Sedište</h5>
                        <span class="dum"> Camblakova 5, 11 000 Beograd </span> <br />
                        <span class="dum">
                          Te/ Fax:
                          <a href="tel:+3810113320425">+ 381 (0) 11 2472 055</a></span
                        >
                      </div>
          
                      <div class="items">
                        <span class="dum">
                          Tel:
                          <a href="tel:+3810113320463"> + 381 (0) 11 2472 555</a></span
                        ><br />
                        <span class="dum">
                          Tel: <a href="tel: +381(0)113320047"> + 381 (0) 11 397 3987</a>
                        </span>
                      </div>
          
                      <div class="items">
                        <span class="dum">
                          Mob:
                          <a href="tel: +38163200741"> + 381 (0) 69 508 7550</a></span
                        ><br />
                        <span class="dum">
                          e-mail:
                          <a href="mailto: info@arentalsound.co.rs">
                            info@onlineShop.co.rs</a
                          > </span
                        ><br />
                        <span class="dum"
                          >e-mail:
                          <a href="mailto: rentalsound.co.rs"> onlineShop.co.rs</a>
                        </span>
                      </div>
          
                      <div class="items"><h5 class="htag">Poslovna jedinica</h5></div>
                      <div class="items">
                        <span class="dum">Milovana Jankovića 26</span><br />
                        <span class="dum"
                          >Tel / Fax:
                          <a href="tel: +381016735775"> + 381 (0) 16 735 775</a>
                        </span>
                      </div>
                      <div class="items">
                        <span class="dum"
                          >Tel:
                          <a href="tel: +381016735771"> + 381 (0) 16 735 771</a></span
                        ><br />
                        <span class="dum"
                          >Mob: <a href="tel: +3810631091246"> + 381 (0) 63 1091 246</a>
                        </span>
                      </div>
                      <div class="items">
                        <span class="dum">
                          e-mail:
                          <a href="mailto: info@arentalsound.co.rs">
                            info@aonlineShop.co.rs</a
                          > </span
                        ><br />
                        <span class="dum">
                          e-mail:
                          <a href="mailto: rentalsound.co.rs"> onlineShop.co.rs</a>
                        </span>
                      </div>
                    </div>
                  </div>
          
                  <div class="clr"></div>
                </div>
              </div>
          
             
          
            
              
            </header>
        
            
        </section>
        <script src="js/vaildConta.js"></script>
    </div>


    <?php
require_once "views/footer.php";
    ?>