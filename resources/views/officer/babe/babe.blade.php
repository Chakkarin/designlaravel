@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>จัดการข้อมูลเด็กแรกเกิด</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div>
                {{--<a href="{{asset('officer/babe/addBabe')}}" class="btn btn-theme">เพิ่มข้อมูลเด็กแรกเกิด</a>--}}
                {{--<a href="{{asset('officer/babe/add')}}" class="btn btn-theme">เพิ่มข้อมูลเยี่ยมหลังคลอด</a>--}}
            </div>
            <br>
            <div class="clearfix"></div>
            <div class="col-md-12" style="overflow-x:auto;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                    <thead>
                    <tr>
                        <th>รหัสคนไข้</th>
                        <th>เลขบัตรประจำตัวประชาชน</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>สิทธิบัตร</th>
                        <th>วันเกิด</th>
                        <th>เวลา</th>
                        <th>APGAR SCORE</th>
                        <th>ประเภทการคลอด</th>
                        <th>อายุครรภ์คลอด</th>
                        <th>เพศ</th>
                        <th>ส่วนสูง</th>
                        <th>น้ำหนัก</th>
                        <th>รอบหัว</th>
                        <th>ผลการคลอด</th>
                        <th>เพิ่มข้อมูลเด็ก</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>รหัสคนไข้</th>
                        <th>เลขบัตรประจำตัวประชาชน</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>สิทธิบัตร</th>
                        <th>วันเกิด</th>
                        <th>เวลา</th>
                        <th>APGAR SCORE</th>
                        <th>ประเภทการคลอด</th>
                        <th>อายุครรภ์คลอด</th>
                        <th>เพศ</th>
                        <th>ส่วนสูง</th>
                        <th>น้ำหนัก</th>
                        <th>รอบหัว</th>
                        <th>ผลการคลอด</th>
                        <th>เพิ่มข้อมูลเด็ก</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </tfoot>
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
                        <td>รอบหัว</td>
                        <td>ผลการคลอด</td>
                        <td><a href="{{asset('officer/babe/addBabe')}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                        <td><a href="{{asset('officer/babe/editBabe')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection