  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Detail Info Vendor
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
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4"><?php echo $vendor_name; ?>
        <small> Code : <?php echo $vendor_code; ?></small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJjBdqRE6dOJ2Pm2VNXkptMI230-R7_qs&callback=initMap">
    </script>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Vendor Description</h3>
          <p><?php echo $description; ?></p>
          <h3 class="my-3">Vendor Details</h3>
          <ul>
            <li>Phone : <?php echo $phone; ?></li>
            <li>Email : <?php echo $email; ?></li>
            <li>Price : <?php echo $price; ?></li>
            <li>Address : <?php echo $address; ?></li>
          </ul>
            <p>Click the button to get your coordinates.</p>

            <button onclick="getLocation()">Try It</button>

            <p id="demo"></p>

            <script>
            var x = document.getElementById("demo");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else { 
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                x.innerHTML = "Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude;
            }
            </script>
        </div>

      </div>
      <!-- /.row -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
