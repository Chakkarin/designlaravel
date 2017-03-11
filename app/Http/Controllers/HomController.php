<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomController extends Controller
{

    //เจ้าหน้าที่สาธารณะสุข

  public function getOfficer() {
    return view('officer.index');
  }

    public function getPatient() {
        return view('officer.patient.index');
    }

    public function addPatient() {
        return view('officer.patient.add');
    }

    public function editPatient() {
        return view('officer.patient.edit');
    }

    //
    public function getBabe() {
        return view('officer.babe.babe');
    }
    public function addBabe() {
        return view('officer.babe.addBabe');
    }
    public function editBabe() {
        return view('officer.babe.editBabe');
    }

    public function getVisit() {
        return view('officer.babe.visitBabe');
    }
    public function addVisit() {
        return view('officer.babe.addVisit');
    }
    public function editVisit() {
        return view('officer.babe.editVisit');
    }

    //
    public function getVaccine() {
        return view('officer.vaccine.vaccine');
    }
    public function addVaccine() {
        return view('officer.vaccine.addVaccine');
    }
    public function editVaccine() {
        return view('officer.vaccine.editVaccine');
    }

    public function vaccineInfo() {
        return view('officer.vaccine.vaccineInfo');
    }
    public function addInfo() {
        return view('officer.vaccine.addInfo');
    }
    public function editInfo() {
        return view('officer.vaccine.editInfo');
    }

    //

    public function getWh() {
        return view('officer.wh.index');
    }
    public function addWh() {
        return view('officer.wh.add');
    }
    public function editWh() {
        return view('officer.wh.edit');
    }

//
    public function report1()
    {
        return view('officer.report.1');
    }
    public function report2()
    {
        return view('officer.report.2');
    }
    public function report3()
    {
        return view('officer.report.3');
    }
     public function report4()
    {
        return view('officer.report.4');
    }
    public function chart3()
    {
        return view('officer.report.chart3');
    }
    public function chart4()
    {
        return view('officer.report.chart4');
    }


    //สำหรับหญิงฝากครรภ์

    public function getAntenatal() {
        return view('antenatal.index');
    }
   public function infoBaby() {
        return view('antenatal.infoBabe');
    }
    public function infoWh() {
        return view('antenatal.infoWh');
    }
    public function infoVc() {
        return view('antenatal.infoVc');
    }

    //อสม.
    public function getVolunteer() {
        return view('volunteer.index');
    }
    public function addVolunteer() {
        return view('volunteer.add');
    }
    public function editVolunteer() {
        return view('volunteer.edit');
    }

}
