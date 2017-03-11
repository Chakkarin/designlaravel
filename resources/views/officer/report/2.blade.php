@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>ข้อมูลวันนับตรวจครรภ์</h3>
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
                        <th rowspan="2">เลขบัตรประชาชน</th>
                        <th rowspan="2">คำนำหน้า</th>
                        <th rowspan="2">ชื่อ</th>
                        <th rowspan="2">นามสกุล</th>
                        <th colspan="5"><center>ครั้งที่ตรวจ</center></th>
                    </tr>
                    <tr>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
                        <th>xxxx</th>
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

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><! --/container -->

@endsection