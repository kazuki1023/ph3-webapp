@props([
    'subTitle' => 'subTitle',
    'paiChart' => 'paiChart',
])
<div class="max-w-sm py-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <p>{{ $subTitle }}</p>
    {{-- paiChart挿入する --}}
    <div id="{{ $paiChart }}" class="mx-auto"></div>
</div>
<script>
    var mediumHourData = <?php echo json_encode($mediumHourData, JSON_UNESCAPED_UNICODE); ?>;

    var contents = [];
    var hours = [];

    mediumHourData.forEach(function(item) {
        contents.push(item.content);
        hours.push(parseFloat(item.total_hour));
    });
    var options = {
        series: hours,
        labels: contents,
        chart: {
            width: 270,
            type: 'donut',
        },
        plotOptions: {
            pie: {
                startAngle: 0,
                endAngle: 360
            }
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'gradient',
        },
        legend: {
            position: 'bottom',
            formatter: function(val, opts) {
                return val + " - " + opts.w.globals.series[opts.seriesIndex]
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.getElementById("{{ $paiChart }}"), options);
    chart.render();
</script>
