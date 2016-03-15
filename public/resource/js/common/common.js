/**
 * 公共类
 * Copyright (c) 2016 PanChao
 */
var Common = {

	/**
	 * 分页
	 */
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
	},

	/**
	 * 提示
	 */
	confirm: function(text, url) {

		swal({
			title: "警告", 
			text: text,
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "YES",
			cancelButtonText: "NO", 
			closeOnConfirm: false,
		},
		function(isConfirm) {
			if (isConfirm) {
				swal("Deleted!", "Your imaginary file has been deleted.", "success");
			} else {
				swal("Cancelled", "Your imaginary file is safe :)", "error");
			}
		});
	},
}