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
                                <th>Name</th>
                                <th>Category</th>
                                <th>qty</th>
                                <th>Price</th>
                                <th>Images</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ticket as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_ticket; ?></td>
                                    <td><?php echo $rows->fest_name; ?></td>
                                    <td><?php echo $rows->category; ?></td>
                                    <td><?php echo $rows->qty; ?></td>
                                    <td><?php echo $rows->price; ?></td>
                                    <td>
                                            <img src="<?php echo base_url('./upload/product/' . $rows->images) ?>" width="64" />
                                    </td>
                                    <td><?php echo $rows->date; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>TicketClient/put/<?php echo $rows->id_ticket; ?>">Update</a>
                                        <a href="<?php echo site_url(); ?>TicketClient/delete/<?php echo $rows->id_ticket; ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo site_url(); ?>TicketClient/post">Tambah</a>
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


















