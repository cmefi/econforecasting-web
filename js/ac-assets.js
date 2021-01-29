$(document).ready(function() {

	/********** INITIALIZE **********/
	$('div.overlay').show();
	
	/*** Set Default Data ***/
	/* Use previous options if set, otherwise use default options stated above.
	 * Also change roll window to currently selected value
	 */ 
	(function() {
		const udPrev = getAllData().userData || {};
		const ud = {
			...udPrev,
			... {
					usage: 'ass'
				}
		}

		setData('userData', ud);
			
	})();



	/********** GET DATA **********/
	/* Do not transfer data directly between functions - instead have everything work with sessionStorage.
	 * Put the functions in a bigger $.Deferred function when more cleaning is needed before finalization;
	 */
    const loadData = $.Deferred(function(dfd) {
		const ud = getData('userData');
		const getAcIndexDfd = getAcIndex(usage = ud.usage);

		$.when(getAcIndexDfd).done(function(acIndex) {
			setData(
				'userData',
				{
					...getData('userData'),
					...{
						acIndex: acIndex
					}
				}
			);
			dfd.resolve();
		});
		return dfd.promise();
	});
	
	
	
	/********** DRAW CHARST **********/
	loadData.done(function() {
		const ud = getData('userData');
		drawChart(ud.acIndex);
		$('#overlay').hide();
	});
	
	
});


/*** Get index data ***/
function getAcIndex(usage) {
	const dfd = $.Deferred();
	getAJAX('getAcIndex', toScript = ['acIndex'], fromAjax = {usage: usage}).done(function(ajaxRes) {
		const acFund = JSON.parse(ajaxRes).acIndex.map(function(x) {
			const z = {
				x: new Date(x.date).getTime(),
				y: parseFloat(x.value);
			};
			return z;
		});
		dfd.resolve(acFund);
		});
	return dfd.promise();
}

/*** Draw chart ***/
function drawChart(acIndex) {
	console.log('acIndex', acIndex);
	
	const o = {
        chart: {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            marginRight: 50,
            marginLeft: 50
        },
        credits: {
            enabled: false  
        },
        title: {
            text: 'Cross-Asset Correlation Index'
        },
		subtitle: {
			text: 'Last updated ' + moment(acIndex[acIndex.length - 1].date).format('MM/DD/YYYY')
		},
		caption: {
			text: 'Shaded areas indicate recessions'
		},
        plotOptions: {
			series: {
				dataGrouping: {
					enabled: true,
					units: [['day', [1]]]
				}
				/*
				cursor: 'pointer',
				point: {
					events: {
						click: function () {
							var data = getData();
							var d = new Date(this.x).toISOString().split('T')[0];
							if (data.hmDates.indexOf(d) === -1) return;
							
							$.extend(true,data,{
								"playIndex": data.hmDates.indexOf(d),
								"playState": "pause"
							});
							setData(data);

							updateCharts($('#heatmap').highcharts(),this.series.chart);
						}
					}
				}
				*/
			}
        },
        tooltip: {
            useHTML: true,
            formatter: function () {
                return '<h6 class="text-center;" style="font-weight:bold">'+ Highcharts.dateFormat('%b \ %e \ %Y', this.points[0].x) + '</h6></br>' +
                'Average Correlation: ' + Highcharts.numberFormat(this.points[0].y,4);
            },
            shared: true
        },
        yAxis: {
            /*max: 1,//max,
            min: -1,//min,
			*/
            startOnTick: false,
            endOnTick: false,
            opposite:false,
            showLastLabel: true,
            labels: {
                formatter: function () {
                    return this.value.toFixed(1);
                }
            }/*,
            plotLines: [{
                value: 0,
                width: 1,
                color: 'black',
                dashStyle: 'Dash',
                zIndex: 2
                },{
                value: 1,
                width: 1,
                color: 'rgba(10, 24, 66,1)',
                zIndex: 5
                },{
                value: -1,
                width: 1,
                color: 'rgba(10, 24, 66,1)',
                zIndex: 5
                }
            ]*/
        },
        xAxis: {
            dateTimeLabelFormats: {
                day: "%m-%d-%Y",
                week: "%m-%d-%Y"
            },
			plotBands: [{
				color: '#ffd9b3',
				from: Date.UTC(2020, 2, 1),
				to: Date.UTC(2021, 2, 1)
			}]
        },
        navigator: {
            enabled: false
        },
        series: [{
            data: acIndex,
            turboThreshold: 0,
            id: 's01',
            type: 'line',
            color: '#333',
            marker: {
                enabled: false
            },
            zIndex: 1,

        }]
	};
		
		
	const chart = Highcharts.stockChart('chart-container', o);
	return;
}

