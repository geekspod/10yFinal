<!DOCTYPE html>
   <head>
  <title>User Value</title>



    <!--Load the AJAX API-->

    <!--Load the AJAX API-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->


<figure class="highcharts-figure">
    <div id="container"></div>
     <h6 align="justify" class="highcharts-description">
        ? Person is easy-going, non-competitive, do not have urge to go ahead, and set easily reached goals. ? person prefer stable work, dislike to take initiatives/start new activities ? Values order, structure, predictability and has difficult to new and sudden situations. ? Has low level of energy and less effective in pressured situation ? Prefer to work alone and avoid leadership positions. ? Inability to cope with different activities at once. ? Not interested in marketing, negotiating and influencing people. ? Individual feel awkward and lack confidence in social situations.
    </h6>
    <?php echo "<br>";?>
     <div id="container2"></div>
      <h6 align="justify" class="highcharts-description">
       ? Low scores indicate that person easily give up difficult tasks, distract easily and prefer straightforward tasks. ? Person is rarely focus on minor details, dislikes detailed work, and appear as sloppy and careless. ? Individual ignore rules and instructions. ? Person leaves things unfinished and do not meet deadlines. ? Do not make and enjoy long-term plans.
    </h6>
    <?php echo "<br>";?>

       <div id="container3"></div>

         <h6 align="justify" class="highcharts-description">
       ? High scores indicate individual?s tendency to be cooperative with others, display a good-natured attitude, and encourage people to work together. ? Person is sensitive and understanding to the needs and feelings of others ? Person preferences for interacting with others and establishing personal connections with people ? Person has preference for making decisions through consultation, collaboration, and working with close supervision.
    </h6>
    <?php echo "<br>";?>

         <div id="container4"></div>

          <h6 align="justify" class="highcharts-description">
       ? High scores indicate the extent to which an individual maintains his/her composure, keep emotions in check, and control their anger. ? Individual?s tendency to be accepting of criticism and to deal calmly and effectively with high stress situations.
    </h6>
    <?php echo "<br>";?>

           <div id="container5"></div>
             <h6 align="justify" class="highcharts-description">
       ? High scores indicate person?s degree of creativity and open-mindedness when addressing. ? Person tendency to carefully analyses information and use logic to address issues and problems
    </h6>
    <?php echo "<br>";?>

    <p class="highcharts-description">

    </p>
</figure>

<script>



var jsonData = $.ajax({

        url: "login/get_demo_chart_data/",
          dataType: "json",
           type:'GET',
           data:data,
       async: false ,
    cache: false,
    success: function(data) {
        //alert(data);
    }

          });


var data = jsonData.responseJSON;
//debugger;

var Energy_and_drive = [];
var Work_style=[];
var Working_with_others=[];
var Dealing_with_pressure_and_stress=[];
var Ambition=[];
var Initiative=[];
var Flexibility=[];
var Energy=[];
var Leadership=[];
var Multi_tasking=[];
var Persuasion=[];
var Social_Confidence=[];
var Persistence=[];
var Attention_to_detail=[];

var Rule_Following=[];
var Dependability=[];
var Planning=[];
var Team_Work=[];
var Concern_for_others=[];
var Outgoing=[];
var Democratic=[];
var Dealing_with_pressure_and_stress=[];
var Self_control=[];
var Stress_Tolerance=[];
var Innovation=[];
var Analytical_Thinking=[];

Energy_and_drive = data.Energy_and_drive;
//alert(Energy_and_drive);

Work_style = data.Work_style;
Working_with_others = data.Working_with_others;
Dealing_with_pressure_and_stress = data.Dealing_with_pressure_and_stress;
Problem_solving_style = data.Problem_solving_style;


Ambition = data.Ambition;
Initiative = data.Initiative;
Flexibility = data.Flexibility;
Energy = data.Energy;


Leadership = data.Leadership;
Multi_tasking = data.Multi_tasking;
Persuasion = data.Persuasion;
Social_Confidence = data.Social_Confidence;


Persistence = data.Persistence;
Attention_to_detail = data.Attention_to_detail;
Rule_Following = data.Rule_Following;
Dependability = data.Dependability;


Planning = data.Planning;
Team_Work = data.Team_Work;
Concern_for_others = data.Concern_for_others;
Outgoing = data.Outgoing;



Democratic = data.Democratic;
Self_control = data.Self_control;
Stress_Tolerance = data.Stress_Tolerance;
Innovation = data.Innovation;
Analytical_Thinking = data.Analytical_Thinking;
//debugger;
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Work Personality Index'
    },
    accessibility: {
        description: 'Image description: A column range chart compares the monthly temperature variations throughout 2017 in Vik I Sogn, Norway. The chart is interactive and displays the temperature range for each month when hovering over the data. The temperature is measured in degrees Celsius on the X-axis and the months are plotted on the Y-axis. The lowest temperature is recorded in March at minus 10.2 Celsius. The lowest range of temperatures is found in December ranging from a low of minus 9 to a high of 8.6 Celsius. The highest temperature is found in July at 26.2 Celsius. July also has the highest range of temperatures from 6 to 26.2 Celsius. The broadest range of temperatures is found in May ranging from a low of minus 0.6 to a high of 23.1 Celsius.'
    },

    plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
        tooltip: {
            valueSuffix: '°C'
        },
    subtitle: {
        text: 'Energy and Drive'
    },
    xAxis: {
        categories: ['Energy and Drive'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'User (Reports)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' reports'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Energy and Drive',
        data: [Energy_and_drive]

    },{
        name: 'Ambition',
        data: [Ambition]

    },{
        name: 'Initiative',
        data: [Initiative]

    },{
        name: 'Flexibility',
        data: [Flexibility]

    },{
        name: 'Energy',
        data: [Energy]

    },{
        name: 'Leadership',
        data: [Leadership]

    },{
        name: 'Multi Tasking',
        data: [Multi_tasking]

    },{
        name: 'Persuasion',
        data: [Persuasion]

    },{
        name: 'Social Confidence',
        data: [Social_Confidence]

    }]
});
//debugger;

// 2


Highcharts.chart('container2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Work Personality Index'
    }, plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
        tooltip: {
            valueSuffix: '°C'
        },
    subtitle: {
        text: 'Work Style'
    },
    xAxis: {
        categories: ['Work Style'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'User (Reports)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' reports'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Work Style',
        data: [Work_style]

    },{
        name: 'Persistence',
        data: [Persistence]

    },{
        name: 'Attention To Detail',
        data: [Attention_to_detail]

    },{
        name: 'Rule Following',
        data: [Rule_Following]

    },{
        name: 'Dependability',
        data: [Dependability]

    },{
        name: 'Planning',
        data: [Planning]

    }]
});
//debugger;

// 3

Highcharts.chart('container3', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Dealing with pressure and Stress'
    }, plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
        tooltip: {
            valueSuffix: '°C'
        },
    subtitle: {
        text: 'Work Personality Index'
    },
    xAxis: {
        categories: ['Working With Others'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'User (Reports)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' reports'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Working With Others',
        data: [Working_with_others]

    },{
        name: 'Team Work',
        data: [Team_Work]

    },{
        name: 'Concern For Others',
        data: [Concern_for_others]

    },{
        name: 'Outgoing',
        data: [Outgoing]

    },{
        name: 'Democratic',
        data: [Democratic]

    }]
});
//debugger;

// 4

Highcharts.chart('container4', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Work Personality Index'
    }, plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
        tooltip: {
            valueSuffix: '°C'
        },
    subtitle: {
        text: 'Dealing with pressure and Stress'
    },
    xAxis: {
        categories: ['Dealing With Pressure And Stress'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'User (Reports)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' reports'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Dealing with pressure and Stress',
        data: [Dealing_with_pressure_and_stress]

    },{
        name: 'Self Control',
        data: [Self_control]

    },{
        name: 'Stress Tolerance',
        data: [Stress_Tolerance]

    }]
});
//debugger;


// 5

Highcharts.chart('container5', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Work Personality Index.'
    }, plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
        tooltip: {
            valueSuffix: '°C'
        },
    subtitle: {
        text: 'Problem Solving Style'
    },
    xAxis: {
        categories: ['Problem Solving Style'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'User (Reports)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' reports'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Problem Solving Style',
        data: [Problem_solving_style]

    },{
        name: 'Innovation',
        data: [Self_control]

    },{
        name: 'Analytical Thinking',
        data: [Analytical_Thinking]

    }]
});
//debugger;


</script>
<style>

    .highcharts-figure, .highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

#container4 {
    height: 400px;
}

/*5*/
#container5 {
    height: 400px;
}
#container3 {
    height: 400px;
}
#container2 {
    height: 400px;
}


.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>



 </head>

<body>

     <h1 style="text-align:center">User Value</h1>

 <div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>

            		<tr>

					<th style="vertical-align: unset">Sr.</th>


					    <th style="vertical-align: unset">Test Name</th>

					 <th style="vertical-align: unset">Category Name</th>
					    <th style="vertical-align: unset">Description</th>

					</tr>

							 <?php
            	$i=0;
            	foreach ($categories as $row) {
            		$i++;
            		?>

					<tr>
					    <td><?php echo $i; ?></td>
					    <td><?php echo $row['categories_id'];?></td>
                        	<td><?php echo $row['dimensions_id']; ?></td>
                            <td><?php echo $row['description_test'];?></td>



					</tr>



										</thead>









</tr>
<?php
            	}
            	?>




									</table>

									<!--end: Datatable -->
								</div>


						<!-- begin:: Content -->

  <div id="myChart"></div>
  </body>
</html>


