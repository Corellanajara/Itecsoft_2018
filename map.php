
<!DOCTYPE html>
<html>
<head>
	
	<title>Mapa</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
<script>
	new Maplace({
    locations: Circles,
    map_div: '#gmap-circles',
    start: 4,
    view_all_text: 'Points of interest',
    type: 'circle',
    shared: {
        zoom: 16,
        html: '%index'
    },
    circleRadiusChanged: function(index, point, marker) {
        $('#radiusInfo').text(
            ' - point #' + (index+1) + ' size: ' + parseInt(marker.getRadius()) + 'mt.'
        );
    }
	}).Load();
</script>
<div id='map'></div>
<div id="gmap-circles"></div>


</body>
</html>
	