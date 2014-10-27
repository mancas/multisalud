<script type="text/javascript">
    function initialize() {
      var latLng = new google.maps.LatLng(37.544509, -6.057317);
      var mapOptions = {
        center: latLng,
        zoom: 16,
        scrollwheel: false
      };
      var map = new google.maps.Map(document.getElementById("map"),
          mapOptions);

      var marker = new google.maps.Marker({
          position: latLng,
          map: map
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>