@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>กราฟแสดงข้อมูลการเจริญเติบโตของเด็ก น้ำหนักตามเกณฑ์อายุ</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="container">
            <div class="form-group col-md-2">
                <label for="InputSubject1 ">คำนำหน้าชื่อ</label>
                <input type="text" class="form-control" id="" disabled>
            </div>
            <div class="form-group col-md-5">
                <label for="InputSubject1 ">ชื่อ</label>
                <input type="text" class="form-control" id="" disabled>
            </div>
            <div class="form-group col-md-5">
                <label for="InputSubject1 ">นามสกุล</label>
                <input type="text" class="form-control" id="" disabled>
            </div>
        </div>
        <div class="container">
            <div class="spacing"></div>
            <div id="chartdiv" style="width:100%; height:500px;"></div>
        </div>
        <div class="clearfix"></div>


    </div><! --/container -->

@endsection

@section('js')
    <link rel="stylesheet" href="{{asset('/amcharts/style.css')}}" type="text/css">
    <script src="{{asset('/amcharts/amcharts.js')}}" type="text/javascript"></script>
    <script src="{{asset('/amcharts/serial.js')}}" type="text/javascript"></script>

    <style type="text/css">

        @import url(http://fonts.googleapis.com/css?family=Lato:200,300);

        .amcharts-graph-g1 .amcharts-graph-fill {
            filter: url(#blur);
        }

        .amcharts-graph-g2 .amcharts-graph-fill {
            filter: url(#blur);
        }

        .amcharts-cursor-fill {
            filter: url(#shadow);
        }
    </style>

    <script>

        var chartData = [{
            "year": 2000,
            "cars": 1691,
            "motorcycles": 737

        }, {
            "year": 2001,
            "cars": 1098,
            "motorcycles": 680,
            "bicycles": 910
        }, {
            "year": 2002,
            "cars": 975,
            "motorcycles": 664,
            "bicycles": 670
        }, {
            "year": 2003,
            "cars": 1246,
            "motorcycles": 648,
            "bicycles": 930
        }, {
            "year": 2004,
            "cars": 1218,
            "motorcycles": 637,
            "bicycles": 1010
        }, {
            "year": 2005,
            "cars": 1913,
            "motorcycles": 133,
            "bicycles": 1770
        }, {
            "year": 2006,
            "cars": 1299,
            "motorcycles": 621,
            "bicycles": 820
        }, {
            "year": 2007,
            "cars": 1110,
            "motorcycles": 10,
            "bicycles": 1050
        }, {
            "year": 2008,
            "cars": 765,
            "motorcycles": 232,
            "bicycles": 650
        }, {
            "year": 2009,
            "cars": 1145,
            "motorcycles": 219,
            "bicycles": 780
        }, {
            "year": 2010,
            "cars": 1163,
            "motorcycles": 201,
            "bicycles": 700
        }, {
            "year": 2011,
            "cars": 1780,
            "motorcycles": 85,
            "bicycles": 1470
        }, {
            "year": 2012,
            "cars": 1580,
            "motorcycles": 285
        }];

        var chart = AmCharts.makeChart("chartdiv", {
            "type": "serial",
            "fontFamily": "Lato",
            "autoMargins": true,
            "addClassNames": true,
            "zoomOutText": "",
            "defs": {
                "filter": [{
                    "x": "-50%",
                    "y": "-50%",
                    "width": "200%",
                    "height": "200%",
                    "id": "blur",
                    "feGaussianBlur": {
                        "in": "SourceGraphic",
                        "stdDeviation": "50"
                    }
                }, {
                    "id": "shadow",
                    "width": "150%",
                    "height": "150%",
                    "feOffset": {
                        "result": "offOut",
                        "in": "SourceAlpha",
                        "dx": "2",
                        "dy": "2"
                    },
                    "feGaussianBlur": {
                        "result": "blurOut",
                        "in": "offOut",
                        "stdDeviation": "10"
                    },
                    "feColorMatrix": {
                        "result": "blurOut",
                        "type": "matrix",
                        "values": "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                    },
                    "feBlend": {
                        "in": "SourceGraphic",
                        "in2": "blurOut",
                        "mode": "normal"
                    }
                }]
            },
            "fontSize": 15,

            "dataProvider": chartData,
            "dataDateFormat": "YYYY",
            "marginTop": 0,
            "marginRight": 0,
            "marginLeft": 0,
            "autoMarginOffset": 0,
            "categoryField": "year",
            "categoryAxis": {
                "gridAlpha": 0.07,
                "axisColor": "#DADADA",
                "startOnAxis": true,
                "tickLength": 0,
                "parseDates": true,
                "minPeriod": "YYYY"
            },
            "valueAxes": [{
                "stackType": "regular",
                "gridAlpha": 0.07,
                "axisAlpha": 0,
                "inside": true,
                "labelFrequency": 2
            }],
            "graphs": [{
                "id": "g1",
                "type": "line",
                "title": "Cars",
                "valueField": "cars",
                "fillColors": [
                    "#0066e3",
                    "#802ea9"
                ],
                "lineAlpha": 0,
                "fillAlphas": 0.8,
                "showBalloon": false
            }, {
                "id": "g2",
                "type": "line",
                "title": "Motorcycles",
                "valueField": "motorcycles",
                "lineAlpha": 0,
                "fillAlphas": 0.8,
                "lineColor": "#5bb5ea",
                "showBalloon": false
            }, {
                "id": "g3",
                "title": "Bicycles",
                "valueField": "bicycles",
                "lineAlpha": 0.5,
                "lineColor": "#FFFFFF",
                "bullet": "round",
                "dashLength": 2,
                "bulletBorderAlpha": 1,
                "bulletAlpha": 1,
                "bulletSize": 15,
                "stackable": false,
                "bulletColor": "#5d7ad9",
                "bulletBorderColor": "#FFFFFF",
                "bulletBorderThickness": 3,
                "balloonText": "<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#ffffff'>[[value]]</div>"
            }],
            "chartCursor": {
                "cursorAlpha": 1,
                "zoomable": false,
                "cursorColor": "#FFFFFF",
                "categoryBalloonColor": "#8d83c8",
                "fullWidth": true,
                "categoryBalloonDateFormat": "YYYY",
                "balloonPointerOrientation": "vertical"
            },
            "balloon": {
                "borderAlpha": 0,
                "fillAlpha": 0,
                "shadowAlpha": 0,
                "offsetX": 40,
                "offsetY": -50
            }
        });

        // we zoom chart in order to have better blur (form side to side)
        chart.addListener("dataUpdated", zoomChart);

        function zoomChart() {
            chart.zoomToIndexes(1, chartData.length - 2);
        }
    </script>
@endsection