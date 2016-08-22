$(document).ready(function(){
	$.ajax({
		url:'chartdata',
		method:'GET',
		// contentType : "application/json",
		dataType: 'json',

		success:function(data)
		{
			console.log(data);
			console.log(data[0].employeename);
			var name=[];
			var count=[];

			for(var i=0; i<data.length; i++)
			{
				name.push(data[i].employeename);
				count.push(data[i].work_count);
			}

			var chartdata=
			{
				labels:name,
				datasets:[
					{
						label:'Count',
						fillColor : "#94646D",
						strokeColor : "#A37079",
						pointColor : "#BC808B",
						showTooltips: true,
						responsive: false,
						data:count
					}
				]
			};
			var ctx=document.getElementById('mycanvas').getContext("2d");
			new Chart(ctx).Line(chartdata);

			console.log(chartdata);
		},
		error:function(data)
		{

			console.log(data);
		}
	});

});