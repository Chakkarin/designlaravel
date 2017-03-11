@extends('layouts.antenatal')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>ข้อมูลประวัติลูก</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row panel" style="    background-color: #f5f5f5;">
            <div class="container mtb">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="form-group container" style="width: 1139px;">
                            <h4   >วันนัดตรวจ</h4>
                            <div class="hline"></div>
                        </div>
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
                            <div class="clearfix"></div>
                            <div class="pull-right">
                            <a href="{{asset('antenatal/infoWh')}}" class="btn btn-theme">ข้อมูลน้ำหนักส่วนสูง</a>
                            <a href="{{asset('antenatal/infoVc')}}" class="btn btn-theme">ข้อมูลการฉีดวัคซีนลูก</a>
                            </div>
                        </form>
                    </div><! --/col-lg-8 -->

                </div><! --/row -->
            </div><! --/container -->
        </div>
    </div><! --/container -->

@endsection