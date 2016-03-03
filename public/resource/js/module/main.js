/**
 * main 
 * Created by panchao on 2016-01-14
 */

/**
 * 调整工作区尺寸
 */
function resizeContentHeight() {
    var mainHeight = document.body.clientHeight - 130;
    $('#menuFrame').height(mainHeight);
}

$(window).load(function() {
        resizeContentHeight();
});

$(window).resize(function() {
       resizeContentHeight();
});

/**
 * menu 菜单
 */
$(document).ready(function(){
    
    $('#menu').tendina({
        openCallback: function(clickedEl) {
            clickedEl.addClass('opened');
        },
        closeCallback: function(clickedEl) {
            clickedEl.addClass('closed');
        }
    });

    //个人设置
    $("#ad_setting").click(function(){
        $("#ad_setting_ul").show();
    });
    $("#ad_setting_ul").mouseleave(function(){
        $(this).hide();
    });
    $("#ad_setting_ul li").mouseenter(function(){
        $(this).find("a").attr("class","ad_setting_ul_li_a");
    });
    $("#ad_setting_ul li").mouseleave(function(){
        $(this).find("a").attr("class","");
    });

    //initNavigator(navigators);
    //initMenu(menus, controllers);
});

/**
 * 初始化导航
 */
function initNavigator(navigators) {

    var navigator = $('#header_menu');
    navigator.children().remove();

    for(var i = 0; i < navigators.length; i++) {

        privilegeId = navigators[i]['privilegeId'];
        parentId = navigators[i]['parentId'];
        name = navigators[i]['name'];
        icon = navigators[i]['icon'];

        addhtml = '<ul class="nav navbar-nav navbar-left">'+
                    '<li data-navigator="'+privilegeId+'">'+
                        '<a href="javascript:void(0)"" onclick="loadMenu('+privilegeId+');"><span class="'+icon+'"></span> <span class="text">'+name+'</span></a>'+
                    '</li>'+
                    '</ul>';
        
        navigator.append(addhtml);
    }
}

/**
 * 初始化菜单
 */
function initMenu(menus, controllers) {

    var menu = $("#menu");
    menu.children().remove();

    indexHtml = '<li class="childUlLi" style="display:block">'+
                    '<a href=""><i class="glyph-icon icon-home"></i>首页</a>'+
                '</li>';
    menu.append(indexHtml);

    for(var i = 0; i < menus.length; i++) {

        addhtml = '<li data-navigator="'+menus[i]['parentId']+'" class="childUlLi" style="display:none">'+
                    '<a href="javascript:void(0)"> <i class="'+menus[i]['icon']+'"></i>'+menus[i]['name']+'</a>'+
                    '<ul>';
        for(var y = 0; y < controllers.length; y++) {
            if(menus[i]['privilegeId'] == controllers[y]['parentId']) {
                addhtml += '<li><a href="/'+controllers[y]['controller']+'/'+controllers[y]['action']+'" target="menuFrame"><i class="'+controllers[y]['icon']+'"></i>'+controllers[y]['name']+'</a></li>';
            }
        }
        
        addhtml +='</ul></li>';
        menu.append(addhtml);
    }
}

/**
 * 加载 menu
 * @param   navigatorId [description]
 * @return 
 */
function loadMenu(navigatorId) {
    var menu = $("#menu");

    menu.find('[data-navigator]').hide();
    menu.find('[data-navigator="'+ navigatorId +'"]').show();
}
