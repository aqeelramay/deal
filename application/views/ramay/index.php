<?php include("backend/include/header.php"); ?>
<?php include("backend/include/sidebar.php"); ?>
<div class="dashboard-cont">
    <h3>Welcome to Admin Panel, <?=ucwords($this->session->userdata('admin_username'))?></h3>
</div>
<?php include("backend/include/footer.php"); ?>