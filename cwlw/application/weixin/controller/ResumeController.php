<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;

use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;

class ResumeController extends BaseController
{
    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['code','education_experince','work_experince','project_experince','skill','job','city','sarary','fulljob','openid'];
        $this->educationModel = new BaseModel('resume', $fields, 'openid');

        $fields = ['profession','openid','fullname','age','nickName','gender','province','city','phoneNumber','countryCode','birthday','post','introduce','resumeId','code','session_key','unionid','avatarUrl','livingprovince','livingcity', 'isFree', 'education', 'educationYear'];
        $this->userModel = new BaseModel('user', $fields, 'openid');
    }

    public function add()
    {
        switch ($this->method) {
            case 'get': // get请求处理代码
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                $result = \think\Db::query('select Max(code) as mcode from cn_resume');
                $maxCode = $result[0]['mcode'];
                if (empty($maxCode))
                    $code = '10000000';
                else
                    $code = getDbKey('X', $maxCode, '2');

                $request = Request::instance();
                $post = $request->param();
                $post = $post['postdata'];
                $post['code'] = $post['resumeId'] = $code;

                \think\Db::startTrans();

                $data =  $this->educationModel->add($post);
                if( $data===false )  {
                    $res = ['success'=>false,'msg'=>'服务器异常','data'=>$data];
                    \think\Db::rollBack();
                    $response = $this->response($res, 'json', 200);
                    $response->send();
                    exit();
                }

                unset($post['code']);
                $data =  $this->userModel->updateTb($post,'openid');
                if( $data===false )  {
                    $res = ['success'=>false,'msg'=>'服务器异常','data'=>$data];
                    \think\Db::rollBack();
                }  else{
                    $res = ['success'=>true,'msg'=>'成功','data'=>$data];
                }

                \think\Db::commit();
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

                if( empty($map['code']) ){
                    $res = ['success'=>false,'msg'=>'openid为空'];
                    $this->response($res, 'json', 200)->send();
                    exit();
                }

                $data = \think\Db::query('select * from cn_user where code=\''.$map['code'].'\'');
                if(false === $data)  {
                    $res = ['success'=>false,'msg'=>'服务器异常'];
                }  else{
                    $res = ['success'=>true,'data'=>$data[0],'msg'=>'成功'];
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
