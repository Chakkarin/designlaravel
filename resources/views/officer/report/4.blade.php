@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>ข้อมูลการเจริญเติบโตของเด็ก ส่วนสูงตามเกณฑ์อายุ</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div>
                {{--<a href="{{asset('officer/vaccine/addVaccine')}}" class="btn btn-theme">เพิ่มข้อมูลการฉีดวัคซีน</a>--}}
                {{--<a href="{{asset('officer/babe/add')}}" class="btn btn-theme">เพิ่มข้อมูลเยี่ยมหลังคลอด</a>--}}
            </div>
            <br>
            <div class="clearfix"></div>
            <div class="col-md-12" style="overflow-x:auto;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                    <thead>
                    <tr>
                        <th>รหัสน้ำหนัก ส่วนสูง</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เพศ</th>
                        <th>อายุ</th>
                        <th>น้ำหนัก</th>
                        <th>ส่วนสูง</th>
                        <th>ผลส่วนสูงตามเกณฑ์อายุ</th>
                        <th>กราฟ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>เลขบัตรประจำตัวประชาชน</td>
                        <td>คำนำหน้า</td>
                        <td>ชื่อ</td>
                        <td>นามสกุล</td>
                        <td>นามสกุล</td>
                        <td>นามสกุล</td>
                        <td>นามสกุล</td>
                        <td>นามสกุล</td>
                        <td>นามสกุล</td>
                        <td><a href="{{asset('officer/report/chart4')}}" class="btn btn-warning"><i class="fa fa-area-chart" aria-hidden="true"></i></a></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection