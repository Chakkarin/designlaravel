@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>จัดการข้อมูลวัคซีน</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div>
                <a href="{{asset('officer/vaccine/addInfo')}}" class="btn btn-theme">เพิ่มข้อมูลวัคซีน</a>
                {{--<a href="{{asset('officer/babe/add')}}" class="btn btn-theme">เพิ่มข้อมูลเยี่ยมหลังคลอด</a>--}}
            </div>
            <br>
            <div class="clearfix"></div>
            <div class="col-md-12" style="overflow-x:auto;">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                    <thead>
                    <tr>
                        <th>รหัสวัคซีน</th>
                        <th>เชื้อวัคซีน</th>
                        <th>ชนิดวัคซีน</th>
                        <th>หน่วย</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>อายุครรภ์คลอด</td>
                        <td>เพศ</td>
                        <td>ส่วนสูง</td>
                        <td>น้ำหนัก</td>
                        <td><a href="{{asset('officer/vaccine/editInfo')}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection