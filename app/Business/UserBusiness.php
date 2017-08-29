<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\UserModel;

class UserBusiness
{
    public function signOut()
    {
        //删除session
        \Session::pull('user_login');
        return redirect('/behind');
    }

    public function signIn($identity,$password,$remmber)
    {
        $password = md5($password);
        $user = UserModel::findRecordOneCondition([
            'user_name'=>$identity,
            'user_password'=>$password
        ]);
        if(!$user)return false;
        $this->signInSession($user);
        if($remmber) $this->remmber($user);

    }
    private function signInSession($user)
    {
        \Session::set('user_login',$user);
    }
    private function remmber($user)
    {

    }
}