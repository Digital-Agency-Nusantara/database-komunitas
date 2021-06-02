<html>
    <head>
        <title>Page Title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    	
		<!-- start css -->
		<style type="text/css">
		/*.kotak {
			border-style: solid;     
			width: 255px;
			height: 330px;
			text-align: justify; 
		}*/
		</style>
  		<!-- end css -->

	</head>

	<body>
		@yield('views')
		<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Profile Anda</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!-- Memanggil css class "kotak" -->
						<div class="modal-body">
						<div class="page-content page-container" id="page-content">
							<div class="padding">
								<div class="row container d-flex justify-content-center">
									<!--<div class="col-xl-6 col-md-12">-->
										<!--<div class="card user-card-full">-->
											<!--<div class="row m-l-0 m-r-0">-->
												<!--<div class="col-sm-4 bg-c-lite-green user-profile">-->
													<!--<div class="card-block text-center text-white">-->
														<!--<div class="m-b-25">-->
														<img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
														<h6 class="f-w-600 row container d-flex justify-content-center">Hembo Tingor</h6>
														<p class="row container d-flex justify-content-center">Web Designer</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
													</div>
												</div>
												<div class="col-sm-8">
													<div class="card-block">
														<h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
														<hr>
														<div class="row">
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">Daerah</p>
																<h6 class="text-muted f-w-400">Jawa Barat</h6>
															</div>
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">No.ID</p>
																<h6 class="text-muted f-w-400">98979989898</h6>
															</div>
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">Status</p>
																<h6 class="text-muted f-w-400">Menikah</h6>
															</div>
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">Alamat</p>
																<h6 class="text-muted f-w-400">Jl. Dahlia 2</h6>
															</div>
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">Email</p>
																<h6 class="text-muted f-w-400">gilangaryadimahardika@gmail.com</h6>
															</div>
														</div>
														<br>
														<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">SK</h6>
														<hr>
														<div class="row">
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">No. SK</p>
																<h6 class="text-muted f-w-400">DUMMY/21/0000</h6>
															</div>
															<div class="col-sm-6">
																<p class="m-b-10 f-w-600">Tanggal SK</p>
																<h6 class="text-muted f-w-400">24/04/1995</h6>
															</div>
														</div>
														<ul class="social-link list-unstyled m-t-40 m-b-10">
															<li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
															<li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
															<li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												<!--</div>
											</div>
										</div>
									</div>
								</div>
							</div>-->
						</div>
						</div>
						<!-- End class "kotak" -->
						<!--<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>-->
					</div>
				</div>
			</div>	
		<!--End Modal-->											
	</body>

	<!--JS-->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
</html>