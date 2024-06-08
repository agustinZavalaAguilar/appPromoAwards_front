<!-- ##################### -->
    <!-- Navigation -->
    <!-- ##################### -->

    <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">  
        <div class="container">              
            <div class="logo">
               <a  href="<?php echo home_url( '/' ); ?>" class="logo"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/images/awardLogo.png" class="me-3"/>
                </a>
            </div>  
                <nav class="navfix"> 
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mb-2 ">
                        <li class="nav-item me-3">
                            <a class="nav-link active" aria-current="page" href="#section-awards">Awards</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" aria-current="page" href="#">Nominées</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Cérémonie</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Inscription</a>
                        </li>  
                        <li class="nav-item">
                            <a class="btn btn-light">Voter !</a>
                        </li>               
                        </ul>
                    </div>          
                </nav>                    
                    <div class="countdown">
                    <span>Temps restant : </span>
                    <label id="count"></label>
                    <script type="text/javascript">
                        var Affiche=document.getElementById("count");
                        function countdown() {
                            var date1 = new Date();
                            var date2 = new Date ("June 20, 2024 00:00:00");
                            var sec = (date2 - date1) / 1000;
                            var n = 24 * 3600;
                            if (sec > 0) {
                            j = Math.floor (sec / n);
                            h = Math.floor ((sec - (j * n)) / 3600);
                            mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
                            sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
                            Affiche.innerHTML = j +" j "+ h +" h "+ mn +" min "+ sec + " s";
                            window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
                            }
                            tRebour=setTimeout ("countdown();", 1000);
                        }
                        countdown();
                    </script>
                </div>
                </div>
            </div> 
        </div>
    </header>