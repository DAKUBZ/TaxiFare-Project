// Mapbox Public Access Key
mapboxgl.accessToken = 'pk.eyJ1IjoibmhsYW11bG8iLCJhIjoiY2w0NDYycXUxMDBiMjNjbzJkYThjcGI1ZiJ9.TauQtVd-W7neoAz_1kbLeA';
//https://docs.mapbox.com/help/tutorials/getting-started-directions-api/
// `https://api.mapbox.com/directions/v5/mapbox/cycling/${start[0]},${start[1]};${end[0]},${end[1]}?steps=true&geometries=geojson&access_token=${mapboxgl.accessToken}`,


//Defauly centered coordinates
var coords = [121.037, 14.332] 
// Initializing Map
var map = new mapboxgl.Map({
    // Map Cotainer ID
    container: 'map',
    // Mapbox Style URL
    style: 'mapbox://styles/nhlamulo/cl45o33gf000z16mnz38i21f5',
    zoom: 12.56, // Default Zoom
    center: coords// Default centered coordinate
});



// Search Places
var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    marker: true,
});
// Direction Form
var directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken,
	   
    })
	
    // Adding Search Places on Map
map.addControl(geocoder, 'top-left');


// Adding navigation control on Map
map.addControl(new mapboxgl.NavigationControl(), 'bottom-right');
// Map Loaded 
map.on('load', function() {

       //because of this line of code, it took me the whole day to display the points i needed guy
		directions.on('route', function(e) {
		console.log(e.route); // Logs the current route shown in the interface.
		var dist = e.route[0].distance;
		var dist_killo = dist/1000;
		
		var origin =  e.route[0].legs[0].steps[0].maneuver.location[0];
		var origins = origin.toFixed(0)
		 console.log(origin);
		
		//calculate price per killometer if 1km = 0.75 cents
		const price = 1.79;
		var  totprice = price*dist_killo ;
		
	
		
		
		
		sendAjaxRequest(totprice);  // pass by value function
			//console.log(dist);
				console.log(dist_killo.toFixed(2));
					console.log(totprice.toFixed(0));
			
		$('#modal').modal('show');
	     $("#distance").text('Distance covered is'+ dist_killo.toFixed(0) + 'km');
		 $("#price").text('Each passenger has to pay R'+totprice.toFixed(0));
		   
            var cash = $("#cash").val(totprice.toFixed(0));
		    localStorage.setItem("textvalue", cash);
			
			
			
		  
		});

    // Search Places Result Event
    geocoder.on('result', function(event) {
		
        console.log(event.result);
		/*var place = event.result.place_name;

		console.log(place);
*/
        new Promise(function(resolve) {
            
            // Removing Previous Search Result Marker
            $('.marker').remove()
            resolve()
        }).then(() => {
            // Adding Marker to the place
        var marker = new mapboxgl.Marker($('<div class="marker"><i class="fa fa-map-marker-alt"></i></div>')[0])
                .setLngLat(event.result.geometry.coordinates)
                .setPopup(
                    new mapboxgl.Popup({ offset: 25 }) // add popups
                    .setHTML(
                        `<div>${event.result.place_name}</div><small class='text-muted'>${parseFloat(event.result.center[0]).toLocaleString('en-US')}, ${parseFloat(event.result.center[1]).toLocaleString('en-US')}</small>`
                    )
                )
                .addTo(map);
			
				// Store the marker's longitude and latitude coordinates in a variable
              const lngLat = marker.getLngLat();
             // Print the marker's longitude and latitude values in the console
              console.log(`Longitude: ${lngLat.lng}, Latitude: ${lngLat.lat}`);
			  const element = marker.getElement();
			  console.log(element); 
        }).then(() => {
            $('.marker').click()
        })

    });
   geocoder.container.setAttribute('id', 'geocoder-search')
});


// Map Render Event Listener
map.on('render', () => {
    // Do Something here    
  
	
     
});

function direction_reset() {
    directions.actions.clearOrigin()
    directions.actions.clearDestination()
   directions.container.querySelector('input').value = ''
	
}
$(function() {
    $('#get-direction').click(function() {
        // Adding Direction form and instructions on map
        map.addControl(directions, 'top-left');
        directions.container.setAttribute('id', 'direction-container')		
        $(geocoder.container).hide() //hide search control input
		
		$('#modal').append()
		
        $(this).hide()
        $('#end-direction').removeClass('d-none') //
        $('.marker').remove()

    })
	
    $('#end-direction').click(function() {
        
		//After click event has been triggered for end direction button
   		direction_reset() //reset everything
        $(this).addClass('d-none')
        $('#get-direction').show()  //show button direction
		
        $(geocoder.container).show() // show search input
         map.removeControl(directions)
		 window.location.href = 'pay.php';
    })
	
	//show modal form
	
	

})



       // send ajax request to save results in the database
        function sendAjaxRequest(totprice) {
            $.ajax({
                url: 'savetransaction.php',
                type: 'POST',
                data: {
                    totprice  
                },
                success: function (response) {
                   console.info(response);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }


