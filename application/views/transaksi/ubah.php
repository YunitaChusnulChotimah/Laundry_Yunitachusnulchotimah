<div class="row MT-4">
          <div class="col-lg-6">
            <div class="card card- card-outline" style="background-color: #d1ccb6;">
                <div class="card-header" style="background-color: #d1ccb6;">
                    <h5 class="card-title"><?php echo $judul ?></h5>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                    <label for="">Kode Invoice</label>
                                        <input type="text" name="kode_invoice" id="kode_invoice" class="form-control" style="background-color: #d2cda3;" value="<?= $transaksi['kode_invoice'] ?>" readonly> 
                            </div>    
                            </div>
                        <div class="col-md-12">
                        <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="status" class="form-control" style="background-color: #d2cda3;">
                                        <option <?php echo $transaksi['status'] == 'baru' ? 'selected' : ''?> value="baru">baru</option>
                                        <option <?php echo $transaksi['status'] == 'proses' ? 'selected' : ''?> value="proses">proses</option>
                                        <option <?php echo $transaksi['status'] == 'selesai' ? 'selected' : ''?> value="selesai">selesai</option>
                                        <option <?php echo $transaksi['status'] == 'diambil' ? 'selected' : ''?> value="diambil">diambil</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                    <label for="">Dibayar</label>
                                    <select name="dibayar" id="dibayar" class="form-control" style="background-color: #d2cda3;">
                                        <option value="dibayar">Dibayar</option>
                                        <option value="belum_dibayar">Belum dibayar</option>
                                    </select>
                        </div>
                        <div class="form-group">
                                    <label for="">Cash</label>
                                    <input autocomplete="off" type="text" class="form-control total_bayar" style="background-color: #d2cda3;" name="total_bayar" readonly="" value="<?= $transaksi['total_bayar'] ?>" >
                        </div>
                        <div class="form-group">
                                    <label for="">Total</label>
                                    <input autocomplete="off" type="text" class="form-control cash" style="background-color: #d2cda3;" name="cash" placeholder="Cash">
                        </div>
                        <div class="form-group">
                                    <label for="">Kembalian</label>
                                    <input autocomplete="off" type="text" class="form-control kembalian" style="background-color: #d2cda3;" name="kembalian" readonly="">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn- btn-block" style="background-color: #aa858c; color: #d1ccb6;">SUBMIT</button>
                            </div>
                        </div>
                    </form> 
                </div>
                </div>
                </div>
             </div>
       
       <script>
        const base_url = '<?= base_url() ?>'
       </script>