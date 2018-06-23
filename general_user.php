
<html>
<head>
    <title>用户管理界面</title>
    <meta charset="utf-8">
    <style type="text/css">

    
    /* -------------菜单css代码----------begin---------- */
    .menuDiv { 
        border: 2px solid #aac; 
        overflow: hidden; 
        display:inline-block;
        height :100%;
        background-color:#F0F0F0;
        margin-left:0;
        border-radius: 15px;
    }
    
    /* 去掉a标签的下划线 */
    .menuDiv a {
        text-decoration: none;
    }
    
    /* 设置ul和li的样式 */
    .menuDiv ul , .menuDiv li {
        list-style: none;
        margin: 0;
        padding: 0;
    } 
    
    /* 设置二级菜单绝对定位，并隐藏 */
    .menuDiv > ul > li > ul {
        display: none;
    }

    /* 设置二级菜单的li的样式 */
    .menuDiv > ul > li > ul > li {
        float: none;
    }
  
    /* 鼠标放在一级菜单上，显示二级菜单 */
    .menuDiv > ul > li:hover ul {
        display: block;
    }

    /* 一级菜单 */
    .menuDiv > ul > li > a {
        width: 130px;
        line-height: 40px;
        color: #5b5b5b;
        background-color: #F0F0F0;
        text-align: center;
        border-left: 1px solid #bbf;
        display: block;
    }
    
    /* 在一级菜单中，第一个不设置左边框 */
    .menuDiv > ul > li:first-child > a {
        border-left: none;
    }

    /* 在一级菜单中，鼠标放上去的样式 */
    .menuDiv > ul > li > a:hover {
        background-color: #ADADAD;
    }

    /* 二级菜单 */
    .menuDiv > ul > li > ul > li > a {
        width: 130px;
        line-height: 36px;
        color: #456;
        background-color: #d0d0d0;
        text-align: center;
        border: 1px solid #ccc;
        border-top: none;
        display: block;
    }
    
    /* 在二级菜单中，第一个设置顶边框 */
    .menuDiv > ul > li > ul > li:first-child > a {
        border-top: 1px solid #ccc;
    }
    
    /* 在二级菜单中，鼠标放上去的样式 */
    .menuDiv > ul > li > ul > li > a:hover {
        color: white;
        background-color: black;
    }
    /* -------------菜单css代码----------end---------- */
    
    </style>
</head>
<body>


<div class="menuDiv">
 <ul>
    <h3 style="text-align:center;color:#5b5b5b">用户管理界面</h3>
 </ul>
<ul>
    <li>
        <a href="#">菜单一</a>
        <ul>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul>
    </li> 
    <li>
        <a href="#">菜单二</a>
        <ul>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul>
    </li> 
    <li>
        <a href="#">菜单三</a>
        <ul>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul>
    </li> 
    <li>
        <a href="#">菜单四</a>
    </li> 
    <li>
        <a href="./logout.php">登出</a>
        <!-- <ul>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
            <li><a href="#">二级菜单</a></li>
        </ul> -->
    </li> 
</ul>
</div>

    <!-- -------菜单html代码---------end------- -->
    
</body>
</html>