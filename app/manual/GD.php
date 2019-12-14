<?php


namespace app\manual;

use app\interfaces\Base;

class GD implements Base
{
    public function index()
    {
//        $this->createEmpty();
//        $this->createEmptyPic();
//        $this->createFromString();
//        $this->test();
//        $this->createFromString2();
//        $this->lineAndFill();
        $this->touming();
    }
    /**
     * imagecreatetruecolor //创建一张空白的
     * imagecolorallocate分配给这幅图片颜色
     * imagefill 给图片填充颜色
     * imagepng 如果不加图片地址，则是输出图片到浏览器，前提是加header
     * imagedestroy 销毁文件资源
     * imageline 划线
     * imagestring 水平地画一行字符串，而且不支持中文，所以尽量不要用
     * imagesx 图片的宽度
     * imagesy 图片的高度
     * imagecopyresampled //重新采样图片并重新绘制
     *
     */
    /**
     * 创建一张空白的图片
     */
    public function createEmpty()
    {
        $dir = dirname(dirname(__DIR__));
        $fileName = $dir . '/image/little.png';
        $pic = imagecreatetruecolor(400, 600);
        $white = imagecolorallocate($pic, 255, 255, 255);
        $black = imagecolorallocate($pic, 0, 0, 0);
        $black2 = imagecolorallocatealpha($pic, 0, 0, 0, 0.2);
        $pick = imagecolorallocate($pic, 212, 36, 98);
        imagefill($pic, 0, 0, $white);
        imageline($pic, 0, 0, 400, 600, $black);
        imageline($pic, 0, 600, 400, 0, $black);
        imagestring($pic, 30, 0, 0, 'imagestring', $pick);
        //处理上面的windows图,重新采集某个尺寸
        $little = imagecreatefrompng($fileName);
        $x = imagesx($little);
        $y = imagesy($little);
        $new = imagecreatetruecolor(50, 50);
        imagecopyresampled($new, $little, 0, 0, 50, 50, 50, 50, 50, 50);
        imagecopy($pic, $new, 175, 125, 0, 0, 50, 50);
        //处理马图,直接缩放了
        $ma = imagecreatefromjpeg($dir . '/image/ma.jpeg');
        $new_ma = imagecreatetruecolor(50, 50);
        imagecopyresized($new_ma, $ma, 0, 0, 0, 0, 50, 50, 887, 1024);
        imagecopy($pic, $new_ma, 20, 275, 0, 0, 50, 50);
        //上面两种比较麻烦，而且必须重新生成.imagecopy可以对原图素材裁剪,imagecopymerge可以对原图进行缩放并且合并到dst上,pct是合并的程度，0直接是透明的了
        imagecopy($pic, $little, 175, 425, 60, 60, 50, 50);
        imagecopymerge($pic, $new_ma, 330, 275, 0, 0, 50, 50, 20);
        //添加文字
        //首先需要获取文字box的尺寸用于在图中定位
        $size = imagettfbbox(18, 0, $dir . '/arial.ttf', '文字测试大幅度');

        imagepng($pic, 'pic.png');
        imagedestroy($little);
        imagedestroy($new);
        imagedestroy($pic);
    }

    /**
     *  创建一张空白图片
     */
    public function createEmptyPic()
    {
        $pic = imagecreatetruecolor(400, 600);
        $pic_x = imagesx($pic);
        $pic_y = imagesy($pic);
        $red = imagecolorallocate($pic, 172, 16, 16);
        $white = imagecolorallocate($pic, 255, 255, 255);
        imagefill($pic, 0, 0, $white);
        //画一个圆
        imagefilledellipse($pic, 200, 300, 200, 200, $red);
        imagepng($pic, 'mypic.png');
        imagedestroy($pic);

    }

    /**
     * 创建图片
     * 如果图片字符串信息不是一个图片的格式，那么是创建不成功的
     */
    public function createFromString2()
    {
//        $string = file_get_contents('mypic.png');
//        $pic = imagecreatefromstring($string);
//        var_dump($pic);
////        var_dump($string);
    }

    /**
     * 如果没有对应的图片创建流的方法，可以从图片的数据字符串中创建
     */
    public function createFromString()
    {
        $string = file_get_contents('shan.jpg');
//        $pic = imagecreatefromjpeg('shan.jpg');
        $pic = imagecreatefromstring($string);
        $new = imagecreatetruecolor(400, 800);
        $white = imagecolorallocate($new, 255, 255, 255);
        imagefill($new,0,0,$white);
        imagecopyresized($new,$pic,0,0,0,0,400,300,imagesx($pic),imagesy($pic));
        imageflip($new,IMG_FLIP_VERTICAL);
        imagecolortransparent($new,$white);
        imagepng($new,'newshan.png');
        imagefill($new, 0, 0, $white);
        imagecopyresized($new, $pic, 0, 0, 0, 0, 400, 300, imagesx($pic), imagesy($pic));
        imagepng($new, 'newshan.png');
        imagedestroy($pic);
        imagedestroy($new);
    }

    /**
     * 测试函数
     */
    public function test()
    {
//        $getSize = getimagesize('newshan.png');
//        var_dump($getSize);
//        $string = file_get_contents('shan.jpg');
//        $size = getimagesizefromstring($string);
//        var_dump($size);
        //  创建图像
//        $im = imagecreatetruecolor(200, 200);
//        $white = imagecolorallocate($im,255,255,255);
//        imagefill($im,0,0,$white);
//
//// 启用混色模式
//        imagealphablending($im, true);
//
//// 画一个正方形
//        imagefilledrectangle($im, 30, 30, 70, 70, imagecolorallocate($im, 255, 0, 0));
//
//// 输出
//        header('Content-type: image/png');
//
//        imagepng($im);
//        imagedestroy($im);
        // 创建一个 200X200 的图像
//        $img = imagecreatetruecolor(200, 200);
//// 分配颜色
//        $white = imagecolorallocate($img, 255, 255, 255);
//        $black = imagecolorallocate($img, 0, 0, 0);
//        imagefill($img,0,0,$white);
//// 画一个黑色的圆
//        imagearc($img, 100, 100, 150, 150, 0, 360, $black);
//        imagecolordeallocate($img,$black);
//        imagearc($img, 100, 100, 50, 50, 0, 360, $black);
//// 将图像输出到浏览器
//        header("Content-type: image/png");
//        imagepng($img);
//// 释放内存
//        imagedestroy($img);

        /**
         * 研究 imagecopy,imagecopymerge,imagecopymergegray,imagecopyresized,imagecopyresampled图像拷贝函数
         */
//        $img = imagecreatetruecolor(800, 600);
//        $white = imagecolorallocate($img, 255, 255, 255);
//        imagefill($img, 0, 0, $white);
//        $shan = imagecreatefromjpeg('shan.jpg');
//        $shan_x = imagesx($shan);
//        $shan_y = imagesy($shan);
//        imagecopymergegray($img,$shan,0,0,0,0,imagesx($shan),imagesy($shan),100);
        //        imagecopymergegray($img,$shan,0,0,0,0,50,50,100);
        //下面三个都是拷贝图像的一部分,不能调整大小
//        imagecopy($img,$shan,0,0,0,0,800,600);
//        imagecopymerge($img,$shan,0,0,0,0,800,600,80); //可以设置透明度
//        imagecopymergegray($img,$shan,0,0,0,0,$shan_x,$shan_y,80); //可以设置透明度
        //重采样图片的一部分并调整大小,这个也实现了大小变换,而且清晰度比较高
//        imagecopyresampled($img,$shan,0,0,0,0,500,500,$shan_x,$shan_y);
        //copy图像的一部分并调整大小
//        imagecopyresized($img,$shan,0,0,0,0,500,500,$shan_x,$shan_y);

//        header('Content-type: image/png');
//        imagepng($img);
//        imagedestroy($img);

        /**
         * 画线和画线的样式
         */
        header("Content-type: image/png");
        $img = @imagecreatetruecolor(600, 400) or die('创建目标图像失败');
        $bg = imagecolorallocate($img, 255, 255, 255);
        $red = imagecolorallocate($img, 255, 0, 0);
        $blue = imagecolorallocate($img, 0, 0, 255);
        imagefill($img, 0, 0, $bg);
        $style = [$red, $red, $red, $bg, $bg, $bg];
        imagesetstyle($img, $style);
        imagesetthickness($img, 5);
        imageline($img, 0, 0, 600, 400, IMG_COLOR_STYLED);
        imageline($img, 0, 400, 600, 0, IMG_COLOR_STYLED);
        $styleBlue = [$blue, $blue, $blue, $blue, $bg, $bg, $bg];
        imagesetstyle($img, $styleBlue);
        imagearc($img, 300, 200, 150, 150, 0, 360, IMG_COLOR_STYLED);
        imagesetstyle($img, [$red, $red, $red]);
        imageline($img, 0, 0, 100, 20, IMG_COLOR_STYLED);
        imagestring($img, 15, 0, 0, 'ffdsfdsfdsdsfds', $blue);
        imagestringup($img, 15, 0, 60, 'fdfds234323243232', $blue);

        imagepng($img);
        imagedestroy($img);
    }

    /**
     *  画线并且填充
     */
    public function lineAndFill()
    {
        // 创建图像
        $image = imagecreatetruecolor(300, 200);

        // 分配一些颜色
        $white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
        $gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
        $darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
        $navy = imagecolorallocate($image, 0x00, 0x00, 0x80);
        $darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
        $red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
        $darkred = imagecolorallocate($image, 0x90, 0x00, 0x00);
        imagefill($image, 0, 0, $white);
        imagefilledrectangle($image, 0, 0, 30, 30, $red);
        imagefilledarc($image, 100, 100, 50, 50, 0, 360, $navy, IMG_ARC_PIE);
        imagefilledellipse($image, 150, 150, 100, 60, $red);
        imagefilter($image, IMG_FILTER_SMOOTH, 10);

//        // 创建 3D 效果
//        for ($i = 60; $i > 50; $i--) {
//            imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
//            imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
//            imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
//        }
//
//        imagefilledarc($image, 50, 50, 100, 50, 0, 45, $navy, IMG_ARC_PIE);
//        imagefilledarc($image, 50, 50, 100, 50, 45, 75 , $gray, IMG_ARC_PIE);
//        imagefilledarc($image, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE);
        imagecolortransparent($image, $white);

        // 输出图像
        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);

    }

    /**
     * 生成透明色的图片
     *  方法一:
     *  这种情况下必须背景色比如fill的颜色透明度为127，然后下面的方法就可实现透明
     *  imagealphablending($pic,false);
        imagesavealpha($pic,true);
     * 方法二:
     *  imagecolortransparent //将某个颜色定义为透明色
     */
    public function touming()
    {
        $pic = imagecreatetruecolor(400,400);
        $white = imagecolorallocatealpha($pic,255,255,255,127);
        $red = imagecolorallocatealpha($pic,255,0,0,127);
        $blue = imagecolorallocatealpha($pic,0,0,255,127);
        imagefill($pic,0,0,$red);
        $qr = imagecreatefromjpeg('qr.jpg');
        imageline($pic,0,0,100,20,$blue);
//        imagecopy($pic,$qr,0,0,0,0,imagesx($qr),imagesy($qr));
        imagecopyresampled($pic,$qr,50,50,0,0,300,300,imagesx($qr),imagesy($qr));
        imagealphablending($pic,false);
        imagesavealpha($pic,true);
//        header('Content-type: image/png');
        imagepng($pic,'touming.png');
        imagedestroy($qr);
        imagedestroy($pic);
    }


}