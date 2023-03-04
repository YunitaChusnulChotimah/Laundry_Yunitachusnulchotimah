<div class="row MT-4">
          <div class="col-lg-12">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" >
                    <h5 class="card-title" style="color: #aa858c;"><?php echo $judul ?></h5>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group" style="color: #aa858c;">
                                    <label for="">Kode Invoice</label>
                                        <input type="text" name="kode_invoice" id="kode_invoive" class="form-control" style="background-color: #d2cda3;" value="<?php echo kode_invoice() ?>" readonly> 
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Tanggal</label>
                                        <input type="datetime-local" name="tgl" id="tgl" class="form-control" style="background-color: #d2cda3;"> 
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Batas Waktu</label>
                                        <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control" style="background-color: #d2cda3;"> 
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Tanggal Bayar</label>
                                        <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control" style="background-color: #d2cda3;"> 
                                </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group" style="color: #aa858c;">
                                    <label for="">Status</label>
                                    <select name="status" id="status" class="form-control" style="background-color: #d2cda3;">
                                        <option value="baru">baru</option>
                                        <option value="proses">proses</option>
                                        <option value="selesai">selesai</option>
                                        <option value="diambil">diambil</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" style="color: #aa858c;">
                                        <label for="">Member</label>
                                    <select name="member" id="member" class="form-control member" style="background-color: #d2cda3;">
                                        <?php foreach($member as $row): ?>
                                            <option value="<?php echo $row['id_member'] ?>"><?php echo $row['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group" style="color: #aa858c;">
                                    <label for="">Dibayar</label>
                                    <select name="dibayar" id="dibayar" class="form-control" style="background-color: #d2cda3;">
                                        <option value="dibayar">dibayar</option>
                                        <option value="belum_dibayar">belum_dibayar</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            
                            </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <select name="paket" id="paket" class="form-control paket" style="background-color: #d2cda3;">
                                    <?php foreach($paket as $row): ?>
                                        <option value="<?php echo $row['id_paket'] ?>"><?php echo $row['nama_paket'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control qty" style="background-color: #d2cda3;" name="qty" placeholder="Qty" >
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn- btn-block btn-tambah-det" style="background-color: #aa858c; color: #d1ccb6;"><i class="fa fa-plus">Tambah</i></button>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #aa858c; color: #d1ccb6;">Paket</th>
                                            <th style="background-color: #aa858c; color: #d1ccb6;">Harga</th>
                                            <th style="background-color: #aa858c; color: #d1ccb6;">Qty</th>
                                            <th style="background-color: #aa858c; color: #d1ccb6;">Total Harga</th>
                                            <th style="background-color: #aa858c; color: #d1ccb6;">Keterangan</th>
                                            <th style="background-color: #aa858c; color: #d1ccb6;">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody class="det-transaksi">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <table class="table">
                                    <tr>
                                        <th style="color: #aa858c;">Biaya Tambahan</th>
                                        <td><input autocomplete="off" type="text" class="form-control biaya_tambahan" style="background-color: #d2cda3;" name="biaya_tambahan" placeholder="Biaya Tambahan"></td>
                                    </tr>
                                    <tr>
                                        <th style="color: #aa858c;">Pajak</th>
                                        <td><input autocomplete="off" type="text" class="form-control pajak" style="background-color: #d2cda3;" name="pajak" placeholder="Pajak"></td>
                                    </tr>
                                    <tr>
                                        <th style="color: #aa858c;">Diskon (%)</th>
                                        <td><input autocomplete="off" type="text" class="form-control diskon" style="background-color: #d2cda3;" name="diskon" placeholder="Diskon"></td>
                                    </tr>
                                    <tr>
                                        <th style="color: #aa858c;">Total Bayar</th>
                                        <td><input autocomplete="off" type="text" class="form-control total_bayar" style="background-color: #d2cda3;" name="total_bayar" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <th style="color: #aa858c;">Cash</th>
                                        <td><input autocomplete="off" type="text" class="form-control cash" style="background-color: #d2cda3;" name="cash" placeholder="Cash"></td>
                                    </tr>
                                    <tr>
                                        <th style="color: #aa858c;">Kembalian</th>
                                        <td><input autocomplete="off" type="text" class="form-control kembalian" style="background-color: #d2cda3;" name="kembalian" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-block btn-" style="background-color: #aa858c; color: #d1ccb6;">SUBMIT</button>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        </div>
                    </form> 
                </div>
             </div>
       
       <script>
        const base_url = '<?= base_url() ?>'
       </script>