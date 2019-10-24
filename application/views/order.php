<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">List Order</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Order</th>
                                    <th>Kode Jadwal</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Nama Pemesan</th>
                                    <th>Tanggal Beli</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($order as $row) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['kd_order']; ?></td>
                                        <td><?php echo $row['kd_jadwal']; ?></td>
                                        <td><?php echo hari_indo(date('N', strtotime($row['tgl_berangkat_order']))) . ', ' . tanggal_indo(date('Y-m-d', strtotime('' . $row['tgl_berangkat_order'] . ''))); ?></td>
                                        <td><?php echo $row['nama_order']; ?></td>
                                        <td><?php echo $row['tgl_beli_order']; ?></td>
                                        <?php $sqlcek = $this->db->query("SELECT * FROM tbl_order WHERE kd_order LIKE '" . $row['kd_order'] . "'")->result_array(); ?>
                                        <td><?php echo count($sqlcek); ?></td>
                                        <?php if ($row['status_order'] == '1') { ?>
                                            <td class="btn-danger"> Belum Bayar</td>
                                        <?php } elseif ($row['status_order'] == '2') { ?>
                                            <td class="btn-success"> Sudah Bayar</td>
                                        <?php } ?>
                                        <td><a href="<?php echo base_url('backend/order/vieworder/' . $row['kd_order']) ?>" class="btn btn btn-primary">View</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </section>
</div>