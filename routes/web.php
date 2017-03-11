<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//เจ้าหน้าที่สาธารณะสุข

Route::get('/officer','HomController@getOfficer');

    //-จัดการข้อมูลคนไข้
Route::get('/officer/patient','HomController@getPatient');
Route::get('/officer/patient/add','HomController@addPatient');
Route::get('/officer/patient/edit','HomController@editPatient');

    //-จัดการข้อมูลเด็กแรกเกิด
Route::get('/officer/babe','HomController@getBabe');
Route::get('/officer/babe/addBabe','HomController@addBabe');
Route::get('/officer/babe/editBabe','HomController@editBabe');

Route::get('/officer/babe/visitBabe','HomController@getVisit');
Route::get('/officer/babe/addVisit','HomController@addVisit');
Route::get('/officer/babe/editVisit','HomController@editVisit');

    //-จัดการข้อมูลฉีดวัคซีน
Route::get('/officer/vaccine','HomController@getVaccine');
Route::get('/officer/vaccine/addVaccine','HomController@addVaccine');
Route::get('/officer/vaccine/editVaccine','HomController@editVaccine');

Route::get('/officer/vaccine/vaccineInfo','HomController@vaccineInfo');
Route::get('/officer/vaccine/addInfo','HomController@addInfo');
Route::get('/officer/vaccine/editInfo','HomController@editInfo');

    //-จัดการข้อมูลน้ำหนักส่วนสูง
Route::get('/officer/wh','HomController@getWh');
Route::get('/officer/wh/addWh','HomController@addWh');
Route::get('/officer/wh/editWh','HomController@editWh');

    //-report
Route::get('/officer/report/1','HomController@report1');
Route::get('/officer/report/2','HomController@report2');
Route::get('/officer/report/3','HomController@report3');
Route::get('/officer/report/4','HomController@report4');
Route::get('/officer/report/chart3','HomController@chart3');
Route::get('/officer/report/chart4','HomController@chart4');

//สำหรับหญิงฝากครรภ์

Route::get('/antenatal','HomController@getAntenatal');
Route::get('/antenatal/infoBaby','HomController@infoBaby');
Route::get('/antenatal/infoWh','HomController@infoWh');
Route::get('/antenatal/infoVc','HomController@infoVc');

//อสม
Route::get('/volunteer','HomController@getVolunteer');
Route::get('/volunteer/add','HomController@addVolunteer');
Route::get('/volunteer/edit','HomController@editVolunteer');