

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

        <!-- /.container-fluid -->
        <div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <form action="<?php echo site_url(); ?>TransactionClient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="id_ticket" placeholder="id_ticket" name="id_ticket" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="qty" placeholder="qty" name="qty" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="date" placeholder="date" name="date" value="<?php echo date("Y-m-d");?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


		<!-- Sticky Footer -->


	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>


















