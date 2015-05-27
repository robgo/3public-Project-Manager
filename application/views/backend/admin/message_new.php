
<div class="mail-header" style="padding-bottom: 27px ;">
	<!-- title -->
	<h3 class="mail-title">
		<?php echo get_phrase('write_new_message');?>
	</h3>
</div>

<div class="mail-compose">
		
			<?php echo form_open('admin/message/send_new/' , array('class' => 'form', 'enctype' => 'multipart/form-data'));?>
				
				
				<div class="form-group">
					<label for="subject"><?php echo get_phrase('recipient');?>:</label>
					<br><br>
					<select class="form-control select2" name="reciever">

						<option value=""><?php echo get_phrase('select_a_user');?></option>
						<optgroup label="<?php echo get_phrase('staff');?>">
							<?php 
							$staffs	=	$this->db->get('staff')->result_array();
							foreach ($staffs as $row):
								?>

								<option value="staff-<?php echo $row['staff_id'];?>">
									- <?php echo $row['name'];?></option>

							<?php endforeach;?>
						</optgroup>
						<optgroup label="<?php echo get_phrase('client');?>">
							<?php 
							$clients	=	$this->db->get('client')->result_array();
							foreach ($clients as $row):
								?>

								<option value="client-<?php echo $row['client_id'];?>">
									- <?php echo $row['name'];?></option>

							<?php endforeach;?>
						</optgroup>
					</select>
				</div>
				
				
				<div class="compose-message-editor">
					<textarea row="5" class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="message" 
						placeholder="<?php echo get_phrase('write_your_message');?>" id="sample_wysiwyg"></textarea>
				</div>
				
				<hr>

				<button type="submit" class="btn btn-success btn-icon pull-right">
					<?php echo get_phrase('send');?>
					<i class="entypo-mail"></i>

				</button>
			</form>
		
		</div>