@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>แก้ไขข้อมูลเยี่ยมหลังคลอด</h3>
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
                            <h4   >ฟอร์มแก้ไขข้อมูลเยียมหลังคลอด</h4>
                            <div class="hline"></div>
                        </div>

                        <form role="form" class="container">
                            {{--<div class="form-group col-md-4">--}}
                                {{--<label for="InputName1">รหัสคนไข้</label>--}}
                                {{--<input type="text" class="form-control" id="">--}}
                            {{--</div>--}}

                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">วันที่เยี่ยม</label>
                                <input type="date" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">ครั้งที่</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">น้ำหนัก(กก.)</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">ส่วนสูง(ซม.)</label>
                                <input type="text" class="form-control" id="">
                            </div>
                                <div class="form-group col-md-2">
                                    <label for="InputSubject1 ">รอบหัว(ซม.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-theme pull-right" style="margin-right: 64px;">บันทึก</button>
                        </form>
                    </div><! --/col-lg-8 -->

                </div><! --/row -->
            </div><! --/container -->
        </div>
    </div><! --/container -->

@endsection