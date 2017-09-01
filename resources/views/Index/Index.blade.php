<!DOCTYPE html>
<html>
<head>
    <title>ADUNOTE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.bootcss.com/foundation/5.5.3/css/foundation.min.css">
    <link rel="stylesheet" href="http://static.runoob.com/assets/foundation-icons/foundation-icons.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/foundation/5.5.3/js/foundation.min.js"></script>
    <script src="https://cdn.bootcss.com/foundation/5.5.3/js/vendor/modernizr.js"></script>
</head>
<body>
<div class="row row-own">
    <div class="medium-12 medium-12 columns nav-sec">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <!-- 如果你不需要标题或图标可以删掉它 -->
                    <h1><a href="#">ADUNOTE</a></h1>
                </li>
                <!-- 小屏幕上折叠按钮: 去掉 .menu-icon 类，可以去除图标。
                如果需要只显示图片，可以删除 "Menu" 文本 -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="left">
                    <li class="active"><a href="#"><i class="fi-home"></i>Home</a></li>
                    <!--  <li><a href="#">Page 1</a></li>
                     <li><a href="#">Page 2</a></li>
                     <li><a href="#">Page 3</a></li>  -->
                </ul>
            </section>
        </nav>
    </div>
</div>
<div class="row row-own">
      
    <div class="medium-2 columns" style="">
           
        <ul class="side-nav">
            <li class="active"><a href="#">LINUX</a></li>
            <li><a href="#">SHELL</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVA</a></li>
            <li><a href="#">NODE.JS</a></li>
            <li><a href="#">JS</a></li>
            <li><a href="#">HTML5</a></li>
            <li><a href="#">KAFKA</a></li>
            <li><a href="#">碎片</a></li>
        </ul>
    </div>
      
    <div class="medium-10 columns" style="">
        @for ($i=0;$i<count($data);$i++)
            <div class="article_sec">
                 
                <div class="title"><a href="{{$data[$i]['guid']}}">{{$data[$i]['post_title']}}</a></div>
                <div class="article-label">发布时间：<span>{{$data[$i]['post_date']}}</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;标签：<span>linux 碎片 SHELL PHP</span></div>
                  <span class="article-desc">{{$data[$i]['post_desc']}}</span>
            </div>
        @endfor
          
    </div>
</div>
<!-- 初始化 Foundation JS -->
<script>
    $(document).ready(function () {
        $(document).foundation();
        // console.log(data);
    })
</script>

</body>
</html>
