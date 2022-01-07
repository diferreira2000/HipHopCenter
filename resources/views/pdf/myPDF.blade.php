<?php
$username=$_GET['username'];
$name=$_GET['name'];
$streetName=$_GET['streetName'];
$zipcode=$_GET['zipcode'];
$email=$_GET['email'];
date_default_timezone_set('Europe/Lisbon');
$date = date('m/d/Y h:i:s a', time());
?>
<!DOCTYPE html>
<html>
<!-- Criar front-end fatura -->
<head>
  
</head>

<body>
<div class="receipt-content">
    <div class="container bootstrap snippets bootdey">
		<div class="row">
			<div class="col-md-12">
				<div class="invoice-wrapper">
					<div class="intro">
						Hi <strong>{{ $username }}</strong>, 
						<br>
						This is the receipt for a payment of <strong>6.99€</strong> (EUR) for 2 year subscription of HipHopCenter
					</div>

					<div class="payment-info">
						<div class="row">
							<div class="col-sm-6">
								<span>Payment No.</span>
								<strong>434334343</strong>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment Date</span>
								<strong>{{ $date }}</strong>
							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Client</span>
								<strong>
                                     {{ $name }}
								</strong>
                                <p>
                                Address:
                                </p>
								<p>
                                    {{ $streetName }} <br>
									{{ $zipcode }} <br>
									{{ $email }}  <br>
								</p>
							</div>
						</div>
					</div>

					<div class="line-items">
						<div class="headers clearfix">
							<div class="row">
								<div class="col-xs-4">Description:2 Year Subscription</div>
								<div class="col-xs-5 text-right">Amount:6.99€</div>
							</div>
						</div>
						<div class="items">
							<div class="row item">
								<div class="col-xs-4 desc">
									2 Year Subscription
								</div>
								<div class="col-xs-5 amount text-right">
									6.99€
								</div>
							</div>
						</div>
						<div class="total text-right">
							<p class="extra-notes">
								<strong>Extra Notes</strong>
								You will be notifited 1 week before your subscription expires.
                                Make sure to renew your subscription or your Premium Status will be Downgraded.

							</p>
							<div class="field grand-total">
								Total <span>$6.99</span>
							</div>
						</div>
					</div>
				</div>

				<div class="footer">
					     Copyright © 2022. hiphopcenter
				</div>
			</div>
		</div>
	</div>
</div>                 
</body>
</html>
