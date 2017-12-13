<?php
use yii\helpers\url;
?>
<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="http://www.myhuya.com/index.php?r=huya/index">首页</a>
			</li>
			<li class="active">直播间管理</li>
			<li class="active">添加直播间</li>
		</ul><!-- .breadcrumb -->
	</div>

	<div class="page-content">
			<div class="row">
			

					<div class="col-xs-12">
					
					<form class="form-horizontal" role="form" action="index.php?r=liveroom/add" method="post">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-1">直播间名称</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" name="liveroom_name" placeholder="直播间名称" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2">直播间描述</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-2" name="liveroom_desc" placeholder="直播间描述" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2">开始时间</label>

						<div class="col-sm-9">
							<input type="text" id="datepicker" name="liveroom_start" class="col-xs-10 col-sm-5" placeholder="开始时间"></p>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2">结束时间</label>

						<div class="col-sm-9">
							<input type="text" id="datepicker2" name="liveroom_stop" class="col-xs-10 col-sm-5" placeholder="结束时间"></p>
						</div>
					</div>

					<div class="space-4"></div>

										<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2">直播人</label>

						<div class="col-sm-9">
							<select class="col-xs-10 col-sm-5" name="liveroom_man">
								<option>请选择</option>
								<?php foreach ($data as $key => $v): ?>
									<option><?php echo $v['user_name'] ?></option>
								<?php endforeach ?>
							</select>
							
						</div>
					</div>
					
					<div class="space-4"></div>

										<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2">直播人数</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-2" name="liveroom_num" placeholder="直播人数" class="col-xs-10 col-sm-5" />
						</div>
					</div>
					
					<div class="space-4"></div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								增加
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="icon-undo bigger-110"></i>
								重置
							</button>
						</div>
					</div>

					<div class="hr hr-24"></div>



				</form>
					</div><!-- /span -->
				</div><!-- /row -->

	</div><!-- /.page-content -->
</div><!-- /.main-content -->