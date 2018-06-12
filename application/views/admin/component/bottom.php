
		<!-- jQuery 2.1.4 -->
		<script src="<?php echo base_url('plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
		<!-- jQueryUI -->
		<script src="<?php echo base_url('plugins/jQueryUI/jquery-ui.min.js');?>"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.min.js');?>"></script>
		<!-- SlimScroll -->
		<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
		<!-- SlimScroll -->
		<script src="<?php echo base_url('plugins/ckeditor/ckeditor.js');?>"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url('plugins/fastclick/fastclick.min.js');?>"></script>
		<!-- iCheck 1.0.1 -->
		<script src="<?php echo base_url('plugins/iCheck/icheck.min.js');?>"></script>
		<!-- Select2 -->
		<script src="<?php echo base_url('plugins/select2/select2.full.min.js');?>"></script>
		<!-- DataTables -->
		<script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
		<!-- WOW -->
		<script src="<?php echo base_url('plugins/wow/dist/wow.js')?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url('dist/js/app.min.js');?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url('dist/js/demo.js');?>"></script>
		<script>
		// WOW
		wow = new WOW();
		wow.init();

		// Close alert smooth
		window.setTimeout(function() {
				$(".alert-success").slideUp(500, function() {
					$(this).remove();
				});
			},
			4000
		);

		$(function () {
			// DATE PICKER JQUERY UI
			$( function() {
				$( "#datepicker" ).datepicker({
					dateFormat: "yy-mm-dd"
				});
			});
			$( function() {
				$( ".datepicker" ).datepicker({
					dateFormat: "yy-mm-dd"
				});
			});

			// SELECT2
			$(".select2").select2();

			// DATA TABLE
			$("#datatable1").DataTable();
			$('#datatable2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});

			// AJAX
			// get user (edit)
			$('.btn-edit-user').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/user/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#name").val(data.name);
						$("#username").val(data.username);
						$("#email").val(data.email);
						$("#level").val(data.level).prop('selected','selected');
						$("#status").val(data.status).prop('selected','selected');
						$("#editUser").modal('show');
					}
				});
			});
			// get service (edit)
			$('.btn-edit-firm').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/firm/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#title").val(data.title);
						CKEDITOR.instances['desc'].setData(data.desc);
						$("#update").modal('show');
					}
				});
			});

			$('.btn-edit-benefits').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/benefits/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#title").val(data.title);
						CKEDITOR.instances['desc'].setData(data.desc);
						$("#update").modal('show');
					}
				});
			});

			$('.btn-edit-links').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/links/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#title").val(data.title);
						$("#desc").val(data.desc);
						$("#update").modal('show');
					}
				});
			});

			$('.btn-edit-international').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/international/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#title").val(data.title);
						CKEDITOR.instances['desc'].setData(data.desc);
						$("#update").modal('show');
					}
				});
			});

			$('.btn-edit-partners').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/partners/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#desc").val(data.desc);
						$("#update").modal('show');
					}
				});
			});

			$('.btn-edit-clients').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/clients/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#desc").val(data.desc);
						$("#update").modal('show');
					}
				});
			});
			// get category (edit)
			$('.btn-edit-category').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/category/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#name").val(data.name);
						$("#name_en").val(data.name_en);
						// $("#desc").val(data.desc);
						// $("#alt").val(data.alt);
						$("#update").modal('show');
					}
				});
			});

			$('.btn-edit-services').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/services/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#title").val(data.title);
						CKEDITOR.instances['desc'].setData(data.desc);
						$("#image").val(data.image);
						$("#icon").val(data.icon);
						$("#update").modal('show');
					}
				});
			});
			// get slide (edit)
			$('.btn-edit-slide').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/slide/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#link").val(data.link);
						$("#alt").val(data.alt);
						$("#update").modal('show');
					}
				});
			});
			// get banner (edit)
			$('.btn-edit-banner').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/banner/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#link").val(data.link);
						$("#alt").val(data.alt);
						$("#update").modal('show');
					}
				});
			});
			// get seo (edit)
			$('.btn-edit-seo').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/seo/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#title").val(data.title);
						$("#keyword").val(data.keyword);
						$("#desc").val(data.desc);
						$("#update").modal('show');
					}
				});
			});
			// get tag (edit)
			$('.btn-edit-tag').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/tag/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#name").val(data.name);
						$("#update").modal('show');
					}
				});
			});
			// get tag (edit)
			$('.btn-edit-articlecat').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/articlecat/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#name").val(data.name);
						$("#update").modal('show');
					}
				});
			});
			// get member (block)
			$('.btn-block-member').click(function() {
				var id = $(this).attr('data-id');
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/member/update_load');?>",
					data: { dataID: id},
					timeout : 3000,
					dataType: "JSON",
					error: function() {
						alert("ERROR!");
					},
					success: function(data) {
						$("#id").val(data.id);
						$("#name").val(data.name);
						$("#block").modal('show');
					}
				});
			});
			// select sub-category
			$(document).ready(function() {
				$('#category').change(function() {
					var id = $(this).val();
					// alert(id_category);
					$.ajax({
						type: 'POST',
						url: '<?=site_url('admin/product/product/ajax_subcat')?>',
						data: { dataID: id},
						success: function(response) {
							$('#subcat').html(response);
						}
					});
				});

				$('#category_edt').change(function() {
					var id = $(this).val();
					// alert(id_category);
					$.ajax({
						type: 'POST',
						url: '<?=site_url('admin/product/product/ajax_subcat')?>',
						data: { dataID: id},
						success: function(response) {
							$('#subcat_edt').html(response);
						}
					});
				});

				$('#catproject').change(function() {
					var id = $(this).val();
					// alert(id_category);
					$.ajax({
						type: 'POST',
						url: '<?=site_url('admin/project/project/ajax_subcat')?>',
						data: { dataID: id},
						success: function(response) {
							$('#subcat').html(response);
						}
					});
				});

				$('#subcat').change(function() {
					var id = $(this).val();
					// alert(id_category);
					$.ajax({
						type: 'POST',
						url: '<?=site_url('admin/product/product/ajax_type')?>',
						data: { dataID: id},
						success: function(response) {
							$('#type').html(response);
						}
					});
				});
			});
		});

		// Review Image
		function previewImage(input) {

			if (input.files && input.files[0]) {
				var fileReader = new FileReader();
				var imageFile = input.files[0];

				if(imageFile.type == "image/png" || imageFile.type == "image/jpeg") {
					fileReader.readAsDataURL(imageFile);

					fileReader.onload = function (e) {
						$('#preview-image').attr('src', e.target.result);
					}
				}

				else {
					alert("your file is not image");
				}
			}
		}

		$("[name='image']").change(function(){
				previewImage(this);
		});

		$("[id='image-index']").change(function(){
				previewImage(this);
		});

		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});

		</script>
	</body>
</html>
