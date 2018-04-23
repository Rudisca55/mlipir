  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah Info Vendor
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $vendor_id   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM t_vendor WHERE vendor_id='$vendor_id'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $vendor_id     = $data['vendor_id']; // Auto Increment
          $vendor_code   = $data['vendor_code'];
          $vendor_name   = $data['vendor_name'];

          $phone         = $data['phone'];
          $email         = $data['email'];
          $price         = $data['price'];
          $address       = $data['address'];
          $longitude     = $data['longitude'];
          $latitude      = $data['latitude'];
          $description   = $data['description'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Vendor Code</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="vendor_code" value="<?php echo $vendor_code; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Vendor Name</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="vendor_name" autocomplete="off" value="<?php echo $vendor_name; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="phone" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $phone; ?>" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="email" autocomplete="off" value="<?php echo $email; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Price</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="price" autocomplete="off" value="<?php echo $price; ?>" required>
              </div>
            </div>  
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Address</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="address" rows="3" required><?php echo $address; ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Longitude</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="longitude" autocomplete="off" value="<?php echo $longitude; ?>" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Latitude</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="latitude" autocomplete="off" value="<?php echo $latitude; ?>" required>
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="description" rows="3" required><?php echo $description; ?></textarea>
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
