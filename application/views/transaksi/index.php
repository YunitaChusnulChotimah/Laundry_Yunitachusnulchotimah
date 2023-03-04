<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                </div>
                <div class="card-body">

                <div class="row">
                        <div class="col-md-12">

                        <?php if ($message = $this->session->flashdata('message')): ?>

                            <div class="alert alert-" style="background-color: #aa858c;">
                                <strong style="color: #d1ccb6;">Berhasil</strong>
                                <p style="color: #d1ccb6;"><?php echo $message ?></p>
                            </div>
                            <?php endif ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th style="color: #aa858c;">No</th>
                                    <th style="color: #aa858c;">Tgl</th>
                                    <th style="color: #aa858c;">Invoice</th>
                                    <th style="color: #aa858c;">Outlet</th>
                                    <th style="color: #aa858c;">Member</th>
                                    <th style="color: #aa858c;">User</th>
                                    <th style="color: #aa858c;">Batas Waktu</th>
                                    <th style="color: #aa858c;">Tgl Bayar</th>
                                    <th style="color: #aa858c;">Status</th>
                                    <th style="color: #aa858c;">Status Bayar</th>
                                    <th style="color: #aa858c;">Total</th>
                                    <th style="color: #aa858c;">Aksi</th>
                                </thead>
                                <tbody>
                                    <?php $index =1; foreach ($transaksi as $row): ?>
                                    <tr>
                                        <td style="color: #aa858c;"><?php echo $index++ ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['tgl'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['kode_invoice'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['nama_outlet'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['nama_member'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['nama_user'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['batas_waktu'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['tgl_bayar'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['status'] ?></td>
                                        <td style="color: #aa858c;"><?php echo $row['dibayar'] ?></td>
                                        <td style="color: #aa858c;"><?php echo "Rp." . number_format($row['total_bayar']) ?></td>
                                        <td style="color: #aa858c;" class="d-flex">
                                            <a class="btn btn-" href="<?php echo base_url('transaksi/ubah/')  .  $row['id_transaksi'] ?>"><i class="fa fa-edit" style="color: #aa858c;"></i></a>
                                            <a class="btn btn-" onclick="return confirm('Apakah Anda Yakin?')" href="<?php echo base_url('transaksi/hapus/')   .  $row['id_transaksi']?>"><i class="fa fa-trash" style="color: #aa858c;"></i></a>
                                            <a class="btn btn-" href="<?php echo base_url('transaksi/cetak/')   .  $row['kode_invoice']?>"><i class="fa fa-print" style="color: #aa858c;"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                </div>

              </div>
            </div>
        </div>
    </div>
       