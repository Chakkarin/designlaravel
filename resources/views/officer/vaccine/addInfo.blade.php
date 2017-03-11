@extends('layouts.app')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>เพิ่มข้อมูลวัคซีน</h3>
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
                            <h4>ฟอร์มข้อมูลวัคซีน</h4>
                            <div class="hline"></div>
                        </div>

                        <form role="form">
                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">รหัสวัคซีน</label>
                                <input type="title" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">ชื่อวัคซีน</label>
                                <input type="title" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">ชนิดวัคซีน</label>
                                <input type="title" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="InputSubject1 ">หน่วย</label>
                                <input type="title" class="form-control" id="">
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