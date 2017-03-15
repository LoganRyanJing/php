<?php

class shop_exam
{
	public $G;

	public function __construct(&$G)
	{
		$this->G = $G;
		$this->pdosql = $this->G->make('pdosql');
		$this->sql = $this->G->make('sql');
		$this->db = $this->G->make('pepdo');
		$this->pg = $this->G->make('pg');
		$this->ev = $this->G->make('ev');
	}

	//获取店铺列表
	//参数：无
	//返回值：店铺列表
	public function getShopList()
	{
		$data = array(false,'shop','1',false,'shopid ASC');
		$sql = $this->pdosql->makeSelect($data);
		return $this->db->fetchAll($sql,'shopid');
	}

	//按页获取店铺列表
	//参数：无
	//返回值：店铺列表
	public function getShopListByPage($page,$number = 20)
	{
		$data = array(
			'select' => false,
			'table' => 'shop',
			'query' => 1,
			'index' => 'shopid'
		);
		$r = $this->db->listElements($page,$number,$data);
		return $r;
	}

	//根据店名查询
	//参数：店名字符串
	//返回值：该店名信息数组
	public function getShopByName($shop)
	{
		$data = array(false,'shop',array(array("AND","shop = :shop",'shop',$shop)),false,false,false);
		$sql = $this->pdosql->makeSelect($data);
		return $this->db->fetch($sql);
	}

	//根据ID获取店名信息
	//参数：店名ID
	//返回值：该店名信息数组
	public function getShopById($shopid)
	{
		$data = array(false,'shop',array(array("AND","shopid = :shopid",'shopid',$shopid)));
		$sql = $this->pdosql->makeSelect($data);
		return $this->db->fetch($sql);
	}

	//修改店铺信息
	//参数：店铺ID,要修改的信息
	//返回值：true
	public function modifyShop($shopid,$args)
	{
		$data = array('shop',$args,array(array("AND","shopid = :shopid",'shopid',$shopid)));
		$sql = $this->pdosql->makeUpdate($data);
		$this->db->exec($sql);
		return true;
	}

	//增加店铺
	//参数：要添加的店铺的信息数组
	//返回值：店铺ID
	public function addShop($args)
	{
		$data = array(false,'shop',array(array("AND","shopid = :shopid",'shopid',$args['areacode'])));
		$sql = $this->pdosql->makeSelect($data);
		if($this->db->fetch($sql))return false;
		$data = array('shop',$args);
		$sql = $this->pdosql->makeInsert($data);
		$this->db->exec($sql);
		return $this->db->lastInsertId();
	}

	//删除店铺
	//参数：店铺ID
	//返回值：受影响的记录数
	public function delShop($id)
	{
		$data = array('area',array(array("AND","shopid = :shopid",'shopid',$id)));
		$sql = $this->pdosql->makeDelete($data);
		$this->db->exec($sql);
		return $this->db->affectedRows();
	}
}

?>
