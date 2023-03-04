<div class="row">
          <div class="col-lg-12">
            <div class="card card- card-outline">
              <div class="card-header" style="background-color: #d1ccb6;">
                <h5 class="card-title" style="color: #aa858c;"><?=  $judul ?></h5>
              </div>
            <div class="card-body" style="background-color: #d1ccb6;">
             <div class="row" >
               <div class="col-md-12">
                <form action="<?= base_url('laporan/pdf') ?>" method="get">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="color: #aa858c;" >
                         <label for="dari">Dari</label>
                         <input type="date" name="dari" id="dari" class="form-control"style="background-color: #d2cda3;">
                        </div>
                        <div class="form-group" style="color: #aa858c;" >
                         <label for="sampai">Sampai</label>
                         <input type="date" name="sampai" id="sampai" class="form-control" style="background-color: #d2cda3;">
                        </div>
                       <div class="form-group" style="color: #aa858c;" >
                         <label for="id_paket">Paket</label>
                         <select name="id_paket" id="id_paket" class="form-control" style="background-color: #d2cda3;">
                           <option value="">Semua Paket</option>
                           <?php foreach ($paket as $row) :?>
                           <option value="<?= $row['id_paket'] ?>"><?= $row['nama_paket'] ?></option>
                           <?php endforeach ?>
                         </select>
                       </div>
                       <div class="form-group" style="color: #aa858c;" >
                         <label for="id_outlet">Outlet</label>
                         <select name="id_outlet" id="id_outlet" class="form-control" style="background-color: #d2cda3;" >
                           <option value="">Semua Outlet</option>
                           <?php foreach ($outlet as $row) :?>
                           <option  value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
                           <?php endforeach ?>
                         </select>
                       </div>
                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-block btn-" style="background-color: #aa858c; color: #d1ccb6;">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              <hr>
              <table class="table table-bordered table-striped" style="background-color: #aa858c;">
                <thead>
                  <tr>
                    <th style="color: #d1ccb6;">No</th>
                    <th style="color: #d1ccb6;">Tanggal</th>
                    <th style="color: #d1ccb6;">Nama Pelanggan</th>
                    <th style="color: #d1ccb6;">Nama Paket</th>
                    <th style="color: #d1ccb6;">Outlet</th>
                    <th style="color: #d1ccb6;">Harga</th>
                    <th style="color: #d1ccb6;">Terjual</th>
                    <th style="color: #d1ccb6;">Pendapatan</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php $index=1; foreach ($laporan as $row): ?>
                      <tr>
                        <td style="color: #d1ccb6;"><?= $index++ ?></td>
                        <td style="color: #d1ccb6;"><?= $row['tgl'] ?></td>
                        <td style="color: #d1ccb6;"><?= $row['nama'] ?></td>
                        <td style="color: #d1ccb6;"><?= $row['nama_paket'] ?></td>
                        <td style="color: #d1ccb6;"><?= $row['nama_outlet'] ?></td>
                        <td style="color: #d1ccb6;"><?= "Rp." . number_format($row['harga']) ?></td>
                        <td style="color: #d1ccb6;"><?= $row['terjual'] ?></td>
                        <td style="color: #d1ccb6;"><?= "Rp." . number_format($row['pendapatan']) ?></td>
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
  </div>
</div>
</div>