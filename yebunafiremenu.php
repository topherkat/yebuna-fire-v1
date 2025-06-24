<!DOCTYPE html>
<html lang="en">
    

    
  <head>
      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yebuna Fire</title>
    <link rel="stylesheet" href="style.css">
        
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow&family=Cookie&family=Indie+Flower&family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head>
  
    <style>
        body{
            background-color: #154360;
            color: white;
        }
        #business{
            font-family: 'Cookie', cursive;
            font-size: 50px;
            margin-top: 50px;
            letter-spacing: 2px;
        }
        span{
            font-size: 30px;
        }
        .box{
            
            border: 2px solid white;
            padding-top:20px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 50px;
            width: 350px;
            margin: auto;
            font-family: 'Barlow', sans-serif;
            margin-top: -15px;
        }
        .itemtitle{
            font-weight: bold;
            margin-bottom: 7px;
            font-size: 18px;
            color:#F1C40F;
        }
        #qty{
            width: 60px;
            margin-bottom: 5px;
        }
        
        #cname{
            width: 96%;
            margin-bottom: 5px;
        }
        #address{
            width: 96%;
        }
        .buttons{
            
            float: right;
        }
        
        #total{
            font-size: 18px;
            font-family: 'Barlow', sans-serif;
            padding: 5px;
        }
    </style>
    
    

    
  <body>
    <center>
        <h1 id='business'>
            Yebuna Fire <span> (Order Sheet) </span>
        </h1>
    </center>  
    <div class='box'>
        <form action="" method="get">
      <div class='menu'>
        <label for="cname">Full Name :</label>
        <input type="text" id="cname" name="cname"><br>
         
         
        <label for="address">Address :</label>
        <input type="text" id="address" name="address"><br><br>
        
        
        <div class='itemtitle'>Grind/Whole Coffee Bean (250g)</div>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1">Classic : ₱239</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
        
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle2">Premium : ₱259</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
    </div>
    
    <br>
    
    <div class='menu'>
        <div class='itemtitle'>Grind/Whole Coffee Bean (500g)</div>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1">Classic : ₱359</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
        
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle2">Premium : ₱389</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
    </div>
    <br>
    <div class='menu'>
        <div class='itemtitle'>Coffee Kits</div>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1">Classic : ₱549</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
        
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle2">Premium : ₱569 </label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
    </div>
    <br>
    
    <div class='menu'>
        <div class='itemtitle'>Homemade Shanghai Burrito</div>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1">10 pieces : ₱199</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
        
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle2">20 pieces : ₱289 </label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
    </div>
    <br>
        
    <div class='menu'>
        <div class='itemtitle'>Shanghai Burrito Con Queso</div>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1">10 pieces : ₱219</label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
        
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle2">20 pieces : ₱379 </label><br>
        Quantity: <input type="number" id="qty" name="quantity"><br>
        
        
        <div class='buttons'>
            <input type="submit" id='total' value="See Total">
        </div>  
        
    </div>
    <br>




    </form>
    </div>
    
    
    
    
    
    
    

    
    
      
    
    
	<script src="index.js"></script>
  </body>
</html>