<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Portofolio
			<small>add new data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="<?php echo site_url('admin/portofolio');?>">Portofolio</a></li>
			<li class="active">Add New</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<?php echo form_open_multipart('admin/portofolio/action/insert');?>
				<div class="row">
					<div class="col-md-3 col-lg-4">
						<div class="form-group">
							<label for="portofolio">Image Index</label>
							<input id="image-index" type="file" name="image[]" class="form-control" required>
							<img id="preview-image" src="<?php echo base_url('dist/img/assets/no-image-1.jpg');?>" class="preview-image img img-responsive" alt="image index">
						</div>
					</div>
					<div class="col-md-9 col-lg-8">
						<div class="form-group">
							<div class="callout callout-warning">
								<h4><i class="fa fa-warning"></i></h4>
								<p><strong>Image Index</strong> digunakan sebagai gambar utama dan harus diisi.</p>
								<p>Ukuran </p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12 col-lg-10">
								<div class="form-group">
									<label for="portofolio">Name(Indonesia)</label>
									<input type="text" name="name" class="form-control" value="" placeholder="portofolio name" required>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12 col-lg-10">
								<div class="form-group">
									<label for="portofolio">Name(English)</label>
									<input type="text" name="name_en" class="form-control" value="" placeholder="portofolio name english" required>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="portofolio">Description(Indonesia)</label>
							<textarea name="desc" class="ckeditor" required></textarea>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="portofolio">Description(English)</label>
							<textarea name="desc_en" class="ckeditor" required></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<div class="callout callout-warning">
								<h4><i class="fa fa-warning"></i></h4>
								<p>Portofolio pdf</p>
								<p>ekstensi harus pdf</p>
							</div>
						</div>
					</div>
						<div class="col-md-5 col-lg-4 col-sm-6 col-xs-10">
							<div class="form-group">
								<label for="portofolio">Pdf </label>
								<input type="file" name="pdf" class="form-control" required>
							</div>
						</div>
				</div>
				<hr>
				<div id="rowImage" class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<div class="callout callout-warning">
								<h4><i class="fa fa-warning"></i></h4>
								<p>Ukuran gambar 350 * 350</p>
							</div>
						</div>
					</div>
						<div class="col-md-5 col-lg-4 col-sm-6 col-xs-10">
							<div class="form-group">
								<label for="portofolio">Image </label>
								<input type="file" name="image[]" class="form-control">
							</div>
						</div>
				</div>
				<button id="addImage" type="button" name="button">Add more image</button>
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
