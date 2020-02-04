
	<script src="../../../public/js/jquery-1.11.1.min.js"></script>
	<script src="../../../public/js/bootstrap.min.js"></script>
	<script src="../../../public/js/chart.min.js"></script>
	<script src="../../../public/js/chart-data.js"></script>
	<script src="../../../public/js/easypiechart.js"></script>
	<script src="../../../public/js/easypiechart-data.js"></script>
	<script src="../../../public/js/bootstrap-datepicker.js"></script>
	<script src="../../../public/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	<!-- <script>
  $(document).ready(function(){
    $(#governorate).on('change',function(){
      var governorateID = $(this).val();
      if(governorateID){
        $.get(
          '../companies/create.php',
          {governorate : governorateID},
          function(data){
            $(#city).html(data);
          }
        );
      }else{
        $(#city).html("<option>Select governorate first</option>")
      }

    });
  });
</script> -->
		
</body>
</html>