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
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
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
                                <th>tiket</th>
                                <th>qty</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transaction as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_trans; ?></td>
                                    <td><?php echo $rows->id_ticket; ?></td>
                                    <td><?php echo $rows->qty; ?></td>
                                    <td><?php echo $rows->date; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>TransactionClient/delete/<?php echo $rows->id_trans; ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo site_url(); ?>TransactionClient/post">Tambah</a>
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


















