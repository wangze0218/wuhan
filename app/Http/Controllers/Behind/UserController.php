<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Behind;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\UserBusiness;

class UserController
{
    private $userBusiness;

    public function __construct(UserBusiness $userBusiness)
    {
        $this->userBusiness = $userBusiness;
    }

    public function index(Request $request)
    {
        $list = $this->userBusiness->userList();
        return view('behind.user.index',['list'=>$list]);
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $identity = $in['identity'];
        $password = $in['password'];

        return $this->userBusiness->signUp($identity,$password);
    }

    public function create(Request $request)
    {
        return view('behind.user.create');
    }

    public function edit($id)
    {
        $user = $this->userBusiness->user($id);
        return view('behind.user.edit',['user'=>$user]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $identity = $in['identity'];
        $password = $in['password'];
        $user =  $this->userBusiness->userUpdate($id,$identity,$password);
        if($user){
            echo 1;
        }else{
            echo 2;
        }
    }

    public function destroy($id)
    {
        //
    }

}