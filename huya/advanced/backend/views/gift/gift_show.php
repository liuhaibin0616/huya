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
			<li class="active">礼物管理</li>
            <li class="active">礼物列表</li>
		</ul><!-- .breadcrumb -->
	</div>

	<div class="page-content">


				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive">
							<table id="sample-table-1" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">
											<label>
												<input type="checkbox" class="ace" />
												<span class="lbl"></span>
											</label>
										</th>
										<th>礼物名称</th>
										<th>礼物价格</th>
										<th>礼物描述</th>
										<th>礼物图片</th>
										<th>操作</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach($data as $key=>$val) {?>
									<tr>
										<td class="center">
											<label>
												<input type="checkbox" value="<?=$val['gift_id']?>" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td><?=$val['gift_name']?></td>
										<td><?=$val['gift_price']?></td>
										<td><?=$val['gift_desc']?></td>
										<td><img src="<?=$val['gift_img']?>" width="70" height="100" ></td>
										<td><a href="<?= Url::toRoute(['gift/gift_del','id'=>$val['gift_id']])?>">删除</a>|<a href="<?= Url::toRoute(['gift/gift_upd','id'=>$val['gift_id']])?>">修改</a></td>

									</tr>
									<?php } ?>
																																				
								</tbody>
							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /span -->
				</div><!-- /row -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->