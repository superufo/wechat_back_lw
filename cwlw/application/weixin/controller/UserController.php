<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;
use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;

class UserController extends BaseController
{
    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['profession', 'openid', 'fullname', 'age', 'nickName', 'gender', 'province', 'city', 'phoneNumber', 'countryCode', 'birthday', 'post', 'introduce', 'resumeId', 'code', 'session_key', 'unionid', 'avatarUrl', 'livingprovince', 'livingcity', 'isFree', 'education', 'educationYear'];
        $this->nativeModel = new BaseModel('user', $fields, 'openid');
    }


    public function add()
    {
        switch ($this->method) {
            case 'get': // get请求处理代码
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                $request = Request::instance();
                $post = $request->param();

                $data = $this->nativeModel->add($post);
                if ( false === $data) {
                    $res = ['success' => false, 'msg' => '服务器异常'];
                } else {
                    $res = ['success' => true, 'data' => $data, 'msg' => '成功'];
                }

                $response = $this->response($res, 'json', 200);
                $response->send();
                break;
        }
    }

    public function getone()
    {
        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();

                if (empty($map['openid'])) {
                    $res = ['success' => false, 'msg' => 'openid为空'];
                    $this->response($res, 'json', 200)->send();
                    exit();
                }

                $data = \think\Db::query('select * from cn_user where openid=\'' . $map['openid'] . '\'');

                if ( false == $data ) {
                    $res = ['success' => false, 'msg' => '服务器异常'];
                } else {
                    $res = ['success' => true, 'data' => $data[0], 'msg' => '成功'];
                }

                $response = $this->response($res, 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }
    }

    public function getByAccount()
    {
        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();

                if ( empty($map['acount']) ) {
                    $res = ['success' => false, 'msg' => '账号为空'];
                    $this->response($res, 'json', 200)->send();
                    exit();
                }

                $data = \think\Db::query('select * from cn_user where acount=\'' . $map['acount'] . '\'');

                if ( false == $data ) {
                    $res = ['success' => false, 'msg' => '服务器异常'];
                } else {
                    $res = ['success' => true, 'data' => $data[0], 'msg' => '成功'];
                }

                $response = $this->response($res, 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }
    }



}
