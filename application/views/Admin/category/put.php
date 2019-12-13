<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>menuclient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($menu as $rows) : ?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="id_menu" placeholder="ID Menu" value="<?php echo $rows->id_menu; ?>" name="id_menu" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $rows->nama; ?>" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Kategori :</label>
                                <input type="text" class="form-control" id="selected" value="<?php echo $rows->kategori; ?>">
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Lain-lain">Lain - lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" value="<?php echo $rows->deskripsi; ?>" name="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="harga" placeholder="Har<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>menuclient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($menu as $rows) : ?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="id_menu" placeholder="ID Menu" value="<?php echo $rows->id_menu; ?>" name="id_menu" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $rows->nama; ?>" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Kategori :</label>
                                <input type="text" class="form-control" id="selected" value="<?php echo $rows->kategori; ?>">
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Lain-lain">Lain - lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" value="<?php echo $rows->deskripsi; ?>" name="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="harga" placeholder="Harga" value="<?php echo $rows->harga; ?>" name="harga" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="stock" placeholder="Stock" value="<?php echo $rows->stock; ?>" name="stock" required>
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
    </div>
</div>