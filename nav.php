<!--start nav-->
<div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark ">

			<a class="navbar-brand" href="index.php">
					<video class="logo_nav" autoplay loop muted>
                        <source src="video/bhlogo2.mp4" type="video/mp4">
                        <source src="video/bhlogo2.mp4" type="video/ogg"> Your browser does not support the video tag.
                    </video>
					</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($page=='home'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if($page=='about'){echo 'active';} ?>">
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php if($page=='services'){echo 'active';} ?>">
                        <a class="nav-link dropdown-toggle " href="services.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Services</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="service1.php">Hand/Foot treatment</a>
							<a class="dropdown-item" href="service2.php">Facial treatment</a>
							<a class="dropdown-item" href="service3.php">Body treatment</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if($page=='gallery'){echo 'active';} ?>">
                        <a class="nav-link " href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item <?php if($page=='contact'){echo 'active';} ?>">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                
                    <li class="nav-item <?php if($page=='shop'){echo 'active';} ?>">
                        <a class="nav-link " href="shop.php">Shopping<i class="fa fa-cart-plus fa-lg"></i></a>
                    </li>
                </ul>


            </div>

        </nav>
</div>
        <!--end nav-->
