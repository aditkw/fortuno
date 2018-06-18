<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Text Website
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Text Website</li>
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
				<?php echo form_open('admin/text/action/update');?>
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">ID</a></li>
							<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">ENG</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="form-group">
									<label for="title">Slide Text</label>
									<textarea name="slide" class="form-control" placeholder="Text on the slide" rows="5"><?php echo $text->text_slide;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Quote Text</label>
									<textarea name="quote" class="form-control" placeholder="Text for quote homepage" rows="5"><?php echo $text->text_quote;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Service Text</label>
									<textarea name="service" class="form-control" placeholder="Text on the service desc" rows="5"><?php echo $text->text_service;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Portofolio Text</label>
									<textarea name="portofolio" class="form-control" placeholder="Text on the portofolio desc" rows="5"><?php echo $text->text_portofolio;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Footer Text</label>
									<textarea name="footer" class="form-control" placeholder="Text on the footer" rows="5"><?php echo $text->text_footer;?></textarea>
								</div>
							</div><!-- /.tab-pane -->

							<div class="tab-pane" id="tab_2">
								<div class="form-group">
									<label for="title">Slide Text</label>
									<textarea name="slide_en" class="form-control" placeholder="Text on the slide" rows="5"><?php echo $text->text_slide_en;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Quote Text</label>
									<textarea name="quote_en" class="form-control" placeholder="Text for quote homepage" rows="5"><?php echo $text->text_quote_en;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Service Text</label>
									<textarea name="service_en" class="form-control" placeholder="Text on the service desc" rows="5"><?php echo $text->text_service_en;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Portofolio Text</label>
									<textarea name="portofolio_en" class="form-control" placeholder="Text on the portofolio desc" rows="5"><?php echo $text->text_portofolio_en;?></textarea>
								</div>
								<div class="form-group">
									<label for="title">Footer Text</label>
									<textarea name="footer_en" class="form-control" placeholder="Text on the footer" rows="5"><?php echo $text->text_footer_en;?></textarea>
								</div>
							</div><!-- /.tab-pane -->

						</div><!-- /.tab-content -->
					</div><!-- /.nav-tabs-custom -->
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
						<button type="reset" name="reset" class="btn btn-default btn-flat"><i class="fa fa-refresh"></i> Reset</button>
					</div>
				<?php echo form_close();?>

			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
