		<!-- Awal Footer -->
		<footer>
		<div class="container footer-website">
		  <div class="rows">
		    <p class="text-center">&copy; 2018 Auto E Grande.</p>
		  </div>        
		</div>
		</footer>
		<!-- Akhir Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <!-- <script src="js/script.js"></script> -->

  </body>
</html>


<script>

var ctx = document.getElementById('chartWeb');
var myChart = new Chart(ctx, 
{
	type: 'bar',
	data: 
	{
		labels: 
		[
			<?php
			// global $index;

			foreach($index as $i) 
			{ 
				echo '"' . $i . '",';
			}
			?>
		],
		datasets: 
		[{
			label: 
			<?php 
			// global $labelDiagram;
			echo "'" . $labelDiagram . "'";
			?>,
			data: 
			[
				<?php
				// global $value;

				foreach($value as $v) 
				{ 
					echo '"' . $v . '",';
				}
				?>
			],
			backgroundColor: 
			[
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			],
			borderColor: 
			[
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			],
			borderWidth: 1
		}]
	},
	options: 
	{
		scales: 
		{
			yAxes: 
			[{
				ticks: 
				{
					beginAtZero: true
				}
			}]
		}
	}
});

</script>