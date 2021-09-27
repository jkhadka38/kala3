<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/checkout.css" type="text/css">


  
  <title>Document</title>
</head>
<body>
  <header>
    <div class="logo">
      <h1>Kalā</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#">HOME</a> </li>
        <li><a href="#">ABOUT US</a> </li>
        <li><a href="#">CONTACT US</a> </li>
        <li><a href="#">PROFILE</a> </li>
      </ul>
    </nav>
  </header>
<main>
  <div class="checkoutInfo">
    <h2>Checkout</h2>
    <p>Fill The Required Information Below</p>
</div>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="/action_page.php">

                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <div class="row">
                            <div class="col-50">
                                <label for="firstName">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Jasmine">
                            </div>
                            <div class="col-50">
                                <label for="firstName">Second Name</label>
                                <input type="text" id="secondName" name="secondname" placeholder="Khadka">
                            </div>

                        </div>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="jasminekhadka@example.com">
                        <label for="adr">Address</label>
                        <input type="text" id="adr" name="address" placeholder="...">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Kathmandu">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Bagmati Province">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="44600">
                            </div>
                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        <hr>
                        <h3>Payment</h3>
                        <label>
                            <input type="radio" name="paymentMethod" id="cod" checked="checked" required>Cash On Delivery
                        </label>
                    </div>

                </div>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Cart <span class="price" style="color:black"><b>4</b></span></h4>
            <p><a href="#">Product 1</a> <span class="price">$15</span></p>
            <p><a href="#">Product 2</a> <span class="price">$5</span></p>
            <p><a href="#">Product 3</a> <span class="price">$8</span></p>
            <p><a href="#">Product 4</a> <span class="price">$2</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
        </div>
    </div>
</div>

</main>
<footer>
    
  <div class="copyright">
    <h1>  © All rights reserved 2021</h1>
  </div>
  
</footer>
</body>
</html>