<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Careers
			<small>update data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="<?php echo site_url('admin/careers');?>">careers</a></li>
			<li class="active">Update</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<?php echo form_open_multipart('admin/careers/action/update');?>
				<div class="row">
					<div class="col-md-12 col-lg-6">
								<div class="form-group">
									<label for="careers">Job Name</label>
									<input type="hidden" name="id" value="<?php echo hash_link_encode($careers->careers_id); ?>">
									<input type="text" name="name" class="form-control" value="<?php echo $careers->careers_name; ?>" placeholder="careers title" required>
								</div>
					</div>
					<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label for="careers">Close Date</label>
								<input type="date" name="close" class="form-control" value="<?php echo $careers->careers_close; ?>" required>
							</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="careers">Description</label>
							<textarea name="desc" class="ckeditor"><?php echo $careers->careers_desc; ?></textarea>
						</div>
					</div>
				</div>
				<hr>
				<div class="form-group">
					<button type="reset" class="btn btn-default btn-flat"><i class="fa fa-refresh"></i> Reset</button>
					<button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
				</div>
				<?php echo form_close();?>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
