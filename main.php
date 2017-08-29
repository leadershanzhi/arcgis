<!DOCTYPE html>
<?php session_start();?>
<?php require_once 'newsservice.php';
$newsservice = new NewsService();
$news =$newsservice->showAllNews();
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CAClab 首页</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap-responsive.css" >
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/mydefine.css">
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/location.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=TXZuU6Pt6URcaHC3kI94Z69U&v=1.1&services=true"></script>
</head>
<style>
#bigmaplocation{top:20px;}
</style>
<div class="container">
   <div class="row" >

      <div class="col-md-1" style="background-color: #dedef8; ">

      </div>
      <div class="col-md-10" >
         <div class="carousel slide" id="carousel-201473">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-201473">
					</li>
					<li data-slide-to="1" data-target="#carousel-201473">
					</li>
					<li data-slide-to="2" data-target="#carousel-201473" class="active">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img alt="" src="img/night.jpg" />
						<div class="carousel-caption">
							<h5>
								图书馆-夜景
							</h5>
							<p>
								架构平台、沟通学生、服务图书馆建设
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="img/leaf.jpg" />
						<div class="carousel-caption">
							<h5>
								银杏大道
							</h5>
							<p>
								我就在这里等你
							</p>
						</div>
					</div>
					<div class="item active">
						<img alt="" src="img/build.jpg" />
						<div class="carousel-caption">
							<h5>
								实验室所在主楼
							</h5>
							<p>
								最大连体建筑
							</p>
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-201473" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-201473" class="right carousel-control">›</a>
			</div>
      </div>
      
      <div class="col-md-1" style="background-color: #dedef8; ">

      </div>
   </div>
   <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <ul class="nav nav-tabs">
				<li class="active">
					<a href="#home" data-toggle="tab">首页</a>
				</li>
				<li>
					<a href="#schoolp" data-toggle="tab">关于我们</a>
				</li>
				
				<li>
					<a href="job3.html" target="_blank">ArcGIS JS API</a>
				</li>
				<li>
					<a href="job4.html" target="_blank">ArcGIS REST</a>
				</li>
				<li class="disabled">
					<a href="#">欢迎:
					<?php
					if(!empty($_SESSION['user'])){
					  echo $_SESSION['user']['no']."_".$_SESSION['user']['name'];   
					}else{
					  echo "访客";
					}
					?>
					</a>
				</li>
				
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">更多操作<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
					    <li>
							<a data-toggle="modal" data-target="#loginModal">登录</a>
						</li>
						<li>
							<a data-toggle="modal" data-target="#registerModal">注册</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">留言</a>
						</li>		
					</ul>
				</li>
			</ul>
      
      </div>
      
      <div class="col-md-1"></div>
   </div>
   
   <div class="row" >
      <div class="col-md-1" style="background-color: #dedef8; "></div>
      <div class="col-md-10" >
          <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                          <div class="panel panel-primary">
                                <div class="panel-heading">
                                <h3 class="panel-title" contenteditable="true">学院新闻&nbsp;| Update News</h3>
                          </div>
                          <div class="panel-body" contenteditable="true" id="news">
                            <table class="table table-hover table-condensed" >
                            	<tbody>
                            	   <?php 
                            	       foreach ($news as $new){
                            	           $id = $new['id'];
                            	           ?>  	  
                            		<tr>
                            			<td class="like"><strong>&gt;&gt;</strong><?php echo $id ?></td>
                            			<td><a  onclick="addClick(<?php echo $id?>)"  data-toggle="modal" data-target='<?php echo "#myModel{$id}"?>'><?php echo $new['title']?></a></td>
                            			<td><a><?php echo $new['from']?></a></td>
                            			<td class="like"><?php echo $new['time']?></td>
                            		</tr>
                            		<!-- 模态框（Modal） -->
<div class="modal fade" id='<?php echo "myModel{$id}"?>' tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $new['title']?>
            </h4>
            <div align="right">
                <div style="color: #fff;
	background-color: #5bc0de;
	border-color: #46b8da;width:170px;height:20px;">点击量：<?php echo $new['click']?> &nbsp;&nbsp;<?php echo $new['time']?></div>       
            </div>
         </div>
         <div class="modal-body">
            <?php echo $new['content']?>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-info">
              <?php echo $new['from']?> &nbsp;<?php echo $showtime=date("Y-m-d H:i:s");?>
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>


                            	  <?php }?> <!--循环结束 -->
                            	</tbody>
                              </table>
                          </div>
                  </div>	
            </div>
            <div class="tab-pane fade" id="schoolp">
            <div class="row"><div class="col-md-12"><hr /></div></div>
                <div class="row">
                      
                      
                      <div class="col-md-6" >
                            
                            <div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" contenteditable="true"><big><strong>电子科技大学</strong> &nbsp;</big></h3>
</div>

<div class="panel-body" contenteditable="true">
<div class="para" label-module="para" style="word-wrap: break-word; margin-bottom: 5px; text-indent: 28px; line-height: 24px; zoom: 1; font-family: arial, tahoma, 'Microsoft Yahei', 宋体, sans-serif;">电子科技大学（University of Electronic Science and Technology of China）简称电子科大，坐落于有&ldquo;<a href="http://baike.baidu.com/subview/47884/16457191.htm" style="color: rgb(19, 110, 194);" target="_blank">天府之国</a>&rdquo;之称的<a href="http://baike.baidu.com/view/277143.htm" style="color: rgb(19, 110, 194);" target="_blank">成都市</a>，由<a href="http://baike.baidu.com/view/193814.htm" style="color: rgb(19, 110, 194);" target="_blank">中华人民共和国教育部</a>直属，位列&ldquo;<a href="http://baike.baidu.com/view/7085.htm" style="color: rgb(19, 110, 194);" target="_blank">211工程</a>&rdquo;、&ldquo;<a href="http://baike.baidu.com/view/59436.htm" style="color: rgb(19, 110, 194);" target="_blank">985工程</a>&rdquo;，入选国家&ldquo;<a href="http://baike.baidu.com/view/7044945.htm" style="color: rgb(19, 110, 194);" target="_blank">2011计划</a>&rdquo;、&ldquo;<a href="http://baike.baidu.com/view/662147.htm" style="color: rgb(19, 110, 194);" target="_blank">111计划</a>&rdquo;、&ldquo;<a href="http://baike.baidu.com/view/3810178.htm" style="color: rgb(19, 110, 194);" target="_blank">卓越工程师教育培养计划</a>&rdquo;，<a href="http://baike.baidu.com/view/2719498.htm" style="color: rgb(19, 110, 194);" target="_blank">两电一邮</a>成员，设有<a href="http://baike.baidu.com/subview/1266296/13862671.htm" style="color: rgb(19, 110, 194);" target="_blank">研究生院</a>，是一所以<a href="http://baike.baidu.com/view/1320848.htm" style="color: rgb(19, 110, 194);" target="_blank">电子信息科学</a>技术为核心的<a href="http://baike.baidu.com/view/1564120.htm" style="color: rgb(19, 110, 194);" target="_blank">全国重点大学</a>，被誉为&ldquo;中国电子类院校的排头兵&rdquo;。</div>

<div class="para" label-module="para" style="word-wrap: break-word; margin-bottom: 5px; text-indent: 28px; line-height: 24px; zoom: 1; font-family: arial, tahoma, 'Microsoft Yahei', 宋体, sans-serif;">电子科技大学原名<a href="http://baike.baidu.com/view/909393.htm" style="color: rgb(19, 110, 194);" target="_blank">成都电讯工程学院</a>，是1956年在<a href="http://baike.baidu.com/view/1751.htm" style="color: rgb(19, 110, 194);" target="_blank">周恩来</a>总理的亲自部署下，由<a href="http://baike.baidu.com/view/11279.htm" style="color: rgb(19, 110, 194);" target="_blank">交通大学</a>（现<a href="http://baike.baidu.com/view/2784.htm" style="color: rgb(19, 110, 194);" target="_blank">上海交通大学</a>、<a href="http://baike.baidu.com/view/4808.htm" style="color: rgb(19, 110, 194);" target="_blank">西安交通大学</a>）、<a href="http://baike.baidu.com/view/332402.htm" style="color: rgb(19, 110, 194);" target="_blank">南京工学院</a>（现<a href="http://baike.baidu.com/view/3154.htm" style="color: rgb(19, 110, 194);" target="_blank">东南大学</a>）、<a href="http://baike.baidu.com/view/798294.htm" style="color: rgb(19, 110, 194);" target="_blank">华南工学院</a>（现<a href="http://baike.baidu.com/view/2971.htm" style="color: rgb(19, 110, 194);" target="_blank">华南理工大学</a>）的电讯工程有关专业合并创建而成。1960年，被<a href="http://baike.baidu.com/view/56077.htm" style="color: rgb(19, 110, 194);" target="_blank">中共中央</a>列为全国重点高等学校；1961年，被中共中央确定为七所国防工业院校之一。1988年，更名为电子科技大学。1997年，被确定为国家首批&ldquo;211工程&rdquo;建设的重点大学。2000年，由原<a href="http://baike.baidu.com/view/122568.htm" style="color: rgb(19, 110, 194);" target="_blank">信息产业部</a>主管划转为教育部主管。2001年，进入国家&ldquo;985工程&rdquo;重点建设大学行列。</div>
</div>

<div class="panel-footer" contenteditable="true">School of Computer Science and Engineering &nbsp;<strong>201522060832 <br />
University of Electronic Science and Technology of China</div>
</div>
                      </div>
                      <div class="col-md-6">
                         <iframe width="800" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="bigmap.html"></iframe>
                      </div>
                </div>
                <div class="row">
                    
                            <div class="col-md-6 about_grid1-left" style="width:470px;height:440px;border:#ccc solid 3px;" id="Lablocation">   
                                   <script type="text/javascript">
                                         initMap();//创建和初始化地图
                            	   </script>
                            </div>
                            
                        	<div class="col-md-6 about_grid1-right">
                        	
                        	    <div class="panel panel-default">


<div class="panel-body" contenteditable="true">

<div class="para" label-module="para" style="word-wrap: break-word; margin-bottom: 5px; text-indent: 28px; line-height: 24px; zoom: 1; font-family: arial, tahoma, 'Microsoft Yahei', 宋体, sans-serif;">
实验室近5年发表学术论文100余篇，其中20多篇IEEE Transactions 会刊。实验室成员应邀担任多个多个国际期刊编辑或编委及担任多个国际大型学术会议的总主席(General Chair)和评审及策划主席(Program Chair)等职务。实验室近期承担多个国家自然科学基金项目及云计算实施项目</div>
</div>
<div class="progress-grid">
            			  	       <div class="meter red">
            						   <span style="width:60%;">
            						   	<div class="percent">60%</div> 
            						  	<div class="progress_desc">Cloud Computing</div>
            							<div class="clearfix"> </div>
            					       </span>
            						</div>
            						<div class="meter animate">
            							 <span style="width:50%;">
            						<div class="percent">50%</div> 
            						   <div class="progress_desc">Web Development</div>
            						    <div class="clearfix"> </div>
            						   </span>
            						</div>
            						<div class="meter">
            								<span style="width:80%;">
            							<div class="percent">80%</div> 
            						   <div class="progress_desc">Linux开发</div>
            							<div class="clearfix"> </div>
            						    </span>
            						</div>
            						<div class="meter">
            						   <span style="width:50%;">
            						   	<div class="percent">50%</div> 
            						   	<div class="progress_desc">Javascript</div>
            						    <div class="clearfix"> </div>
            						   </span>
            						</div>
            						<div class="meter">
            						   <span style="width:40%;">
            						   	<div class="percent">40%</div> 
            						   	<div class="progress_desc">php</div>
            						    <div class="clearfix"></div>
            						   </span>
            						</div>
                        		</div>
<div class="panel-footer" contenteditable="true">School of Computer Science and Engineering &nbsp;<strong>201522060832 <br />
University of Electronic Science and Technology of China</div>
</div>
                        	
                        	    
                        	  </div>
                    	   
                        </div>
         
                
                </div>
            </div>
        </div>
      </div>

      
      <div class="col-md-1" style="background-color: #dedef8; "></div>


   <!-- 注册的模态框（Modal） -->
   <?php 
   include_once('LoginRegister.php'); 
   ?>
   


<script>
function addClick(no){
    $.post("getClick.php",{newkey:no});
 } 
     
$(function () { 
   $('#registerModal').modal('hide');
   $('#loginModal').modal('hide');
});

var c,_=Function;
with(o=document.getElementById("news")){ innerHTML+=innerHTML; onmouseover=_("c=1"); onmouseout=_("c=0");}
(F=_("if(#%18||!c)#++,#%=o.scrollHeight>>1;setTimeout(F,#%18?10:1500);".replace(/#/g,"o.scrollTop")))();
</script>

</html>