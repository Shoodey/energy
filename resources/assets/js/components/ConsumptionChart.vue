<template>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Energy consumption</h3>
            </div>
            <div id="chart-development-activity" style="height: 20rem"></div>
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
                    bindto: '#chart-development-activity', // id of chart wrapper
                    data: {
                        columns: [
                            // each columns data
                            values
                        ],
                        type: 'area', // default type of chart
                        groups: [
                            ['data1', 'data2', 'data3']
                        ],
                        colors: {
                            'data1': '#467fcf'
                        },
                        names: {
                            // name of each serie
                            'data1': 'Consumption in KW (5s refresh)'
                        }
                    },
                    axis: {
                        y: {
                            padding: {
                                bottom: 0,
                            },
                            show: false,
                            tick: {
                                outer: false
                            }
                        },
                        x: {
                            padding: {
                                left: 0,
                                right: 0
                            },
                            show: false
                        }
                    },
                    legend: {
                        position: 'inset',
                        padding: 0,
                        inset: {
                            anchor: 'top-left',
                            x: 20,
                            y: 8,
                            step: 10
                        }
                    },
                    tooltip: {
                        format: {
                            title: function (x) {
                                return '';
                            }
                        }
                    },
                    padding: {
                        bottom: 0,
                        left: -1,
                        right: -1
                    },
                    point: {
                        show: false
                    }
                });
            }, 5000);
        }
    }
</script>