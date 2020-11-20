<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class='receipt'>
			<?php
			if($isValidChecksum == "TRUE") {
				
				?>
				<div class="text-center">
				<?php
				echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
				
				if ($_POST["STATUS"] == "TXN_SUCCESS") {
					?>
					<div class="suc">
					<?php
					echo "<b>Transaction status is success</b>" . "<br/>";
					?>
					</div>
					<?php
					//Process your transaction here as success transaction.
					//Verify amount & order id received from Payment gateway with your application's order id and amount.
				}
				else {
					?>
					<div class="fai">
					<?php
					echo "<b>Transaction status is failure</b>" . "<br/>";
					?>
					</div>
					<?php
				}
				?>
				</div>
				<?php
				if (isset($_POST) && count($_POST)>0 )
				{ 
					?>
						<table class="table" border="1" id="receipt">
					<?php
					foreach($_POST as $paramName => $paramValue) {
						// echo "<br/>" . $paramName . " = " . $paramValue;
						?>
						<tr>
							<td><?php echo $paramName;	?> 	</td>
							<td><?php echo $paramValue;	?> 	</td>
							
						</tr>
					<?php
					}
					?>
						</table>
						<div class="text-center">
							<button class="btn btn-danger"
							onclick="tableToExcel('receipt', 'track')"
				> Print</button>
						</div>
				<?php
				}
				
				
			}
			else {
				?>
					<div class="text-center" style="color:red;">
					<?php
					echo "<b>Checksum mismatched.</b>";
					?>
					</div>
					<?php
				//Process transaction as suspicious.
			}
			?>
		</div>
	</div>

	<script src= 
"//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"> 
</script> 
<script src= 
"//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> 
</script> 
	
</body>
</html>
