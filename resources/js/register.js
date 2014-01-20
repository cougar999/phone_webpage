/**
 * @version:PCR2.4
 * @author : guhao
 * @create_time : 2012-07-27
 * @history:
 */
var RegisterForm = {
	showMessage:function(msg){
		$(".register_error_message").html(msg);
		setTimeout(function(){
			$(".register_error_message").html('');
		},3000);
	},
	checkusername:function(){
		var regex=/^[0-9a-z]{3,25}$/;
	    var s=document.getElementById("user_name").value;
	    return regex.exec(s);
	},
	checkpassword:function(obj){
		var regex=/^[0-9A-Za-z_#@!%^&*]{6,20}$/;
	    var s= obj.val();
	    return regex.exec(s);
	},
	checkUserNameFrom:function(){
		var name = $("#user_name").val();
		if($.trim(name) == '' || RegisterForm.checkusername() == null){
			RegisterForm.showMessage('用户名应该为3-25位之间数字或26个小写字母组成!');
			$("#user_name").parent("div").find("span").attr("class","form_error");
			return false;
		} else {
			$("#user_name").parent("div").find("span").attr("class","form_loading");
			$.post("/api/checkuser.php",{name:name},function(data){
				if(data == 'success'){
					$("#user_name").parent("div").find("span").attr("class","form_success");
					return true;
				}else{
					RegisterForm.showMessage('用户名重复，请重新输入!');
					$("#user_name").parent("div").find("span").attr("class","form_error");
					return false;
				}
			});
		}
	},
	checkConfirmationPassword:function(){
		var password = $("#user_password").val();
		var cpassword = $("#user_password_confirmation").val();
		if(password == cpassword){
			$("#user_password_confirmation").parent("div").find("span").attr("class","form_success");
			return true;
		}else{
			RegisterForm.showMessage('两次的密码输入不一致！');
			$("#user_password_confirmation").parent("div").find("span").attr("class","form_error");
			return false;
		}
	},
	checkPassword:function(){
		var password = $("#user_password").val();
		if($.trim(password) == '' || RegisterForm.checkpassword($("#user_password")) == null){
			RegisterForm.showMessage('密码应该为6-20位之间数字大小写字母或特殊字符组成!');
			$("#user_password").parent("div").find("span").attr("class","form_error");
			return false;
		}else{
			RegisterForm.checkConfirmationPassword();
			$("#user_password").parent("div").find("span").attr("class","form_success");
			return true;
		}
	},
	checkCPassword:function(){
		var password = $("#user_password_confirmation").val();
		if($.trim(password) == '' || RegisterForm.checkpassword($("#user_password_confirmation")) == null || RegisterForm.checkConfirmationPassword() == false){
			$("#user_password_confirmation").parent("div").find("span").attr("class","form_error");
			return false;
		}else{
			$("#user_password_confirmation").parent("div").find("span").attr("class","form_success");
			return true;
		}
	},
	checkrealname:function(){
		var regex= /[\u4e00-\u9fa5\/]/ig;
		var s= document.getElementById("user_real_name").value;
		return regex.exec(s);
	},
	checkagentname:function(){
		var regex= /[\u4e00-\u9fa5\/]/ig;
		var s= document.getElementById("agent_name").value;
		return regex.exec(s);
	},
	checkqq:function(){
		var regex=/^[0-9]{5,12}/;
	    var s = $("#user_qq").val();
	    return regex.exec(s);
	},
	checkqqstate:function(){
		if(RegisterForm.checkqq() == null){
			RegisterForm.showMessage('QQ号码应为5位以上的0-9的阿拉伯数字!');
			$("#user_qq").parent("div").find("span").attr("class","form_error");
			return false;
		}else{
			$("#user_qq").parent("div").find("span").attr("class","form_success");
			return true;
		}
	},
	checktelphone:function(){
		var regex =  /(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;
		var s = $("#user_telphone").val();
		return regex.exec(s);
	},
	checktelphonestate:function(){
		if(RegisterForm.checktelphone() == null){
			RegisterForm.showMessage('请输入正确的电话号码！');
			$("#user_telphone").parent("div").find("span").attr("class","form_error");
			return false;
		}else{
			$("#user_telphone").parent("div").find("span").attr("class","form_success");
			return true;
		}
	},
	checkRealNameForm:function(){
		var name = $("#user_real_name").val();
		if($.trim(name) == '' || RegisterForm.checkrealname() == null){
			RegisterForm.showMessage('请输入为汉字的店员名项!');
			$("#user_real_name").parent("div").find("span").attr("class","form_error");
			return false;
		}else{
			$("#user_real_name").parent("div").find("span").attr("class","form_success");
			return true;
		}
	},
	checkAgentNameForm:function(){
		var name = $("#agent_name").val();
		if($.trim(name) == '' || RegisterForm.checkagentname() == null){
			RegisterForm.showMessage('请输入为汉字的店面名项!');
			$("#agent_name").parent("div").find("span").attr("class","form_error");
			return false;
		}else{
			$("#agent_name").parent("div").find("span").attr("class","form_success");
			return true;
		}
	}
};

$(function(){

	$('#agent_1').change(function(){
		var id = $(this).find('option:selected').val();
		if (!id) return;
		$('#agent_2').html('<option value="-1">请选择所在分公司</option>');
		$('#agent_3').html('<option value="-1">请选择所在店面</option>');
		$('#agent_id').val('');
		getjsonp(id, 2);
	});
	$('#agent_2').change(function(){
		var id = $(this).find('option:selected').val();
		if (!id) return;
		$('#agent_3').html('<option value="-1">请选择所在店面</option>');
		$('#agent_id').val('');
		getjsonp(id, 3);
	});
	$('#agent_3').change(function(){
		var id = $(this).find('option:selected').val();
		if (!id) return;
		$('#agent_id').val(id);
	});

	$("#user_name").focusout(function(){
		RegisterForm.checkUserNameFrom();
	});
	$("#user_password").focusout(function(){
		RegisterForm.checkPassword();
	});
	$("#user_password_confirmation").focusout(function(){
		RegisterForm.checkCPassword();
	});
	$("#user_real_name").focusout(function(){
		RegisterForm.checkRealNameForm();
	});
	$("#agent_name").focusout(function(){
		RegisterForm.checkAgentNameForm();
	});
	$("#user_telphone").focusout(function(){
		//if($('#user_telphone').val() != ''){
			RegisterForm.checktelphonestate();
		//}else{
		//	$("#user_telphone").parent("div").find("span").removeClass();
		//}
	});
	$("#btn_register_submit").click(function(){
		if(RegisterForm.checkUserNameFrom() == false)return ;
		if(RegisterForm.checkPassword() == false)return ;
		if(RegisterForm.checkCPassword() == false)return ;
		if(RegisterForm.checkAgentNameForm() == false)return ;
		if(RegisterForm.checkRealNameForm() == false)return ;
		if(RegisterForm.checktelphonestate() == false)return ;
		
		var row = {
					register_type:$("#register_type").val(),
					agent_id:$("#agent_id").val(),
					username:$("#user_name").val(),
					password:$("#user_password").val(),
					agent_name:$("#agent_name").val(),
					real_name:$("#user_real_name").val(),
					telphone:$("#user_telphone").val(),
					code:$("#code").val()
				};
		if(row.register_type == 2){
			row.provinces = $("#province").val();
			row.city = $("#city").val();
		}
		$.post("/api/api_register_member.php",row,function(data){
			if(data == 'success'){
				$("#register1").hide();
				$("body").append('<div id="register_over"><center>恭喜您，注册已成功！<span><font color="red">5</font>秒后自动登录!</span></center></div>');
				for(t = 5;t >= 0;t--){
					window.setTimeout('$("#register_over font").html('+t+');if('+t+' == 0){registerFinish("' + row.username + '","' + row.password + '");location.href = location.href;}',(5-t)*1000);
				}
			}else{
				$(".register_error_message").html(data);
				setTimeout(function(){
					$(".register_error_message").html('');
				},3000);
			}
		});
	});
});