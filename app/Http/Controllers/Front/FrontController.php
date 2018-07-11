<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Front;
use App\Model\StudentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\StudentBusiness;

class FrontController
{

    public function student_search(Request $request)
    {
        $in = $request->all();
        $student_name = trim($in['student_name'],' ');
        $identity = trim($in['identity'],' ');
        $student = StudentModel::where('student_name',$student_name)->where('identity',$identity)->first();
        if(empty($student->toArray())){
            $message = '未被我校录入，请耐性等待。';
        }else{
            $message =
                $student->student_name.'同学： <br>'.
                ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;恭喜你被我校'.$student->major.'专业录取。
                '.'报到时间，见录取通知书。';
        }

        return view('front.search',['message'=>$message]);
    }

}