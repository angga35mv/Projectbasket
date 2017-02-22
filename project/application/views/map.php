<center>
    <div  class="container marketing">
      <!-- START THE FEATURETTES -->

      <div class="row">
      <TABLE width="650px" height="200px">
		<td >
        <div class="col-lg-10">
			<h2 class="featurette-heading">
			 <legend>
				<p> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  LOKASI</p>
			</legend>	
			</h2>
			<p class="lead">Alamat UKM Basket STMIK Kharsima </p>
			Jl. Teuku Umar Raya, Buloa, Tallo, Kota Makassar, Sulawesi Selatan<br/>
			<br/> <br/> <br/>
			<p class="lead">Peta</p>
			
			<!-- Map -->
			<div id="map" style="width:100%;height:500px"></div>
			<script>
				function myMap() {
					var myLatLng = {lat: -5.112071, lng: 119.438463}; <!-- Edit Lokasi -->
					var mapCanvas = document.getElementById("map");
					var mapOptions = {
						center: myLatLng,  
						mapTypeId: google.maps.MapTypeId.SATELLITE,
						zoom: 18
					}
					var map = new google.maps.Map(mapCanvas, mapOptions);
					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						title: 'Tempat Latihan'
					});
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxBJC7P9E2rL1EhJ3UwWvas35HSYsGLOs&callback=myMap"></script> <!-- Edit API KEY -->		
			<!-- Map -->
			
		</div>
		</td>
	</TABLE>
      </div>

