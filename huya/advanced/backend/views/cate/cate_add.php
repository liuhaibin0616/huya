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
			<li class="active">分类管理</li>
			<li class="active">添加分类</li>
		</ul><!-- .breadcrumb -->
	</div>

	<div class="page-content">
			<div class="row">
			

					<div class="col-xs-12">
					
					<form class="form-horizontal" role="form" action="index.php?r=cate/cate_add" method="post">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> 分类名称 </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" name="cate_name" placeholder="分类名称" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> 分类路径</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-2" name="logo" placeholder="分类路径" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 顶级分类 </label>

										<div class="col-sm-9">
											<select name="parent_id">
												<option value="0">--请选择--</option>
												<?php foreach($data as $key=>$val) {?>
													<option value="<?=$val['cate_id']?>"><?=$val['cate_name']?></option>
												<?php } ?>
											</select>
											</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> 分类排序</label>

						<div class="col-sm-9">
							<input type="text" id="form-field-2" name="sort" placeholder="分类排序" class="col-xs-10 col-sm-5" />
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