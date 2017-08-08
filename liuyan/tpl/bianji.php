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

        <input class="form-control" style="width: 800px;margin: 0 0 20px -15px;" type="text" value="<?php echo $this->data[$_GET['id']]['nickname'] ?>" readonly name="nickname">

        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="请输入内容" name="content"><?php echo $this->data[$_GET['id']]['content'] ?></textarea>
        </div>

        <div class="form-group" style="margin-left: 220px;">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">修改留言</button>
            </div>
        </div>


    </form>
</div>

</body>
</html

