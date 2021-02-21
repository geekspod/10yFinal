(function($) {

    'use strict';

    jQuery(document).ready(function () {

        // bar chart

        function barChart() {

            var barChart = $('#bar-chart');

            if(!barChart.length) return;

            var ctx = document.getElementById('bar-chart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        }

        barChart();

        // line chart

        function lineChart() {

            var lineChart = $('#line-chart');

            if(!lineChart.length) return;

            var ctx = document.getElementById('line-chart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Red',
                        data: [330, 250, 480, 120, 220, 130, 255],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Blue',
                        data: [230, 350, 120, 240, 360, 180, 295],
                        backgroundColor: 'rgba(105, 195, 255, 0.2)',
                        borderColor: 'rgba(105, 195, 255, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Yellow',
                        data: [450, 290, 123, 332, 439, 222, 340],
                        backgroundColor: 'rgba(255, 209, 94, 0.2)',
                        borderColor: 'rgba(255, 209, 94, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Green',
                        data: [400, 450, 380, 250, 450, 320, 210],
                        backgroundColor: 'rgba(155, 220, 220, 0.2)',
                        borderColor: 'rgba(155, 220, 220, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Purple',
                        data: [500, 220, 110, 50, 430, 310, 410],
                        backgroundColor: 'rgba(154, 104, 255, 0.2)',
                        borderColor: 'rgba(154, 104, 255, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Orange',
                        data: [0, 100, 200, 300, 400, 320, 222],
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
                    }]
                }
            });

        }

        lineChart();

        // radar chart

        function radarChart() {

            var radarChart = $('#radar-chart');

            if(!radarChart.length) return;

            var ctx = document.getElementById('radar-chart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
                    datasets: [
                        {
                            label: 'First',
                            data: [100, 44, 55, 90, 55, 80, 100 ],
                            backgroundColor: 'rgba(154, 104, 255, 0.2)',
                            borderColor: 'rgba(154, 104, 255, 1)',
                            borderWidth: 1

                        },{
                            label: 'Second',
                            data: [30, 80, 60, 20, 40, 100, 50],
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    }
                });

            }

            radarChart();

            // doughnut chart

            function doughnutChart() {

                var doughnutChart = $('#doughnut-chart');

                if(!doughnutChart.length) return;

                var ctx = document.getElementById('doughnut-chart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow'],
                        datasets: [{
                            data: [70, 20, 10],
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(105, 195, 255, 1)',
                                'rgba(255, 209, 94, 1)'
                            ],
                        }]
                    }
                });

            }

            doughnutChart();

        });
    }(jQuery));
