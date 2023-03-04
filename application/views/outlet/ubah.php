<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                    <div class="card-tools">
                        <a href="<?php echo base_url('outlet') ?>" class="btn btn-" style="background-color: #aa858c;"><i class="fa fa-arrow-left" style="color: #d1ccb6;">Kembali</i></a>
                    </div>
                </div>
                <div class="card-body">

                <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">ID outlet</label>
                                    <input type="number" name="id_outlet" id="id_outlet" class="form-control" style="background-color: #d2cda3;" placeholder="ID outlet" required="" value="<?php echo $outlet['id_outlet'] ?>" readonly>
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Nama </label>
                                    <input type="text" name="nama" id="nama" class="form-control" style="background-color: #d2cda3;" placeholder="Nama" required="" value="<?php echo $outlet['nama'] ?>">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" style="background-color: #d2cda3;" placeholder="Alamat" required="" value="<?php echo $outlet['alamat'] ?>">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Tlp</label>
                                    <input type="text" name="tlp" id="tlp" class="form-control" style="background-color: #d2cda3;" placeholder="Tlp" required="" value="<?php echo $outlet['tlp'] ?>">
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
       