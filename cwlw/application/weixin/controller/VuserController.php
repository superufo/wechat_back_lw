<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;
use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;

class VuserController extends BaseController
{
    public function __construct(Request $request = null)
    {
        /**header("Content-type: text/html; charset=utf-8"); **/
        header("Content-type: application/json; charset=utf-8");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: PUT, POST, GET, DELETE, OPTIONS");

        /*** 比如要用header传递X-AA-TOKEN，那就在下面这句话里加上X-AA-TOKEN即可
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, X-AA-TOKEN');**/
        header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept ,Authorization, Content-Length, HTTP_APP_TOKEN, HTTP_VERSIONNAME, HTTP_TIME");
        parent::__construct($request);

        $fields = ['profession', 'openid', 'fullname', 'age', 'nickName', 'gender', 'province', 'city', 'phoneNumber', 'countryCode', 'birthday', 'post', 'introduce', 'resumeId', 'code', 'session_key', 'unionid', 'avatarUrl', 'livingprovince', 'livingcity', 'isFree', 'education', 'educationYear'];
        $this->nativeModel = new BaseModel('vue_user', $fields, 'openid');
    }


    public function register()
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
                if (false === $data) {
                    $res = ['success' => false, 'msg' => '服务器异常'];
                } else {
                    $res = ['success' => true, 'data' => $data, 'msg' => '成功'];
                }

                $response = $this->response($res, 'json', 200);
                $response->send();
                break;
        }
    }

    public function login()
    {
        switch ($this->method) {
            case 'post': // post请求处理代码
                $request = Request::instance();
                $map = $request->post();
                if( !is_array($map) ){
                    $map = json_decode($map,true);
                }

                if ( empty($map['account']) ) {
                    $res = ['success' => -2, 'msg' => '账号为空'];
                    $this->response($res, 'json', 200)->send();
                    exit();
                }

                $data = \think\Db::query('select * from cn_vue_user where account=\'' . $map['account'] . '\'');
                if ( false == $data ) {
                    $res = ['success' => '-1', 'msg' => '该用户不存在'];
                } elseif( $data[0]['password'] != $map['password'] ) {
                    $res = ['success' => '0', 'msg' => '密码输入错误'];
                }else{
                    $res = ['success' => true, 'data' => $data[0], 'msg' => '成功'];
                }

                $response = $this->response($res, 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'get': // get请求处理代码
                break;
        }
    }


}
