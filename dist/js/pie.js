
$(document).ready(function() {

	//get canvas
	var ctx = $("#pie-chartcanvas");

	$.ajax({
		url : "http://188.166.93.45/Itecsoft_2018/activos.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var sensor = {
				Humedad : [],
				Presion : [],
				Temperatura : []
			};

			var len = data.length;
			var dias=0;

			for (var i = 0; i < len; i++) {
				if (data[i].Id == "1") {
					sensor.Temperatura.push(data[i].Magnitud);

				}
				else if (data[i].Id == "2") {
					sensor.Presion.push(data[i].Magnitud);

				}
				else if(data[i].Id == "3"){
					sensor.Humedad.push(data[i].Magnitud);
					dias=dias+1;
				}

			}
			var fechas = [];
			for (var i =1; i <= dias; i++) {
					var txt = " Sector ";
					fechas.push(txt.concat(i));
			}



			var data = {
				labels : fechas,
				datasets : [

					{
						label : "Sector 1",
						data : sensor.Humedad,
						backgroundColor : ["red","blue","green","yellow","lightblue"
						],
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
			text : "Consumo del agua",
			fontSize : 18,
			fontColor : "#111"
		},
		legend : {
			display : true,
			position : "bottom"
		}
	};

	var chart = new Chart( ctx, {
		type : "bar",
		data : data,
		options : options
	} );
}
});
});
