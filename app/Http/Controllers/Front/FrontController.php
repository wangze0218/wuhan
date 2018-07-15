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

        if(!$student){
            $result = false;
            $message[] = '未被我校录取，请耐心等待。';
        }else{
            $result = true;
            $message[] = $student->student_name.'&nbsp同学：';
            $message[] = ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;经审核，你被我校'.$student->major.'专业，'.$student->direction.'方向录取。';
            $message[] = '入学时间，请参照录取通知书。';
        }

        return view('front.search',['message'=>$message,'result'=>$result]);
    }

}