<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 800px;">
    <a href="index.php">返回首页</a>
    <hr>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <div class="col-gt-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="请输入您的昵称" name="nickname" >
            </div>
        </div>

        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="请输入内容" name="content"></textarea>
        </div>

        <div class="form-group" style="margin-left: 220px;">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加留言</button>
            </div>
        </div>


    </form>
</div>

</body>
</html