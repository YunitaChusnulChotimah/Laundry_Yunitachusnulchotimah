<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                    <div class="card-tools">
                        <a href="<?php echo base_url('paket') ?>" class="btn btn-" style="background-color: #aa858c;"><i class="fa fa-arrow-left" style="color: #d1ccb6;">Kembali</i></a>
                    </div>
                </div>
                <div class="card-body">

                <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="<?php base_url('paket/ubah') ?>">
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">ID Paket</label>
                                    <input type="number" name="id_paket" id="id_paket" class="form-control" style="background-color: #d2cda3;" placeholder="ID Paket" required="" value="<?php echo id('tb_paket', 'id_paket') ?>" readonly>
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Outlet</label>
                                    <select name="id_outlet" id="id_outlet" class="form-control" style="background-color: #d2cda3;" required="">
                                        <option value="">Pilih Outlet</option>
                                    <?php foreach ($outlet as $row): ?>
                                        <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                                    <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Nama Paket</label>
                                    <input type="text" name="nama_paket" id="nama_paket" class="form-control" style="background-color: #d2cda3;" placeholder="Nama Paket" required="">
                                </div>
                               
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Harga</label>
                                    <input type="number" name="harga" id="harga" class="form-control" style="background-color: #d2cda3;" placeholder="Harga" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-" style="background-color: #aa858c; color: #d1ccb6;">Submit</button>

                                </div>
                            </form>
                        </div>
                </div>

              </div>
            </div>
        </div>
    </div>
       