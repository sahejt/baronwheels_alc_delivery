

<html>
    <head>
        <title>BarOnWheels - Home</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>
</head><body>
<div class="master">
        <div class="navbar">
          <a href="index.php"><h2>BarOnWheels</h2></a> 
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="store.php"> Store</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <div class="navbar-icons">
            <a href="help.php"><ion-icon name="help-outline"></ion-icon> </a> 
            <a href="login.php"><ion-icon name="person-circle-outline"></ion-icon></a>  

            <a href="cart.php"> <ion-icon name="cart-outline"></ion-icon> </a> 
              <a href="pro.php"><ion-icon name="diamond-outline"></ion-icon></a>
              <a><ion-icon name="contrast-outline" id="icon"></ion-icon></a>  
            </div>
            <br><br><br><br><br>
        </div>
<br><br><br><br>




      
<div class="banner-cart">
  <h1> Cart </h1>
</div>
       <div class="small-container cart-page">
         <table>
           <tr>
             <th>  &nbsp; Product </th>
             <th>  &nbsp; Quantity </th>
             <th> Sub-Total   &nbsp;</th>
           </tr>
           <tr>
             <td> <div class="cart-info">
               <a href="absolut_vodka.php"> <img src="store_products/vodka/vodka1.png"> </a>
               <div>
                 <p> Absolut Vodka (750ml.) </p>
                 <small> Price: $14.99 </small> <br><br>
                 <a href="#">Remove</a>
               </div>
             </div> </td>
             <td> <select>
              <option> 1 </option>
              <option> 2 </option>
              <option> 3 </option>
              <option> 4 </option>
              <option> 5 </option>
            </select>  </td>
             <td> <p>$14.99</p> </td>
           </tr>
           
           <tr>
            <td> <div class="cart-info">
              <a href="glenlivet_archive.php"> <img src="store_products/whiskey/whiskey1.png"> </a>
              <div>
                <p> The Glenlivet Archive (750ml.) </p>
                <small> Price: $249.99 </small> <br><br>
                <a href="#">Remove</a>
              </div>
            </div> </td>
            <td> <select>
              <option> 1 </option>
              <option> 2 </option>
              <option> 3 </option>
              <option> 4 </option>
              <option> 5 </option>
            </select>  </td>
            <td> <p>$249.99</p> </td>
          </tr>

          <tr>
            <td> <div class="cart-info">
              <a href="don_julio.php"> <img src="store_products/tequila/tequila3.png"> </a>
              <div>
                <p> Don Julio (750ml.) </p>
                <small> Price: $149.99 </small> <br><br>
                <a href="#">Remove</a>
              </div>
            </div> </td>
            <td> <select>
              <option> 1 </option>
              <option> 2 </option>
              <option> 3 </option>
              <option> 4 </option>
              <option> 5 </option>
            </select> 
          </td>
            <td> <p>$149.99</p> </td>
          </tr>
           
         </table>
       <br><br>
         <div class="total-price">
           <table>
             <tr>
               <td>Sub-Total</td>
               <td> $414.97 </td>
             </tr>
             <tr>
              <td>Estimated Tax</td>
              <td> $38.53</td>
            </tr>
            <tr>
              <td>Delivery</td>
              <td>$5.16</td>
            </tr>
          
           </table>
         
         </div><br>
         <div class="total">
          <table>
            <tr>
              <td>Total Due: &nbsp; $458.66</td>
           
              <td>  <a href="checkout.php"><button class="checkout-btn"> Check Out </button></a>

            </tr>
           </table>
         </div>
       </div>
       </div>

         <!--- FOOTER -->
         <?php include("footer.php"); ?>
