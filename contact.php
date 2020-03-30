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

    <title>Contact</title>

    <!--tab icon-->
    <link rel="icon" type="image/ico" href="icon/bh_logo.ico" />

</head>

<body>
    <a id="header"></a>

    <!--start header-->

        <!--Begin Navigation-->
			<nav>
				<?php $page = 'contact';include("nav.php") ?>
			</nav>
		<!--End Navigation-->

        <!--start banner-->
       <header>
            <div class="overlay"></div>
            <video autoplay loop muted class="video">
                <source src="video/bh_banner.mp4" type="video/mp4" >
    	        <source src="video/bh_banner.mp4" type="video/mp4" >
            </video>
            <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white"></div>
            </div>
            </div>
        </header>

        <!--end banner-->


    <!--end header-->

    <div class="container-fluid">
        <!-- Start content here -->

        <div class="row">
            <div class="col-md-6 card">
                <h2>Contact Us</h2>

                <form class="contact" name="contact" action="process.php" method="post">

                    <div class="form-group">
                        <label for="formGroupExampleInput">Your Name</label>
                        <input name="fname" type="text" class="form-control" id="formGroupExampleInput" placeholder="enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Your e-mail</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Your number</label>
                        <input name="number" type="tel" class="form-control" id="formGroupExampleInput2" placeholder="enter number" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your message</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

            <div class="col-md-6 card">
                <h2>Find us here...</h2>
                <ul>
                    <li>James Street, Claremorris Co.Mayo</li>
                    <li>0857375021</li>
                    <li>Opened from: 10:00 - 19:00</li>
                </ul>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2360.812072356966!2d-9.000006964309692!3d53.721610131345095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485bfd13bc7f5055%3A0x2a09f42f2d97a934!2sKeans%20Claremorris%20Euronics%20Home%20%26%20Garden!5e0!3m2!1sen!2sie!4v1582051571066!5m2!1sen!2sie" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                </div>

            </div>

        </div>
        <!--End Row-->
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
