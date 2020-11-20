<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

    $product =  $_POST["p_name"]; 
    $price =  $_POST["price"]; 
    $price_d =  $_POST["price"]; 
    $quantity = $_POST['quantity'];
    $total = $price*$quantity;



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>payment</title>
  </head>
  <body>

    <div class="container"> 

        <div class="back">
            <a href = "javascript:history.back()">Back to previous page</a>
        </div>

        <div class="product">
        <h1> Your Cart</h1>
            <p>
                <?php echo $product;?>
            </p>
            <p>
                Price ₹ <?php echo number_format($price_d,2)?> ( <?php echo $quantity?> )
            </p>
            <p>
                Total Cost ₹ <?php echo number_format($total,2) ?>
            </p>
        </div>

        <div class="info">
            <h4> Please Fill Your Information </h4>
            <form action="pgRedirect.php" method="post">         
                <table>
                    <tr>
                        <td class="title"> Name </td>
                        <td> <input class="form-control" id="CUST_ID" type="text" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" > </td>
                    </tr>
                    <tr>
                        <td class="title"> Email </td>
                        <td> <input  class="form-control" type="text" > </td>
                    </tr>
                    <tr>
                        <td class="title"> Phone </td>
                        <td> <input  class="form-control" type="text"> </td>
                    </tr>
                    <tr>
                        <td class="title"> Address </td>
                        <td> <input  class="form-control" type="text"> </td>
                    </tr>
                    <tr>
                        <td class="title"> Pincode </td>
                        <td> <input  class="form-control" type="text"> </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                            name="ORDER_ID" autocomplete="off"
                            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                        </td>
                        
                        <td> <input type="hidden" name="INDUSTRY_TYPE_ID" id="INDUSTRY_TYPE_ID"  value="smartphone">
                        </td>

                        <td></td>

                        <td><input id="CHANNEL_ID" type="hidden" tabindex="4" maxlength="12"
                            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                        </td>

                        <td><input title="TXN_AMOUNT" type="hidden" tabindex="10" name="TXN_AMOUNT"
                            value="<?php echo $total;?>">
                        </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td style="text-align:right"> 
                        <button class="btn btn-success">
                        <img src="./images/logo.png" height="70" alt="">
                        Payment ₹<?php echo number_format($total,2)?> </button> </td>

                    </tr>
                </table>
            </form>
        
        </div>

    <footer class="text-center">
        Copyright &#169; 2020 : <a href="http://swapnilsutar.netlify.com" target="_blank">Swapnil Sutar </a>
    </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>