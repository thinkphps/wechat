<?php
namespace Web\Controller;

use Think\Controller;
use Common\Controller\BaseController;

/**
 * 网站页面控制器类
 * @author guanxuejun
 *
 */
class IndexController extends BaseController {
	function __construct() {
		parent::__construct();
	}
	
    function index(){
    	// 案例
    	$projects = array(
    		array('id'=>1,'img'=>'images/project/ciiq/ciiq.jpg','href'=>'#', 'title'=>'推动安防产业升级，颠覆对保险箱行业的定义！安防艺术大师横空出世！','summary'=>'<p>传统的行业，传统的渠道，传统的认识，保险箱行业的发展一直都被固有营销模式所禁锢着，与家居生活的发展有着巨大的落差！驰球是如何通过品牌变革重新赢得发展契机的？</p>', 'title2'=>'驰球保险箱的转型之路'),
    		array('id'=>2,'img'=>'images/project/maomaozhu/maomaozhu.jpg','href'=>'#', 'title'=>'一个服装设计师对孩子的爱，但当与市场发生冲撞的时候，如何把握这个火花呢？','summary'=>'<p>挑战：当所有人都在模仿抄袭的时候，当大多数人追赶韩流的时候，市场对这样的产品不知道如何接纳，是不是不够流行？是不是不适合我的孩子？</p>', 'title2'=>'毛毛猪童装'),
    		array('id'=>3,'img'=>'images/project/janus/001.png','href'=>'#', 'title'=>'重新挖掘“豪门”文化，开创门业颠覆之作！','summary'=>'<p>挑战：当亚斯王决定进入高端门业的时候，只有高端的产品是远远不够的，要怎样才能突显自己的价值，并赢得高端消费者的心？</p>', 'title2'=>'亚斯王防盗门的华丽转型！'),
    		array('id'=>4,'img'=>'images/project/hongxin/p53.png','href'=>'#', 'title'=>'家电老品牌的品牌升级！价值的传递，情感的流动！','summary'=>'<p>挑战：红心电器如何挖掘品牌传统？如何俘获新一代人的心？</p>', 'title2'=>'上海红心电器如何解决市场老化的冲突！'),
    		array('id'=>5,'img'=>'images/project/runniang/logo.png','href'=>'#', 'title'=>'高端蜂蜜品牌的深度挖掘！','summary'=>'<p>挑战：消费如何才能接受高品质但价格高的蜂蜜呢？</p>', 'title2'=>'品质的坚守，顶级的奢享！'),
    		array('id'=>6,'img'=>'images/project/jinfang/logo1.png','href'=>'#', 'title'=>'金房','summary'=>'<p>金房</p>', 'title2'=>''),
    		array('id'=>7,'img'=>'images/project/p64.png','href'=>'#', 'title'=>'大众','summary'=>'<p>大众</p>', 'title2'=>''),
    		array('id'=>8,'img'=>'images/project/zhongyi/logo1.png','href'=>'#', 'title'=>'中意','summary'=>'<p>中意</p>', 'title2'=>''),
    		array('id'=>9,'img'=>'images/project/lidelang/logo1.png','href'=>'#', 'title'=>'朝阳产业里的朝阳品牌建设！','summary'=>'<p>挑战：如何摆脱同质化的竞争格局？如何打造有价值观的LED？</p>', 'title2'=>'LED发展的品牌化运营！'),
    	);
    	$this->assign('projects', $projects);
    	$this->assign('WEB_EXT_CFG', C('WEB_EXT_CFG'));
		$this->display();
    }
}