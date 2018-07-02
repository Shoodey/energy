<template>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Energy Drain</h3>
            </div>
            <div class="card-body">
                <div id="chart-pie" style="height: 12rem;"></div>
            </div>
        </div>
    </div>
</template>

<script>
    import c3 from 'c3';

    export default {
        created() {
            let values = ['data1'].concat(Array.from({length: 25}, () => Math.floor(Math.random() * 15)));
            setInterval(function () {
                values = values.slice(2, 24);
                values.push(Math.floor(Math.random() * 15));
                values = ['data1'].concat(values);

                var chart = c3.generate({
                    bindto: '#chart-pie', // id of chart wrapper
                    data: {
                        columns: [
                            // each columns data
                            ['data1', 63],
                            ['data2', 37]
                        ],
                        type: 'donut', // default type of chart
                        colors: {
                            'data1': tabler.colors["green"],
                            'data2': tabler.colors["green-light"]
                        },
                        names: {
                            // name of each serie
                            'data1': 'Maximum',
                            'data2': 'Minimum'
                        }
                    },
                    axis: {
                    },
                    legend: {
                        show: false, //hide legend
                    },
                    padding: {
                        bottom: 0,
                        top: 0
                    },
                });
            }, 5000);
        }
    }
</script>