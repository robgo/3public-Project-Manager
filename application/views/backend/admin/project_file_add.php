<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('upload_project_document'); ?>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open('admin/project_file/upload/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate project-file-add', 'enctype' => 'multipart/form-data')); ?>

                <div class="form-group">
                    <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('short_description'); ?></label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="description" id="title" value="" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('select_file'); ?></label>

                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-primary btn-file">
                                <span class="fileinput-new"><?php echo get_phrase('choose'); ?></span>
                                <span class="fileinput-exists"><?php echo get_phrase('change'); ?></span>
                                <input type="file" name="userfile" id="userfile">
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-6">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            <?php echo get_phrase('upload_file'); ?></button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div class="progress progress-striped active" id="progress_bar_holder" style="visibility:hidden;">
    <div class="progress-bar progress-bar-info" id="progress_bar" style="width:0%; ">
    </div>
</div>
<script>
    $(document).ready(function () {

        var options = {
            beforeSubmit: validate_project_file_add,
            uploadProgress: show_upload_progress,
            success: show_response_project_file_add,
            resetForm: true
        };
        $('.project-file-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_file_add(formData, jqForm, options) {

        if (!jqForm[0].userfile.value)
        {
            toastr.error("Please select a file", "Error");
            return false;
        }
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
        $('#progress_bar_holder').css("visibility", "visible");
    }

    function show_upload_progress(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        $('#progress_bar').css("width", percentVal);
        //$('#percent').html(percentVal);
    }

    function show_response_project_file_add(responseText, statusText, xhr, $form) {

        // calling project monitor reload function
        reload_project_monitor_body_after_project_task_add('<?php echo base_url(); ?>index.php?admin/reload_project_monitor_body/<?php echo $param2; ?>');

                $('#preloader-form').html('');
                toastr.success("Project file uploaded successfully", "Success");
                $('#modal_ajax').modal('hide');
                document.getElementById("submit-button").disabled = false;

            }

            //reload the project page data after successfull update
            function reload_project_monitor_body_after_project_task_add(url)
            {
                $.ajax({
                    url: url,
                    success: function (response)
                    {
                        jQuery('.main_data').html(response);
                    }
                });
            }
</script>