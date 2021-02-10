<div class="modal fade" id="addproduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Tambahkan Produk Baru</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="addproductproses.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Nama Produk:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="namaproduk" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Kategori:</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="kategori">
                                    <?php
                                        $sql="SELECT * FROM kategori ORDER BY id_kategori ASC";
                                        $query=$connection->query($sql);
                                        while($row=$query->fetch_array()){
                                            ?>
                                            <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Harga:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Deskripsi:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="desc" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Photo:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="foto">
                            </div>
                        </div>
                    </div>
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                <button type="submit" class="btn btn-primary"><span class="fa fa-floppy-o"></span> Save</button>
                </form>
            </div>
        </div>

    </div>

</div>
