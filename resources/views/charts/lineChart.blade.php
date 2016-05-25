@extends('layouts.app')
@section('content')

<div style="width : 500px; height:600px;">
<canvas id="graph"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"> </script>
<script>
    window.onload = function () {
        var data={
            labels : ['1', '2', '3'],
            datasets: [
                {
                    label: "type1",
                    backgroundColor:"rgba(100, 220, 220, 0.2)",
                    data : [30, 20, 100],
                },
                {
                    label: "type2",
                    data : [30, 200, 100],
                }
            ]
        };
        var context =document.querySelector('#graph').getContext('2d');
        new Chart.Line(context, {"data": data});
    }
</script>
@endsection
