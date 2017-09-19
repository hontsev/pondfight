<?php
namespace app\controller;
use think\Db;
use think\Session;

class User extends \think\Controller
{
    	
	public function login()
	{
		$title="池塘大战 - 登录";
		$this->assign('title',$title);
		if ($this->request->method()=='GET'){
			
			$this->assign('msg','');
			return $this->fetch();
			
		}else if($this->request->method()=='POST'){
			
			$name=input('post.uid');
			$pw=input('post.upw');
			
			Db::connect();
			$res=Db::query('select id,pw,avatar from user where name=?',[$name]);
			//dump($res);
			if(sizeof($res)<=0){
				$this->assign('msg','用户不存在');
				return $this->fetch();
			}else if($res[0]['pw']!=$pw){
				$this->assign('msg','密码错误');
				return $this->fetch();
			}else{
				//success
				Session::set('uid',$res[0]['id']); 
				Session::set('uname',$name); 
				Session::set('uavatar',$res[0]['avatar']);
				return $this->redirect('index/index');
			}
			return $res;			
		}

	}
	
	public function register()
	{
		$title="池塘大战 - 注册";
		$this->assign('title',$title);
		
		if ($this->request->method()=='GET'){
			
			$this->assign('msg','');
			return $this->fetch();
			
		}else if($this->request->method()=='POST'){
			
			$name=input('post.uid');
			$pw=input('post.upw');
			$pw2=input('post.upw2');
			
			if(strlen($name)<=0 || strlen($pw)<=0 || strlen($pw2)<=0){
				
				$this->assign('msg','请将注册信息输入完整！');
				return $this->fetch();
			}
			if($pw!=$pw2){
				$this->assign('msg','两次密码不一致');
				return $this->fetch();
			}
			
			Db::connect();
			$res=Db::query('select id from user where name=?',[$name]);
			
			if(sizeof($res)>0){
				$this->assign('msg','该用户已存在');
				return $this->fetch();
			
			}else{
				//success
				$avatar="/public/static/avatar_default.jpg";
				Db::execute('insert into user (name,pw,avatar) values (?, ?,?)',[$name,$pw,$avatar]);
				$uid=Db::query('select max(id) id from user'); 
				Session::set('uid',$uid); 
				Session::set('uname',$name);
				Session::set('uavatar',$avatar);
				return $this->redirect('Index/index');
			}
			return $res;
			
		}
		return $this->fetch();
	}
	
	public function logout()
	{
		Session::delete('uid');
		Session::delete('uname');
		Session::delete('uavatar');
		return $this->redirect('user/login');
	}
	
	public function index(){
		return $this->redirect('user/login');
	}
	
}
