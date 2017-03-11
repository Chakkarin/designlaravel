@extends('layouts.volunteer')

@section('content')
<!-- *****************************************************************************************************************
 TITLE & CONTENT
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row" style="margin-top: 32px;">
        <div class="col-md-12">
            <a href="{{asset('volunteer/add')}}" class="btn btn-theme">เพิ่มน้ำหนักส่วนสูง</a>
        </div>
        <div class="col-md-12" style="margin-top: 20px;">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>รหัส อสม.</th>
                    <th>รหัสน้ำหนักส่วนสูง</th>
                    <th>อายุ(ปี)</th>
                    <th>เพศ</th>
                    <th>คำนำหน้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ส่วนสูง</th>
                    <th>น้ำหนัก</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>รหัส อสม.</th>
                    <th>รหัสน้ำหนักส่วนสูง</th>
                    <th>อายุ(ปี)</th>
                    <th>เพศ</th>
                    <th>คำนำหน้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ส่วนสูง</th>
                    <th>น้ำหนัก</th>
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
                    <td>urgh</td>
                    <td>20110425</td>
                    <td>45 หมู่ 0</td>
                    <td>สิทธิ</td>
                    <td>รักษา</td>
                    <td><a href="{{asset('volunteer/edit')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><! --/container -->

@endsection