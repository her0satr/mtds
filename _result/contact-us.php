<?php include 'common/meta.php'; ?>
<body>
<div class="template">
	<?php include 'common/template_fix.php'; ?>
	
	<div class="fix-width">
		<?php include 'common/header.php'; ?>
		
		<div class="pom">
			<div class="pom-left">
				<?php include 'common/cnt_left.php'; ?>
			</div>
			
			<div class="pom-right">
				<div class="roundedbox">
					<div class="poounder">Contact Us</div>
					<p>To discuss your requiremaents with one of our website designers please feel free to call us on 0845 2577 187 orcomplete the form below and we'll call or email you straight back.</p>
				</div>
				
				<div class="roundedbox">
					<p>To discuss your requiremaents with one of our website designers please feel free to call us on 0845 2577 187 orcomplete the form below and we'll call or email you straight back.</p>
					<div style="margin: 10px 0 0 0;">
						<form id="moreinfo" action="sendscript/findoutmore.php" method="post" class="form-more">
							<label class="qlabell">Name:</label>
							<label class="qlabelr">Email address:</label>
							<div class="fr"><input type="text" class="findoutmorefield" name="email" /></div>
							<div class="fl"><input type="text" class="findoutmorefield" name="name" /></div>
							<div class="clear"></div>
							<label class="qlabell">Telephone number:</label>
							<label class="qlabelr">Current website address:</label>        
							<div class="fr"><input type="text" class="findoutmorefield" name="website" /></div>
							<div class="fl"><input type="text" class="findoutmorefield" name="telephone" /></div>
							<div class="clear"></div>
							<label class="qlabell">Nature of enquiry:</label>
							<label class="qlabelr">How did you hear about us?</label>        
							<div class="fr"><select class="findoutmorefield select"><option>--- Please Select ---</option></select></div>
							<div class="fl"><select class="findoutmorefield select"><option>--- Please Select ---</option></select></div>
							<div class="clear"></div>
							<label class="qlabell">Additional information:</label>
							<div class="clear"></div>
							<div class="row"><textarea class="textarea"></textarea></div>
							<div class="clear"></div>
							<div class="promocheck"><input type="checkbox" value="Yes" id="mailing" name="mailing"></div>
							<div class="promotext2">Keep me updated with promotions &amp; special offers from Pom Design</div>
							<div class="clear"></div>
							<div class="button2 fl"><input type="image" value="Submit" id="button" name="button" src="static/image/submit.png"></div>
							<div class="clear"></div>
						</form>                                  
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<?php include 'common/footer.php'; ?>
	</div>
</div>
</body>
</html>