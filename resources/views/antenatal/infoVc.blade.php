@extends('layouts.antenatal')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>ข้อมูลการฉีดวัคซีนลูก</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div id="service" style="margin-bottom: 46px;">
        <div class="container panel">
            <form role="form">
                <div class="form-group col-md-3">
                    <label for="InputSubject1 ">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="" disabled>
                </div>
                <div class="form-group col-md-1">
                    <label for="InputSubject1 ">คำนำหน้า</label>
                    <input type="text" class="form-control" id="" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="InputSubject1 ">ชื่อ</label>
                    <input type="text" class="form-control" id="" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="InputSubject1 ">นามสกุล</label>
                    <input type="text" class="form-control" id="" disabled>
                </div>
            </form>
        </div><! --/container -->
    </div><! --/service -->
    <div class="container">
        <div class="col-md-12" style="margin-top: 20px;margin-bottom: 214px;">
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th rowspan="2"><center>วันที่เกิด</center></th>
                    <th colspan="10"><center>ชนิดวัคซีน</center></th>
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
                    <th>xxxx</th>
                    <th>xxxx</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>5151</td>
                    <td>5151</td>
                    <td>5151</td>
                    <td>5151</td>
                    <td>5151</td>
                    <td>5151</td>
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
    <div class="clearfix"></div>


@endsection
