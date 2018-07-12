<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Street View side-by-side</title>
    <style>
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
      #pano {
        float: left;
        height: 100%;
        width: 80%;
		margin-left:10%;
		margin-bottom:20%;
      }
    </style>
  </head>
  <body>
    <div id="pano"></div>
    <?php
	$Address=$_POST['address'];	
	$data_arr = geocode($Address);
	$latitude = $data_arr[0];
    $longitude = $data_arr[1];
    $formatted_address = $data_arr[2];
	
	?>
    <script>

      function initialize() {
        var fenway = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude ; ?>};
 
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
              position: fenway,
              pov: {
                heading: 34,
                pitch: 10
              }
            });
        map.setStreetView(panorama);
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwU1EI0YWqDWORXwaONP2ITM4JGYiiwAY&callback=initialize">
    </script>
    <?php
	function geocode($address){
 
    // url encode the address
    $address = urlencode($address);
     
    // google map geocode api url
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";
 
    // get the json response
    $resp_json = file_get_contents($url);
     
    // decode the json
    $resp = json_decode($resp_json, true);
 
    // response status will be 'OK', if able to geocode given address 
    if($resp['status']=='OK'){
 
        // get the important data
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];
         
        // verify if data is complete
        if($lati && $longi && $formatted_address){
         
            // put the data in the array
            $data_arr = array();            
             
            array_push(
                $data_arr, 
                    $lati, 
                    $longi, 
                    $formatted_address
                );
             
            return $data_arr;
             
        }else{
            return false;
        }
         
    }else{
        return false;
    }
}
	?>
    
  </body>
</html>