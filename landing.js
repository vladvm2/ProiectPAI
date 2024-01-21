function initMap() {
  // Initialize the map
  var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 6
  });

  // Define locations as an array of objects
  var locations = [
      {lat: 44.9333, lng: 26.0300, title: 'Ploiesti'},
      {lat: 46.2197, lng: 24.7964, title: 'Sighisoara'},
      {lat: 45.7983, lng: 24.1256, title: 'Sibiu'},
      {lat: 44.4268, lng: 26.1025, title: 'Bucuresti'},
      {lat: 45.8667, lng: 25.7833, title: 'Sfantul Gheorghe'}
  ];

  // Create markers for each location
  locations.forEach(function(location) {
      new google.maps.Marker({
          position: location,
          map: map,
          title: location.title
      });
  });

  // Get the user's current location
  if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
          var userLocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
          };
          map.setCenter(userLocation);
          new google.maps.Marker({
              position: userLocation,
              map: map,
              title: "You are here"
          });
      }, function() {
          alert("Error: The Geolocation service failed.");
      });
  } else {
      alert("Error: Your browser doesn't support Geolocation.");
  }
}
