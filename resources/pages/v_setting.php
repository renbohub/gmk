<?php include 'resources/layout/app_start.php'; ?>
<div id="content" class="app-content">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
					<!-- BEGIN col-10 -->
					<div class="col-xl-10">
						<!-- BEGIN row -->
						<div class="row">
							<!-- BEGIN col-9 -->
							<div class="col-xl-9">
								<!-- BEGIN #general -->
								<div id="general" class="mb-5">
									<h4><i class="far fa-user fa-fw text-theme"></i> General</h4>
									<p>View and update your general account information and settings.</p>
									<div class="card">
										<div class="list-group list-group-flush">
											<div class="list-group-item d-flex align-items-center">
												<div class="flex-1 text-break">
													<div>Username</div>
													<div class="text-inverse text-opacity-50">Sean Ngu</div>
												</div>
												<div class="w-100px">
													
												</div>
											</div>
											
											<div class="list-group-item d-flex align-items-center">
												<div class="flex-1 text-break">
													<div>Display Name</div>
													<div class="text-inverse text-opacity-50">support@seantheme.com</div>
												</div>
												<div>
													<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
												</div>
											</div>
											<div class="list-group-item d-flex align-items-center">
												<div class="flex-1 text-break">
													<div>Password</div>
												</div>
												<div>
													<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
												</div>
											</div>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
								</div>
								<!-- END #general -->
								
								
								
								<!-- BEGIN #mediaAndFiles -->
								<div id="mediaAndFiles" class="mb-5">
									<h4><i class="far fa-images fa-fw text-theme"></i> Theme Setting</h4>
									<form action="#" id="form_bg">
                                    <?php 
                                        include 'env/auth.php';
                                        $id_user =  $_SESSION['data']['id_user'];
                                        $data_user = mysqli_query($conn,"select * from l_user where id_user =$id_user ");
                                        foreach ($data_user as $row){

                                    ?>
									<div class="card">
										<div class="list-group list-group-flush">
											<div class="list-group-item d-flex align-items-center">
												<div class="flex-1 text-break">
													<div>Display Mode</div>
													<div class="text-inverse text-opacity-50">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="theme_mode" id="inlineRadio1" value="dark" <?php echo ($row['background_mode'] === 'dark') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="inlineRadio1"><div class="img border"><img src="assets/img/mode/dark.jpg" class="object-fit-cover" height="76" width="90" alt="Dark Mode"><br><div class="text-center color-theme">Dark Mode</div></div></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="theme_mode" id="inlineRadio2" value="light" <?php echo ($row['background_mode'] === 'light') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="inlineRadio1"><div class="img border"><img src="assets/img/mode/light.jpg" class="object-fit-cover" height="76" width="90" alt="Dark Mode"><br><div class="text-center color-theme">Light Mode</div></div></label>
                                                        </div>
													</div>
												</div>
											</div>
											<div class="list-group-item d-flex align-items-center">
												<div class="flex-1 text-break">
													<div>Media and files cdn</div>
													<div class="text-inverse text-opacity-50 d-flex align-items-center">
														<i class="fa fa-circle fs-8px fa-fw text-muted me-1"></i> Disabled
													</div>
												</div>
												<div>
													<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
												</div>
											</div>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
									</div>
                                    <?php };?>
                                    </form>
								</div>
								<!-- END #mediaAndFiles -->
								
								
							</div>
							<!-- END col-9-->
							<!-- BEGIN col-3 -->
							<div class="col-xl-3">
								<!-- BEGIN #sidebar-bootstrap -->
								<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
									<nav class="nav">
										<a class="nav-link" href="#general" data-toggle="scroll-to">General</a>
										<a class="nav-link" href="#notifications" data-toggle="scroll-to">Notifications</a>
										<a class="nav-link" href="#privacyAndSecurity" data-toggle="scroll-to">Privacy and security</a>
										<a class="nav-link" href="#payment" data-toggle="scroll-to">Payment</a>
										<a class="nav-link" href="#shipping" data-toggle="scroll-to">Shipping</a>
										<a class="nav-link" href="#mediaAndFiles" data-toggle="scroll-to">Media and Files</a>
										<a class="nav-link" href="#languages" data-toggle="scroll-to">Languages</a>
										<a class="nav-link" href="#system" data-toggle="scroll-to">System</a>
										<a class="nav-link" href="#resetSettings" data-toggle="scroll-to">Reset settings</a>
									</nav>
								</nav>
								<!-- END #sidebar-bootstrap -->
							</div>
							<!-- END col-3 -->
						</div>
						<!-- END row -->
					</div>
					<!-- END col-10 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN #modalEdit -->
		<div class="modal fade" id="modalEdit">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit name</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label class="form-label">Name</label>
							<div class="row row-space-10">
								<div class="col-4">
									<input class="form-control" placeholder="First" value="Sean">
								</div>
								<div class="col-4">
									<input class="form-control" placeholder="Middle" value="">
								</div>
								<div class="col-4">
									<input class="form-control" placeholder="Last" value="Ngu">
								</div>
							</div>
						</div>
						<div class="alert bg-inverse bg-opacity-10 border-0">
							<b>Please note:</b> 
							If you change your name, you can't change it again for 60 days. 
							Don't add any unusual capitalization, punctuation, characters or random words. 
							<a href="#" class="alert-link">Learn more.</a>
						</div>
						<div class="mb-3">
							<label class="form-label">Other Names</label>
							<div>
								<a href="#" class="btn btn-outline-default"><i class="fa fa-plus fa-fw"></i> Add other names</a>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-outline-theme">Save changes</button>
					</div>
				</div>
			</div>
		</div>

<?php include 'resources/layout/app_end.php'; ?>
