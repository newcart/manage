<script>
    // Grafiği update etmek için id üzerinden jquery ile fonksyion çalıştırılıyor
    // Grafik için gerekli olan değerler aşağıda belirtildi.
    // Ek bir ayarlamaya gerek yoktur aşağıdaki taslak kullanılabilir.
    $("#data1").on("click", function () {
        chart.updateOptions({
            title: { text: "En Çok Ziyaret Edilen Kategoriler" }, // Grafik başlığı
            labels: [ 'Kılıf','Ev & Yaşam','Aksesuar','Kişisel Bakım'], // Grafik altında bulunan etiketler
        });
        chart.updateSeries(mostVisited);
    });

    $("#data2").on("click", function () {
        chart.updateOptions({
            title: { text: "Başka bir value" },
            labels: [ 'Value1','Value2','Value3','Value4'],
        });
        chart.updateSeries(anotherArray);
    });

    // Grafik için arrayler bu şekilde verilecek

    let mostVisited = [44, 55, 13, 33];
    let anotherArray = [24, 8, 12, 56];

    //

    // Grafik ayarları değiştirmeye gerek yoktur sadece etiketler ve array değiştirilsin.
    var options = {
        series: mostVisited,  // İlk açılışta gelen grafik array
        xaxis:{
            type: 'string'
        },
        labels: [ 'Kılıf','Ev & Yaşam','Aksesuar','Kişisel Bakım'], // İlk açılışta gelen grafik etiketleri
        chart: {
            width: '100%',
            height: 364,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },
        title: {
            text: 'En Çok Ziyaret Edilen Kategoriler',
            align: 'left',
            margin: 10,
            offsetX: 0,
            offsetY: 0,
            floating: false,
            style: {
                fontSize:  '18px',
                fontWeight:  '500',
                color:  '#808080'
            },
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                }
            },
        },
        plotOptions: {
            pie: {
                startAngle: 0,
                endAngle: 360,
                expandOnClick: true,
                offsetX: 0,
                offsetY: 0,
                customScale: 1,
                dataLabels: {
                    offset: 0,
                    minAngleToShowLabel: 10
                },
                donut: {
                    size: '85%',
                    background: 'transparent',
                    labels: {
                        show: false,
                        name: {
                            show: true,
                            fontSize: '22px',
                            fontWeight: 600,
                            color: undefined,
                            offsetY: -10,
                            formatter: function (val) {
                                return val
                            }
                        },
                        value: {
                            show: true,
                            fontSize: '16px',
                            fontWeight: 400,
                            color: undefined,
                            offsetY: 16,
                            formatter: function (val) {
                                return val
                            }
                        },
                        total: {
                            show: false,
                            showAlways: false,
                            label: 'Total',
                            fontSize: '22px',
                            fontWeight: 600,
                            color: '#373d3f',
                            formatter: function (w) {
                                return w.globals.seriesTotals.reduce((a, b) => {
                                    return a + b
                                }, 0)
                            }
                        }
                    }
                },
            }
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'left',
            offsetY: 0,
            height: 'auto',
            width : '100%',
            formatter: function(seriesName, opts) {
                return [seriesName, " : ", opts.w.globals.series[opts.seriesIndex],'%',]
            },
            itemMargin: {
                horizontal: 0,
                vertical: 0
            },
            markers: {
                width: 12,
                height: 12,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
            },
        },
        stroke: {
            show: true,
            width: 0,
        },
    };


    // Grafik init etmek için gerekli olan kod
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
