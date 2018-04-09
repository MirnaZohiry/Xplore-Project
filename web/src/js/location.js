      var map;
      var infowindow;
      var placeSearch, autocomplete, geocoder,latitude,longitude;
     
      
      function initialize(){
        initAutocomplete();
      }

      function initAutocomplete() {
        geocoder = new google.maps.Geocoder();
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')));
        autocomplete.addListener('place_changed', fillInAddress);
      }
      
      function codeAddress(address) {
      geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
          latitude = results[0].geometry.location.lat();
          longitude = results[0].geometry.location.lng();
         initMap();
        // alert(latitude);
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
      function fillInAddress() {
      var place = autocomplete.getPlace();
      //alert(place.place_id);
      codeAddress(document.getElementById('autocomplete').value);
}
      

      function initMap() {
        var user_location = {lat:latitude, lng: longitude};
        map = new google.maps.Map(document.getElementById('map'), {
          center: user_location,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        var e=document.getElementById("activitySelect");
        var selectedActivity= e.options[e.selectedIndex].text;
        console.log(selectedActivity);
        service.nearbySearch({
          location: user_location,
          radius: 5000,
          type: [selectedActivity]
        }, callback);
      }

      function getDetails(_ref, id) {
        var service = new google.maps.places.PlacesService(document.getElementById('map'));
          service.getDetails({
            placeId: id
          }, function (place, status) {
            console.log('Place details:', place);
           if (place) {
            var uri = place.photos[0].getUrl({ 'maxWidth': 300, 'maxHeight': 300 });
          $("#" + id).css('background-image', 'url(' + uri + ')');
           }
          });
        // var uri = "https://maps.googleapis.com/maps/api/place/details/json?reference=" + _ref + "&key=AIzaSyBK35lBiyCDm5oNdJrpOuXcLKeNz0FPpdc";

        // $.ajax({
        //   url: uri,
        //   data: {},
        //   dataType: 'json',
        //   type: 'GET',
        //   success: function(data) {
        //     if (data) {
        //       console.info(data);

        //       var photos = data.results.photos[0].photo_reference;
        //       var imgUrl = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=" + photos + "&key=AIzaSyBK35lBiyCDm5oNdJrpOuXcLKeNz0FPpdc";
        //       $("#" + id).css('background-image', 'url(' + imgUrl + ')');
        //     }
        //   }
        // });
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
         // for (var i = 0; i < results.length; i++) {

            // console.log(results[i].name);
            // alert(results[i].name);
            // alert(results[i].opening_hours.open_now);
            var list = "";

            if (results.length > 0) {
              console.info(results);
              results.forEach(function(_item) {
                var reference = _item.reference;
                getDetails(reference, _item.place_id);
                // var item = "<li>";
                // item += "<p>" + (_item.name ? _item.name : "Not Available") + "</p>";
                // item += "<span>" + (_item.opening_hours ? _item.opening_hours.open_now : "N/A") + "</span>"
                // item += "</li>";

                

                var item = '<div class="wrapper justify-content-center" style="text-align: left; font-size: 12px;" >';
                  item += '<div class="box sidebar" id="' + _item.place_id + '"></div>';
                  item += '<div class="box content fonting">';
                    item += '<h class="hd" style="font-size: 18px;">' + (_item.name ? _item.name : "Not Available") + '</h>';
                    item += '<p>' + (_item.vicinity ? _item.vicinity : "Not Available") + '</p>';
                    item += '<ul class="uldesign">';
                      item += '<li type="square">Open Now: ' +  (_item.opening_hours ? _item.opening_hours.open_now : "N/A") + '</li>';
                      item += '<li type="square">Rating: ' + (_item.rating ? _item.rating : "Not Available") + '</li>';
                    item += '</ul>';
                  item += '</div>';
                item += '</div>';
                item += '<hr width="50%">';

                list += item;
              });

              $("#listing-results").html(list);
            }         
            
          //}
        }
      }
    