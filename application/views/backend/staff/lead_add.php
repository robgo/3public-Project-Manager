<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('account_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open('staff/lead/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                         </div>
						</div>
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('email');?></label>
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-mail"></i></span>
								<input type="text" class="form-control" name="email" value="">
                         </div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('address');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-location"></i></span>
								<input type="text" class="form-control" name="address" value="" >
                         </div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-phone"></i></span>
								<input type="text" class="form-control" name="phone" value=""  >
							</div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('company');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-suitcase"></i></span>
								<input type="text" class="form-control" name="company" value="" >
                         </div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('website');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-network"></i></span>
								<input type="text" class="form-control" name="website" value="" >
                         </div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('skype_id');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-skype"></i></span>
								<input type="text" class="form-control" name="skype_id" value="" >
                         </div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('facebook_profile_link');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-facebook-squared"></i></span>
								<input type="text" class="form-control" name="facebook_profile_link" value="" >
                         </div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('linkedin_profile_link');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-linkedin"></i></span>
								<input type="text" class="form-control" name="linkedin_profile_link" value="" >
                         </div>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('twitter_profile_link');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-twitter"></i></span>
								<input type="text" class="form-control" name="twitter_profile_link" value="" >
                         </div>
						</div> 
					</div>
										
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('short_note');?></label>
                        
						<div class="col-sm-7">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-pencil"></i></span>
								<textarea class="form-control autogrow" name="short_note" style="height:48px;"></textarea>
                         </div>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo get_phrase('lead_condition');?></label>
                        
						<div class="col-sm-7">
							<input type="hidden" name="lead_condition" class="lead_condition" value="Cold">
							<div class="dropdown">
								<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									<span class="btn_text">Cold</span>
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cold</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Warm</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hot</a></li>
								</ul>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									$('.dropdown-menu li a').click(function(){
										var $text = $(this).text();
										
										switch( $text ){
											case 'Warm':
												$button = 'btn-warning';
												$new_text = 'Warm';
											break;

											case 'Hot':
												$button = 'btn-danger';
												$new_text = 'Hot';
											break;

											default:
												$button = 'btn-info';
												$new_text = 'Cold';
											break;
										}

										$('#dropdownMenu1').removeClass( 'btn-info btn-warning btn-danger' ).addClass($button);
										$('#dropdownMenu1 .btn_text').text( $new_text );
										$('.lead_condition').val($new_text);

									});
								});
							</script>
						</div> 
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_lead');?></button>
                         <span id="preloader-form"></span>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?staff/reload_lead_list';
	var post_message		=	'Data Created Successfully';
</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-submission.js"></script>