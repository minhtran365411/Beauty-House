let nailArray = document.getElementsByClassName("nailPolish");
let tanArray = document.getElementsByClassName("tan");
let hairArray = document.getElementsByClassName("hairCare");
let beautyArray = document.getElementsByClassName("beauty");
let saleArray = document.getElementsByClassName("sale");

function tanItems() {
	for (let i = 0; i < nailArray.length; i++) {
		nailArray[i].style.display = "none";
	}
	for (let i = 0; i < hairArray.length; i++) {
		hairArray[i].style.display = "none";
	}
	for (let i = 0; i < beautyArray.length; i++) {
		beautyArray[i].style.display = "none";
	}
	for (let i = 0; i < saleArray.length; i++) {
		saleArray[i].style.display = "none";
	}
	for (let i = 0; i < tanArray.length; i++) {
		tanArray[i].style.display = "block";
	}
}

function hairItems() {
	for (let i = 0; i < nailArray.length; i++) {
		nailArray[i].style.display = "none";
	}
	for (let i = 0; i < tanArray.length; i++) {
		tanArray[i].style.display = "none";
	}
	for (let i = 0; i < beautyArray.length; i++) {
		beautyArray[i].style.display = "none";
	}
	for (let i = 0; i < saleArray.length; i++) {
		saleArray[i].style.display = "none";
	}
	for (let i = 0; i < hairArray.length; i++) {
		hairArray[i].style.display = "block";
	}
}

function nailItems() {
	for (let i = 0; i < hairArray.length; i++) {
		hairArray[i].style.display = "none";
	}
	for (let i = 0; i < tanArray.length; i++) {
		tanArray[i].style.display = "none";
	}
	for (let i = 0; i < beautyArray.length; i++) {
		beautyArray[i].style.display = "none";
	}
	for (let i = 0; i < saleArray.length; i++) {
		saleArray[i].style.display = "none";
	}
	for (let i = 0; i < nailArray.length; i++) {
		nailArray[i].style.display = "block";
	}
}

function beautyItems() {
	for (let i = 0; i < hairArray.length; i++) {
		hairArray[i].style.display = "none";
	}
	for (let i = 0; i < tanArray.length; i++) {
		tanArray[i].style.display = "none";
	}
	for (let i = 0; i < nailArray.length; i++) {
		nailArray[i].style.display = "none";
	}
	for (let i = 0; i < saleArray.length; i++) {
		saleArray[i].style.display = "none";
	}
	for (let i = 0; i < beautyArray.length; i++) {
		beautyArray[i].style.display = "block";
	}
}

function saleItems() {
	for (let i = 0; i < hairArray.length; i++) {
		hairArray[i].style.display = "none";
	}
	for (let i = 0; i < tanArray.length; i++) {
		tanArray[i].style.display = "none";
	}
	for (let i = 0; i < nailArray.length; i++) {
		nailArray[i].style.display = "none";
	}
	for (let i = 0; i < beautyArray.length; i++) {
		beautyArray[i].style.display = "none";
	}
	for (let i = 0; i < saleArray.length; i++) {
		saleArray[i].style.display = "block";
	}
}

function allItems() {
	for (let i = 0; i < hairArray.length; i++) {
		hairArray[i].style.display = "block";
	}
	for (let i = 0; i < tanArray.length; i++) {
		tanArray[i].style.display = "block";
	}
	for (let i = 0; i < nailArray.length; i++) {
		nailArray[i].style.display = "block";
	}
	for (let i = 0; i < beautyArray.length; i++) {
		beautyArray[i].style.display = "block";
	}
	for (let i = 0; i < saleArray.length; i++) {
		saleArray[i].style.display = "block";
	}
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
    }
	
	var quantityInputs = document.getElementsByClassName('cart-quantity-input');
	for(let i = 0; i < quantityInputs.length; i++) {
		var input = quantityInputs[i];
		input.addEventListener('change', quantityChanged)
	}
	
	var addToCartButtons = document.getElementsByClassName('buyButton');
	for(let i = 0; i < addToCartButtons.length; i++) {
		var input = addToCartButtons[i];
		input.addEventListener('click', addToCartClicked)
	}
	
}

function purchaseClicked() {
		alert("Payment success");
		var cartItems = document.getElementsByClassName('card-items')[0];
			while(cartItems.hasChildNodes()) {
				cartItems.removeChild(cartItems.firstChild);
			}
		updateCartTotal();
}

function addToCartClicked(event) {
	var button = event.target;
	var shopItem = button.parentNode.parentNode;
	var title = shopItem.getElementsByClassName('card-title')[0].innerText;
	var price = shopItem.getElementsByClassName('money')[0].innerText;
	var imageSrc = shopItem.getElementsByClassName('card-img-top')[0].src;
	//console.log(title, price, imageSrc);
	localStorage.setItem("title", title);
	localStorage.setItem("price", price);
	localStorage.setItem("imageSrc", imageSrc);
	addItemToCart();
	updateCartTotal();
}

function addItemToCart() {
	let title = localStorage.getItem('title'); 
	let price = localStorage.getItem('price'); 
	let imageSrc = localStorage.getItem('imageSrc');
	let cartRow = document.createElement('div');
	cartRow.classList.add('cart-row');
	let cartItems = document.getElementById('cartItems');
	var cartItemNames = cartItems.getElementsByClassName('cart-item-title');
		for (let i = 0; i < cartItemNames.length; i++) {
			if (title == cartItemNames[i].innerText) {
				alert('This item is already added to your shopping cart. You can increase quantity in cart.');
				return;
			}
		}
	
	var cartRowContents = `
					<div class="cart-item cart-column">
						<img class="cart-item-image" src="${imageSrc}" width="80" height="80">
						<span class="cart-item-title">${title}</span>
					</div>
					<span class="cart-price cart-column">${price}</span>
					<div class="cart-quantity cart-column">
						<input class="cart-quantity-input" type="number" value="1">
						<button class="btn btn-danger" type="button">REMOVE</button>
					</div>
	`;
	cartRow.innerHTML = cartRowContents;
	cartItems.append(cartRow);
	cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
	cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

function quantityChanged(event) {
	var input = event.target;
	if (isNaN(input.value) || input.value <=0) {
		input.value = 1;
	}
	updateCartTotal();
}


function removeCartItem(event) {
	var buttonClicked = event.target;
		buttonClicked.parentNode.parentNode.remove();
		updateCartTotal();
}

function updateCartTotal() {
	var cartItemContainer = document.getElementsByClassName('cart-items')[0];
	var cartRows = cartItemContainer.getElementsByClassName('cart-row');
	var total = 0;
	for (let i = 0; i < cartRows.length; i++) {
		var cartRow = cartRows[i];
		var priceElement = cartRow.getElementsByClassName('cart-price')[0];
		var quantityElemnet = cartRow.getElementsByClassName('cart-quantity-input')[0];
		var price = parseFloat(priceElement.innerText.replace('€', ''));
		var quantity = quantityElemnet.value;
		total += price*quantity;
		
	}
	total = (Math.round(total*100))/100;
	document.getElementsByClassName('cart-total-price')[0].innerText = '€' + total;
}


//Proceed Payment


var shippingInformation = document.getElementById("shippingInformation");
shippingInformation.style.display = "none";

function proceedPayment() {
	var cartItemNames = cartItems.getElementsByClassName('cart-item-title');
	if (cartItemNames.length >= 1) {
		shippingInformation.style.display = "block";
	} else {
		alert("You have nothing in cart.");
	}
}

//Validate form


function validateName() {
	var name = document.getElementById('inputName').value;
	let alertText = "*Name cannot be empty.";
	if (name.length <= 0) {
		document.getElementById('alertTextName').innerHTML = alertText;
	} 
}

function emailValidation() {
	var email = document.getElementById('inputEmail').value;
	let alertText = "*Email have to contain an '@' symbol and a '.' full stop. ";
	let atIndex = email.indexOf("@");
	console.log(atIndex);
	if (email.includes("@") && email.includes(".", atIndex) ) {
		localStorage.setItem("email", email);
		checkPoint++;
	} 
}

function addressValidation() {
	var add = document.getElementById('alertAddress').value;
	let alertText = "*Address cannot be empty.";
	if (add.length <= 0) {
		document.getElementById('alertAddress').innerHTML = alertText;
	} 
}

function zipValidation() {
	var zip = document.getElementById('inputZip').value;
	let alertText = "*Zip cannot be empty.";
	if (zip.length <= 0) {
		document.getElementById('alertZip').innerHTML = alertText;
	}
}

function validateCardName() {
	var name = document.getElementById('inputCardName').value;
	let alertText = "*Name on card cannot be empty.";
	if (name.length <= 0) {
		document.getElementById('alertCardName').innerHTML = alertText;
	} 
}

function cardNumberValidation() {
	var cardNumber = document.getElementById('inputCardNumber').value;
	let alertText = "*Card number needs to have 16 digits.";
	if (cardNumber.length != 16) {
		document.getElementById('alertCardNumber').innerHTML = alertText;
	}
}

function cgvValidation() {
	var cgv = document.getElementById('inputCGV').value;
	let alertText = "*CGV needs to have 3 digits.";
	if (cgv.length != 3) {
		document.getElementById('alertCGV').innerHTML = alertText;
	} 
}

