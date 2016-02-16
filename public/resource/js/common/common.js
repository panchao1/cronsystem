/**
 * 公共类
 * Copyright (c) 2016 PanChao
 */
var Common = {

	paginator: function(element, pagedata) {
	
		var url = window.location.pathname;
		var host = window.location.origin;
		
		$(element).pagination({
			pageSize: pagedata[0].pageSize,
			pageIndex : pagedata[0].pageIndex,
			total: pagedata[0].total,
			firstBtnText:'首页',
			lastBtnText:'末页',
			showFirstLastBtn:true,
			showInfo: true,
			showJump: true,
			jumpBtnText:'跳转',
			infoFormat: '{start} ~ {end}条，共{total}条'
		});

		$("#paginator").on("pageClicked", function (event, data) {
			getRequest(data.pageIndex);
		}).on("jumpClicked", function (event, data) {
			getRequest(data.pageIndex);
		})

		//get请求
		function getRequest(index) {
			var trueUrl = host + url + "?page_index=" + index +"&page_size=" + pagedata[0].pageSize;
			window.location.href = trueUrl;
		}
	}
}