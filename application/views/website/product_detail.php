<?php
	preg_match('/product\/([a-z0-9\_]+)/i', $_SERVER['REQUEST_URI'], $match);
	$product_name = (empty($match[1])) ? '' : $match[1];
	$product = $this->Product_model->get_by_id(array('product_name' => $product_name));
	if (count($product) == 0) {
		show_404();
		exit;
	}
?>

<?php $this->load->view( 'website/common/meta.php'); ?>
<body>
<div class="template">
	<?php $this->load->view( 'website/common/template_fix.php'); ?>
	
	<div class="fix-width">
		<?php $this->load->view( 'website/common/header.php'); ?>
		
		<div class="pom">
			<div class="pom-left">
				<?php $this->load->view( 'website/common/cnt_left.php'); ?>
			</div>
			
			<div class="pom-right">
				<div class="roundedbox">
					<h1 class="poounder">Product Detail - <?php echo $product['product_title']; ?></h1>
					<div id="product_list">
						<div class="noborder">
							<div class="productItem <?php echo $product['product_category_name']; ?>">
								<div class="thumb">
									<a href="<?php echo $product['product_link']; ?>" title="<?php echo $product['product_title']; ?>">
										<img src="<?php echo $product['product_image_link']; ?>" ></a>
								</div>
								<div class="desc">
									<div class="title"><a href="<?php echo $product['product_link']; ?>"><?php echo $product['product_title']; ?></a></div>
									<div class="brief"><?php echo $product['product_desc']; ?></div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="roundedbox">
					<h1 class="poounder">Website and Ecommerce Design Prices</h1>
					<p><img width="175" height="139" align="right" src="<?php echo base_url(); ?>static/image/pricematch.png">We have developed over four thousand website's for clients from all sectors, industries and locations around the world. </p>
					<p>&nbsp;</p>
					<p>Here you will find a small selection of our web designs from standard brochure web sites to eCommerce solutions, online shops and bespoke web applications. </p><br /><br />
					
					<div class="f-16">Select a website specification from the tabs below for more information.</div>
					<div class="clear"></div>
				</div>
			
				<div class="roundedbox">
					<div id="pricescont">
						<ul id="pricestab">
							<li><a class="selected" rel="price1" href="#">1 Page</a></li>
							<li><a rel="price2" href="#" class="">2-4 Pages</a></li>
							<li><a rel="price3" href="#" class="">5-8 Pages</a></li>
							<li><a rel="price4" href="#" class="">9-12 Pages</a></li>
							<li><a rel="price5" href="#" class="">Premium Online Store</a></li>
							<li><a rel="price9" href="#" class="">eShopper</a></li>
							<li><a rel="price6" href="#" class="">Estate Agents / Property</a></li>
							<li><a rel="price7" href="#" class="">Blog</a></li>
							<li><a rel="price8" href="#" class="">Email Marketing</a></li>
						</ul>
						<div class="clear"></div>
					</div>
					
					<div id="priceinfo">
						<div class="tabcontent" id="price1">
							<h1><span class="blue">1 Page Website</span> £295</h1>
							<p>Our basic web design package. One page bespoke website design including  all our standard features at no extra cost.:</p>
							
							<ul>
								<li>Entirely bespoke web designs, no templates used</li>
								<li>Unlimited design concepts and revisions</li>
								<li>Spam protected contact / enquiry forms</li>
								<li>Integration with Facebook, Twitter and other social networking websites</li>
								<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>
								<li>Free selection of millions of professional photographs</li>
								<li>Expandable websites</li>              
							</ul>                          
							<ul>
								<li>Free hosting</li>
								<li>Free domain name</li>
								<li>Logo design</li>
								<li>On-site Search Engine Optimsation</li>
								<li>Expert technical support</li>
								<li>Free extensive content management</li>
								<li>Animation and user interaction</li>
								<li>Advanced JavaScript functionality</li>
								<li>Image galleries</li>
								<li>Embedded video support</li>
								<li>Audio player support</li>        
							</ul>                    				
							<div class="clear"></div>
						</div>
						<div class="tabcontent hide" id="price2">
							<h1><span class="blue">2-4 Page Website</span> £395</h1>
							<p>Our 2-4 page website's are ideal for start up businesses taking their first steps towards establishing an online identity. They $this->load->view( all our standard features at no extra cost.</p>
							
							<ul>
								<li>Entirely bespoke web designs, no templates used</li>
								<li>Unlimited design concepts and revisions</li>
								<li>Spam protected contact / enquiry forms</li>
								<li>Integration with Facebook, Twitter and other social networking websites</li>
								<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>
								<li>Free selection of millions of professional photographs</li>
								<li>Expandable websites</li>              
							</ul>
							<ul>
								<li>Free hosting</li>
								<li>Free domain name</li>
								<li>Logo design</li>
								<li>On-site Search Engine Optimsation</li>
								<li>Expert technical support</li>
								<li>Free extensive content management</li>
								<li>Animation and user interaction</li>
								<li>Advanced JavaScript functionality</li>
								<li>Image galleries</li>
								<li>Embedded video support</li>
								<li>Audio player support</li>        
							</ul>                    				
							<div class="clear"></div>
						</div>
						<div class="tabcontent hide" id="price3">
							<h1><span class="blue">5-8 Page Website</span> £525</h1>
							<p>The 5-8 page brochure package enables you to advertise your services in more depth and detail.  They $this->load->view( all our standard features at no extra cost.</p>
							<ul>
								<li>Entirely bespoke web designs, no templates used</li>
								<li>Unlimited design concepts and revisions</li>
								<li>Spam protected contact / enquiry forms</li>
								<li>Integration with Facebook, Twitter and other social networking websites</li>
								<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>
								<li>Free selection of millions of professional photographs</li>
								<li>Expandable websites</li>              
							</ul>                          
							<ul>
								<li>Free hosting</li>
								<li>Free domain name</li>
								<li>Logo design</li>
								<li>On-site Search Engine Optimsation</li>
								<li>Expert technical support</li>
								<li>Free extensive content management</li>
								<li>Animation and user interaction</li>
								<li>Advanced JavaScript functionality</li>
								<li>Image galleries</li>
								<li>Embedded video support</li>
								<li>Audio player support</li>        
							</ul>                    				
							<div class="clear"></div>  
						</div>
						<div class="tabcontent hide" id="price4">
							<h1><span class="blue">9-12 Page Website</span> £625</h1>
							<p>Expand your site to 9-12 pages and take the opportunity to maximise your online sales and enquiries. Ideal for well established companies looking to advertise their services online through a professional, eye catching website. Our 9-12 page website's $this->load->view( all our standard features at no extra cost.</p>
							<ul>
								<li>Entirely bespoke web designs, no templates used</li>
								<li>Unlimited design concepts and revisions</li>
								<li>Spam protected contact / enquiry forms</li>
								<li>Integration with Facebook, Twitter and other social networking websites</li>
								<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>
								<li>Free selection of millions of professional photographs</li>
								<li>Expandable websites</li>              
							</ul>                          
							<ul>
								<li>Free hosting</li>
								<li>Free domain name</li>
								<li>Logo design</li>
								<li>On-site Search Engine Optimsation</li>
								<li>Expert technical support</li>
								<li>Free extensive content management</li>
								<li>Animation and user interaction</li>
								<li>Advanced JavaScript functionality</li>
								<li>Image galleries</li>
								<li>Embedded video support</li>
								<li>Audio player support</li>        
							</ul>                    				
							<div class="clear"></div>  
						</div>
						<div class="tabcontent2 hide" id="price5">
							<h1><span class="blue">Premium Online Store</span> £975</h1>          
							<p>Start trading online from only £975 and enjoy a fully admin controlled, unlimited eCommerce package.</p>
							<p>&nbsp;</p>
							<h3 class="blueunder">Stock, Customer &amp; Order Management</h3>
							<ul>
								<li>Support for unlimited products.</li>
								<li>Support for unlimited categories and sub-categories.</li>
								<li>Ability to move, copy and mirror products across multiple locations.</li>
								<li>Best sellers, sales and special offer sections</li>
								<li>Brand management / categorisation</li>
								<li>Create product attributes such as size and colour with unique prices if required.</li>
								<li>Media gallery for all products supporting unlimited photographs and embedded videos</li>
								<li>Auto-resize product images including full screen popup and "zoom" function.</li>
								<li>Stock control offering various options for when stock levels reach zero (item can be purchased, item remains on site but cannot be purchased, item is temporarily disabled on the site).</li>
								<li>Low-stock alert system notifying you when stock of any product breaches a preset limit.</li>
								<li>Orders console allowing the management of orders received between numerous defined areas such as New, Dispatched and Archived.</li>
								<li>Export all customer data to CSV / Excel format</li>
								<li>Export all order data to CSV / Excel format</li>
								<li>Ability to manage customer reviews incorporating functionality to review, approve and decline submissions.</li>
							</ul>
							
							<h3 class="blueunder">Checkout / Postage Options</h3>
							<ul>
								<li>Support for shipping tariffs based on weight, price and quantity bands</li>
								<li>Free postage levels</li>
								<li>Support for postage options across defined zones such as UK, Europe and the rest of the world.</li>
								<li>Ability to define shipping types such as next day delivery, standard delivery, airsure etc...</li>
								<li>Option to checkout without creating account as well as logging in or creating a new account.</li>
								<li>Submit additional information on checkout</li>
								<li>"Gift wrapping" option for each product</li>
								<li>Integration with any payment gateway including but not limited to Sagepay, PayPal, Worldpay, Barclays, HSBC, PaymentSense, Secure Trading and many more.</li>
							</ul>
							
							<h3 class="blueunder">Product Search &amp; Filter</h3>
							<ul>
								<li>Find products by keyword, category, brand. </li>
								<li>Filter products by price, brand, colour, size etc...</li>
								<li>Sort results by price and number of results per page</li>
							</ul>
							
							<h3 class="blueunder">Product Display Features</h3>
							<ul>
								<li>Bespoke video / photo gallery including pop-ups and zoom functions.</li>
								<li>"Send to a friend" feature</li>
								<li>"Save for later" feature</li>
								<li>Related products / customers who bought X also bought Y.</li>
								<li>Customer reviews / rating system</li>
							</ul>
							
							<h3 class="blueunder">Customer Accounts</h3>
							<ul>
								<li>View saved products / wish list</li>
								<li>Previous order history</li>
								<li>Manage  delivery / shipping address book</li>
								<li>Update password / password reminder system</li>
							</ul>
							
							<h3 class="blueunder">Other Features</h3>
							<ul>
								<li>Discount code / coupon module. Create coupons of fixed or percentage values and apply them to your entire range or just certain product, categories and users. Set start and end dates, minimum sub-total order values and number of uses per customer.</li>
								<li>Banner management to display your adverts or those of affiliate / paid advertisers.</li>
								<li>HTML Newsletter system for sending updates and offers to registered users</li>
								<li>HTML, branded emails triggered on events such as orders being placed, password reminders, order status updates and account creation</li>
								<li>Invoice created for each order and emailed to customer</li>
								<li>Support for informational pages such as About us, FAQ, Terms and Conditions etc... Includes administration functionality to manage content whenever required.</li>
								<li>Generic product / site gallery</li>
								<li>Self generating product, category and page sitemap</li>
							</ul>
							
							<h3 class="blueunder">Optional Extras</h3>
							<ul>
								<li>Blog system seamlessly integrated into your bespoke design.</li>
								<li>Wholesale accounts offering unique pricing system and minimum quantity limits.</li>
							</ul>
							
							<p>&nbsp;</p>      
							<p>Alternatively please contact us or complete the form on the right hand side of this page.</p>
						</div>
						<div class="tabcontent2 hide" id="price9">
							<h1><span class="blue">eShopper</span> £699</h1>
							Our eShopper solution allows you to sell your products / virtual items via your website cost-effectively and easily through PayPal.  This solution is ideal for those customers with a small, fixed range of products.
							<p>&nbsp;</p>
							
							<h3 class="blueunder">Products / Features</h3>
							<ul>
								<li>Up to 10 products (more $this->load->view(d at additional cost)</li>
								<li>Allow customers to select from product variants such as size and colour</li>
								<li>Unlimited images and videos to support each product</li>
								<li>Unlimited supporting text and documents</li>
							</ul>
							
							<h3 class="blueunder">Checkout Process</h3>
							<ul>
								<li>Secure cart and checkout via PayPal</li>
								<li>Email notifications to you and the customer once payment is made</li>
								<li>Options for VAT and postage charges</li>
							</ul>
						</div>
						<div class="tabcontent hide" id="price6">
							<h1><span class="blue">Property Rentals &amp; Sales / Estate Agency</span> £1250</h1>
							<p>Our property listing developments are bursting with functionality, enabling your customers to easily locate and enquire about properties and you and your agents to manage properties from user friendly control panels. Our highly competitive prices start from £1250 and  $this->load->view( all our standard features along with additional functionality for the managing of properties and customer enquiries.</p>
							
							<ul>
								<li>Full property search / filtering system for your customers</li>
								<li>"Property Shortlist" feature for your visitors</li>
								<li>Support for unlimited properties to be added to the site</li>
								<li>Google Maps &amp; Street View integration</li>
								<li>Unlimited photo gallery for each property added</li>
								<li>Property downloads (floor plans etc...)</li>
								<li>On-page, spam protected enquiry forms for each property</li>
								<li>Entirely bespoke web designs, no templates used</li>
								<li>Unlimited design concepts and revisions</li>
								<li>Integration with Facebook, Twitter and other social networking websites</li>
								<li>Optional integration with property portals such as Rightmove and Primelocation</li>
								<li>Support for integration with property management software such as CFP and Gemini.</li>              
							</ul>                          
							<ul>
								<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>
								<li>Free selection of millions of professional photographs</li>
								<li>Expandable websites</li>
								<li>Free hosting</li>
								<li>Free domain name</li>
								<li>Logo design</li>
								<li>On-site Search Engine Optimsation</li>
								<li>Expert technical support</li>
								<li>Free extensive content management</li>
								<li>Animation and user interaction</li>
								<li>Advanced JavaScript functionality</li>
								<li>Image galleries</li>
								<li>Embedded video support</li>
								<li>Audio player support</li>        
							</ul>                    				
							<div class="clear"></div>  
						</div>
						<div class="tabcontent hide" id="price7">
							<h1><span class="blue">Blog</span> £395</h1>
							<p>Whether you already have a website and are seeking new way to engage your visitors, or are seeking a platform from which to tell the world about your products, services or opinions, our blogging system will arm you with all the tools you need.</p>
							
							<ul>
								<li>Create unlimited articles and organise by your own system of categories, tags and dates.</li>
								<li>Automated article archiving</li>
								<li>Reader commenting facility including  account system</li>
								<li>Article voting / polls</li>
								<li>Audio / Video Embedding</li>
								<li>Keyword search tools</li>
								<li>Unlimited pages</li>
								<li>RSS feeds<br />And much more...</li>
								<li>Entirely bespoke web designs, no templates used</li>
								<li>Unlimited design concepts and revisions</li>
								<li>Spam protected contact / enquiry forms</li>
								<li>Cross browser and device compatibility <em>(tested on PC, Mac, iPhone, iPad, Android, Internet Explorer, Safari, Firefox, Chrome, Opera and many others)</em></li>              
							</ul>                          
							<ul>
								<li>Integration with Facebook, Twitter and other social networking websites.</li>
								<li> Post automatically to Facebook and Twitter every time you create a new blog post</li>
								<li>Free hosting</li>
								<li>Free domain name</li>
								<li>Logo design</li>
								<li>On-site Search Engine Optimsation</li>
								<li>Expert technical support</li>
								<li>Free extensive content management</li>
								<li>Animation and user interaction</li>
								<li>Advanced JavaScript functionality</li>
								<li>Image galleries</li>
								<li>Free selection of millions of professional photographs</li>
								<li>Expandable websites</li>        
							</ul>                    				
							<div class="clear"></div>
						</div>
						<div class="tabcontent hide" id="price8">
							<h1><span class="blue">Email Marketing</span> <em>from </em>£0.03 p/recipient</h1>
							<p>Reach thousands of your customers instantly with our email marketing campaigns.</p>
							<p>&nbsp;</p>
							<p>Newsletter and email marketing campaigns are a proven way to reach new customers and stay in touch with existing ones, but can take hours or even days of your time in creating attractive newsletters and managing the campaigns. This is where we can help.</p>
							<p>&nbsp;</p>
							<p>We are able to create attractive and eye catching email newsletters and handle the sending to your client base, all you need are customer email addresses.</p>
							<p>&nbsp;</p>
							<p>Not only will we create the newsletter for your business and send it to your customer database, we will also supply feedback and reports including:</p>
							
							<ul class="full">
								<li>Who opened your email</li>
								<li>Who clicked what link, when and how many times</li>
								<li>Who subscribed / unsubscribed</li>
								<li>Who forwarded your email to a friend</li>
								<li>Bounce and spam rates</li>
								<li>And much more...</li>
							</ul>
							<div class="clear"></div>
							
							<p>In letting us handle your email campaign it takes the load away from your business allowing you to concentrate on other areas, and most importantly removes any risk of being blacklisted by spam lists - 
							leaving it to be professionally managed and maintained by our service. You can even select send HTML and simple text based emails within each campaign in allow greater exposure to customers using mobile 
							devices and other text based email clients.</p>
							<p>&nbsp;</p>
							<p>As a customer you will receive your own unique login from which you can chose to mange your campaigns entirely by yourself if you prefer. Some of the features $this->load->view(d are:</p>
							<ul class="full">
								<li>Start your own campaigns, use one of the templates we have created for you (or ask us to create you a new one), edit the content and send your newsletter.</li>
								<li>Define the campaign start date - set the newsletter to send whenever you like in the future.</li>
								<li>View extensive live reports and user feedback</li>
								<li>Update your customer email list manually and mass update it by uploading an excel / CSV file.</li>
								<li>Before you send your newsletter you have the option to preview it to selected email addresses and even view examples of how it will look in 15 different email clients such as Outlook, Outlook Express and Apple Mail.</li>
							</ul>
							<div class="clear"></div>
							
							<p>Prices are based around a tariff of £10 per campaign and 3p per recipient, allowing you to reach a customer base of 3000 for only £95.</p>
							<p>&nbsp;</p>
							<p>If you are interested in learning more about our email campaign service please contact us by email on info@pomdesign.com or by telephone on 0845 2577 187</p>
							<p>&nbsp;</p>
						</div>            
					</div>
					<div class="clear"></div>
					<div class="poounderpad"></div>
					
					<div id="extras">
						<div class="extras">
							<h3><span class="qgorange"><strong>We</strong></span> <strong><span class="qgblue">Love</span> <span class="qgpink">Social</span> <span class="qggreen">Media</span></strong><span class="qggreen"></span></h3>
							<p>We can fully integrate your social media accounts into your website, for no extra cost.</p>
							<img class="magtop" alt="Facebook, Twitter, Google and other social media integrated as stadndard" src="<?php echo base_url(); ?>static/upload/social-media.png">
						</div>
						<div class="extras">
							<h3><span class="orange">FREE</span> Google Adwords</h3>
							<img alt="Free Google AdWords vouchers with every web design" src="<?php echo base_url(); ?>static/upload/google-adwords-logo.gif">
							<p>We offer £50 of FREE Google Adwords vouchers with every sale.  </p>
						</div>
						<div class="extras">
							<h3>Integrated Blog</h3>
							<p>Add a fully integrated, custom designed blog to your website and keep your client up to date whilst boosting your SEO.</p>
							<h4>£150</h4> <em>(save £299)</em>
						</div>
						<div class="extras no-margin">
							<h3>Advanced Gallery</h3>
							<p>Present your images with impact and take  control via a custom built management system</p>
							<h4>£125</h4> <em>(save £125)</em>    
						</div>        
						<div class="clear"></div>

						<h1 class="poounder">Interested?</h1>
						If you would like to speak to one of our experts about your project please  <a href="get-a-quote.php">click here to request an online website quotation.</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php $this->load->view( 'website/common/footer.php'); ?>
	</div>
</div>
</body>
</html>