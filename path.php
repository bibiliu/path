//遍历目录
<?php
	$path="D:/itcast";
	$handle=opendir($path);
	while(false!==($file=readdir($path))){
		echo"$file<br/>";
	}
	closedir($handle);
?>
//统计目录文件大小
<?php
//定义一个函数统计某个目录下所有文件的大小
	function getDirSize($dirname){
	//初始化一个大小为0
		$dirsize=0;
	//从目录句柄中循环读取条目，且按照系统中的顺序范湖目录中下一个文件的文件名
		wile($filename=reddir($handle)){
			if($filename!="." && $filename!=".."){
				$file=$dirname.'/'.$filename;
				//判断给定文件名是否是一个目录
				if(is_dir($file)){
					//如果是一个目录，则调用函数getDirSize()
					$dirsize+=getDirSize($file);
				}else if{
					//如果不是一个目录，则获取其大小，并且累计加到变量$dirsize
					$dirsize+=filesize($file);
				}
			}
		}
		closedir($handle);//关闭目录句柄
		return $dirsize;//返回累加的大小
	}
	$dirname="D:/itcast";//指定要遍历的目录
	echo $dirname."目录文件的总大小为：".getDirSize($dirname)."B";
?>
//查看磁盘大小可用空间
<?php
	echo disk_total_space("d:");//统计D盘总大小
	echo disk_free_space("d:");//统计D盘空闲大小
?>