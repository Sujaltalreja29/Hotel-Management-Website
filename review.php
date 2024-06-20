!<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    <style>
        .contact_header{
            color: yellow;
            text-align: center;
        }
        .well
        {
            background: rgba(0,0,0,0.5);
            border: none;
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
        .lables{
            color: yellow;
        }
        .inputypes{
            background-color: black;
            color: white;
        }
        .submitbutton{
            background-color: #04AA6D; 
            border: none;
            color: white;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        #area{
            
            height: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li class="active"><a href="review.php">Contact US</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        <form action="./emailsend.php" method="POST">
            <h1 class="contact_header">Contact Us</h1>
            <center>
                    <br>
                    <br>
                    <lABel class="lables">Email :</lABel>
                    <td><input class="inputypes" type="email" placeholder="email" name="email" require>
                    <br>
                    <br>
                    <lABel class="lables">Query :</lABel>
                    <input class="inputypes" id="area" "textarea" placeholder="What brings you here !!!!" name="query" require>
                    <br>
                    <br>
                    <input class="submitbutton" type="submit" value="Submit" name="submit">
            </center>
        </form>
    </div>
    <div>
        
    </div>
    
    
    
    
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>