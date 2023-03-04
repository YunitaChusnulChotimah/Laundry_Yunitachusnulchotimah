<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                    <div class="card-tools">
                        <a href="<?php echo base_url('user') ?>" class="btn btn-" style="background-color: #aa858c;"><i class="fa fa-arrow-left" style="color: #d1ccb6;">Kembali</i></a>
                    </div>
                </div>
                <div class="card-body">

                <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">ID user</label>
                                    <input type="number" name="id_user" id="id_user" class="form-control" style="background-color: #d2cda3;" placeholder="ID user" required="" value="<?php echo id('tb_user', 'id_user') ?>" readonly>
                                </div>
                                <div class="form-group" style="color: #aa858c;">        
                                    <label for="">ID Outlet</label>
                                    <select name="id_outlet" id="id_outlet" class="form-control" style="background-color: #d2cda3;" required="">
                                        <option value="">Pilih Outlet</option>
                                        <?php foreach ($outlet as $row): ?>
                                            <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" style="background-color: #d2cda3;" placeholder="Nama" required="">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" style="background-color: #d2cda3;" placeholder="Username" required="">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" style="background-color: #d2cda3;" placeholder="Password" required="">
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Role</label>
                                    <select name="role" id="role" class="form-control" style="background-color: #d2cda3;">
                                        <option value="admin">Admin</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="owner">Owner</option>
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
       