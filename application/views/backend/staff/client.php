<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/client_add/');" 
    class="btn btn-primary pull-right">
        <i class="entypo-user-add"></i>
        <?php echo get_phrase('add_new_client');?>
    </a>
     
<br>
<br>
<br>

<div class="main_data">
	<?php include 'client_list.php';?>
</div>