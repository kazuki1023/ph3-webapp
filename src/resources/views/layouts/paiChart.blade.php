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
    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
            width: 270,
            type: 'donut',
        },
        plotOptions: {
            pie: {
                startAngle: -90,
                endAngle: 270
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

    var chart = new ApexCharts(document.getElementById("{{ $paiChart}}"), options);
    chart.render();
</script>
