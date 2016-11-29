var colours = ["#001413","#002926","#003D39","#00524C","#00665F","#007A72","#008F85","#00A398","00B8AB"];

$( document ).ready(function() {

    /* CHART 1 : Bar Chart */
    var chart_1 = $("#chart_1");

    var bar_chart = new Chart(chart_1, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    colours[colours.length - 1],
                    colours[colours.length - 2],
                    colours[colours.length - 3],
                    colours[colours.length - 4],
                    colours[colours.length - 5],
                    colours[colours.length - 6],


                ],
                borderColor: [
                    colours[colours.length - 2],
                    colours[colours.length - 3],
                    colours[colours.length - 4],
                    colours[colours.length - 5],
                    colours[colours.length - 6],
                    colours[colours.length - 7],
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    /* CHART 2 : Line Chart */
    var chart2data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
            {
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: colours[0],
                borderColor: colours[1],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40],
                spanGaps: false,
            },
            {
                label: "My second dataset",
                fill: true,
                lineTension: 0.1,
                backgroundColor: colours[2],
                borderColor: colours[3],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [25, 49, 8, 18, 65, 5, 90],
                spanGaps: false,
            }
        ]
    };
    var chart_2 = $("#chart_2");
    var line_chart = new Chart(chart_2, {
        type: 'line',
        data: chart2data,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    /* CHART 3 : Doughnut Chart */
    var chart3data = {
        labels: [
            "Red",
            "Blue"
        ],
        datasets: [
            {
                data: [0, 10],
                borderColor:[
                    colours[3],
                    colours[4]
                ],
                backgroundColor: [
                    colours[0],
                    colours[1]

                ],
                hoverBackgroundColor: [
                    colours[0],
                    colours[1]

                ]
            }]
    };


    var chart_3 = $("#chart_3");
    var doughnut_chart = new Chart(chart_3, {
        type: 'doughnut',
        data: chart3data,
        options : {
            cutoutPercentage: 85,

        }
    });


    /* CHART 4 : Pie Chart */
    var chart4data = {
        labels: [
            "Red",
            "Blue"
        ],
        datasets: [
            {
                data: [20, 40],
                borderColor:[
                    colours[3],
                    colours[4]
                ],
                backgroundColor: [
                    colours[0],
                    colours[1]

                ],
                hoverBackgroundColor: [
                    colours[0],
                    colours[1]

                ]
            }]
    };


    var chart_4 = $("#chart_4");
    var doughnut_chart = new Chart(chart_4, {
        type: 'pie',
        data: chart4data,
        options : {
            cutoutPercentage: 0
        }
    });
});
