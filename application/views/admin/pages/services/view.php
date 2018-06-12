<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Our Services
			<small>data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Our Services</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Alert -->
		<div class="row form-group">
			<!-- Menampilkan hasil kesalahan validasi dalam proses input dan update data -->
			<?php if ($this->session->flashdata('error')):?>
				<div class="col-md-12 wow fadeInDown">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-close"></i> Error!</h4>
						<ul>
							<?php echo $this->session->flashdata('error'); ?>
						</ul>
					</div><!-- /alert -->
				</div><!-- /col-12 -->
			<?php endif;?>

			<!-- Menampilkan hasil sukses dari proses input dan update data -->
			<?php if ($this->session->flashdata('success')): ?>
				<div class="col-md-12 wow fadeInDown">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Success!</h4>
						<?php echo $this->session->flashdata('success')?>
					</div><!-- /alert -->
				</div><!-- /col-12 -->
			<?php endif; ?>

			<!-- Menampilkan hasil kesalahan dari proses input dan update data -->
			<?php if ($this->session->flashdata('failed')): ?>
				<div class="col-md-12 wow fadeInDown">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-close"></i> Failed!</h4>
						<?php echo $this->session->flashdata('failed')?>
					</div><!-- /alert -->
				</div><!-- /col-12 -->
			<?php endif; ?>
		</div><!-- /row -->
		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<div class="form-group text-right">
					<button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#add" title="Add New"><i class="fa fa-plus"></i> Add New</button>
				</div>
				<table id="datatable1" class="table table-striped">
					<thead>
						<tr>
							<th width="5%">#</th>
							<th>Image</th>
							<th>Title</th>
							<th>Description</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($services as $services): ?>
							<tr>
								<td><?php echo $no;?></td>
								<td><img src="<?=site_url('uploads/img/services/thumb-'.$services->image_name)?>" alt=""></td>
								<td><?php echo ucwords($services->services_name);?></td>
								<td><?php echo limitKalimat($services->services_desc, 151);?></td>
								<td>
									<!-- Action -->
									<?php if ($services->services_pub == '88'): ?>
										<a href="<?php echo site_url('admin/services/action/publish?id='.hash_link_encode($services->services_id));?>" class="btn btn-flat btn-danger" title="Publish">
											<i class="fa fa-bullhorn"></i>
										</a>
									<?php else: ?>
										<a href="<?php echo site_url('admin/services/action/publish?id='.hash_link_encode($services->services_id));?>" class="btn btn-flat btn-success" title="Publish">
											<i class="fa fa-bullhorn"></i>
										</a>
									<?php endif ?>
									<a class="btn btn-flat btn-default btn-edit-services" data-id="<?php echo hash_link_encode($services->services_id);?>" title="Update">
										<i class="fa fa-edit"></i>
									</a>
									<a onclick="return confirm('Are you sure ?')"  href="<?php echo site_url('admin/services/action/delete?id='.hash_link_encode($services->services_id));?>" class="btn btn-warning btn-flat" title="Delete">
									<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						<?php $no++; endforeach ?>
					</tbody>
					<thead>
						<tr>
							<th>#</th>
							<th>Image</th>
							<th>Title</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<div id="add" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Our services</h4>
			</div>
			<?php echo form_open_multipart('admin/services/action/insert');?>
			<div class="modal-body">
				<div class="form-group">
					<label for="services">Title</label>
					<input type="text" name="name" class="form-control" placeholder="title">
				</div>
				<div class="form-group">
					<label for="services">Description</label>
					<textarea name="desc" class="ckeditor form-control" placeholder="description" rows="5"></textarea>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="product">Image Thumbnail</label>
							<input type="file" name="image[]" class="form-control" required>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="product">Image Icon</label>
							<input type="file" name="image[]" class="form-control" required>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-default btn-flat"><i class="fa fa-refresh"></i> Reset</button>
				<button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
			</div>
			<?php echo form_close();?>
		</div>

	</div>
</div>

<div id="update" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update Our services</h4>
			</div>
			<?php echo form_open_multipart('admin/services/action/update');?>
			<div class="modal-body">
				<div class="form-group">
					<label for="services">Title</label>
					<input id="id" type="hidden" name="id">
					<input id="title" type="text" name="name" class="form-control" placeholder="title">
				</div>
				<div class="form-group">
					<label for="services">Description</label>
					<textarea id="desc" name="desc" class="ckeditor form-control" placeholder="description" rows="5"></textarea>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="product">Image Thumbnail</label>
							<input id="image" type="hidden" name="id_image_0">
							<input type="file" name="image[]" class="form-control">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="product">Image Icon</label>
							<input id="icon" type="hidden" name="id_image_1">
							<input type="file" name="image[]" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-default btn-flat"><i class="fa fa-refresh"></i> Reset</button>
				<button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
			</div>
			<?php echo form_close();?>
		</div>

	</div>
</div>
