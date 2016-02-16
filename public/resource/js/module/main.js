/**
 * Created by panchao on 16-01-14
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

});

/**
 * 个人设置 setting
 */
$(function(){
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
});

/**
 * header 导航菜单
 */
function loadMenu(navigatorId) {
    var menu = $("#menu");

    menu.find('[data-navigator]').hide();
    menu.find('[data-navigator="'+ navigatorId +'"]').show();
}
