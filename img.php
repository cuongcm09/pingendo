<?php
/*function getRandomFromArray($ar) {
mt_srand( (double)microtime() * 1000000 );
$num = array_rand($ar);
return $ar[$num];
}*/
function getImageFromArray($ar,$num) {
$image = array();
for($i=0;$i<$num;$i++)
{
$image[$i] = $ar[$i];
}
return $image;
}




 
function getImagesFromDir($path) {
$images = array();
if ( $img_dir = @opendir($path) ) {
while ( false !== ($img_file = readdir($img_dir)) ) {
// checks for gif, jpg, png
if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
$images[] = $img_file;
}
}
closedir($img_dir);
}
return $images;
}
 
$root = '';
// nếu folder images không phải là thư mục con của đường dẫn file thì bạn phải tạo thế này
//$root = $_SERVER['DOCUMENT_ROOT'];
$path = 'images/';
 
//lấy danh sách hình ảnh từ đường dẫn
$imgList = getImagesFromDir($root . $path);
 

 
 $img =  getImageFromArray($imgList,4);
?>

<img src="<?php echo $path . $img[0] ?>" alt=""  width="100" height="100"/>
<img src="<?php echo $path . $img[1] ?>" alt="" width="100" height="100"/>
<img src="<?php echo $path . $img[2] ?>" alt="" width="100" height="100"/>
<img src="<?php echo $path . $img[3] ?>" alt="" width="100" height="100"/>