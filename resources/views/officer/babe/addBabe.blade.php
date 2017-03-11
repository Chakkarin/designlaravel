@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>เพิ่มข้อมูลเด็กแรกเกิด</h3>
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
                            <h4   >ฟอร์มข้อมูลเด็กแรกเกิด</h4>
                            <div class="hline"></div>
                        </div>

                        <form role="form">
                            {{--<div class="form-group col-md-4">--}}
                                {{--<label for="InputName1">รหัสคนไข้</label>--}}
                                {{--<input type="text" class="form-control" id="">--}}
                            {{--</div>--}}

                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">วันที่เกิด</label>
                                <input type="date" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">เวลาคลอด</label>
                                <input type="time" class="form-control" id="">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">เพศ</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>ชาย</option>
                                    <option>หญิง</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">น้ำหนัก(กก.)</label>
                                <input type="text" class="form-control" id="">
                            </div>


                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">อายุครรภ์คลอด(เดือน)</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">ส่วนสูง(ซม.)</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">APGAR score</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">รอบหัว(ซม.)</label>
                                <input type="text" class="form-control" id="">
                            </div>


                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">ประเภทการคลอด</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>ธรรมชาติ</option>
                                    <option>ผ่า</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">ผลการคลอด</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>รอด</option>
                                    <option>ตาย</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-theme pull-right">บันทึก</button>
                        </form>
                    </div><! --/col-lg-8 -->

                </div><! --/row -->
            </div><! --/container -->
        </div>
    </div><! --/container -->

@endsection