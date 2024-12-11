function getUserLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        // You can use a geocoding service to get the address from latitude and longitude
        // and then set the value of the location input field
        document.getElementById("location").value = "Your current location"; // Replace with actual address
        document.getElementById("location").disabled = false;
      });
    } else {
      alert("Geolocation is not supported by this browser.");
    }
  }
  
  // Call the function to get the user's location when the page loads
  window.onload = getUserLocation;