<?php
namespace app\controller;
use think\Session;
use think\Db;

class Index extends \think\Controller
{
    	
	public function index()
	{

		return $this->redirect('index/userinfo');
	}
	
	
	public function ducklist(){
		
		$uname=Session::get('uname');
		if($uname==null){
			return $this->redirect('user/login');
		}else{
			$title="池塘大战 - 脚本列表";
			$this->assign('title',$title);
			$this->assign('uname',$uname);
			$this->assign('uavatar',Session::get('uavatar'));
			
			$ducks=Db::table('duck')->field("id,name,creater,createtime,win_count,lose_count,win_count*100/(lose_count+win_count+draw_count) as win_rate")->where("isdelete","0")->order("createtime desc")->paginate(10);
			
			$myducks=Db::query('select id,name from duck where creater=? and isdelete=0 order by id desc',[$uname]);
			
			$this->assign('myducks',$myducks);
			$this->assign('ducks',$ducks);
			return $this->fetch();
		}
		
	}
	
	public function userinfo(){

		$uname=Session::get('uname');
		if($uname==null){
			return $this->redirect('user/login');
		}else{
			if(sizeof($this->request->route())<=0 || $this->request->route()['tname']==$uname){
				//self
				$name=$uname;
				$self=1;
				
			}else{
				
				//other one
				$name=$this->request->route()['tname'];
				$self=0;
			}
			
			$recentinfo=Db::query("select m.time,m.score1,m.score2,d1.name duck1,d2.name duck2,d1.creater creater1,d2.creater creater2,u1.avatar from `match` m join duck d1 on m.player1=d1.id join duck d2 on m.player2=d2.id join `user` u1 on u1.name=d1.creater where d1.creater=? or d2.creater=? order by m.time desc limit 10",[$name,$name]);
			for($i=0;$i<sizeof($recentinfo);$i++){
				$score1=$recentinfo[$i]['score1'];
				$score2=$recentinfo[$i]['score2'];
				$player1=$recentinfo[$i]['creater1'];
				$player2=$recentinfo[$i]['creater2'];
				$duck1=$recentinfo[$i]['duck1'];
				$duck2=$recentinfo[$i]['duck2'];
				$str="";
				if($player1==$name){
					// self action
					$str="你"."用你的 ".$duck1." 挑战了".$player2."的 ".$duck2."，结果";
					if($score1<$score2){
						//lose
						$str=$str."你不幸战败了。";
					}else if($score1>$score2){
						//win
						$str=$str."你击败了对方。恭喜！";
					}else{
						//draw
						$str=$str."你们打成了平手。";
					}
				}else if($player2==$name){
					// others action
					$str="用户 ".$player1." 用 ".$duck1." 向你的 ".$duck2."发起了挑战，结果";
					if($score1<$score2){
						//lose
						$str=$str."并没能打败你。";
					}else if($score1>$score2){
						//win
						$str=$str."把你击败了。";
					}else{
						//draw
						$str=$str."你们打成了平手。";
					}
				}
				$recentinfo[$i]['infomation']=$str;
				
			}
			
			$ducknum=Db::query("select count(id) ducknum from duck where creater=?",[$name])[0]['ducknum'];
			$matchnum=Db::query("select sum(win_count+lose_count+draw_count) matchnum from duck where creater=?",[$name])[0]['matchnum'];
			if($matchnum==null)$matchnum=0;
			$winrate=Db::query("select sum(win_count)/if(sum(lose_count+win_count+draw_count)>0,sum(lose_count+win_count+draw_count),1) winrate from duck where creater=?",[$name])[0]['winrate'];
			$winrate=number_format($winrate*100,1);
			$this->assign('recentinfo',$recentinfo);
			$this->assign('ducknum',$ducknum);
			$this->assign('matchnum',$matchnum);
			$this->assign('winrate',$winrate);
			
		
			$title="池塘大战 - 用户信息";
			$this->assign('title',$title);
			$this->assign('uname',$uname);
			$this->assign('uavatar',Session::get('uavatar'));
			$this->assign('self',$self);
			$this->assign('name',$name);
			
			$uinfo=Db::query('select introduce from user where name=?',[$name]);
			$this->assign('introduction',$uinfo[0]['introduce']);
			
			return $this->fetch();
		}
		
	}
	
	
}
