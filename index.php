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

    <title>Home</title>

    <!--tab icon-->
    <link rel="icon" type="image/ico" href="icon/bh_logo.ico" />

</head>

<body>
    <a id="header"></a>



		<!--Begin Navigation-->
			<nav>
				<?php $page = 'home';include("nav.php") ?>
			</nav>


      <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="video/1080x720.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
          <div class="d-flex text-center h-100">
            <div class="my-auto w-100 text-white">
              <h1 class="display-3">Video Header</h1>
              <h2>Welcome to Beauty House</h2>
            </div>
          </div>
        </div>
      </header>

    <!-- Start content here -->
    <div class="container-fluid">

<!-- Start first card -->
        <div class="card text-center">
            <div class="card-body">
                <hr class="line-break">
                <h3>Beauty House</h3>
                <p class="card-text">Beauty House is a unique place with a professional team, who will take care of the perfect look and your well-being.
									<br>The cozy, romantic interior, soft music and intimate atmosphere will allow you to calm down, take a break from the intense pace of the city and focus for a moment on your own needs. 
									<br>Beautiful appearance, fashionable hair color and appropriate hairstyle are nowadays a guarantee of well-being.
									<br>We know how important appearance is and how it affects our mood. We would like each of the ladies who visit our salon to feel exceptionally beautiful 
									every day.	
									<br>We make sure that our clients can relax from everyday worries and feel that the time spent in the salon is only devoted to them.
									We bring out the beauty of everyone by emphasizing the natural charm and personality. This is our recipe for self-confidence and showing our own character. </p>

                <hr class="line-break">
            </div>
        </div>
        <!--end first card-->


        <!--star second card-->
				
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="img/home/bh1home.jpg" class="card-img" alt="beautyHouse">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2>Beautiful hands<br>Beautiful You</h2>
                        <p class="card-text">With full professionalism and the highest quality products, I will take care of your hands and feet. For more information visit 
						<a class="homelink" href="service1.php">Services.</a></p>

                    </div>
                </div>
            </div>
        </div>
        <!-- end second card-->

        <!--star third card-->

        <div class="card3">
            <div class="row no-gutters">

                <div class="col-md-8">
                    <div class="card-body">
                        <h2>The strength <br>Lies in the eyes</h2>
                        <p class="card-text">Are you thinking about changing the shape of your eyebrows or nourishing your eyelashes? Check what we can do to make you feel great!
						For more information visit 
						<a class="homelink" href="service2.php">Services.</a></p>

                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/home/bh2home.jpg" class="card-img" alt="beautyHouse">
                </div>
            </div>
        </div>

        <!-- end third card-->

        <!--star fourth card-->
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                     <img src="img/home/bh3home.jpg" class="card-img" alt="beautyHouse">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2>Beautiful <br>sun kissed skin</h2>
                        <p class="card-text">Our solar salons are unique places that stand out due to the professionalism of employees, cleanliness, 
						optimally configured tanning beds and a full range of cosmetics - necessary for effective and healthy tanning results.
						For more information visit 
						<a class="homelink" href="service3.php">Services.</a></p>

                    </div>
                </div>
            </div>
        </div>
        <!-- end fourth card-->
		
		<!--star fifth card-->

        <div class="card3">
            <div class="row no-gutters">

                <div class="col-md-8">
                    <div class="card-body">
                        <h2>Be beautiful<br> be confident</h2>
                        <p class="card-text">Our offer includes combined therapies, both for the body and face.
						Choose the perfect set and entrust yourself with the hands of experts.
						For more information visit 
						<a class="homelink" href="service3.php">Services.</a></p>

                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/home/bh4home.jpg" class="card-img" alt="beautyHouse">
                </div>
            </div>
        </div>

        <!-- end fifth card-->



        
        <div class="col">
            <a id="top" href="#header">Top</a>
        </div>
    
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
