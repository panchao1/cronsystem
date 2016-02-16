/**
 * 表单提交类
 * Copyright (c) 2016 PanChao
 */
var Form = {

	ajaxSubmit: function (element) {
		
		//成功弹出信息
		function success(messages, data) {
			
			var text = messages.join("\n");
			var timer = 2000;
			swal({
				'title' : '操作成功',
				'text' : "<h4>"+text+"</h4>",
				'html' : true,
				'type' : 'success',
				'showConfirmButton' : false,
				'timer' : timer,
				'location' : null,
			});
		}

		//错误弹出信息
		function error(errors, data) {
			var text = errors.join("\n");
			var timer = 2000;
			swal({
				'title' : '操作失败',
				'text' : "<h4>"+text+"</h4>",
				'html' : true,
				'type' : 'error',
				'showConfirmButton' : false,
				'timer' : timer,
			});
		}

		//警告弹出信息
		function warning(warnings, data) {
			var text = warnings.join("\n");
			var timer = 2000;
			swal({
				'title' : '警告',
				'text' : "<h4>"+text+"</h4>",
				'html' : true,
				'type' : 'warning',
				'showConfirmButton' : false,
				'timer' : timer,
			});
		}

		//弹出信息
		function response(result) {

			if(result.code == 0) {
				error(result.messages, result.data);
			}
			if(result.code == 1) {
				success(result.messages, result.data);
			}
			if(result.code == 2) {
				warning(result.messages, result.data);
			}
			//如果设置了跳转
			if(result.redirect) {
				setTimeout(function() {
					location.href = result.redirect;
				}, 3000);
				//重新刷新
				setTimeout(function() {
					location.reload();
				}, 3000);
			}
			
		}

		var options = {
			dataType: 'json',
			success: response,
		};

		$(element).ajaxSubmit(options);

		return false;
	}
}