<?php

//创建一个类显示验证码
class yanzheng {
//    创建属性：用来存创建的画布
    private $img;
//    创建方法：显示验证码
    public function show(){
//        发送头部
        header('Content-type:image/png');
//        创建画布并且填充画布
        $this->huabu();
//        在画板里写字
        $this->write();
//        制作干扰
        $this->ganrao();
//        输出验证码
        imagepng($this->img);
//        销毁验证码
        imagedestroy($this->img);
    }
//    创建方法：用来创建画布并且填充画布
    private function huabu(){
//        把创建的画布的值返给$img
        $this->img=imagecreatetruecolor(200,80);
//        给画布设置颜色
        $white = hexdec('#ffffff');
//        填充画布
        imagefill($this->img,0,0,$white);
    }

//        创建一个方法；在画板里写字
    private function write(){
        //4.写字
        $seed = '1234567890qwertyiopasdf4564ghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        for ($i = 0; $i < 4; $i++){
            //文字颜色
            $color = imagecolorallocate($this->img,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
            //文字的x,y坐标
            $y = (80 + 30) / 2;
            $x = 200 / 4 * $i+5;
            //随机文字
            $text = $seed[mt_rand(0,strlen($seed)-1)];
            imagettftext($this->img,30,mt_rand(-40,40),$x,$y,$color,'./font.ttf',$text);
        }
    }

//    创建方法：制作干扰
    private function ganrao(){
        for ($i = 0; $i < 80; $i++){
            $color = imagecolorallocate($this->img,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
            $wh = mt_rand(0,20);
            imageellipse($this->img,mt_rand(0,200),mt_rand(0,80),$wh,$wh,$color);
        }
    }

}

//实例化显示验证码的类
$yz=new yanzheng();
$yz->show();








