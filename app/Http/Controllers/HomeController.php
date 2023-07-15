<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;

class HomeController extends Controller


{
    //
    public function home(){
        return  view('pages.home');
    }
    public function service(){
        return  view('pages.service');
    }
    public function contact(){
        return  view('pages.contact');
    }
    public function about(){
        return  view('pages.about');
    }
    public function login(){
        return  view('pages.login');
    }
    public function employees(){
        //ดึงทั้งหมด
        // $employees = DB::table('employees')->get(); //select * from employees

        //ดึงเพียง 1แถว
        // $employees = DB::table('employees')->first(); //select * from employees WHERE limit 1
        //อ่านข้อมูลแบบที่ต้องการ
        // $employees = DB::table('employees')->first(['fullname','gender','tel']);  //select  fullname , gender,email from employees Where limit 1

        //อ่านข้อมูลแบบมีเงื่อนไข
        // $employees = DB::table('employees')->where('id','>=',20)->get();
       // $employees = DB::table('employees')->where('id','>=',20)->get(['id','fullname','gender']);

        // $employees = DB::table('employees')
        // ->where('id',19)
        // ->where('status',1)
        // ->where('gender','male')
        // ->first();

        //ค้นหาโดยระบุ id โดยตรง
        $employees=DB::table('employees')->find(19); //select * from employees where id='19'

        return $employees;
    }
    
}
