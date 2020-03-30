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

    <title>Shop with Beauty House</title>

    <!--tab icon-->
    <link rel="icon" type="image/ico" href="icon/bh_logo.ico" />

</head>

<body>
    <a id="header"></a>

    <!--start header-->


        <!--Begin Navigation-->
			<nav>
				<?php $page = 'shop';include("nav.php") ?>
			</nav>
		<!--End Navigation-->

        <!--start banner-->
        <header>
            <div class="overlay"></div>
            <video autoplay loop muted class="video">
                <source src="video/bh-banner-stabilised.mp4" type="video/mp4" >
    	        <source src="video/bh-banner-stabilised.mp4" type="video/mp4" >
            </video>
            <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white"></div>
            </div>
            </div>
        </header>

        <!--end banner-->


    <!--end header-->

    <!-- Start content here -->
<div class="container-fluid">

        <!-- Start content here -->
        <div class="row">
            <div class="categories col-lg-2 col-md-4 col-sm-12">
                <h4><b>CATEGORIES</b></h4>
                <ul>
                    <li class="cate-item cateList" id="all" style="margin-top:4%;" onclick="allItems()">ALL</li>
                    <li class="cate-item cateList" id="tanning" onclick="tanItems()">TANNING</li>
                    <li class="cate-item cateList" id="hair" onclick="hairItems()">HAIR</li>
                    <li class="cate-item cateList" id="beauty" onclick="beautyItems()">BEAUTY</li>
                    <li class="cate-item cateList" id="sale" onclick="saleItems()">SALE ITEMS</li>
                </ul>
            </div>

            <div class="items col-lg-10 col-md-8 col-sm-12">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 nailPolish">
                            <div class="card shopcard">
                                <img src="img/nail1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">O.P.I Nail Lacquer</h5>
                                    <p class="card-text">Here is nail polish in red shades.</p>
									<p class="money">€14.30</p>
									<a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-item="item-1" data-price="14.30">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 tan">
                            <div class="card shopcard">
                                <img src="img/tan1.jpg" class="card-img-top " alt="tan product">
                                <div class="card-body">
                                    <h5 class="card-title">Ganier Self Tan Lotion</h5>
                                    <p class="card-text">AMBRE SOLAIRE NO STREAKS BRONZER SELF TAN LOTION 150ML</p>
									<p class="money">€15.60</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="15.60">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 tan">
                            <div class="card shopcard" >
                                <img src="img/tan2.png" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bondi sands Tan Lotion</h5>
                                    <p class="card-text">The Australian Tan Lotion.</p>
									<p class="money">€11.20</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="11.20">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 nailPolish">
                            <div class="card shopcard" >
                                <img src="img/nailpolish2.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Daires's rainbow nail polish</h5>
                                    <p class="card-text">Peel off nail polish set.</p>
									<p class="money">€10.00</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="10.00">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 nailPolish">
                            <div class="card shopcard">
                                <img src="img/nail-polish.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pink Shades Nail Polish</h5>
                                    <p class="card-text">Here is nail polish in Russian Pink.</p>
									<p class="money">€13.40</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="13.40">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 nailPolish">
                            <div class="card shopcard" >
                                <img src="img/nailpolish3.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">UR Color Nail Polish</h5>
                                    <p class="card-text">6 Colors Matte Mail Polish Series Pure Nail</p>
									<p class="money">€16.70</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="16.70">Add To Cart</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-12 col-md-6 col-lg-4 hairCare">
                            <div class="card shopcard" >
                                <img src="img/hair.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pureology Hair Care</h5>
                                    <p class="card-text">Pureology Hydrate Shampoo and Conditioner Duo (250ml x 2)</p>
									<p class="money">€45.80</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="45.80">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 hairCare">
                            <div class="card shopcard">
                                <img src="img/hair2.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Redken Hair Care</h5>
                                    <p class="card-text">Redken Extreme Duo (2 Products)</p>
									<p class="money">€40.50</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="40.50">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 beauty">
                            <div class="card shopcard" >
                                <img src="img/face.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">facetheory - RELAXING NIGHT CREAM M10</h5>
                                    <p class="card-text">with Hyaluronic Acid, Vitamin C, Vitamin E and Argan Oil.</p>
									<p class="money">€15.20</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="15.20">Add To Cart</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-12 col-md-6 col-lg-4 beauty">
                            <div class="card shopcard" >
                                <img src="img/face2.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">La Roche-Posay</h5>
                                    <p class="card-text">La Roche-Posay nutritic intense for Dry Skin 50ml.</p>
									<p class="money">€12.50</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="12.50">Add To Cart</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-12 col-md-6 col-lg-4 beauty">
                            <div class="card shopcard" >
                                <img src="img/face3.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">SKII Cleansing Cream </h5>
                                    <p class="card-text">Facial Treatment Gentle Cleansing Cream 80g.</p>
									<p class="money">€20.50</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="20.50">Add To Cart</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-12 col-md-6 col-lg-4 sale">
                            <div class="card shopcard" >
                                <img src="img/sale.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Fresh - Sugar Peach lip balm</h5>
                                    <p class="card-text">Sugar Peach Hydrating Lip Balm.</p>
									<p class="moneyCross">€12.80</p>
									<p class="saleMoney money">€10.50</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="10.50">Add To Cart</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-12 col-md-6 col-lg-4 sale">
                            <div class="card shopcard" >
                                <img src="img/sale2.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">L'Oréal Paris Magic Retouch</h5>
                                    <p class="card-text"> Medium to Dark Blonde Instant Dark Root Touch Up Spray 75ml</p>
									<p class="moneyCross">€22.50</p>
									<p class="saleMoney money">€18.30</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="18.30">Add To Cart</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-12 col-md-6 col-lg-4 sale">
                            <div class="card shopcard" >
                                <img src="img/sale3.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">TIGI</h5>
                                    <p class="card-text">Bed Head Oh Be Hive Matte Dry Shampoo (238ml)</p>
									<p class="moneyCross">€13.40</p>
									<p class="saleMoney money">€9.50</p>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart btn btn-primary buyButton" data-price="9.50">Add To Cart</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

            <div class="container">
				<div class="cartContainer">
					 <section class="container cart-container">
						<h2 class="section-header">YOUR SHOPPING CART</h2>
						<div class="cart-row">
							<span class="cart-item cart-header cart-column">ITEM</span>
							<span class="cart-price cart-header cart-column">PRICE</span>
							<span class="cart-quantity cart-header cart-column">QUANTITY</span>
						</div>
						<div class="cart-items" id ="cartItems">

						</div>

						<div class="cart-total">
							<strong class="cart-total-title">Total</strong>
							<span class="cart-total-price">€0</span>
						</div>

						<div class="proceedPayment">
							<button class="btn-proceed btn" onclick="proceedPayment()">Proceed to Payment</button>
						</div>

						</section>
				</div>

				<div id="shippingInformation">
					<form>
					<div style="font-size: 1.2em; font-weight:bold;">Billing Information</div>
					<div class="form-group">
						<label for="inputName">Name</label>
						<input type="text" class="form-control" id="inputName" onblur="validateName()"> <span class="alertMes" id="alertTextName"></span>
					  </div>
					  <div class="form-group">
						<label for="inputEmail">Email address</label>
						<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" onblur="emailValidation()"> <span class="alertMes" id="alertEmail"></span>
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" onblur="addressValidation()"> <span class="alertMes" id="alertAddress"></span>
					  </div>
					  <div class="form-group">
						<label for="inputAddress2">Address 2</label>
						<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					  </div>
					 <div class="form-group col-md-4">
						  <label for="inputState">County</label>
						  <select id="inputState" class="form-control">
							<option value="antrim">Antrim</option>
								<option value="armagh">Armagh</option>
								<option value="carlow">Carlow</option>
								<option value="cavan">Cavan</option>
								<option value="clare" selected>Clare</option>
								<option value="cork">Cork</option>
								<option value="derry">Derry</option>
								<option value="donegal">Donegal</option>
								<option value="down">Down</option>
								<option value="dublin">Dublin</option>
								<option value="fermanagh">Fermanagh</option>
								<option value="galway">Galway</option>
								<option value="kerry">Kerry</option>
								<option value="kildare">Kildare</option>
								<option value="kilkenny">Kilkenny</option>
								<option value="laois">Laois</option>
								<option value="leitrim">Leitrim</option>
								<option value="limerick">Limerick</option>
								<option value="longford">Longford</option>
								<option value="louth">Louth</option>
								<option value="mayo">Mayo</option>
								<option value="meath">Meath</option>
								<option value="monaghan">Monaghan</option>
								<option value="offaly">Offaly</option>
								<option value="roscommon">Roscommon</option>
								<option value="sligo">Sligo</option>
								<option value="tipperary">Tipperary</option>
								<option value="tyrone">Tyrone</option>
								<option value="waterford">Waterford</option>
								<option value="westmeath">Westmeath</option>
								<option value="wexford">Wexford</option>
								<option value="wicklow">Wicklow</option>
						  </select>
						</div>
						<div class="form-group col-md-2">
						  <label for="inputZip">Zip</label>
						  <input type="text" class="form-control" id="inputZip" onblur="zipValidation()"> <span class="alertMes" id="alertZip"></span>
						</div>

						<div style="font-size: 1.2em; font-weight:bold;">Payment Information</div>
						<div class="form-group">
							<label for="inputCardName">Name On Card</label>
							<input type="text" class="form-control" id="inputCardName" onblur="validateCardName()"> <span class="alertMes" id="alertCardName"></span>
						</div>

						<div class="form-group">
							<label for="inputCardNumber">Card Number</label>
							<input type="text" class="form-control" id="inputCardNumber" onblur="cardNumberValidation()"> <span class="alertMes" id="alertCardNumber"></span>
						</div>


						<div class="form-group col-md-2">
						  <label for="inputCGV">CGV</label>
						  <input type="text" class="form-control" id="inputCGV" onblur="cgvValidation()"> <span class="alertMes" id="alertCGV"></span>
						</div>


					  <button type="submit" class="btn btn-primary submitBtn" onclick="purchaseClicked()">PURCHASE</button>
					</form>
				</div>

				</div>
            <!---->

            <!-- -->

            <!-- -->

            <!-- -->

            <!-- -->

        </div>
    </div>
    <!-- End content  -->

    <!--Begin footer-->
		<footer>
			<?php include("footer.php") ?>
		</footer>
		<!--End footer-->

    <!-- JavaScript -->
	<script src="js/shop.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
