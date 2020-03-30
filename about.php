<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Katarzyna Krakowska, Minh Tran, Edgars Becs">
    <meta name="description" content="add description here">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

	<!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>About</title>

    <!--tab icon-->
    <link rel="icon" type="image/ico" href="icon/bh_logo.ico" />

</head>

<body>
    <a id="header"></a>


        <!--Begin Navigation-->
			<nav class="overlay">
				<?php $page = 'about';include("nav.php") ?>
			</nav>
		<!--End Navigation-->
     <!--start header-->
        <header>

       <!--start banner-->
                   <div class="overlay">
            <video autoplay loop muted class="video">
                <source src="video/bh-banner-stabilised.mp4" type="video/mp4" >
    	        <source src="video/bh-banner-stabilised.mp4" type="video/mp4" >
            </video>
            <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white"></div>
            </div>
            </div>
            </div>
        </header>
        <!--end banner-->

    <!--end header-->

    <!-- Start content here -->
    <div class="container-fluid">

        <!-- Start first card -->
        <div class="card text-center">
            <div class="card-body">
                <hr class="line-break">
                <h3> Beauty House</h3>
                <p class="card-text">We all like to feel beautiful and well-groomed. 
									The Beauty House team will fulfill your dreams and help in achieving the intended goal. 
									This is a place with a real passion for the profession. 
									We care and advise our clients professionally, we adapt treatment methods to their current needs.</p>

                <hr class="line-break">
                 <br><br>
            </div>
        </div>
        <!--end first card-->


                <h2>Meet the team</h2>


        <!-- Start team -->
        <div class="container">

            <div class="row">

                <!--team card 1-->
                <div class="col">

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="team_img" src="img/a.jpg" alt="Avatar">
                                <h2>John Doe</h2>
                                <p>Architect & Engineer</p>
                            </div>
                            <div class="flip-card-back">

                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end team card 1-->

                <!--team card 2-->
                <div class="col">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="team_img" src="img/c.jpg" alt="Avatar">
                                <h2>John Doe</h2>
                                <p>Architect & Engineer</p>
                            </div>
                            <div class="flip-card-back">

                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end team card 2-->

                <!--team card 3-->
                <div class="col">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="team_img" src="img/c.jpg" alt="Avatar">
                                <h2>John Doe</h2>
                                <p>Architect & Engineer</p>
                            </div>
                            <div class="flip-card-back">

                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end team card 4-->

                <!--team card 4-->
                <div class="col">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="team_img" src="img/a.jpg" alt="Avatar">
                                <h2>John Doe</h2>
                                <p>Architect & Engineer</p>
                            </div>
                            <div class="flip-card-back">

                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end team card 4-->

            </div>

            <br>
            <br>
            <br>
        </div>
        <!-- end team -->



        <!-- Start thumbs -->
        <div class="container">


                <h2> Awards and certificates</h2>



            <div class="row row-cols-sm-3 row-cols-3 row-cols-md-6 row-cols-lg-6">

				<div class="cert col-sm col-md col-lg">
  <img class="thumb" src="img/cert1.png" alt="Certificate 1"></a>
                </div>

                <div class="cert col-sm col-md col-lg">
  <img class="thumb" src="img/cert3.png" alt="Certificate 3"></a>
                </div>

                <div class="cert col-sm col-md col-lg">
  <img class="thumb" src="img/cert3.png" alt="Certificate 3"></a>
                </div>

                <div class="cert col-sm col-md col-lg">
  <img class="thumb" src="img/cert2.png" alt="Certificate 2"></a>
                </div>

                <br><br><br>
            </div>



        </div>
        <!-- end thumbs -->


    <div class="col">
            <a id="top" href="#header">Top</a>
        </div>
        <br><br><br>
	</div>
    <!-- End content  -->

   <!--Begin footer-->
		<footer>
			<?php include("footer.php") ?>
		</footer>
		<!--End footer-->

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
