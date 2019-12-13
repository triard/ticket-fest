<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <form action="<?php echo site_url(); ?>menuclient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kategori :</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Lain-lain">Lain - lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                                                               <div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <form action="<?php echo site_url(); ?>menuclient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kategori :</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Lain-lain">Lain - lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock" required>
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