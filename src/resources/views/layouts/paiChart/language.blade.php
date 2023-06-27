@props([
    'subTitle' => 'subTitle',
    'paiChart' => 'paiChart',
    'languageHourData' => 'languageHourData',
])
<div class="max-w-sm py-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <p>{{ $subTitle }}</p>
    {{-- paiChart挿入する --}}
    <div id="{{ $paiChart }}" class="mx-auto h-80"></div>
</div>
<script>
    var languageHourData = <?php echo json_encode($languageHourData, JSON_UNESCAPED_UNICODE); ?>;

    var names = [];
    var hours = [];

    languageHourData.forEach(function(item) {
        names.push(item.name);
        hours.push(parseFloat(item.total_hour));
    });
    console.log(hours)
    var options = {
        series: hours,
        labels: names,
        chart: {
            width: '100%',
            height: 320,
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
