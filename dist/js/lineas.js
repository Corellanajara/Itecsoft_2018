$(document).ready(function() {

	//get canvas
	var ctx = $("#line-chartcanvas");

	$.ajax({
		url : "http://localhost/Itecsoft_2018/activos.php",
		type : "GET",
		success : function(data){
			console.log(data.length);

			var sensor = {
				Humedad : [],
				Presion : [],
				Temperatura : []
			};

			var len = data.length;
			var dias=0;
			console.log(data);
			for (var i = 0; i < len; i++) {
				if (data[i].nombre == "temperatura") {
					sensor.Temperatura.push(data[i].magnitud);
					console.log(sensor.Temperatura);

				}
				else if (data[i].nombre == "presion") {
					sensor.Presion.push(data[i].magnitud);

				}
				else if(data[i].nombre == "humedad"){
					sensor.Humedad.push(data[i].magnitud);
					dias=dias+1;
				}

			}
			console.log("sensor",sensor);

			var fechas = [];
			for (var i =1; i <= dias; i++) {
					var txt = " Dia ";
					fechas.push(txt.concat(i));
			}


			var data = {
				labels : fechas,
				datasets : [

					{
						label : "Humedad",
						data : sensor.Humedad,
						backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Presion",
						data : sensor.Presion,
						backgroundColor : "green",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Temperatura",
						data : sensor.Temperatura,
						backgroundColor : "red",
						borderColor : "red",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
				]
			};

	var options = {
		title : {
			display : true,
			position : "top",
			text : "Parametros respecto al tiempo",
			fontSize : 18,
			fontColor : "#111"
		},
		legend : {
			display : true,
			position : "bottom"
		}
	};

	var chart = new Chart( ctx, {
		type : "line",
		data : data,
		options : options
	} );
}
});
});
