<?php session_start()?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<title>留言</title>
<script>
function nc1(){
    var x=document.getElementById("nc");
    x.style.display="block";
}
function nc2(){
    var x=document.getElementById("nc");
    x.style.display="none";
}
function show(){
    var x=document.getElementById("ta");
    x.style.display="block";
}
function hide(){
    var x=document.getElementById("ta");
    x.style.display="none";
}
function change1(){
  var x=document.getElementById("ly");
  x.rows="3";
  var x=document.getElementById("lyd");
  x.style.display="block";
}

  function change2(){
     var s=document.getElementById("ly");
	 s.rows="2";
	 var x=document.getElementById("lyd");
	 x.style.display="none";
  }
  function have1(){
     var x=document.getElementById("lycon");
     x.style.display="block";
  }
  function have11(){
     var x=document.getElementById("lycon");
     x.style.display="none";
  }
    function have2(){
     var x=document.getElementById("hfcon");
     x.style.display="block";
  }
  function have22(){
     var x=document.getElementById("hfcon");
     x.style.display="none";
  }

  function change3(){
  var x=document.getElementById("hf");
  x.rows="2";
  var x=document.getElementById("hfd");
  x.style.display="block";
}

  function change4(){
     var s=document.getElementById("hf");
	 s.rows="1";
	 var x=document.getElementById("hfd");
	 x.style.display="none";
  }

  function change5(i,j){
     var s=document.getElementById(i);
	 s.rows="2";
	 var x=document.getElementById(j);
	 x.style.display="block";
  }
  function change6(i,j){
     var s=document.getElementById(i);
	 s.rows="1";
	 var x=document.getElementById(j);
	 x.style.display="none";
  }
</script>

<style type="text/css">
<!--
.hf{border:none;background:url(pictures/liuyan1.jpg);  left top no-repeat;width:70px; height:25px; }
.hf1{border:none;background:url(pictures/sayfb.jpg);  left top no-repeat;width:54px; height:21px; }
a { text-decoration: none}
a:hover { text-decoration:underline;color:#666666}
.areastyle 
{ border:1px solid #F90; overflow:auto; background:#fff url(pictures/sygb.jpg) right bottom no-repeat;color:#03C;font-size:14px}
.areastyle1
{ border:1px solid #F90; overflow:auto; background:#fff  right bottom no-repeat;color:#03C;font-size:14px}
.STYLE3 {font-size: 12px}
.STYLE4 {color: #0033FF ;font-size: 12px}
.STYLE5 {font-size: 10px}
.STYLE6 {
	font-family: "幼圆";
	color: #CC6600;
	font-size: 13px;
}
-->
</style>
</head>

<body >
   <!--整体表格-->
   <table width="75%" height="220" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
     <tr>
       <td valign="top"><img src="pictures/saylogo.jpg" width="1015" height="24" />
         <table width="100%" height="175"  border="0" cellpadding="0" cellspacing="0">
             <tr>
               <td width="75%" height="173" valign="top"><table width="100%" height="66" border="0" cellpadding="0" cellspacing="0">
                   <tr>
                     <td><form id="form1" name="form1" method="post" action="">
                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                             <td>&nbsp;&nbsp;************</td>
                           </tr>
                           <tr>
                             <td align="center">
					         <textarea name="lyarea" id="ly" class="areastyle" cols="98" rows="2" onfocus="change1()"></textarea></td>
                           </tr>
                           <tr>  
                             <td>
    							 <div id="lyd" style="display:none">&nbsp;&nbsp;
    							   <button type="button" class="btn btn-info btn-md">留言</button>&nbsp;&nbsp; 
    							   <button type="button" class="btn btn-info btn-md" onclick="change2()">取消</button>
                                 
                                 </div>
                             </td>
                           </tr>
                         </table>
                     </form></td>
                   </tr>
                   <tr>
                     <td height="29"><hr width="95%" size="2" color="#0000FF" align="center"/></td>
                   </tr>
                   <tr>
                     <td height="29"><!--333333333333-->
                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                             <td width="15%" height="79" valign="top" align="center"><img src="pictures/p.jpg" width="71" height="71" /></td>
                             <td width="85%"><!--正文-->
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" background="pictures/bgmain.jpg">
                                   <tr>
                                     <td>
									 
									   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                         <tr onmouseover="have1()" onmouseout="have11()">
                                           <td width="17%" height="22"><span class="STYLE4">西去东来</span></td>
                                           <td width="60%">
										         <span class="STYLE5">2012-25-25 23:52:12</span>										                                            </td>
										   <td width="23%">
								      	   <div id="lycon" style="display:none"><a href="javascript:void(0)" class="STYLE3" onfocus="change3()">回复</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="STYLE3">删除</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="STYLE3">举报</a></div>								           </td>
                                         </tr>
                                     </table></td>
                                   </tr>
                                   <tr>
                                     <td ><span class="STYLE3"><br/>
                                     你是什么人啊</span></td>
                                   </tr>
                                   <tr>
                                     <td><hr width="98%" color="#666666" size="2" align="left" /></td>
                                   </tr>
                                   <tr>
                                     <td><!--hufu-->
									 
                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr onmouseover="have2()" onmouseout="have22()">
                                             <td width="19%" align="right"><span class="STYLE6">回复人：</span></td>
                                             <td width="44%">
											      <span class="STYLE4">西去东来</span>&nbsp;<span class="STYLE5"> 2012-21-03 12:24:21	</span>&nbsp;&nbsp;&nbsp;&nbsp;										     </td>
							                  <td width="37%">
											      <div id="hfcon" style="display:none"><a href="javascript:void(0)" class="STYLE3" onclick="show()">回复</a>&nbsp;
												   <a href="javascript:void(0)" class="STYLE3">删除</a>&nbsp;
												   <a href="javascript:void(0)" class="STYLE3">举报</a></div>
											  </td>
                                           </tr>
										   <tr>
										      <td>&nbsp;</td>
                                              <td><br/> <span class="STYLE3">您是什么人ff</span></td>
                                           </tr>
                                           <tr>
                                             <td>&nbsp;</td>
                                             <td colspan="2"><!---变化的代码->
											     <table width="100%" border="1" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><!--第二层-->
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><hr width="70%" size="1" align="left" /></td>
  </tr>
  <tr onmouseover="nc1()" onmouseout="nc2()">
    <td width="15%" align="right" class="STYLE4">西去东来</td>
    <td width="41%">&nbsp;&nbsp; <span class="STYLE5">2012-12-02&nbsp; 12:24:32</span> </td>
    <td width="44%"><div id="nc" style="display:none"><a href="javascript:void(0)" class="STYLE3">删除</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="STYLE3">举报</a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="STYLE3">内容..........</td>
  </tr>
  <tr>
    <td colspan="3">
	<!--内层文本框-->
	  
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none" id="ta">
  <tr>
    <td width="8%" height="20">&nbsp;</td>
    <td width="92%"><form id="form2" name="form2" method="post" action="">
      <textarea name="textarea" cols="60" rows="1" class="areastyle1"></textarea>
    </form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="button" class="btn btn-info btn-sm">回复</button>&nbsp;&nbsp; 
      <button type="button" class="btn btn-info btn-sm">取消</button>&nbsp;&nbsp; </td>
  </tr>
</table>
   <!--内层文本框-->	</td>
  </tr>
</table>
<!--第二层-->
	</td>
  </tr>
</table>
    
											 
											   
											 
											 
											 <!---变化的代码->
											 </td>
                                           </tr>
                                           <tr>
                                             <td colspan="2"><hr width="73%" align="center" size="1"/></td>
                                           </tr>
                                         </table>
                                       <!--hufu-->  
									   
									   
									   <!--hufu-->
									 
                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr onmouseover="have2()" onmouseout="have22()">
                                             <td width="19%" align="right"><span class="STYLE6">回复人：</span></td>
                                             <td width="44%">
											      <span class="STYLE4">西去东来</span>&nbsp;<span class="STYLE5"> 2012-21-03 12:24:21	</span>&nbsp;&nbsp;&nbsp;&nbsp;										     </td>
							                  <td width="37%">
											      <div id="hfcon" style="display:none"><a href="javascript:void(0)" class="STYLE3" onclick="show()">回复</a>&nbsp;
												   <a href="javascript:void(0)" class="STYLE3">删除</a>&nbsp;
												   <a href="javascript:void(0)" class="STYLE3">举报</a></div>
											  </td>
                                           </tr>
										   <tr>
										      <td>&nbsp;</td>
                                              <td><br/> <span class="STYLE3">您是什么人ff</span></td>
                                           </tr>
                                           <tr>
                                             <td>&nbsp;</td>
                                             <td colspan="2"><!---变化的代码->
											     <table width="100%" border="1" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><!--第二层-->
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><hr width="70%" size="1" align="left" /></td>
  </tr>
  <tr onmouseover="nc1()" onmouseout="nc2()">
    <td width="15%" align="right" class="STYLE4">西去东来</td>
    <td width="41%">&nbsp;&nbsp; <span class="STYLE5">2012-12-02&nbsp; 12:24:32</span> </td>
    <td width="44%"><div id="nc" style="display:none"><a href="javascript:void(0)" class="STYLE3">删除</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="STYLE3">举报</a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="STYLE3">内容..........</td>
  </tr>
  <tr>
    <td colspan="3">
	<!--内层文本框-->
	  
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none" id="ta">
  <tr>
    <td width="8%" height="20">&nbsp;</td>
    <td width="92%"><form id="form2" name="form2" method="post" action="">
      <textarea name="textarea" cols="60" rows="1" class="areastyle1"></textarea>
    </form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" class="hf1" value="" />&nbsp;
      <a href="javascript:void(0)" class="STYLE3" onclick="hide()">取消</a></td>
  </tr>
</table>
   <!--内层文本框-->	</td>
  </tr>
</table>
<!--第二层-->
	</td>
  </tr>
</table>
    
											 
											   
											 
											 
											 <!---变化的代码->
											 </td>
                                           </tr>
                                           <tr>
                                             <td colspan="2"><hr width="73%" align="center" size="1"/></td>
                                           </tr>
                                         </table>
                                       <!--hufu-->                                   </td>
                                   </tr>
								    <form action="" method="post">
                                   <tr>
                                     <td>
                                         <textarea name="hfarea" id="hf" cols="70" rows="1" class="areastyle1" onfocus="change3()"></textarea>                                     </td>
                                   </tr>
                                   <tr>
                                     <td><div id="hfd" style="display:none">
                                       <input  type="submit" class="hf1" value=""/>
                                     <a href="javascript:void(0)" class="STYLE3" onclick="change4()">取消</a></div></td>
                                   </tr>
								    </form>
								   <tr>
								     <td >&nbsp;</td>
								   </tr>
								   <tr>
								     <td bgcolor="#FFFFFF">&nbsp;</td>
								   </tr>
                                 </table>
								
                             <!--正文-->
							 
							 </td>
                           </tr>
                         </table>
                       <!--33333333333-->  
					                      </td>
                   </tr>
               </table></td>
               <td width="25%" ><img src="pictures/sayborder.jpg" width="254" height="604" /></td>
             </tr>
         </table></td>
     </tr>
   </table>
   <!--整体表格-->
</body>
</html>