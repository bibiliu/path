//文件上传
<?php
//判断文件上传到临时目录是否会出错，如果出错，则输出错误并退出
	if($__FILES['userfile']['error']>0){
		$error_msg='上传错误：';
		switch($__FILES['userfile'['error']]){
			case 1:
			$error_msg.="文件大小超出了php.ini中upload_max_filesize的值";
			break;
			case 2:
			$error_msg.="文件大小超过了表单中max_file_size选项指定的值";
			break;
			case 3:
			$error_msg.="文件只有部分上传";
			break;
			case 4:
			$error_msg.="没有文件上传";
			break;
			case 6:
			$error_msg.="找不到临时文件夹";
			break;
			case 7:
			$error_msg.="文件写入失败";
			break;
			default:
			$error_msg.="未知错误"；
			break;
		}
		echo $error_msg;
		exit;
	}
	//上传到临时目录成功，将其复制到脚本文件所在的uplode文件夹中
	//目标文件夹
	$destination='uplode/'.$__FILES['userfile']['name'];
	if(is_uploaded_file($__FILES['userfile']['tmp_name'])){
		if(move_uploaded_file($__FILES['userfile']['tmp_name'],$destination)){
			echo "上传成功";
		}
	}
?>