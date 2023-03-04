<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline" >
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                    <div class="card-tools">
                        <a href="<?php echo base_url('paket/tambah') ?>" class="btn btn-" Style="background-color: #aa858c;"><i class="fa fa-plus" style="color: #d1ccb6;"> Tambah Data</i></a>
                    </div>
                </div>
                <div class="card-body" style="background-color: #d1ccb6;">

                <div class="row">
                        <div class="col-md-12">

                        <?php if ($message = $this->session->flashdata('message')): ?>

                            <div class="alert alert-" style="background-color: #aa858c;">
                                <strong style="color: #d1ccb6;">Berhasil</strong>
                                <p style="color: #d1ccb6;"><?php echo $message ?></p>
                            </div>
                            <?php endif ?>
                            <table class="table table-bordered table-striped" style="background-color: #aa858c;">
                                <thead>
                                    <th style="color: #d1ccb6;">No</th>
                                    <th style="color: #d1ccb6;">Nama</th>
                                    <th style="color: #d1ccb6;">Outlet</th>
                                    <th style="color: #d1ccb6;">Harga</th>
                                    <th style="color: #d1ccb6;">Aksi</th>
                                </thead>
                                <tbody>
                                    <?php $index =1; foreach ($paket as $row): ?>
                                    <tr>
                                        <td style="color: #d1ccb6;"><?php echo $index++ ?></td>
                                        <td style="color: #d1ccb6;"><?php echo $row['nama_paket'] ?></td>
                                        <td style="color: #d1ccb6;"><?php echo $row['nama'] ?></td>
                                        <td style="color: #d1ccb6;"><?php echo "Rp. " . number_format($row['harga']) ?></td>
                                        <td style="color: #d1ccb6;">
                                            <a class="btn btn-" href="<?php echo base_url('paket/ubah/')  .  $row['id_paket'] ?>"><i class="fa fa-edit" style="background-color: #aa858c; color: #d1ccb6;"></i></a>
                                            <a class="btn btn-" onclick="return confirm('Apakah Anda Yakin?')" href="<?php echo base_url('paket/hapus/')   .  $row['id_paket']?>"><i class="fa fa-trash" style="background-color: #aa858c; color: #d1ccb6;"></i></a>
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
       