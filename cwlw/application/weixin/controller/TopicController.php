<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;

use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;

class TopicController extends BaseController
{
    private $TopicModel;

    public function __construct(Request $request = null)
    {
        header("info-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['id', 'tab', 'title', 'info', 'img', 'vidio', 'img_url', 'vidio_url', 'topic_label', 'openid', 'like', 'comment_count', 'commnet_ids', 'op_user', 'op_time'];
        $this->TopicModel = new BaseModel('topic', $fields, 'id');
    }

    public function getlist()
    {

        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();
                unset($map['page']);

                $server = request()->server();
                $serverDddr = 'http://' . $server['SERVER_NAME'] . '/';

                $fileds = " id,tab,title,info,img_url,vidio_url,img,vidio,topic_label,cn_user.openid,like,comment_count,commnet_ids,op_user,op_time,img as img_id, ";
                $fileds .= " (select path from cn_file where id=img limit 1) as img,vidio as vidio_id,(select path from cn_file where id=vidio limit 1) as vidio, ";
                $fileds .=  "avatarUrl, nickName ";

                $join = [['cn_user','cn_user.openid=cn_topic.openid','left']];
                $data = $this->TopicModel->getPageList($fileds,$map,$join);

                foreach($data['data'] as $k=>$item ){
                    $img = str_replace("\\",'/',$serverDddr.$item['img']);

                    $data['data'][$k]['img'] = $img;
                    $list_info = preg_replace('/<[^>]*>/','',$data['data'][$k]['info']) ;
                    $data['data'][$k]['list_info'] = mb_substr($list_info,0,100);
                    $data['data'][$k]['list_info'] .="......";

                    //$data['data'][$k]['info'] = mb_substr(htmlentities($data['data'][$k]['info']),0,200);

                    $data['data'][$k]['topic_label'] = json_decode($data['data'][$k]['topic_label'],true);
                    $data['data'][$k]['commnet_ids'] = json_decode($data['data'][$k]['commnet_ids'],true);
                }

                $response = $this->response($data['data'], 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }
    }

    public function getone()
    {

        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();

                if( empty($map['id']) ){
                    $res = ['success'=>false,'msg'=>'id为空'];
                    $this->response($res, 'json', 200)->send();
                    exit();
                }

                $server = request()->server();
                $serverDddr = 'http://' . $server['SERVER_NAME'] . '/';
                $data = \think\Db::query('select id,tab,title,info,img,vidio,topic_label,openid,like,comment_count,commnet_ids,op_user,op_time,img as img_id,(select path from cn_file where id=vidio limit 1) as img,vidio as vidio_id,(select path from cn_file where id=vidio limit 1) as vidio from cn_topic where id='.$map['id']);
                if(false === $data)  {
                    $res = ['success'=>false,'msg'=>'服务器异常'];
                } else {
                    foreach ($data as $k => $item) {
                        $data[$k]['img'] = str_replace("\\", '/', $serverDddr . $item['img']);

                        $data[$k]['topic_label'] = json_decode($data[$k]['topic_label'], true);
                        $data[$k]['commnet_ids'] = json_decode($data[$k]['commnet_ids'], true);
                    }
                }

                $res = ['success'=>true,'data'=>$data[0],'msg'=>'成功'];
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
