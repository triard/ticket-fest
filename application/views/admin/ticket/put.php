
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
                    <form action="<?php echo site_url(); ?>TicketClient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($ticket as $rows) : ?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="id_ticket" placeholder="ID ticket" value="<?php echo $rows->id_ticket; ?>" name="id_ticket" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="fest_name" placeholder="name" value="<?php echo $rows->fest_name; ?>" name="fest_name" required>
                            </div>
                            <div class="form-item">
                                                <label for="category">Category</label>
                                                <select id="category" name="category" class="form-input" required>
                                                    <option selected>value="<?php echo $rows->category; ?>"</option>
                                                        <option value="Rock">Rock</option>
                                                        <option value="Jazz">Jazz</option>
                                                        <option value="Folk">Folk</option>
                                                        <option value="Pop">Pop</option>
                                                </select>
                         </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="qty" placeholder="quantity" value="<?php echo $rows->qty; ?>" name="qty" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="price" placeholder="price" value="<?php echo $rows->price; ?>" name="price" required>
                            </div>
                            <div class="form-group">
                            <input type="file" class="form-control" id="images" placeholder="images" name="images" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="date" placeholder="date" name="date" required>
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
