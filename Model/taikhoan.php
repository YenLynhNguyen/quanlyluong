<?php
include("test.php");
class Taikhoan extends Ketnoi
{
	public $result=null;
	public $tentk=null;
	public $taikhoan=null;
	public $loai=null;
	public $mk=null;

	public function truyvantaikhoan(){
		$kn=new Ketnoi();
		$kn->connect();
		$this->result=mysql_query("select * from taikhoan");
	}
	public function laydulieutk(){
		if(mysql_num_rows($this->result)>0){
			$row=mysql_fetch_array($this->result);
		}else{
			$row=0;
		}
		return $row;
	}
	public function login(){
		$kn=new Ketnoi();
		$kn->connect();
		$this->result=mysql_query("select MaQ from taikhoan where TenDN='$this->tentk' and MatKhau='$this->mk'");
		$row=mysql_fetch_array($this->result);
		return $row['MaQ'];
	}
	public function tt(){
		$kn=new Ketnoi();
		$kn->connect();
		$this->result=mysql_query("select TrangThai from taikhoan where TenDN='$this->tentk' and MatKhau='$this->mk'");
		$row=mysql_fetch_array($this->result);
		return $row['TrangThai'];
	}
}
?>