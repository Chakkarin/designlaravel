@extends('layouts.antenatal')

@section('content')
        <div id="service" style="margin-bottom: 46px;">
            <div class="container panel">
                <form role="form">
                <div class="form-group col-md-3">
                    <label for="InputSubject1 ">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-1">
                    <label for="InputSubject1 ">คำนำหน้า</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-4">
                    <label for="InputSubject1 ">ชื่อ</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-4">
                    <label for="InputSubject1 ">นามสกุล</label>
                    <input type="text" class="form-control" id="">
                </div>
                </form>
            </div><! --/container -->
        </div><! --/service -->
        <div class="container">
            <div class="col-md-12" style="margin-top: 20px;margin-bottom: 214px;">
                <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ครั้งที่ 1</th>
                        <th>ครั้งที่ 2</th>
                        <th>ครั้งที่ 3</th>
                        <th>ครั้งที่ 4</th>
                        <th>ครั้งที่ 5</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>5151</td>
                        <td>5151</td>
                        <td>5151</td>
                        <td>5151</td>
                        <td>5151</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <br>
    <br>


@endsection
