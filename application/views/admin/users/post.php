

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
                    <form action="<?php echo site_url(); ?>UsersClient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Nama" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="password" placeholder="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="addres" placeholder="addres" name="addres" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telephone" placeholder="telephone" name="telephone" required>
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


















