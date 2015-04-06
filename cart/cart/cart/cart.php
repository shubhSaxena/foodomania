
 <link href="cart/css/main.css" rel="stylesheet"/> <div id="cart-container">
	<div class="col-md-7" >
		<div class="page-header divider">
		  <h2>Select Your Order</h2>
		</div>
		<?php
		
		
		if(file_exists("cart/products.xml"))
		{
			$file="cart/products.xml";
		}
		else
		{
			die("No products.xml file found");
		}
		
		
		if(file_exists("cart/config.xml"))
		{
			$config_file="cart/config.xml";
		}
		else
		{
			die("No config.xml file found");
		}
		
		
		$xml_config = simplexml_load_file($config_file);
		$currency_symbol=$xml_config->configuration->currency_symbol;
		$currency_code=$xml_config->configuration->currency_code;
		
		$xml = simplexml_load_file($file);
	
		$script_products="";
		$script_product_prices="";
		
		
		foreach ($xml->product as $r) 
		{
			$script_products.="products[".($r->id)."]=\"".($r->name)."\";\n";
			$script_product_prices.="product_prices[".($r->id)."]=\"".($r->price)."\";\n";
		?>	
			<div>
			<p class="lead">
				<h3 class="pull-right no-top-margin"><?php echo $currency_symbol;?><?php echo $r->price;?></h3>
				<h3><?php echo $r->name;?></h3>
				<figure><?php echo '<img src="'.$r->image.'" height="100"; "width="100" ;>';?></figure>
			</p>
			<p>
				<?php echo $r->description;?>
			</p>
			<br/>
			
			<a class="btn btn-xs btn-info" href="javascript:AddToCart(<?php echo $r->id;?>)">Add to Cart</a>
		 </div>
		<hr/>

		<?php
		}
		?>
		<script>
		var currency_symbol="<?php echo $currency_symbol;?>";
		var products=Array();
		<?php echo $script_products;?>
		var product_prices=Array();
		<?php echo $script_product_prices;?>
		</script>
		  
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-4">
		<br/><br/>
		 <div class="panel panel-default cart-panel">
			<div class="panel-heading">
				<img class="pull-left add-right-margin" height="20" src="cart/images/cart-m.png"/>
			  <h3  class="pull-left panel-title">Your Cart</h3>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div id="Cart">
					The cart is empty!
				</div>
			</div>
		  </div>
		
	</div>
</div>
<div class="clearfix"></div>
<div id="payment-container">
	<div class="page-header">
		 <h1>Select your payment option</h1>
	</div>
		
	<form id="payment-from" action="cart/process_order.php" target="ajax-ifr">
	<input type="hidden" value="1" name="proceed" id="proceed"/>
	<input type="hidden" value="" name="products_list" id="products_list"/>
	<input type="hidden" value="" name="products_value" id="products_value"/>
	
	<?php
	$first_option = true;
	$second_option = false;
	
	if(trim($xml_config->configuration->paypal_account)!="")
	{
	?>
		<input <?php if($first_option) echo "checked";?> type="radio" name="payment_option" value="paypal"/>
		<img src="cart/images/paypal.png" alt="Payment through PayPal.com"/>
		<input <?php if($second_option) echo "checked";?> type="radio" name="payment_option" value="paypal"/>
		<img src="cart/images/cod.png" height="80" width="180" alt="cash on delivery"/>
	<?php
	}
	
	
	?>
	<div class="clearfix"></div>
	<br/><br/>
	<a href="javascript:GoToCart()" class="btn btn-xs btn-default add-right-margin">Go back to cart</a>
	<a href="javascript:SubmitPaymentForm()" type="button" class="btn btn-xs btn-info">Continue</a>
	
	</form>
</div>


<div id="popup" class="alert alert-warning"></div>

<iframe id="ajax-ifr" name="ajax-ifr" src="cart/empty.html" class="no-visibility" width="1" height="1"> </iframe>

<script src="cart/js/cart.js"></script>
