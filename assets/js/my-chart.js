$(document).ready(function(){

    $('#bar-chart').insertFusionCharts({
        type: 'column2d',
        width: "100%",
        height: "400",
        dataFormat: "json",
        dataSource: {
            "chart":{
                "caption": "จำนวนเรือประมงแบ่งตามประเทศ",
                "xAxisName": "ประเทศ",
                "yAxisName": "จำนวน/ลำ",
                "theme": "fint"
            },
            "data": [
                {
                    "label": "ประเทศไทย",
                    "value": "120"
                },
                {
                    "label": "บรูไน",
                    "value": "230"
                },
                {
                    "label": "ญี่ปุ่น",
                    "value": "570"
                }
            ]
        }
    });

});