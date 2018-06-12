<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			News
			<small>update data</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="<?php echo site_url('admin/news');?>">News</a></li>
			<li class="active">Update</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<?php echo form_open_multipart('admin/news/action/update');?>
				<div class="row">
					<div class="col-md-3 col-lg-4">
						<div class="form-group">
							<label for="news">Image Index</label>
							<input id="image-index" type="file" name="image" class="form-control">
							<img id="preview-image" src="<?php echo base_url($path_file.'/'.$image_index->image_name);?>" class="preview-image img img-responsive" alt="image index">
						</div>
					</div>
					<div class="col-md-9 col-lg-8">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label for="news">Title</label>
									<input type="hidden" name="id" value="<?php echo hash_link_encode($news->news_id); ?>">
									<input type="text" name="title" class="form-control" value="<?php echo $news->news_title; ?>" placeholder="news title" required>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label for="news">Link Video (Youtube)</label>
									<input type="text" name="video_link" class="form-control" value="<?php echo $video; ?>" placeholder="news video">
								</div>
								<div class="alert alert-warning">
									<strong>Link video dari youtube</strong><br>
									Contoh : <em>https://www.youtube.com/watch?v=bCc_iSZdTNU</em><br><strong>Jika tidak ingin pakai video bisa dikosongkan kolom ini.</strong>
								</div>
							</div>
						</div>
						<hr>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label for="news">Description</label>
							<textarea name="desc" class="ckeditor"><?php echo $news->news_desc; ?></textarea>
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
