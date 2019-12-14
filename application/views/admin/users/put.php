
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
                    <form action="<?php echo site_url(); ?>UsersClient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($users as $rows) : ?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="id_user" placeholder="ID Menu" value="<?php echo $rows->id_user; ?>" name="id_user" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="name" value="<?php echo $rows->name; ?>" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="Nama category" value="<?php echo $rows->username; ?>" name="username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="password" placeholder="desc" value="<?php echo $rows->password; ?>" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="desc" value="<?php echo $rows->email; ?>" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="addres" placeholder="desc" value="<?php echo $rows->addres; ?>" name="addres" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="telephone" placeholder="desc" value="<?php echo $rows->telephone; ?>" name="telephone" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <script>
                                function setSelectBoxByText(eid, etxt) {
                                    var eid = document.getElementById(eid);
                                    for (var i = 0; i < eid.options.length; ++i) {
                                        if (eid.options[i].text === etxt)
                                            eid.options[i].selected = true;
                                    }
                                }
                                var eid = "kategori";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>		<!-- Sticky Footer -->


	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
