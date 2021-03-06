
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:30px;"></th>
			<th><div><?php echo get_phrase('name');?></div></th>
      <th><div><?php echo get_phrase('condition');?></div></th>
			<th><div><?php echo get_phrase('address');?></div></th>
			<th><div><?php echo get_phrase('email');?></div></th>
			<th><div><?php echo get_phrase('skype');?></div></th>
			<th><div><?php echo get_phrase('phone');?></div></th>
			<th><div><?php echo get_phrase('company');?></div></th>
			<th><div><?php echo get_phrase('website');?></div></th>
			<th><div><?php echo get_phrase('contact');?></div></th>
      <th><div><?php echo get_phrase('added_by');?></div></th>
      <th><div><?php echo get_phrase('date_added');?></div></th>
			<th><div><?php echo get_phrase('options');?></div></th>
		</tr>
	</thead>
	<tbody>
		<?php 
    $counter  = 1;
		$this->db->order_by('lead_id' , 'desc');
		$leads	=	$this->db->get('lead' )->result_array();
		foreach($leads as $row):
		?>
		<tr>
			<td style="width:30px;">
              <?php echo $counter++;?>
      </td>
			<td><?php echo $row['name'];?></td>
      <td><span class="<?php echo strtolower( $row['lead_condition'] ); ?>"><?php echo $row['lead_condition'];?></span></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['skype_id'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['company'];?></td>
			<td><?php echo $row['website'];?></td>
			<td>
           	<?php if ($row['skype_id'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('call_skype');?>"	
                  href="skype:<?php echo $row['skype_id'];?>?chat" style="color:#bbb;">
                          <i class="entypo-skype"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['email'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('send_email');?>"	
                  href="mailto:<?php echo $row['email'];?>" style="color:#bbb;">
                          <i class="entypo-mail"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['phone'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('call_phone');?>"	
                  href="tel:<?php echo $row['phone'];?>" style="color:#bbb;">
                          <i class="entypo-phone"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['facebook_profile_link'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('facebook_profile');?>"	
                  href="<?php echo $row['facebook_profile_link'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-facebook"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['twitter_profile_link'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('twitter_profile');?>"	
                  href="<?php echo $row['twitter_profile_link'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-twitter"></i>
                 </a>
             <?php endif;?>
             <?php if ($row['linkedin_profile_link'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('linkedin_profile');?>"	
                  href="<?php echo $row['linkedin_profile_link'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-linkedin"></i>
                </a>
             <?php endif;?>
             <?php if ($row['website'] != ''):?>
              <a class="tooltip-primary" data-toggle="tooltip" data-placement="top" 
                  data-original-title="<?php echo get_phrase('website');?>"	
                  href="<?php echo $row['website'];?>" style="color:#bbb;" target="_blank">
                          <i class="entypo-network"></i>
                </a>
             <?php endif;?>
      </td>
      <td><?php echo $row['added_by']; ?></td>
      <td><?php echo date( 'm/d/Y', $row['date_added'] ); ?></td>
      <td>
        	<div class="btn-group">
              <button type="button" class="btn btn-default btn-sm dropdown-toggle " data-toggle="dropdown">
                  Action <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                  <!-- PROFILE LINK -->
                  <li>
                      <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/lead_profile/<?php echo $row['lead_id'];?>');">
                          <i class="entypo-user"></i>
                              <?php echo get_phrase('profile');?>
                          </a>
                                  </li>

                  <!-- APPROVE LINK -->
                  <li>
                      <a href="<?php echo base_url();?>index.php?staff/lead/approve/<?php echo $row['lead_id']?>"
                          onClick="return confirm('Confirm this lead account creation? A notification mail will be sent')">
                          <i class="entypo-check"></i>
                          <?php echo get_phrase('convert'); ?>
                      </a>
                  </li>
                  
                  <!-- EDITING LINK -->
                  <li>
                      <a onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/lead_edit/<?php echo $row['lead_id'];?>');">
                          <i class="entypo-pencil"></i>
                              <?php echo get_phrase('edit');?>
                          </a>
                                  </li>

                  <li class="divider"></li>
                  
                  <!-- DELETION LINK -->
                  <li>
                      <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?staff/lead/delete/<?php echo $row['lead_id'];?>' , '<?php echo base_url();?>index.php?staff/reload_lead_list');" >
                          <i class="entypo-trash"></i>
                              <?php echo get_phrase('delete');?>
                          </a>
                                  </li>
              </ul>
          </div>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>




<script src="assets/js/neon-custom-ajax.js"></script>
<script type="text/javascript">


	
	jQuery(document).ready(function($)
	{
		//convert all checkboxes before converting datatable
		replaceCheckboxes();
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"aoColumns": [
				{ "bSortable": false}, 	//0,checkbox
				{ "bVisible": true},		//1,name
        { "bVisible": true},    //2,lead condition
				{ "bVisible": true},		//3,address
				{ "bVisible": false},		//4,email
				{ "bVisible": false},		//5,skype
				{ "bVisible": false},		//6,phone
				{ "bVisible": false},		//7,company
				{ "bVisible": false},		//8,website
				{ "bVisible": true},		//9,contact
        { "bVisible": true},    //10,added by
        { "bVisible": true},    //11,added by
				{ "bVisible": true}		//12,option
			],
			
		});
		// Highlighted rows
		$("#table_export tbody input[type=checkbox]").each(function(i, el)
		{
			var $this = $(el),
				$p = $this.closest('tr');
			
			$(el).on('change', function()
			{
				var is_checked = $this.is(':checked');
				
				$p[is_checked ? 'addClass' : 'removeClass']('highlight');
			});
		});
		
		//customize the select menu 
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
		
	});
	


		
</script>
