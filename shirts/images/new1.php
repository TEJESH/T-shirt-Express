<?
include('SimpleImage.php');
merge('1.jpg', '2.jpg', 'merged.jpg');

function merge($filename_x, $filename_y, $filename_result) {

 // Get dimensions for specified images

 list($width_x, $height_x) = getimagesize($filename_x);
//list($width_y, $height_y) = getimagesize($filename_y);

/////////$filename_y->resize(100,100);


$image = new SimpleImage(); 
$image->load($filename_y); 
$image->resize(150,150);
$image->save('picture2.jpg'); 
//$image->resizeToHeight(200); 
//$image->save('picture3.jpg'); 



$width_y=150;
$height_y=150;



 // Create new image with desired dimensions

 $image_n = imagecreatetruecolor($width_x, $height_x);

 // Load images and then copy to destination image

 $image_x = imagecreatefromjpeg($filename_x);
 $image_y = imagecreatefromjpeg('picture2.jpg');

 imagecopy($image_n, $image_x, 0, 0, 0, 0, $width_x, $height_x);
                        //  top, left, border,border
 imagecopy($image_n, $image_y, 170, 120, 0, 0, $width_y, $height_y);

 // Save the resulting image to disk (as JPEG)

 imagejpeg($image_n, $filename_result);

 // Clean up

 imagedestroy($image_n);
 imagedestroy($image_x);
 imagedestroy($image_y);

}





?>
