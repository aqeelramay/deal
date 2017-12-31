<?php include("backend/include/header.php"); ?>
<?php include("backend/include/sidebar.php"); ?>
<div class="dashboard-cont">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h3 class="text-center">Change Admin Password</h3>
                <div class="change-password-cont">
                    <?php echo form_open('ramay/dashboard/changepassword'); ?>
                        <?php if(validation_errors()) { ?>
                            <div class="alert alert-danger alert-dismissable"><?php echo validation_errors(); ?></div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="change-password">Change Password</label>
                            <input type="password" name="password" class="form-control" id="change-password" placeholder="">
                        </div>
                        <input type="hidden" name="update_admin" value="">
                        <button type="submit" name="login" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-primary" onClick="location.href='<?php echo base_url() . 'ramay/dashboard/member'; ?>'">Cancel</button>  
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("backend/include/footer.php"); ?>