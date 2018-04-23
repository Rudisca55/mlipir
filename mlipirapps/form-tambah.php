
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input Data Wisata
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
              
            <div class="form-group">
              <label class="col-sm-2 control-label">Vendor Code</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="vendor_code" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Vendor Name</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="vendor_name" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="phone" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="email" autocomplete="off" required>
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label">Price</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="price" autocomplete="off" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Address</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="address" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Longitude</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="longitude" autocomplete="off" required>
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label">Latitude</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="latitude" autocomplete="off" required>
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="description" rows="3" required></textarea>
              </div>
            </div>
              

            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->