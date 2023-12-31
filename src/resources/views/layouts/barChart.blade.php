@props([
    'barChart' => 'barChart',
])
<div class="">
    {{-- barChart挿入する --}}
    <div id="{{ $barChart }}"></div>
</div>
<script>
    var hourData = <?php echo json_encode($hourData); ?>;

    var dates = [];
    var hours = [];

    hourData.forEach(function(item) {
        dates.push(item.date);
        hours.push(item.total_hour);
    });
    var options = {
        series: [{
            data: hours,
        }],
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                columnWidth: '50%',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2
        },

        grid: {
            row: {
                colors: ['#fff', '#f2f2f2']
            }
        },
        xaxis: {
            labels: {
                rotate: -45
            },
            categories: dates,
            tickPlacement: 'on'
        },
        yaxis: {
            title: {
                // text: 'Servings',
            },
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 0.85,
                opacityTo: 0.85,
                stops: [50, 0, 100]
            },
        }
    };

    var chart = new ApexCharts(document.getElementById("{{ $barChart }}"), options);
    chart.render();
</script>
