<?php 

var_dump(strpos('会议','会议'));

die;

echo base64_decode('bmluZ25pbmcuZ3VvQHNlLmNvbQ');die;

$data = array(
	'name'			=>'whh',
	'mobile'		=>18810441527,
	'openid'		=>'oCVS31Gcl8spsRm95k6rS6_S1vtc',
);
 echo json_encode($data);

die; 
$maRes[] = [
	'post'=>array(
		'touser'=>'o1A0dt7gushjmErymkprgekDaO10',
		'template_id'=>'NlIjhYTyuccysSNAYigjtphrFWt7H2AyurUpeD3DoGY',
		'url'=>'www.baidu.com',
		'data'=>[],
	),
	'remark' =>randstrpay(),
	'main_id' =>8609,
	'wx_id' =>1393,
	'appid' =>'wx23feb26aaa154888',
];
 echo json_encode($maRes);
 
 
echo urlencode('https://wechat.schneider-electric.cn/api/schneider-wxcallback/send-msg-info');
function randstrpay($length=32) {
       $rand='';
       $randstr= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
       $max = strlen($randstr)-1;
       mt_srand((double)microtime()*1000000);
       for($i=0;$i<$length;$i++) {
           $rand.=$randstr[mt_rand(0,$max)];
       }
       return $rand;
   }

die;



$res = array(
	array('id'=>1,'pid'=>0,'name'=>'a'),
	array('id'=>2,'pid'=>1,'name'=>'b'),
	array('id'=>3,'pid'=>1,'name'=>'c'),
	array('id'=>4,'pid'=>2,'name'=>'d'),
	array('id'=>5,'pid'=>2,'name'=>'e'),
	array('id'=>6,'pid'=>3,'name'=>'f'),
	array('id'=>7,'pid'=>3,'name'=>'g'),
	array('id'=>8,'pid'=>0,'name'=>'h'),
	array('id'=>9,'pid'=>8,'name'=>'h'),
	array('id'=>10,'pid'=>8,'name'=>'i'),
);
$items = array(

    1 => array('id' => 1, 'pid' => 0, 'name' => '江西省'),

    2 => array('id' => 2, 'pid' => 0, 'name' => '黑龙江省'),

    3 => array('id' => 3, 'pid' => 1, 'name' => '南昌市'),

    4 => array('id' => 4, 'pid' => 2, 'name' => '哈尔滨市'),

    5 => array('id' => 5, 'pid' => 2, 'name' => '鸡西市'),

    6 => array('id' => 6, 'pid' => 4, 'name' => '香坊区'),

    7 => array('id' => 7, 'pid' => 4, 'name' => '南岗区'),

    8 => array('id' => 8, 'pid' => 6, 'name' => '和兴路'),

    9 => array('id' => 9, 'pid' => 7, 'name' => '西大直街'),

    10 => array('id' => 10, 'pid' => 8, 'name' => '东北林业大学'),

    11 => array('id' => 11, 'pid' => 9, 'name' => '哈尔滨工业大学'),

    12 => array('id' => 12, 'pid' => 8, 'name' => '哈尔滨师范大学'),

    13 => array('id' => 13, 'pid' => 1, 'name' => '赣州市'),

    14 => array('id' => 14, 'pid' => 13, 'name' => '赣县'),

    15 => array('id' => 15, 'pid' => 13, 'name' => '于都县'),

    16 => array('id' => 16, 'pid' => 14, 'name' => '茅店镇'),

    17 => array('id' => 17, 'pid' => 14, 'name' => '大田乡'),

    18 => array('id' => 18, 'pid' => 16, 'name' => '义源村'),

    19 => array('id' => 19, 'pid' => 16, 'name' => '上坝村'),

);
echo json_encode(get_attr($res,0));die;

echo json_encode(genTree9($res));


function testdigui2($data,$deptid=0){
	    $child = [];
	 
	    foreach ($data as $key => $value) {
	        if($value['pid'] == $deptid){
	            $child[$value['id']] = $value;
	            //去掉自己 自己不可能是自己儿子的儿孙
	            unset($data[$key]);
				//var_dump($value);die;
	            $child[$value['id']]['children'] = testdigui2($data,$value['id']);
	        }
	    }
	    return $child;
	}

	function get_attr($a,$pid){ 
		$tree = array();                                //每次都声明一个新数组用来放子元素 
		foreach($a as $v){ 
			if($v['pid'] == $pid){                      //匹配子记录 
				$v['children'] = get_attr($a,$v['id']); //递归获取子记录 
				if($v['children'] == null){ 
					unset($v['children']);             //如果子元素为空则unset()进行删除，说明已经到该分支的最后一个元素了（可选） 
				} 
				$tree[] = $v;                           //将记录存入新数组 
			} 
		} 
		return $tree;                                  //返回新数组 
	} 

function genTree9($items) {

	
    $tree = array(); //格式化好的树

    foreach ($items as $item){
		
		var_dump($items[$item['pid']]);
        if (isset($items[$item['pid']])){
			
            $items[$item['pid']]['son'][] = &$items[$item['id']];
			var_dump('11111');die;
        }else{
			var_dump(111);die;
            $tree[] = &$items[$item['id']];
		}
	}
    return $tree;

}

die;

// $data = array(
	// "openid"=>'zhiqu-adajdkak22q32qqnaasss',
    // "name"=>"王浩浩",
    // "mobile"=>18810441521,
    // "email"=>'wanghao@scrmtech.com',
	// "company"=>'致趣科技',
	// "state"=>'山西',
	// "role"=>'架构师，设计师或工程师',
	// "trade"=>'酒店与酒店管理',
	// "work"=>'总监',
	// "jobfunction"=>'能源管理',
	// "agree_privacy"=>1,
	// 'type'=>2
// );
// echo json_encode($data);

// die;


$params = array(
	"mid"=>"2351",
    "pky"=>"nT23rPqpisMw8b4I",
    "src"=>"zq_scrm",
    "tim"=>time(),
	"leads_id"=>2432165,
	"field_data"=>array(
        "name"=>"测试-王浩1",
        "mobile"=>"18810441527",
		"member_12792"=>'输入框2',
		"member_12126"=>'下拉列表1',
		"member_12741"=>'复选项--服务器1,复选项--服务器2'
    ),
	"status"=>4
);
ksort($params);
$tokenString = str_replace(['=','&'],['',''],http_build_query($params));
$token = md5($tokenString);
$params['tok']=$token;

echo json_encode($params);
die;
$data[] = array(
	"points"=>10,
    "content"=>json_encode(['id'=>212,"name"=>'登陆商城']),
    "type"=>212,
    "mobile"=>'',
	"openid"=>'oqbI-1GH4jeTy2Rpb5RC0zQPwlnU',
	"flag"=>time(),
	"create_time"=>time()
);
$data[] = array(
	"points"=>10,
    "content"=>json_encode(['id'=>212,"name"=>'登陆商城']),
    "type"=>212,
    "mobile"=>'',
	"openid"=>'oqbI-1GH4jeTy2Rpb5RC0zQPwlnU',
	"flag"=>time(),
	"create_time"=>time()
);

echo json_encode($data);