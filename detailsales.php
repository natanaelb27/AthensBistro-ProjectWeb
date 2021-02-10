<div class="modal fade" id="detailsales<?php echo $row['id_pembelian']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Detail Penjualan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5>Nama Pembeli: <b><?php echo $row['nama_pelanggan']; ?></b>
                        <span class="pull-right">
                            <?php echo date('M d, Y h:i A', strtotime($row['tanggal_pembelian'])) ?>
                        </span>
                    </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
                            <?php
                                $sql="SELECT * FROM detail_pembelian JOIN produk on produk.id_produk=detail_pembelian.id_produk WHERE id_pembelian='".$row['id_pembelian']."'";
                                $dquery=$connection->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $drow['nama_produk']; ?></td>
                                        <td><?php echo "Rp. "; echo number_format($drow['harga']); ?></td>
                                        <td><?php echo $drow['quantity']; ?></td>
                                        <td><?php echo "Rp. ";?>
                                            <?php
                                                $sub = $drow['harga']*$drow['quantity'];
                                                echo number_format($sub);
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    
                                }
                            ?>
                            <tr>
                                <td colspan="3" class="text-right"><b>TOTAL</b></td>
                                <td><?php echo "Rp. "; echo number_format($row['total_harga']); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
