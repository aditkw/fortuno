<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			portofolio
			<small>update data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="<?php echo site_url('admin/portofolio');?>">portofolios</a></li>
			<li class="active">Update</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<?php echo form_open_multipart('admin/portofolio/action/update');?>
				<div class="row">
					<div class="col-md-3 col-lg-4">
						<div class="form-group">
							<label for="portofolio">Image Index</label>
							<input type="hidden" name="id_image_0" value="<?php echo $image_index->image_id;?>">
							<input id="image-index" type="file" name="image[]" class="form-control">
							<img id="preview-image" src="<?php echo base_url($path_file.'/'.$image_index->image_name);?>" class="img img-responsive" alt="image index">
						</div>
					</div>
					<div class="col-md-9 col-lg-8">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<div class="callout callout-warning">
										<h4><i class="fa fa-warning"></i></h4>
										<p><strong>Image Index</strong> digunakan sebagai gambar utama dan harus diisi.</p>
										<p>Ukuran 350 * 350</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="form-group">
									<label for="portofolio">Name(Indonesia)</label>
									<input type="text" name="name" class="form-control" value="<?php echo $portofolio->portofolio_name;?>" placeholder="portofolio name" required>
									<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="form-group">
									<label for="portofolio">Name(English)</label>
									<input type="text" name="name_en" class="form-control" value="<?php echo $portofolio->portofolio_name_en;?>" placeholder="portofolio name english" required>
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
							<textarea name="desc" class="ckeditor"><?php echo $portofolio->portofolio_desc;?></textarea>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="portofolio">Description(English)</label>
							<textarea name="desc_en" class="ckeditor"><?php echo $portofolio->portofolio_desc_en;?></textarea>
						</div>
					</div>
				</div>
				<hr>

				<!-- <div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="portofolio">Image Alt</label>
							<input type="text" name="alt" class="form-control" value="<?php echo $portofolio->portofolio_alt;?>" placeholder="image alt" required>
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<div class="callout callout-warning">
								<h4><i class="fa fa-warning"></i></h4>
								<p><strong>3</strong> detail image.</p>
								<p>Ukuran 350 * 350</p>
							</div>
						</div>
					</div>
					<?php $no = 0; foreach ($image as $image): ?>
						<?php if ($image->image_seq != 0): ?>
							<div class="col-md-5ths col-lg-5ths col-sm-6 col-xs-10">
								<div class="form-group">
									<label for="portofolio">Image </label>
									<input type="hidden" name="id_image_<?php echo $no;?>" value="<?php echo $image->image_id;?>">
									<input type="file" name="image[]" class="form-control">
									<?php if (!empty($image->image_name)): ?>
										<img src="<?php echo base_url($path_file.'/'.$image->image_name);?>" class="preview-image img img-responsive" alt="portofolio image">
									<?php else: ?>
										<img src="<?php echo base_url('dist/img/assets/no-image-1.jpg');?>" class="preview-image img img-responsive" alt="portofolio image">
									<?php endif?>
									<?php if (!empty($image->image_name)): ?>
										<input type="checkbox" name="delete_image_<?=$no?>" class="minimal" value="delete"> Delete image
									<?php else: ?>
										<input type="checkbox" name="delete_image_<?=$no?>" class="minimal hidden" disabled> Delete image
									<?php endif?>
								</div>
							</div>
						<?php endif ?>
					<?php $no++; endforeach ?>
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
