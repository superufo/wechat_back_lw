<?php
namespace app\backend\controller;

use think\Controller;
use think\Request;

use app\backend\Model\BaseModel;

class BaseController extends Controller
{

    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");

        parent::__construct($request);
    }


    public function index()
    {
        return 'parent';
    }


    public  function getArea(){
        $province = db('area')->where ( array('pid'=>1) )->select();

        return $province;
        //print_r($province);die;
        //$this->assign('province',$province);
    }

    public function getRegion(){
        header("Content-type: text/html; charset=utf-8");

        $pid_name = $_REQUEST["pid_name"];
        $data = db('area')->where(['name'=>$pid_name])->select();
        $map['pid']= $data[0]['id'];
        $map['type']=$_REQUEST["type"];
        $list=db('area')->where($map)->select();
        echo json_encode($list);
    }


    public function ajax_uploader($dir='admin'){
        header("Content-type:text/html;charset=utf-8");

        // 获取表单上传文件
        $request = request();
        $post = $request->post();
        $get = $request->get();  //print_r($get); die;

        if(!empty($get['dir'])) {
            $udir = ROOT_PATH .'admin'.DS.'uploads'. DS .$get['dir'];
        }else{
            $udir =  ROOT_PATH .'admin'.DS.'uploads';
        }

        $files = request()->file('');
        if (!file_exists($udir)) {
            @mkdir($udir,0777,true);
        }

        //print_r($files); print_r($post); print_r($_FILES);  die;
        foreach($_FILES as $file){
            $fskey = key($file);
        }

        foreach($files as $file){
            // 移动到框架应用根目录/uploads/public/ 目录下
            $info = $file->move($udir);
            if($info){
                //$path = 'uploads'. DS . $info->getSavename();

                if(!empty($get['dir'])) {
                    $path = 'uploads'. DS .$get['dir']. DS .$info->getSavename();
                }else{
                    $path = 'uploads'. DS . $info->getSavename();
                }
            }else{
                // 上传失败获取错误信息
                return $this->error($file->getError()) ;
            }
            //print_r($path); die; 'sname' => basename($_FILES[$fskey]['name']),
            $data = ['path' => $path,  'name' => basename($path), 'time' => date('Y-m-d H:i:s') ];
            $id = db('file')->insert($data,false,true);
        }

        $server = $request->server();
        $res = ['data'=>['addr' =>'http://'.$server['SERVER_NAME'].'/'.$path,'id'=>$id],'success'=>true];
        echo json_encode($res,true);
    }

    public function ajax_vidioUploader($dir='admin'){
        header("Content-type:text/html;charset=utf-8");

        // 获取表单上传文件
        $request = request();
        $post = $request->post();
        $get = $request->get();  //print_r($get); die;

        if(!empty($get['dir'])) {
            $udir = ROOT_PATH .'admin'.DS.'uploads'. DS .$get['dir'];
        }else{
            $udir =  ROOT_PATH .'admin'.DS.'uploads';
        }

        $files = request()->file('');
        if (!file_exists($udir)) {
            @mkdir($udir,0777,true);
        }

        //print_r($files); print_r($post); print_r($_FILES);  die;
        foreach($_FILES as $file){
            $fskey = key($file);
        }

        foreach($files as $file){
            // 移动到框架应用根目录/uploads/public/ 目录下
            $info = $file->move($udir);
            if($info){
                //$path = 'uploads'. DS . $info->getSavename();

                if(!empty($get['dir'])) {
                    $path = 'uploads'. DS .$get['dir']. DS .$info->getSavename();
                }else{
                    $path = 'uploads'. DS . $info->getSavename();
                }
            }else{
                // 上传失败获取错误信息
                return $this->error($file->getError()) ;
            }
            //print_r($path); die; 'sname' => basename($_FILES[$fskey]['name']),
            $data = ['path' => $path,  'name' => basename($path), 'time' => date('Y-m-d H:i:s') ];
            $id = db('file')->insert($data,false,true);
        }

        $server = $request->server();
        $res = ['data'=>['addr' =>'http://'.$server['SERVER_NAME'].'/'.$path,'id'=>$id],'success'=>true];
        echo json_encode($res,true);
    }

}
