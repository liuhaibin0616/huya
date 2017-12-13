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
			<li class="active">礼物管理</li>
			<li class="active">添加礼物</li>
		</ul><!-- .breadcrumb -->
	</div>

	<div class="page-content">
			<div class="row">
			

					<div class="col-xs-12">
					
					<form class="form-horizontal" role="form" action="index.php?r=gift/gift_add" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> 礼物名称 </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" name="gift_name" placeholder="礼物名称" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> 礼物价格</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-2" name="gift_price" placeholder="礼物价格" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> 礼物描述</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-2" name="gift_desc" placeholder="礼物描述" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> 礼物图片</label>

						<div class="col-sm-9">
							<input type="file" id="form-field-2" name="gift_img" placeholder="礼物图片" class="col-xs-10 col-sm-5" />
						</div>
					</div>

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