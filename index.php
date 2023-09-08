<?php include "connection.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include "link.php" ?>
	<style type="text/css">
		body{
			background: url(https://t4.ftcdn.net/jpg/02/36/19/51/360_F_236195116_IWbsVnjfNpwfioW6eHgIXoIqlif9ZXei.jpg) fixed;
			background-size:100% 100vh ;
		}
	</style>
	<title></title>
</head>
<body>
	<?php include "nav.php" ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<div class="carousel slide" data-bs-ride="carousel"	id="demo">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>

					</div>

					<!-- ====================================================================== -->
					<div class="carousel-inner">
						
						<!--  -->
						<div class="carousel-item ">
							<img class="d-block w-100 " src="https://bioinst.com/wp-content/uploads/2022/01/how-gut-bacteria-kill-colon-cancer-cells.jpg" style="height: 700px;">
							<div class="carousel-caption">
								<h3 class="text-danger"> Colorectal Cancer</h3>
							</div>
						</div>
						<!--  -->
						<div class="carousel-item">
							<img class="d-block w-100 " src="https://www.wcrf.org/wp-content/uploads/2021/05/Cancer-Trends-Skin-data.png" style="height: 700px;">
							<div class="carousel-caption">
								<h3 class="text-danger">  Skin Cancer</h3>
							</div>
						</div>
						<!--  -->
						<div class="carousel-item">
							<img class="d-block w-100 " src="https://www.oncologynurseadvisor.com/wp-content/uploads/sites/13/2022/09/Hairy-cell-leukemia-G-1015938774-860x573.jpg" style="height: 700px;">
							<div class="carousel-caption">
								<h3 class="text-danger"> Leukemia</h3>
							</div>
						</div>
						<!--  -->
						<div class="carousel-item active">
							<img class="d-block w-100 " src="https://cdn-prod.medicalnewstoday.com/content/images/articles/321/321809/illustration-of-brain-tumor.jpg" style="height: 700px;">
							<div class="carousel-caption">
								<h3 class="text-danger"> Brain Cancer</h3>
							</div>
						</div>
						<!--  -->
						<div class="carousel-item">
							<img class="d-block w-100 " src="https://www.elcaminohealth.org/sites/default/files/styles/2_1__600x300/public/2019-10/lung-nodule-1100x355.jpg?h=b206743a&itok=TIkVauUt" style="height: 700px;">
							<div class="carousel-caption">
								<h3>Lung Cancer</h3>
							</div>
						</div>
						<!--  -->
						<div class="carousel-item ">
							<img class="d-block w-100 " src="https://us.123rf.com/450wm/mattlphotography/mattlphotography2101/mattlphotography210100037/mattlphotography210100037.jpg?ver=6" style="height: 700px;">
							<div class="carousel-caption">
								<h3>blood cencer</h3>
							</div>
						</div>
						<!--  -->
					</div>
					<!-- ====================================================================== -->
					<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</button>

					<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
						<span class="carousel-control-next-icon"></span>
					</button>


					<!-- ===================================================================================== -->
				</div>
			</div>
		</div>
		<?php include "cancer.php"?>

		<!-- =============================== Start Doctor =============================== -->

		<div class="container-fluid" id="doc">
			<div class=" container-fluid" style="height: 150px;"> </div>
			<div class="row justify-content-center">

				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="Dr.-Ankur-Bahl.WEBP" height="350px"width="300px">
						<h3 class="card-title">Dr.Ankur Bahl</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
						Director,16 years of experience</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>

				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="Dr.-Niranjan-Naik.WEBP" height="350px"width="300px">
						<h3 class="card-title">Dr.Niranjan Naik</h3>
						<p class="card-text">
							Oncology and Oncosurgery <br>
							Director , MBBS, MS,25 years of experience
						</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>


				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="Dr.-Vinod-Raina.WEBP" height="350px"width="300px">
						<h3 class="card-title">Dr. Vinod Raina</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
							Director, 39 years of experience
						</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>


				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="dr-suresh.WEBP" height="350px"width="300px">
						<h3 class="card-title">Prof. Dr. Suresh H. Advani</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIS<br>
							Medical Oncologist,43 years of experience
						</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>


				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="dr_akshay.jpg" height="350px"width="300px">
						<h3 class="card-title">Dr. Akshay</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
							Director,10 years of experience
						</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>


				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="dr_jyoti.jpg" height="350px"width="300px">
						<h3 class="card-title">Dr. Jyoti</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
							Director,9 years of experience
						</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>

				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="dr_krutika.jpg" height="350px"width="300px">
						<h3 class="card-title">Dr. Krutika</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
							Director,10 years of experience
						</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>

				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="dr_nikhil.jpg" height="350px"width="300px">
						<h3 class="card-title">Dr. Nikhil</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
						Director,12 years of experience</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>

				<div class="card col-sm-4 m-3" style="width:350px;">
					<div class="card-body">
						<img src="dr_rakesh.jpg" height="350px"width="300px">
						<h3 class="card-title">Dr. Rakesh</h3>
						<p class="card-text">
							MEDICAL ONCOLOGIST<br>
						Director,8 years of experience</p>
						<a href="doctor.php" class="btn btn-outline-primary">See Profile</a>
					</div>
				</div>



			</div>
		</div>
		<!-- =============================== End Doctor =============================== -->
		<!-- =============================== Start Service =============================== -->
		
		<div class="container-fluid" id="ser">
			<div class=" container-fluid" style="height: 200px;"> </div>
			<div class="row">
				<div class="col-md-4">
					<div class=" border-left border-danger">
						<i class="bi bi-telephone-fill h2"></i>
						<h4>24 hour</h4>
						<p class=""> 24*7 Hours Ambulance: we provide wll equipped ambulance with all facilities to transfer the patients in india. </p>
					</div>
				</div>
			<!-- <div class="col-md-4  ">
				<img src="">
				<h4>emergency care</h4>
				<p>  </p>
			</div> -->

			<div class="col-md-4">
				<i class="bi bi-person-fill h2 "></i>
				<h4>professional staf care</h4>
				<p>  Support Services in Hospital, are the services which are not directly related to patient care but, indirectly contribute in patient management.</p>
			</div>


			<div class="col-md-4">
				<i class="bi bi-people-fill h2 "></i>
				<h4>support services</h4>
				<p>  Support Services in Hospital, are the services which are not directly related to patient care but, indirectly contribute in patient management.</p>
			</div>

			<div class="col-md-4">
				<!-- <i class="bi bi-people-fill h2 "></i> -->
				<h4>line services</h4>
				<p>  Line Services in a hospital, are the care which is directly related to patient-treatment. </p>
				<ul>
					<li>emergency services</li>
					<li>out-patient services</li>
					<li>in-patient</li>

				</ul>
			</div>

			<div class="col-md-4">
				<!-- <i class="bi bi-people-fill h2 "></i> -->
				<h4>clinical management</h4>
				<p> Clinical management Patient encounters and consultations Clinical administration Clinical audit Clinical services Investigative services Treatment Pharmacy Dietetics Social work General management POSD-COB</p>
			</div>

			<div class="col-md-4">
				<!-- <i class="bi bi-people-fill h2 "></i> -->
				<h4>other services</h4>
				<p> Hospital Services are the collective activities of all departments and all personnel of a hospital, which end-up in satisfactory patients care. Classification of hospital services have been proposed in diversified definitions, which do not completely agree with each other. </p>
			</div>
		</div>
	</div>
	<!-- =============================== End Service =============================== -->

	<div class=" container-fluid" style="height: 150px;"> </div>
	<?php include "footer.php"?>
</body>
</html>