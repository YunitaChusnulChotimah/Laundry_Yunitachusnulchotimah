<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                    <div class="card-tools">
                        <a href="<?php echo base_url('member') ?>" class="btn btn-" style="background-color: #aa858c;"><i class="fa fa-arrow-left" style="color: #d1ccb6;">Kembali</i></a>
                    </div>
                </div>
                <div class="card-body">

                <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">ID member</label>
                                    <input type="number" name="id_member" id="id_member" class="form-control" style="background-color: #d2cda3;" placeholder="ID member" required=""value="<?php echo id('tb_member', 'id_member') ?>" readonly>
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" style="background-color: #d2cda3;" placeholder="Nama" required="">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" style="background-color: #d2cda3;" placeholder="Alamat" required="">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Tlp</label>
                                    <input type="text" name="tlp" id="tlp" class="form-control" style="background-color: #d2cda3;" placeholder="Tlp" required="">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Jenis_kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" style="background-color: #d2cda3;">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
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
       