@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>จัดการข้อมูลเยี่ยมคลอด</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div>
                <a href="{{asset('officer/babe/addVisit')}}" class="btn btn-theme">เพิ่มข้อมูลเยี่ยมคลอด</a>
                {{--<a href="{{asset('officer/babe/add')}}" class="btn btn-theme">เพิ่มข้อมูลเยี่ยมหลังคลอด</a>--}}
            </div>
            <br>
            <div class="clearfix"></div>
            <div class="col-md-12" style="overflow-x:auto;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                    <thead>
                    <tr>
                        <th>รหัสคนไข้</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ครั้งที่</th>
                        <th>วันที่เยี่ยม</th>
                        <th>น้ำหนัก</th>
                        <th>ส่วนสูง</th>
                        <th>รอบหัว</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>รหัสคนไข้</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ครั้งที่</th>
                        <th>วันที่เยี่ยม</th>
                        <th>น้ำหนัก</th>
                        <th>ส่วนสูง</th>
                        <th>รอบหัว</th>
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
                        <td><a href="{{asset('officer/babe/editVisit')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection