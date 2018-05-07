

$(document).ready(function () {


    $.get('http://localhost:8888/app-admin/index.php/api/fishingvessel/all_vessels', function (result) {
        console.log(result);

        var resultArray = JSON.parse(result);
        console.log(resultArray);

        var data = [];


        $.each(resultArray, function (index, item) {
            data.push({
                label: item.CountryName
                , value: item.CountryTotal
            });
        });

        $("#barchart").insertFusionCharts({
            type: "column2d",
            width: "100%",
            height: "400",
            dataFormat: "json",
            dataSource: {
                "chart": {
                    "caption": "",
                    "xAxisName": "ประเทศ",
                    "yAxisName": "จำนวน/ลำ",
                    "theme": "fint"
                },
                "data": data
            }
        });

        $("#pie-chart").insertFusionCharts({
            type: "pie2d",
            width: "100%",
            height: "400",
            dataFormat: "json",
            dataSource: {
                "chart": {
                    "caption": "",
                    "decimals": "1",
                    "useDataPlotColorForLabels": "1",
                    "theme": "fint"
                },
                "data": data
            }

        });
    });




});