<?php 
include("header.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
        <title>BarOnWheels - Search</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png">
        <script src="https://kit.fontawesome.com/88532a0327.js" crossorigin="anonymous"></script>

        <!-- ICON PACK CDN IONICONS -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
 <body>

     <style>


#products {
    
    width: 100%;
  list-style-type: none;
  padding: 0;
  margin: 0;
  font-size: 20px;

}

#products li{
    margin-right: 18px;
    display: inline-block;
        min-width: 240px;
        height: 270px;
        margin-bottom: 50px;
        transition: transform 0.6s;
        padding: 10px;
        box-shadow: 0px 11px 35px 2px var(--color-shadow);
        opacity: 1;
        transition: .5s;
        border-radius: 0.8em;
        text-align: center;

}

#products li:hover{
    box-shadow: 0px 11px 35px 2px var(--secondary-color);
    transform: translateY(-10px);

}

#products li a{
    text-decoration: none;
    color: black;

}
#products li img{
    margin-top: 15px;
    height: 200px;

}
.search-main h2{
    font-size: 100px;
    margin-bottom: 5px;
    margin-top: 100px;
}

.input-search-main {
    margin-top: 10px;
    width: 45%;
    display: flex;
    padding-bottom: 3px;
    margin-bottom: 40px;
}

.input-search-main input{
    width: 100%;
    margin-left: 11px;
    font-size: 18px;
    border: none;
    outline: none;
    color:var(--teritiary-color);
    background-color: transparent;
}
    .input-search-main ion-icon    {
font-size: 30px;
cursor: pointer;
color: var(--teritiary-color);
}


</style>

</head>
<body>
<div class="master">

<div class="search-main">
<h2>Search</h2>
<div class="input-search-main">
<ion-icon name="search-outline"></ion-icon>
<input type="text" id="search_val" onkeyup="myFunction()" placeholder="Type your search here...." title="Type in a name"></div>
<ul id="products">

  <li><a href="absolut_vodka.php"><img src="store_products/vodka/vodka1.png"><br>Absolut Vodka</a></li>

  <li><a href="blue_moon_belgian_white.php"><img src="store_products/beer/beer3.png"><br>Blue Moon Beer</a></li>

  <li><a href="bombay_sapphire.php"><img src="store_products/gin/gin2.png"><br>Bombay Sapphire Gin</a></li>

  <li><a href="bud_light.php"><img src="store_products/beer/beer2.png"><br>Bud Light Beer</a></li>

  <li><a href="budweiser.php"><img src="store_products/beer/beer1.png"><br>Budwiser Beer</a></li>

  <li><a href="bumbu_xo.php"><img src="store_products/rum/rum3.png"><br>Bumbu XO Rum</a></li>

  <li><a href="corona.php"><img src="store_products/beer/beer4.png"><br>Corona Beer</a></li>

  <li><a href="ciroc_snap_frost.php"><img src="store_products/vodka/vodka2.png"><br>Cîroc Frost Vodka</a></li>

  <li><a href="don_julio.php"><img src="store_products/tequila/tequila3.png"><br>Don Julio Tequila</a></li>

  <li><a href="don_pilar.php"><img src="store_products/tequila/tequila2.png"><br>Don Pilar Tequila</a></li>

  <li><a href="empress_1908.php"><img src="store_products/gin/gin4.png"><br>Empress 1908 Gin</a></li>

  <li><a href="gordons_premium_pink.php"><img src="store_products/gin/gin3.png"><br>Gordon's Pink Gin</a></li>

  <li><a href="grey_goose.php"><img src="store_products/vodka/vodka3.png"><br>Grey Goose Vodka</a></li>

  <li><a href="hennessy_vs_cognac.php"><img src="store_products/whiskey/whiskey3.png"><br>Hennessy VS Whiskey</a></li>

  <li><a href="jw_black_label.php"><img src="store_products/whiskey/whiskey2.png"><br>JW Black Label Whiskey</a></li>

  <li><a href="hennessy_vs_cognac.php"><img src="store_products/whiskey/whiskey3.png"><br>JD Tennessee Whiskey</a></li>

  <li><a href="orange_cacao.php"><img src="store_products/gin/gin1.png"><br>Orange & Cacao Gin</a></li>

  <li><a href="plantation.php"><img src="store_products/rum/rum1.png"><br>Plantation Rum</a></li>

  <li><a href="ron_zacapa.php"><img src="store_products/rum/rum4.png"><br>Ron Zacapa Rum</a></li>

  <li><a href="silver_patron.php"><img src="store_products/tequila/tequila4.png"><br>Silver Patron Tequila</a></li>

  <li><a href="stolichnaya_elit.php"><img src="store_products/vodka/vodka4.png"><br>Stolichnaya Elit Vodka</a></li>

  <li><a href="tesla.php"><img src="store_products/tequila/tequila1.png"><br>Tesla Tequila</a></li>

  <li><a href="glenlivet_archive.php"><img src="store_products/whiskey/whiskey1.png"><br>The Glenlivet Whiskey</a></li>

  <li><a href="zafra.php"><img src="store_products/rum/rum2.png"><br>Zafra Rum</a></li>

</ul>
</div>
<br><br>
<br>
<br>
<br>

</div>




<script>

function myFunction() 

{
    var input, filter, ul, li, a, i, txtValue;

    input = document.getElementById("search_val");

    filter = input.value.toUpperCase();

    ul = document.getElementById("products");

    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];

        txtValue = a.textContent || a.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";

        } 
        
        else 
        
        {
            li[i].style.display = "none";
        }
    }
}
</script>
<?php include("footer.php"); ?>

 </body>
 </html>