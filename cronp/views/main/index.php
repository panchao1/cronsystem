<!--顶部-->
<div class="layout_top_header">
    <div style="float: left">
        <span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d">定时任务管理系统 CTS </span>
    </div>
    <div id="header_menu">
        <ul class="nav navbar-nav navbar-left" id="">
            <li data-navigator="13"><a href="javascript:void(0)" onclick="loadMenu(1);"><span class="glyphicon glyphicon-cog"></span> <span class="text">我的</span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left" id="">
            <li data-navigator="13"><a href="javascript:void(0)" onclick="loadMenu(2);"><span class="glyphicon glyphicon-cog"></span> <span class="text">设置</span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left" id="">
            <li data-navigator="13"><a href="javascript:void(0)" onclick="loadMenu(3);"><span class="glyphicon glyphicon-cog"></span> <span class="text">系统</span></a></li>
        </ul>
    </div>
    <div id="ad_setting" class="ad_setting">
        <a class="ad_setting_a" href="javascript:; ">
            <i class="icon-user glyph-icon" style="font-size: 20px"></i>
            <span>管理员</span>
            <i class="icon-chevron-down glyph-icon"></i>
        </a>
        <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
            <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-user glyph-icon"></i> 个人中心 </a> </li>
            <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-cog glyph-icon"></i> 设置 </a> </li>
            <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-signout glyph-icon"></i> <span class="font-bold">退出</span> </a> </li>
        </ul>
    </div>
</div>
<!--顶部结束-->
<!--菜单-->
<div class="layout_left_menu">
    <ul id="menu">
        <li class="childUlLi" style="display:block">
            <a href=""><i class="glyph-icon icon-home"></i>首页</a>
        </li>
        <li data-navigator="1" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"> <i class="glyph-icon icon-reorder"></i>个人中心</a>
            <ul>
                <li><a href="/personal/info" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>个人信息</a></li>
            </ul>
        </li>
        <li data-navigator="2" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"> <i class="glyph-icon icon-reorder"></i>账号管理</a>
            <ul>
                <li><a href="/account/add" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加账号</a></li>
                <li><a href="/account/list" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>账号列表</a></li>
            </ul>
        </li>
        <li data-navigator="2" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"> <i class="glyph-icon icon-reorder"></i>角色管理</a>
            <ul>
                <li><a href="/role/add" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加角色</a></li>
                <li><a href="/role/list" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>角色列表</a></li>
            </ul>
        </li>
        <li data-navigator="2" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"> <i class="glyph-icon icon-reorder"></i>权限管理</a>
            <ul>
                <li><a href="/privilege/add" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加权限</a></li>
                <li><a href="/privilege/list" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>权限列表</a></li>
            </ul>
        </li>
        <li data-navigator="2" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"> <i class="glyph-icon icon-reorder"></i>模块管理</a>
            <ul>
                <li><a href="/module/add" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加模块</a></li>
                <li><a href="/module/list" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>模块列表</a></li>
            </ul>
        </li>
        <li data-navigator="3" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"  target="menuFrame"> <i class="glyph-icon icon-reorder"></i>项目管理</a>
            <ul>
                <li><a href="/project/add" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加项目</a></li>
                <li><a href="/project/list" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>项目列表</a></li>
            </ul>
        </li>
        <li data-navigator="3" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"  target="menuFrame"> <i class="glyph-icon icon-reorder"></i>任务管理</a>
            <ul>
                <li><a href="/task/add" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加任务</a></li>
                <li><a href="/task/list" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>任务列表</a></li>
            </ul>
        </li>
        <li data-navigator="3" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"  target="menuFrame"> <i class="glyph-icon icon-reorder"></i>日志管理</a>
            <ul>
                <li><a href="/log/run" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>运行日志</a></li>
                <li><a href="/log/error" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>异常日志</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--菜单-->
<div id="layout_right_content" class="layout_right_content">
    <div class="route_bg">
        <a href="javascript:void(0)">主页</a><i class="glyph-icon icon-chevron-right"></i>
        <a href="javascript:void(0)">菜单管理</a>
    </div>
    <div class="mian_content">
    <div id="page_content">
        <iframe id="menuFrame" name="menuFrame" src="" scrolling="yes" style="overflow-y:auto;" frameborder="yes" width="100%" height="100%"></iframe>
    </div>
    </div>
</div>
<!-- 底部版权 -->
<div class="layout_footer">
    <p>Copyright © 2016 - Pan.Chao</p>
</div>
