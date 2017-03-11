@extends('layouts.app')

@section('content')
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>จัดการข้อมูลคนไข้</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<!-- *****************************************************************************************************************
 TITLE & CONTENT
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-md-12">
            <a href="{{asset('officer/patient/add')}}" class="btn btn-theme">เพิ่มข้อมูลคนไข้</a>
        </div>
        <div class="col-md-12" style="margin-top: 20px;">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>รหัสคนไข้</th>
                    <th>คำนำหน้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>เลขบัตรประจำตัวประชาชน</th>
                    <th>ที่อยู่</th>
                    <th>สิทธิบัตร</th>
                    <th>ประวัติการรักษา</th>
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
                    <th>เลขบัตรประจำตัวประชาชน</th>
                    <th>ที่อยู่</th>
                    <th>สิทธิบัตร</th>
                    <th>ประวัติการรักษา</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>5151</td>
                    <td>นาย</td>
                    <td>Edinburgh</td>
                    <td>urgh</td>
                    <td>20110425</td>
                    <td>45 หมู่ 0</td>
                    <td>สิทธิ</td>
                    <td>รักษา</td>
                    <td><a href="{{asset('officer/patient/edit')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><! --/container -->

@endsection