<!-- 注册界面--------------------------------------------1 -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   
   <div class="modal-dialog">
      <form class="form-signin" method="post" action="userprocess.php"
			name="f" method="post">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">×
            </button>
            <h4 class="modal-title" id="myModalLabel">
               CACLab注册
            </h4>
         </div>
         
         <div class="modal-body">
  
			<table class="table table-bordered">

				<tbody>
					<tr>
						<td><input type="text" class="form-control" value="shanzhi"  required="required"
							name="no" id="no" placeholder="工号"
							onkeyup="showCheck(this.value)" onchange="check()"> <br>唯一性检测：<span
							id="result" class="alert alert-info">请输入</span></td>
					</tr>
					<tr>
						<td><input type="password" name="pw" class="form-control"
							placeholder="密码" value="shanzhi"  pattern="^[a-zA-Z0-9]{4,8}$"
							title="密码由3至8位的字母或数字组成" required></td>
					</tr>
					<tr>
						<td><input type="password" name="pwx" class="form-control"
							placeholder="确认" value="shanzhi"  onChange="checkpw()"></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control" name="name"
							placeholder="姓名" value="shanzhi"  required="required"></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control" name="birth"
							placeholder="生日" value="shanzhi"  required="required"></td>
					</tr>
				</tbody>
			</table>
		
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">
               关闭
            </button>
            <button type="submit" class="btn btn-info">
               注册
            </button>
         </div>
      
        </div><!-- /.modal-content -->
      </form>
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 登录界面--------------------------------------------2 -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   
   <div class="modal-dialog">
      <form class="form-signin">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">×
            </button>
            <h4 class="modal-title" id="myModalLabel">
               CACLab登录
            </h4>
         </div>
         
         <div class="modal-body"> 
         
			<table class="table table-bordered">
				<tbody>
					<tbody>
					<tr>
						<td><input type="text" id="loginno" class="form-control"
							placeholder="工号"  value="shanzhi" required autofocus></td>
					</tr>
					<tr>
						<td><input type="password" id="loginpw" class="form-control"
							placeholder="密码" value="shanzhi" required></td>
					</tr>
					<tr>
						<td><button data-toggle="modal" data-target="#registerModal" class="btn btn-default" 
               data-dismiss="modal">
                                                              没有账号？点此注册      
               </button> <br>
                    <div id="loginalert" class="alert alert-warning" hidden>
                        <a href="#" class="close" data-dismiss="alert">
                           &times;
                        </a>
                        <strong>警告！</strong>您输入的账号或者密码有误！。
                    </div></td>
					</tr>
				</tbody>
					
				</tbody>
			</table>
		
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">
               关闭
            </button>
            <button type="button" onclick="login()" class="btn btn-info">
               登录
            </button>
         </div>
      
        </div><!-- /.modal-content -->
    </form>
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->