<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('assets/ico/favicon.ico')}}">

    <title>ระบบจัดการข้อมูลหญิงตั้งครรภ์และเด็กแรกเกิด-5 ปี</title>


    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

    @yield('css')

    <script src="{{asset('assets/js/modernizr.js')}}"></script>
</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('officer')}}"><small style="font-size:14px";>ระบบจัดการข้อมูลหญิงตั้งครรภ์และเด็กแรกเกิด-5 ปี</small></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="{{asset('officer/patient')}}">ข้อมูลคนไข้</a></li>
                <li><a href="">ข้อมูลฝากครรภ์</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลเด็กแรกเกิด<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{asset('officer/babe')}}">จัดการข้อมูลเด็กแรกเกิด</a></li>
                        <li><a href="{{asset('officer/babe/visitBabe')}}">จัดการข้อมูลเยี่ยมคลอด</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลการฉีดวัคซีน<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{asset('officer/vaccine')}}">จัดการข้อมูลฉีดวัคซีน</a></li>
                        <li><a href="{{asset('officer/vaccine/vaccineInfo')}}">จัดการข้อมูลวัคซีน</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('officer/wh')}}">ข้อมูลน้ำหนักส่วนสูง</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">รายงาน<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{asset('officer/report/1')}}">ประเมินความเจริญเติบโต และสรุปการนับความถี่ของเด็ก</a></li>
                        <li><a href="{{asset('officer/report/2')}}">ข้อมูลวันนับตรวจครรภ์</a></li>
                        <li><a href="{{asset('officer/report/3')}}">ข้อมูลการเจริญเติบโตของเด็ก น้ำหนักตามเกณฑ์อายุ</a></li>
                        <li><a href="{{asset('officer/report/4')}}">ข้อมูลการเจริญเติบโตของเด็ก ส่วนสูงตามเกณฑ์อายุ</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ชื่อ User<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- *****************************************************************************************************************
 SERVICE CONTENT
 ***************************************************************************************************************** -->

@yield('content')


<!-- *****************************************************************************************************************
 FOOTER
 ***************************************************************************************************************** -->
<div id="footerwrap"  style="padding-top: 0px;padding-bottom: 0px; margin-bottom: 0">
    <div class="container">
        <div class="row">
   <p>© 2017 ระบบจัดการข้อมูลหญิงตั้งครรภ์และเด็กแรกเกิด-5 ปี v. 0.0.1 (demo)</p>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>About</h4>
                <div class="hline-w"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <div class="col-lg-4">
                <h4>Social Links</h4>
                <div class="hline-w"></div>
                <p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-tumblr"></i></a>
                </p>
            </div>
            <div class="col-lg-4">
                <h4>Our Bunker</h4>
                <div class="hline-w"></div>
                <p>
                    Some Ave, 987,<br/>
                    23890, New York,<br/>
                    United States.<br/>
                </p>
            </div>

        </div>
    </div> -->
    <!-- </div> -->
</div>

    @yield('js')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/retina-1.1.0.js')}}"></script>
    <script src="{{asset('assets/js/jquery.hoverdir.js')}}"></script>
    <script src="{{asset('assets/js/jquery.hoverex.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

<script src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

<script>
//    $(document).ready(function() {
//        $('#example').DataTable();
//    } );

    $(document).ready(function() {
        $('#example').DataTable( {
            "language": {
                "lengthMenu": "แสดง _MENU_ แถว",
                "zeroRecords": "เกิดข้อผิดพลาด",
                "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                "infoEmpty": "ไม่มีข้อมูลให้แสดง",
                "infoFiltered": "(กรองแล้วจาก _MAX_ total records)",
                "search": "ค้นหา : ",
                "paginate": {
                    "first":      "First",
                    "last":       "Last",
                    "next":       "ถัดไป",
                    "previous":   "ย้อนกลับ"
                },
            }
        } );
    } );
</script>
    <!-- <script>
        // Portfolio
        (function($) {
            "use strict";
            var $container = $('.portfolio'),
                $items = $container.find('.portfolio-item'),
                portfolioLayout = 'fitRows';

            if( $container.hasClass('portfolio-centered') ) {
                portfolioLayout = 'masonry';
            }

            $container.isotope({
                filter: '*',
                animationEngine: 'best-available',
                layoutMode: portfolioLayout,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
                masonry: {
                }
            }, refreshWaypoints());

            function refreshWaypoints() {
                setTimeout(function() {
                }, 1000);
            }

            $('nav.portfolio-filter ul a').on('click', function() {
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector }, refreshWaypoints());
                $('nav.portfolio-filter ul a').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            function getColumnNumber() {
                var winWidth = $(window).width(),
                    columnNumber = 1;

                if (winWidth > 1200) {
                    columnNumber = 5;
                } else if (winWidth > 950) {
                    columnNumber = 4;
                } else if (winWidth > 600) {
                    columnNumber = 3;
                } else if (winWidth > 400) {
                    columnNumber = 2;
                } else if (winWidth > 250) {
                    columnNumber = 1;
                }
                return columnNumber;
            }

            function setColumns() {
                var winWidth = $(window).width(),
                    columnNumber = getColumnNumber(),
                    itemWidth = Math.floor(winWidth / columnNumber);

                $container.find('.portfolio-item').each(function() {
                    $(this).css( {
                        width : itemWidth + 'px'
                    });
                });
            }

            function setPortfolio() {
                setColumns();
                $container.isotope('reLayout');
            }

            $container.imagesLoaded(function () {
                setPortfolio();
            });

            $(window).on('resize', function () {
                setPortfolio();
            });
        })(jQuery);
    </script> -->
</body>
</html>