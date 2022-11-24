<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}




?>

<!-- MAIN -->
<main>
			<!-- <div class="head-title">
				<div class="left">
					<h1>changer le Mot de passe:</h1>
				</div>
			</div> -->

			<!--form-->
			<div class="container-fluid px-1 py-20 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-20 col-lg-20 col-md-10 col-40 ">

						<div class="card">
                               <div class="chartBoxII">
                                <canvas id="myChartIII" width="200" height="200"></canvas>
                            </div>
                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script>
                                const ctxIII = document.getElementById('myChartIII').getContext('2d');
                            const myChartIII = new Chart(ctxIII, {
                            type: 'radar',
                            data: {
                            labels: [
                                'Eating',
                                'Drinking',
                                'Sleeping',
                                'Designing',
                                'Coding',
                                'Cycling',
                                'Running'
                            ],
                            datasets: [{
                                label: 'My First Dataset',
                                data: [65, 59, 90, 81, 56, 55, 40],
                                fill: true,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgb(255, 99, 132)',
                                pointBackgroundColor: 'rgb(255, 99, 132)',
                                pointBorderColor: '#fff',
                                pointHoverBackgroundColor: '#fff',
                                pointHoverBorderColor: 'rgb(255, 99, 132)'
                            }, {
                                label: 'My Second Dataset',
                                data: [28, 48, 40, 19, 96, 27, 100],
                                fill: true,
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgb(54, 162, 235)',
                                pointBackgroundColor: 'rgb(54, 162, 235)',
                                pointBorderColor: '#fff',
                                pointHoverBackgroundColor: '#fff',
                                pointHoverBorderColor: 'rgb(54, 162, 235)'
                            }]
                            },
                            options: {
                                elements: {
                                line: {
                                    borderWidth: 3
                                }
                                }
                            },
                            });
                            </script>
                                            <hr>
                                    <!--/*************************************/-->

                                                            <div class="chartBoxII">
                                        <canvas id="myChart" width="50" height="50"></canvas>
                                    </div>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                    const ctx = document.getElementById('myChart').getContext('2d');
                                    const myChart = new Chart(ctx, {
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
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });

                                    </script>
                                    


                                     



						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
