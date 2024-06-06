<!-- ##################### -->
    <!-- Navigation -->
    <!-- ##################### -->

    <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">  
        <div class="container">              
            <div class="logo">
               <a  href="<?php echo home_url( '/' ); ?>" class="logo"> <img src="<?php echo get_template_directory_uri(); ?> images/awardLogo.png" class="me-3"/></a>
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
                        <span class="navbar-text me-3">
                        Temps restant 
                        </span>
                        <span class="navbar-text">
                            00:00:00
                        </span>
                    </div>
                </div>
            </div> 
        </div>
    </header>