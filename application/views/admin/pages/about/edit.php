<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			about
			<small>update data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="<?php echo site_url('admin/about');?>">about</a></li>
			<li class="active">Update</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<?php echo form_open_multipart('admin/about/action/update');?>
				<div class="row">
					<div class="col-md-3 col-lg-4">
						<div class="form-group">
							<label for="about">Image Index</label>
							<input id="image-index" type="file" name="image" class="form-control">
							<img id="preview-image" src="<?php echo base_url($path_file.'/'.$image_index->image_name);?>" class="preview-image img img-responsive" alt="image index">
						</div>
					</div>
					<!-- <div class="col-md-9 col-lg-8">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label for="about">Title ID</label>
									<input type="text" name="title" class="form-control" value="<?php echo $about->about_title; ?>" placeholder="about title indonesian" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label for="about">Title EN</label>
									<input type="text" name="title_en" class="form-control" value="<?php echo $about->about_title_en; ?>" placeholder="about title english" required>
								</div>
							</div>
						</div>
						<hr>
					</div> -->
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="about">Description ID</label>
							<input type="hidden" name="id" value="<?php echo hash_link_encode($about->about_id); ?>">
							<textarea name="desc" class="ckeditor"><?php echo $about->about_desc; ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="about">Description EN</label>
							<textarea name="desc_en" class="ckeditor"><?php echo $about->about_desc_en; ?></textarea>
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
