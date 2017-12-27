<?php
/**
 * Plugin Name: Ascension Footer - Lead Capture
 * Plugin URI: https://www.rayfores.com/plugins/afoot-lc/
 * Description: Lead Capture that goes on top of the footer.
 * Version: 1.0
 * Author: Ray Flores
 * Author URI: https://www.rayflores.com
 */
add_action('wp_footer','add_icontact_css');
function add_icontact_css(){
	 ?>
	 <link rel="stylesheet" id="formcss"  href="<?php echo plugins_url('/css/formGlobalStyles.css',__FILE__); ?>" type='text/css' media='all' />
	 <?php
}
add_action('primer_after_header','add_promo_widget_frontpage_under_hero',8);
function add_promo_widget_frontpage_under_hero(){
	if ( is_front_page() ) { ?>
<div id="custom_html-2" class="widget_text lead-capture widget widget_custom_html afoot">
	<div class="textwidget custom-html-widget">
		<div class="pf_after_hero" style="padding-bottom:2%">
			<p>
				<strong>FREE Download:  "10 Predictors of Success as a Portrait Photographer"</strong>
				<br>
				<em>Score yourself on the 10 factors that predict your success ( and how to ensure success!)</em>
			</p>
			<div class="pf_after_hero_form">
				<script type="text/javascript" src="https://app.icontact.com/icp/static/form/javascripts/tracking.js"></script>


<form id="ic_signupform_2" method="POST" action="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/?id=106&amp;cid=195376&amp;lid=7346">
	<div class="elcontainer tight inline-label-right left-aligned">
		<div class="sortables">
			<div class="formEl fieldtype-input required" data-validation-type="1" data-label="Email Address" style="display: inline-block; width: 75%; float: left;">
				<input type="text" placeholder="Email Address" name="data[email]" >
			</div>
			<div class="formEl fieldtype-input" data-validation-type="1" data-label="First Name" style="display: inline-block; width: 37.5%; float: left;">
				<input type="text" placeholder="First Name" name="data[fname]" style="width: 100%;">
			</div>
			<div class="formEl fieldtype-input" data-validation-type="1" data-label="Last Name" style="display: inline-block; width: 37.5%; float: left;">
				<input type="text" placeholder="Last Name" name="data[lname]" style="width: 100%;">
			</div>

			<div class="formEl fieldtype-checkbox required" dataname="listGroups" data-validation-type="1" data-label="Lists" style="display: none; width: 100%;">
				<input type="hidden" alt="" name="data[listGroups][]" value="58432"/>
			</div>
			<div class="submit-container">
				<input type="submit" value="Get Access!" class="btn btn-submit" style="padding:18px;font-size:18px;">
			</div>
		</div>
		<div class="hidden-container"></div>
	</div>
</form>
<img alt="" src="https://app.icontact.com/icp/core/signup/tracking.gif?id=106&amp;cid=195376&amp;lid=7346">

		</div>
		
		

		</div>
	</div>
</div>
<?php	}
}
 add_action('primer_before_footer','do_lead_capture_footer');
 function do_lead_capture_footer(){
	 ?>
	 
	 <div id="pfsubscribe_foot" class="fl-sub-node-5a052ee5892ae fl-row-content fl-row-full-width fl-node-content" style="width:100%;padding-bottom:2%">
				<div class="fl-row-content-wrap" style="padding:20px 20px 0;">
					<div class="fl-row-content fl-row-fixed-width fl-node-content">
						<div class="fl-col-group fl-node-5a052ee5892ae">
							<div class="fl-col fl-col-small sub-left" style="width:40%;">
								<img class="promo-image alignleft size-full wp-image-847" alt="" src="/wp-content/uploads/2017/07/Screen-Shot-2017-07-14-at-3.16.21-PM-e1511304926432-150x150.png" srcset="/wp-content/uploads/2017/07/Screen-Shot-2017-07-14-at-3.16.21-PM-e1511304926432-150x150.png 150w, /wp-content/uploads/2017/07/Screen-Shot-2017-07-14-at-3.16.21-PM-e1511304926432-300x300.png 300w, /wp-content/uploads/2017/07/Screen-Shot-2017-07-14-at-3.16.21-PM-e1511304926432.png 461w" sizes="(max-width: 150px) 100vw, 150px">
								<p class="optin-copy">Get the behind-the-scenes strategies I use to launch products &amp; build successful online businesses.</p>

							</div>
							<div class="fl-col sub-right" style="width:60%;">
								<h2 class="small">Learn the secrets of the world's most successful Internet Marketers:</h2>
								<div class="contact-form">
								<script type="text/javascript" src="https://app.icontact.com/icp/static/form/javascripts/tracking.js"></script>
								<form id="ic_signupform_3" method="POST" action="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/?id=107&amp;cid=195376&amp;lid=7346" _lpchecked="1">
									<div class="elcontainer tight inline-label-right left-aligned">
										<div class="sortables">
											<div class="formEl fieldtype-input required" data-validation-type="1" data-label="Email Address" style="display: inline-block; width: 75%; float: left;margin-bottom: 1%;">
												<input type="text" placeholder="Email Address" name="data[email]" style="width: 100%;"></div>
											<div class="formEl fieldtype-input" data-validation-type="1" data-label="First Name" style="display: inline-block; width: 36.5%; float: left;margin-right:1%;">
												<input type="text" placeholder="First Name" name="data[fname]" style="width: 100%;"></div>
											<div class="formEl fieldtype-input" data-validation-type="1" data-label="Last Name" style="display: inline-block; width: 37.5%; float: left;">
												<input type="text" placeholder="Last Name" name="data[lname]" style="width: 100%;"></div>
											<div class="formEl fieldtype-checkbox required" dataname="listGroups" data-validation-type="1" data-label="Lists" style="display: none; width: 100%;">
												<input type="hidden" alt="" name="data[listGroups][]" value="58432" checked="checked">
											</div>
											<div class="submit-container">
												<input type="submit" value="Sign Up!" class="btn btn-submit" style="padding:18px;font-size:18px;">
											</div>
										</div>
										<div class="hidden-container"></div>
									</div>
								</form>
									
									
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
<?php 
}