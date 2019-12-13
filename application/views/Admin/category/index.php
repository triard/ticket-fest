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
                                <th>ID Menu</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_menu; ?></td>
                                    <td><?php echo $rows->nama; ?></td>
                                    <td><?php echo $rows->kategori; ?></td>
                                    <td><?php echo $rows->deskripsi; ?></td>
                                    <td><?php echo $rows->harga; ?></td>
                                    <td><?php echo $rows->stock; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>menuclient/put/<?php echo $rows->id_menu; ?>">Update</a>
                                        <a href="<?php echo site_url(); ?>menuclient/delete/<?php echo $rows->id_menu; ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo site_url(); ?>menuclient/post">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>