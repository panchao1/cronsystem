<!--顶部-->
<div class="layout_top_header">
    <div style="float: left">
        <span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d">定时任务管理系统 CTS </span>
    </div>
    <div id="header_menu">
        <?php if($navigators && is_object($navigators)) {
            foreach ($navigators as $navigator) {?>
                <ul class="nav navbar-nav navbar-left">
                    <li data-navigator="<?php echo $navigator->privilegeId;?>"><a href="javascript:void(0)" onclick="loadMenu(<?php echo $navigator->privilegeId;?>);"><span class="<?php echo $navigator->icon;?>"></span><span class="text"> <?php echo $navigator->name;?></span></a></li>
                </ul>
            <?php }
            } ?>
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
        <?php if($menus && is_object($menus)) {
            foreach ($menus as $menu) { ?>
        <li data-navigator="<?php echo $menu->parentId;?>" class="childUlLi" style="display:none">
            <a href="javascript:void(0)"> <i class="<?php echo $menu->icon;?>"></i><?php echo $menu->name;?></a>
            <ul>
            <?php if($controllers && is_object($controllers)) {
                foreach ($controllers as $controller) { 
                if($menu->privilegeId == $controller->parentId) { ?>
                <li><a href="<?php echo "/$controller->controller/$controller->action";?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i><?php echo $controller->name;?></a></li>
                <?php }
                    } 
                } ?>
            </ul>
        </li>
        <?php } } ?>
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