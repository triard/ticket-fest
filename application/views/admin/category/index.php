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
    <div class="row mt-5">
        <div class="col">
            <div class="card">
             <div class="container-fluid">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Categoory</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_category; ?></td>
                                    <td><?php echo $rows->name; ?></td>
                                    <td><?php echo $rows->desc; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>CategoryClient/put/<?php echo $rows->id_category; ?>">Update</a>
                                        <a href="<?php echo site_url(); ?>CategoryClient/delete/<?php echo $rows->id_category; ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo site_url(); ?>CategoryClient/post">Tambah</a>
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


















