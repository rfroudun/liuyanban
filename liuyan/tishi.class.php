<?php
// 创建类：用来提示并且放回指定页面
class tishi{
    /**
     * 创建方法实现提示和返回指定页面
     * @param $tishi 提示的内容
     * @param $url   返回的页面
     */
    public function ts($tishi,$url){
        $str=<<<str
<script>
alert("$tishi");
location.href="{$url}";
</script>
str;
echo $str;
    }
}





