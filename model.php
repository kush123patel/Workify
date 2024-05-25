<?php

class model
{
	
	public $conn="";
	
	function __construct()
	{							//hostname/username/pass/db_name
		$this->conn=new mysqli('localhost','root','','test');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";	  // query
		$run=$this->conn->query($sel);  // query run by conn
		while($fetch=$run->fetch_object()) // fetch data from mysql
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function select_join2($tbl1,$tbl2,$on)
	{
		$sel="select * from $tbl1 join $tbl2 on $on";	  // query
		$run=$this->conn->query($sel);  // query run by conn
		while($fetch=$run->fetch_object()) // fetch data from mysql
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function select_join3($tbl1,$tbl2,$on,$tbl3,$on1)
	{
		$sel="select * from $tbl1 join $tbl2 on $on join $tbl3 on $on1";	  // query
		$run=$this->conn->query($sel);  // query run by conn
		while($fetch=$run->fetch_object()) // fetch data from mysql
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	
	
	// login & data fetch
	function select_where($tbl,$where)
	{
		$sel="select * from $tbl where 1=1";
		$col_arr=array_keys($where);	
		$val_arr=array_values($where);
		$i=0;
		foreach($where as $c)
		{
			$sel.=" and $col_arr[$i]='$val_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // query run by conn
		return $run;
	}
	
	function select_where_multidata($tbl,$where)
	{
		$sel="select * from $tbl where 1=1";
		$col_arr=array_keys($where);	
		$val_arr=array_values($where);
		$i=0;
		foreach($where as $c)
		{
			$sel.=" and $col_arr[$i]='$val_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // query run by conn
		while($fetch=$run->fetch_object()) // fetch data from mysql
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function select_join_where_multidata($tbl1,$tbl2,$on,$where)
	{
		$sel="select * from $tbl1 join $tbl2 on $on where 1=1";
		$col_arr=array_keys($where);	
		$val_arr=array_values($where);
		$i=0;
		foreach($where as $c)
		{
		    $sel.=" and $col_arr[$i]='$val_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // query run by conn
		while($fetch=$run->fetch_object()) // fetch data from mysql
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	function insert($tbl,$data)
	{
		//$data=array("cate_name"=>$cate_name,"cate_des"=>$cate_des)
		$col_arr=array_keys($data);
		$col=implode(",",$col_arr);
		
		$val_arr=array_values($data);
		$val=implode("','",$val_arr);
	
		$ins="insert into $tbl($col) values('$val')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	function update($tbl,$data,$where)
	{
		$col_arr=array_keys($data);
		$val_arr=array_values($data);
		
		$upd="update $tbl set ";
		$j=0;
		$count=count($data);
		foreach($data as $c)
		{
			if($count==$j+1)
			{
			$upd.=" $col_arr[$j]='$val_arr[$j]'";	
			}	
			else
			{
			$upd.=" $col_arr[$j]='$val_arr[$j]',";
			$j++;
			}
		}
		
		$upd.="where 1=1";
		$wcol_arr=array_keys($where);	
		$wval_arr=array_values($where);
		$i=0;
		foreach($where as $c)
		{
			$upd.=" and $wcol_arr[$i]='$wval_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);  // query run by conn
		return $run;
	}
	
	
	function delete_where($tbl,$where)
	{
		$del="delete from $tbl where 1=1";
		$col_arr=array_keys($where);	
		$val_arr=array_values($where);
		$i=0;
		foreach($where as $c)
		{
			$del.=" and $col_arr[$i]='$val_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);  // query run by conn
		return $run;
	}
	
}
include_once('control.php');
// include_once('control.php');

?>