<?php
namespace app\controller;
use think\Session;
use think\Request;
use think\Db;
class Pond extends \think\Controller
{
	
	public function pondtest(){
		
		$uname=Session::get('uname');
		if($uname==null){
			return $this->redirect('index/user/login');
		}else{
			$title="池塘大战 - 训练塘";
			$this->assign('title',$title);
			$this->assign('uname',$uname);
			$this->assign('uavatar',Session::get('uavatar'));
			
			if(Request::instance()->has("sid","post")){
				
				$sid=input("sid");
				// init with exist duck
				$res=Db::query("select id,name,script,isBlock from duck where id=?",[$sid]);
				if(sizeof($res)>0){
					
					//$this->assign('sid',$sid);
					$this->assign('sname',$res[0]['name']);
					$this->assign('script',$res[0]['script']);
					$this->assign('isBlock',$res[0]['isBlock']);
					
				}else{
					// empty duck
					//$this->assign('sid','');
					$this->assign('sname','');
					$this->assign('script','');
					$this->assign('isBlock',1);
				}
				
			}else{
				
				// empty duck
				//$this->assign('sid','');
				$this->assign('sname','');
				$this->assign('script','');
				$this->assign('isBlock',1);
				
			}
			
			
			return $this->fetch();
		}
		
	}
	
	public function replaceEnter($str){
		$res=$str;
		$res=str_replace("\r", "\\r", $res);
		$res=str_replace("\n", "\\n", $res);
		return $res;
	}
	
	public function pondmatch(){
		
		$uname=Session::get('uname');
		if($uname==null  ){
			return $this->redirect('index/user/login');
		}else if(!Request::instance()->has("id1")){
			return $this->redirect('index/index/ducklist');
		}
		else{
			
			$title="池塘大战 - 比赛";
			$this->assign('title',$title);
			$this->assign('uname',$uname);
			$this->assign('uavatar',Session::get('uavatar'));
			
			$id1=input("id1");
			$tinfo=Db::query("select name,script,isBlock from duck where id=? limit 1",[$id1]);
			$this->assign('id1',$id1);
			$this->assign('name1',$tinfo[0]['name']);
			$this->assign('script1',$this->replaceEnter($tinfo[0]['script']));
			$this->assign('isBlock1',$tinfo[0]['isBlock']);
			
			$id2=input("id2");
			$tinfo=Db::query("select name,script,isBlock from duck where id=? limit 1",[$id2]);
			$this->assign('id2',$id2);
			$this->assign('name2',$tinfo[0]['name']);
			$this->assign('script2',$this->replaceEnter($tinfo[0]['script']));
			$this->assign('isBlock2',$tinfo[0]['isBlock']);
			
			
			
			return $this->fetch();
		}
		
	}
	
	public function submitMatchResult(){
		
		if(Request::instance()->has("id1","post")){
			
			$player1=input("id1");
			$player2=input("id2");
			$score1=input("score1");
			$score2=input("score2");
			Db::execute("insert into `match`(time,player1,player2,score1,score2) values(?,?,?,?,?)",[date("Y-m-d H:i:s",time()),$player1,$player2,$score1,$score2]);
			if($score1==0 && $score2==1){
				Db::execute("update duck set lose_count=lose_count+1 where id=?",[$player1]);
				Db::execute("update duck set win_count=win_count+1 where id=?",[$player2]);
			}else if($score1==1 && $score2==0){
				Db::execute("update duck set win_count=win_count+1 where id=?",[$player1]);
				Db::execute("update duck set lose_count=lose_count+1 where id=?",[$player2]);
			}else {
				Db::execute("update duck set draw_count=draw_count+1 where id=?",[$player1]);
				Db::execute("update duck set draw_count=draw_count+1 where id=?",[$player2]);
				
			}
			return ['status'=>0];
			
			
		}
		return ['status'=>1];
		
	}
    	
	public function index(){
		return $this->redirect('index/pond/pondtest');

	}
	
	public function saveScript(){
		
		if(Request::instance()->has("sname","post")){
			
			$creater=Session::get("uname");
			$sname=input("sname");
			$script=$this->replaceEnter(input("script"));
			$isBlock=input("isBlock");
			
			Db::execute("update duck set isdelete=1,name=concat(name,' （旧）') where creater=? and name=?",[$creater,$sname]);
			//return  ['status'=>3];
			Db::execute("insert into duck(name,script,creater,createtime,isBlock,win_count,lose_count,draw_count,isdelete) values(?,?,?,?,?,0,0,0,0)",[$sname,$script,$creater,date("Y-m-d H:i:s",time()),$isBlock]);

			
			
			return  ['status'=>0];
			
		}
		
		return  ['status'=>1];
	}
}
