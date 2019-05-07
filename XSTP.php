<?php
    $folder = "./erweima";   // 文件夹路径
    $files = array();
   $handle = opendir($folder);  // 遍历文件夹
    while(false!==($file=readdir($handle))){
        if($file!='.' && $file!='..'){
    	   $hz=strstr($file,".");
       if($hz==".gif" or $hz==".jpg" or $hz==".JPG"or $hz==".JPEG"or 
       $hz==".PNG"or $hz==".png"or $hz==".GIF") 
    	   {$files[] = $file; }
         }
      }

    if($files){
        foreach($files as $k=>$v){
            echo '<img src="'.$folder."/".$v.'">';  // 循环显示
        }
    }
  ?>