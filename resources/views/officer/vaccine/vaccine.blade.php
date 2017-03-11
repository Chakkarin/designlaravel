@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>จัดการข้อมูลการฉีดวัคซีน</h3>
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
                        <th rowspan="2">รหัสคนไข้</th>
                        <th rowspan="2">คำนำหน้า</th>
                        <th rowspan="2">ชื่อ</th>
                        <th rowspan="2">นามสกุล</th>
                        <th rowspan="2">อายุ</th>
                        <th rowspan="2">วันครบรอบฉีด</th>
                        <th colspan="8"><center>ชนิดวัคซีน</center></th>
                        <th rowspan="2">เพิ่ม</th>
                        <th rowspan="2">แก้ไข</th>
                        <th rowspan="2">ลบ</th>
                    </tr>
                    <tr>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>รหัสคนไข้</td>
                        <td>เลขบัตรประจำตัวประชาชน</td>
                        <td>คำนำหน้า</td>
                        <td>ชื่อ</td>
                        <td>นามสกุล</td>
                        <td>สิทธิบัตร</td>
                        <td>วันเกิด</td>
                        <td>เวลา</td>
                        <td>APGAR SCORE</td>
                        <td>ประเภทการคลอด</td>
                        <td>อายุครรภ์คลอด</td>
                        <td>เพศ</td>
                        <td>ส่วนสูง</td>
                        <td>น้ำหนัก</td>
                        <td><a href="{{asset('officer/vaccine/addVaccine')}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                        <td><a href="{{asset('officer/vaccine/editVaccine')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection