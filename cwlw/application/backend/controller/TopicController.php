<?php

namespace app\backend\controller;

use app\backend\controller\BaseController;
use \think\Request;

use \app\backend\model\BaseModel;

class TopicController extends BaseController
{
    private $TopicModel;

    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['id', 'tab', 'title', 'info', 'img', 'vidio', 'img_url', 'vidio_url', 'topic_label', 'openid', 'like', 'comment_count', 'commnet_ids', 'op_user', 'op_time'];
        $this->TopicModel = new BaseModel('topic', $fields, 'id');
    }


    public function index()
    {
        $this->assign(['menutitle' => '话题管理', 'pmenutitle' => '信息管理']);

        $map = [];
        $name = input('param.name');
        if (!empty($name))
            $map['name'] = $name;

        if (!empty(input('param.type')))
            $mapping['type'] = input('param.type');

        if (!empty(input('param.province')))
            $map['province'] = input('param.province');

        if (!empty(input('param.city')))
            $map['city'] = input('param.city');

        if (!empty(input('param.town')))
            $map['town'] = input('param.town');

        $res = $this->TopicModel->getPageList('backend/Topic/Index', 'id,tab,title,info,img,vidio,img_url,vidio_url,topic_label,openid,like,comment_count,commnet_ids,op_user,op_time,img as img_id,(select path from cn_file where id=img limit 1) as img ', $map);
        $this->assign('pageHint', $res['pageHint']);
        $this->assign('pageHtml', $res['pageHtml']);
        $this->assign('total', $res['total']);
        $this->assign('data', $res['data']);


        $server = request()->server();
        $this->assign('serverDddr', 'http://' . $server['SERVER_NAME'] . '/');
        return $this->fetch('index');
    }

    public function add($data = [])
    {
        $request = Request::instance();
        if (empty($data))
            $post = $request->post();
        else
            $post = $data;

        //$server = $request->server();  echo "<pre>"; print_r($server); echo "</pre>";   print_r($server['SERVER_NAME']); die;
        if (empty($post)) {
            $this->assign(['menutitle' => '话题管理', 'pmenutitle' => '信息管理', 'actiontitle' => '新增']);

            return $this->fetch('add');
        } else {

            $post['op_time'] = date('Y-m-d H:i:s');

            if (isset($post['topic_label'])) {
                $labeles = explode($post['topic_label'], ' ');
                $post['topic_label'] = json_encode($labeles, true);
            }

            $post['img'] = !empty($post['img']) ? $post['img'] : 0;
            $id = $this->TopicModel->add($post);

            if (!empty($id)) {
                $this->success('新增成功', 'backend/Topic/Index');
            } else {
                $this->error('新增失败');
            }

            exit();
        }
    }

    public function edit()
    {

    }

    public function del()
    {
        $request = Request::instance();
        $post = $request->post();
        $ids = [$post['code']];
        $res = $this->TopicModel->del($ids);
        if ($res) {
            echo json_encode(['data' => [], 'msg' => '删除成功', 'success' => true], true);
        } else {
            echo json_encode(['data' => [], 'msg' => '删除失败', 'success' => false], true);
        }

        exit();
    }

    public function test()
    {
        $post = [
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/Screenshot_2016-12-13-10-19-12-215.png",
                "title" => "《高山流水》 - 古筝",
                "info" => "高山流水，梅花三弄，夕阳箫鼓，汉宫秋月，阳春白雪，渔樵问答，胡笳十八拍，广陵散，平沙落雁，十面埋伏。",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner6.jpg",
                "nickName" => "张珊珊",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/VID20161029121958.mp4",
                "like" => 595,
                "comment" => 789,
                "op_time" => "2016-12-12"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner2.jpg",
                "title" => "女儿情-西游记 电视剧配乐原声",
                "info" => "九九八十一难，最难过的，其实是女儿国这一关，因为比起其他的艰难困苦来说，此时的唐僧是真的动心了，一句“来生若有缘分”道尽一切，只是为了心中崇高的理想，纵使心动也要断绝柔情继续西行。为国王惋惜，同时也对唐僧充满崇敬，尤其是了解了史上真实的唐玄奘以后，更是觉得此人了不起。",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner5.jpg",
                "nickName" => "麦田的守望者",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E8%BD%A6%E7%AB%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 222,
                "comment" => 789,
                "op_time" => "2016-12-12"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/Screenshot_2016-12-13-10-13-16-926.png",
                "title" => "犯错-双管巴乌",
                "info" => "小哥的声音真好。《一剪梅》改了这么多版，还是这版耐听。如泣如诉，余音袅袅。",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner4.jpg",
                "nickName" => "雨碎江南",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E7%8A%AF%E9%94%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 2113,
                "comment" => 789,
                "op_time" => "2016-12-12"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/Screenshot_2016-12-13-10-13-38-305.png",
                "title" => "车站-双管巴乌",
                "info" => "虽然但现在为止还没有去过彩云之南，但是这支曲子几乎包含了我全部的关于那里的畅想：绿油油的树林，精巧的竹楼，还有美丽的月光……太美了……",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner3.jpg",
                "nickName" => "小丸子",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E8%BD%A6%E7%AB%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 80,
                "comment" => 352,
                "op_time" => "2016-08-12"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner5.jpg",
                "title" => "美丽的神话-孙楠",
                "info" => "自从张艺谋《英雄》之后，国内开始了“拍大片”潮流，05年《无极》《神话》扎堆贺岁，《无极》因为《一个馒头引发的血案》成就了张柏芝谢霆锋的预言片，也算神作。《神话》剧情平平，只留下这首歌，记得这歌05年火了整整一整年啊，我惨绿的高中岁月啊。",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner2.jpg",
                "nickName" => "丶Song",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E8%BD%A6%E7%AB%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 810,
                "comment" => 221,
                "op_time" => "2016-12-13"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner6.jpg",
                "title" => "赛马-二胡独奏",
                "info" => "想起来武林外传里有一集，老白他们挖地道，小六拉这个曲，最后老白掉地道里了哈哈哈哈哈",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/banner1.jpg",
                "nickName" => "狂凝眉",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E8%BD%A6%E7%AB%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 134,
                "comment" => 12,
                "op_time" => "2016-12-12"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/bg0.jpg",
                "title" => "痴情冢-电视剧《新天龙八部》主题曲",
                "info" => "塞上旧约终成空，夜阑魂归应梦同。纵死未肯忘心盟，何妨濡沫泥涂中。雁字依稀相思浓，女儿痴情谁与共？从此相见殊参商，却无画图忆姣容。地匝万芦一鸿起，老翅不回缘情重。碧落黄泉两孤冢，君自南北我西东。”写了个同人，唱起来佶屈聱牙，但似乎比原歌词稍微贴合一点。",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/bg2.jpg",
                "nickName" => "Sarbanes-Oxley",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E8%BD%A6%E7%AB%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 80,
                "comment" => 789,
                "op_time" => "2016-12-12"
            ],
            [
                "img_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/bg01.jpg",
                "title" => "西海情歌-降央卓玛",
                "info" => "前天看了CCTV的top10点播的这首歌，现场版的，感觉歌手很美，歌声也犹如天籁",
                "avatarUrl" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/images/bg2.jpg",
                "nickName" => "Sarbanes-Oxley",
                "video_url" => "http=>//soupu.oss-cn-shanghai.aliyuncs.com/videos/%E8%BD%A6%E7%AB%99-%E5%8F%8C%E7%AE%A1%E5%B7%B4%E4%B9%8C.mp4",
                "like" => 80,
                "comment" => 789,
                "op_time" => "2016-12-12"
            ]
        ];

        foreach($post as  $i => $item) {
            $item['tab'] = 0;
            $this->add($item);
        }
    }


}
