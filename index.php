<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>PayTM paymeny</title>
  </head>
  <body>
<br>
    <h1 class="text-center">
        BUY PRODUCTS <br>
        Using 
        <img src="./images/paytm.jpg" height="70" alt="">
        Payment Option  
    </h1>
<br>
    <div class="container">

        <form action="mycart.php" method="post">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="./images/apple.jpg" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">
                        Apple iPhone 11 (64GB) - Nevy
                    </h5>
                    <input type="hidden" name="p_name" value="Apple iPhone 11 (64GB) - Nevy">
                    <input type="hidden" name="price" value="1">

                    <p class="card-text">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    11,901</p>  
                    <p style="color:green;font-weight:600">
                        ₹ 51,999
                        <span style=" text-decoration: line-through;color:red;">
                        ₹54,900</span> 
                    Save ₹2,901</p>
                    FREE Delivery <br>
                    <br>
                    <input style="padding:5px;"  type="text"  size="2" name="quantity" placeholder="1" value='1'>
                    <span class="text-center">
                        
                        <button type="submit" class="btn btn-success">
                            Buy Now
                        </button>
                        
                    </span>
                </div>
            </div>
        </form>

        <footer class="text-center">
        Copyright &#169; 2020 : <a href="http://swapnilsutar.netlify.com" target="_blank">Swapnil Sutar </a>
    </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>