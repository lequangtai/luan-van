<?php
function menuMulti($data, $parent_id = 0, $str ="-|", $select =0){
	foreach ($data as  $val) {
		$id = $val["id"];
		$name = $val["tenloaitin"];

		if($val["id_cha"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti($data, $id, $str."-|");
		}

	}
}

function menuMulti2($datatinh, $parent_id = 0, $str ="-|", $select =0){
	foreach ($datatinh as  $val) {
		$id = $val["id"];
		$name = $val["tentinhthanh"];

		if($val["DMTT_id"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti2($datatinh, $id, $str."-|");
		}

	}
}
function menuMulti3($dataquan, $parent_id = 0, $str ="-|", $select =0){
	foreach ($dataquan as  $val) {
		$id = $val["id"];
		$name = $val["tenquan"];

		if($val["DMTT_id"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti3($dataquan, $id, $str."-|");
		}

	}
}
function menuMulti4($dmmonan, $parent_id = 0, $str ="-|", $select =0){
	foreach ($dmmonan as  $val) {
		$id = $val["id"];
		$name = $val["tenmonan"];

		if($val["DMMA_id"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti($data, $id, $str."-|");
		}

	}
}
function menuMulti11($data, $parent_id = 0, $str ="-|", $select =0){
	foreach ($data as  $val) {
		$id = $val["id"];
		$name = $val["ten_DMMA"];

		if($val["DMMA_id"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti($data, $id, $str."-|");
		}

	}
}

function menuMulti14($data, $parent_id = 0, $str ="-|", $select =0){
	foreach ($data as  $val) {
		$id = $val["id"];
		$name = $val["tendiadiem"];

		if($val["diadiem_id"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti($data, $id, $str."-|");
		}

	}
}






function listCate($data, $parent =0,$str ="-"){
	foreach ($data as  $val) {
		
		$id =$val["id"];
		$name =$val["tenloaitin"];
		if($val["id_cha"] ==$parent){
		echo'
			<tr>';
	        if($str =="-"){

	        	echo' <td><b>'.$str.''.$name.'</b></td>';
	        }else{
	        	echo' <td>'.$str.''.$name.'</td>';
	        }
	       echo'
	       <td style="text-align: center;">
	       <a href="edit/'.$id.'"><i class="fa  fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="delete/'.$id.'"onclick = "return xacnhanxoa (\'Bạn có muốn xóa không?\')"><i class="fa  fa-trash-o"></i></a>

       </td>
    </tr>';
    listCate($data, $id, $str."-|");
		}
	
	}
}
function listCate2($data, $parent =0,$str ="-"){
	foreach ($data as  $val) {
		
		$id =$val["id"];
		$name =$val["tentinhthanh"];
		if($val["DMTT_id"] ==$parent){
		echo'
			<tr>';
	        	echo' <td>'.$str.''.$name.'</td>';
	       echo'
	       <td style="text-align: center;">
	       <a href="edit/'.$id.'"><i class="fa  fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="delete/'.$id.'"onclick = "return xacnhanxoa (\'Bạn có muốn xóa không?\')"><i class="fa  fa-trash-o"></i></a>

       </td>
    </tr>';
    listCate($data, $id, $str."-|");
		}
	
	}
}



function menuMulti1($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tennhomquyen"].'</option>';
	}			
}
function menuMulti5($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["ten_DMMA"].'</option>';
	}			
}
function menuMulti6($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tenmonan"].'</option>';
	}			
}
function menuMulti7($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tendiadiem"].'</option>';
	}			
}
function menuMulti8($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tenquan"].'</option>';
	}			
}
function menuMulti10($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tentinhthanh"].'</option>';
	}			
}
function menuMulti13($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tendiadiem"].'</option>';
	}			
}

?>