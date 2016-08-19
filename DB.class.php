<?php
class DB{
	public $table='';
	private $pdo=null;
	public function __construct($dsn,$uname,$pwd){
		$this->pdo=new pdo($dsn,$uname,$pwd);
	}
	public function query($fileds='*',$where='1=1'){
		$sql=sprintf('select %s from %s where %s',$fileds,$this->table,$where);
		$sth=$this->pdo->query($sql);
		return $sth->fetchAll(2);
	}
	public function dele($where=false){
		if (!$where) {
            return '筛选条件不能为空！';
        }
		$sql=sprintf('delete from %s where %s',$this->table,$where);
		return $this->pdo->query($sql);
	}
	public function add($data){
		$fields = '';
        $values = '';
        foreach ($data as $k => $v) {
            $fields .= $k . ',';
            $values .='\'' . $v . '\',';
        }
        $fields = rtrim($fields, ',');
        $values = rtrim($values, ',');
        $sql = sprintf('insert into %s(%s) values(%s)', $this->table, $fields, $values);
		return $this->pdo->query($sql);
	} 
	public function edit($data, $where = false) {
        if (!$where) {
            return '筛选条件不能为空！';
        }
        $fields = '';
        foreach ($data as $k => $v) {
            $fields .= sprintf('%s=\'%s\',', $k, $v);
        }
        $fields = rtrim($fields, ',');
        $sql = sprintf('update %s set %s where %s', $this->table, $fields, $where);
        return $this->pdo->query($sql);
    }
}
function M($table){
$db=new DB('mysql:dbname=pdo;charset=utf8;host=127.0.0.1','root','');
$db->table=$table;
return $db;
}
//M('students')->dele('sid=10');