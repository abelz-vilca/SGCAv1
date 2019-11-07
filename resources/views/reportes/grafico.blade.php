@extends('layouts.plantilla')
@section('name')

<?php
$programas;
$factor1;
$factor2;
$factor3;
$factor4;
$factor5;
$factor6;
$factor7;
$factor8;
$factor9;
$factor10;
$factor11;
$factor12;

?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([

          ['FACTORES', 'factor1','factor2','factor3','factor4', 'factor5',
          'factor6','factor7','factor8','factor9', 'factor10','factor11', 'factor12'],
          ['2019', 
          <?php echo $factor1 ?>,
          <?php echo $factor2 ?>, 
          <?php echo $factor3 ?>, 
          <?php echo $factor4 ?>,
          <?php echo $factor5 ?>,
          <?php echo $factor6 ?>, 
          <?php echo $factor7 ?>, 
          <?php echo $factor8 ?>,
          <?php echo $factor9 ?>,
          <?php echo $factor10 ?>, 
          <?php echo $factor11 ?>, 
          <?php echo $factor12 ?>
        ],    ]);
                        
               
                  var options = {
          chart: {
                     }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, options);
      }
</script>
<div id="columnchart_material" style="width: 600px; height: 500px;"></div>

<div>
    <h4>Programa de estudios</h4>
    <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas}}">
    </p>
</div>
@endsection