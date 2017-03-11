@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>จัดการข้อมูลน้ำหนักส่วนสูง</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div class="col-md-12">
                <a href="{{asset('officer/patient/add')}}" class="btn btn-theme">เพิ่มข้อมูลน้ำหนักส่วนสูง</a>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>รหัสน้ำหนักส่วนสูง</th>
                        <th>รหัสเจ้าหน้าที่สาธารณสุข</th>
                        <th>รหัสค้นไข้</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เพศ</th>
                        <th>อายุ</th>
                        <th>น้ำหนัก</th>
                        <th>ส่วนสูง</th>
                        <th>ผล</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
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
                        <td>รักษา</td>
                        <td>รักษา</td>
                        <td>รักษา</td>
                        <td><a href="{{asset('officer/wh/editWh')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection