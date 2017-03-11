@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>แก้ไขข้อมูลคนไข้</h3>
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
                            <h4   >ฟอร์มแก้ไขข้อมมูลคนไข้</h4>
                            <div class="hline"></div>
                        </div>

                        <form role="form">
                            <div class="form-group col-md-4">
                                <label for="InputName1">รหัสคนไข้</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="InputEmail1">เลขบัตรประจำตัวประชาชน</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="InputSubject1 ">สิทธิบัตร</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="InputSubject1 ">คำนำหน้า</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="InputSubject1 ">ชื่อ</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="InputSubject1 ">นามสกุล</label>
                                <input type="text" class="form-control" id="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="message1">ข้อมูลการรักษา</label>
                                <textarea class="form-control" id="message1" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="message1">ที่อยู่</label>
                                <textarea class="form-control" id="message1" rows="3"></textarea>
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