<?php 
$id = $this->session->userdata('logged_in')['id'];	  
$admin_detail = pull_admin();
?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<?php if($admin_detail[0]->profile_picture != NULL){ ?>
                  <img src="<?php echo base_url().$admin_detail[0]->profile_picture; ?>" class="img-circle" alt="User Image">
				<?php }else{ ?>
					<img src="<?php echo base_url(); ?>assets/images/user_avatar.jpg" class="img-circle" alt="User Image">
				<?php } ?>				
            </div>
            <div class="pull-left info">
              <p><?php $a=$this->session->userdata('logged_in'); echo $a['username'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
		</div>
          <!-- search form -->
         <!-- <form method="post" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>/welcome">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
					</a>
				</li>
			
			        <li class="treeview"><a href="<?php echo base_url();?>Patient_details/view_patientdetails"><i class="fa fa-male"></i> <span>Patient Details</span><i class="fa fa-angle-left pull-right"></i></a>
                    </li>
				   
				    <li class="treeview"><a href="#"><i class="fa fa-user-md"></i> <span>Doctor Management</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						
						<li><a href="<?php echo base_url();?>Doctor_ctrl/view_doctordetails"><i class="fa fa-circle-o text-aqua"></i>Doctor Details</a></li>	
						<li><a href="<?php echo base_url();?>Doctor_ctrl/add_gallery"><i class="fa fa-circle-o text-aqua"></i>Doctor Gallery</a></li>
					  </ul>
                    </li>
					
					 <li class="treeview"><a href="#"><i class="fa fa-hospital-o"></i> <span>Clinic Management</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						
						<li><a href="<?php echo base_url();?>Clinic_ctrl/view_clinicdetails"><i class="fa fa-circle-o text-aqua"></i>Clinic Details</a></li>	
						<li><a href="<?php echo base_url();?>Clinic_ctrl/add_clinicgallery"><i class="fa fa-circle-o text-aqua"></i>Clinic Gallery</a></li>
					  </ul>
                    </li>

					 <li class="treeview"><a href="#"><i class="fa fa-heartbeat"></i> <span>Medical Center Management</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						
						<li><a href="<?php echo base_url();?>Medical_ctrl/view_medicaldetails"><i class="fa fa-circle-o text-aqua"></i>Medical Center Details</a></li>	
						<li><a href="<?php echo base_url();?>Medical_ctrl/add_medicalgallery"><i class="fa fa-circle-o text-aqua"></i>Medical Center Gallery</a></li>
					  </ul>
                    </li>

					<li class="treeview"><a href="#"><i class="fa fa-h-square"></i> <span>Hospital Management</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						
						<li><a href="<?php echo base_url();?>Hospital_ctrl/view_hospitals"><i class="fa fa-circle-o text-aqua"></i>Hospital Details</a></li>	
						<li><a href="<?php echo base_url();?>Hospital_ctrl/add_hospitalgallery"><i class="fa fa-circle-o text-aqua"></i>Hospital Gallery</a></li>
					  </ul>
                    </li>
					<li class="treeview"><a href="<?php echo base_url();?>Appoinment_ctrl/view_appoinmentdetails"><i class=" fa fa-credit-card"></i>  <span>Booking Details</span><i class="fa fa-angle-left pull-right"></i></a>
                    </li>
					
				  <!--<li class="treeview"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>Manage Location</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo base_url();?>Country_ctrl/add_countryname"><i class="fa fa-circle-o text-aqua"></i>Add Country </a></li>	
						<li><a href="<?php echo base_url();?>Country_ctrl/add_statename"><i class="fa fa-circle-o text-aqua"></i>Add State </a></li>
						<li><a href="<?php echo base_url();?>Country_ctrl/add_cityname"><i class="fa fa-circle-o text-aqua"></i>Add City </a></li>
					  </ul>
                    </li>-->
				   <li class="treeview"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i> <span>Manage Package </span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">						
						<li><a href="<?php echo base_url();?>Package_ctrl/add_package"><i class="fa fa-circle-o text-aqua"></i>Add Doctor Package</a></li> 						
						<li><a href="<?php echo base_url();?>Package_ctrl/hospital_package"><i class="fa fa-circle-o text-aqua"></i>Add Hospital Package</a></li> 						
					  </ul>
                    </li>
				 <li class="treeview"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>Manage Additional Details</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li class="treeview"><a href="<?php echo base_url();?>Language_ctrl/add_languages"><i class="fa fa-language" aria-hidden="true"></i> <span>Add Language </span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Currency_ctrl/add_currencies"><i class="fa fa-globe" aria-hidden="true"></i> <span>Add Currency </span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Affiliate_ctrl/add_affiliatedetails"><i class="fa fa-houzz" aria-hidden="true"></i> <span>Add Affiliated  </span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Amenities_ctrl/add_amenitiesdetails"><i class="fa fa-futbol-o" aria-hidden="true"></i> <span>Add Amenities </span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Visitation_ctrl/add_visitations"><i class="fa fa-crosshairs"></i> <span>Add Visitation</span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Doctordegree_ctrl/add_degreedetail"><i class="fa fa-deviantart"></i> <span>Add Doctor Degree </span><i class="fa fa-angle-left pull-right"></i></a></li>	
						<li class="treeview"><a href="<?php echo base_url();?>Insurance_ctrl/add_insurancedetail"><i class="fa fa-indent" aria-hidden="true"></i> <span>Add Insurance </span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Speciality_ctrl/add_speciality"><i class="fa fa-eye" aria-hidden="true"></i> <span>Add  Specialty</span><i class="fa fa-angle-left pull-right"></i></a></li>
						<li class="treeview"><a href="<?php echo base_url();?>Cities/add_cities"><i class="fa fa-eye" aria-hidden="true"></i> <span>Add  Cities</span><i class="fa fa-angle-left pull-right"></i></a></li>
					</ul>		
				</li>			
				   <li class="treeview"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>Manage Rating</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo base_url();?>Rating_ctrl/view_ratingdetails"><i class="fa fa-circle-o text-aqua"></i>Clinic Rating </a></li>	
						<li><a href="<?php echo base_url();?>Rating_ctrl/view_doctorpopup"><i class="fa fa-circle-o text-aqua"></i>Doctor Rating </a></li>
						<li><a href="<?php echo base_url();?>Rating_ctrl/view_hospitalpopup"><i class="fa fa-circle-o text-aqua"></i>Hospital Rating </a></li>
						<li><a href="<?php echo base_url();?>Rating_ctrl/view_medicalpopup"><i class="fa fa-circle-o text-aqua"></i>Medical Rating </a></li>
					  </ul>
                    </li>
				

					<li class="treeview"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i> <span>Language Translation</span><i class="fa fa-angle-left pull-right"></i></a>
					  <ul class="treeview-menu">
						<!--<li><a href="<?php //echo base_url();?>Language_translation/add_language"><i class="fa fa-circle-o text-aqua"></i>Add Language Translation</a></li>
						<li><a href="<?php //echo base_url();?>Language_translation/view_language"><i class="fa fa-circle-o text-aqua"></i>View Language Translation</a></li>	-->
						<li><a href="<?php echo base_url();?>Home_Translation/view_home"><i class="fa fa-circle-o text-aqua"></i>Home Translation</a></li>
						<li><a href="<?php echo base_url();?>Search_Translation/view_search"><i class="fa fa-circle-o text-aqua"></i>Search Translation</a></li>
						<li><a href="<?php echo base_url();?>Login_Translation/view_login"><i class="fa fa-circle-o text-aqua"></i>Login Translation</a></li>
						<li><a href="<?php echo base_url();?>Doctorfilter_Translation/view_doctorfilter"><i class="fa fa-circle-o text-aqua"></i>Doctor Filter Translation</a></li>
						<li><a href="<?php echo base_url();?>Clinicfilter_Translation/view_clinicfilter"><i class="fa fa-circle-o text-aqua"></i>Clinic Filter Translation</a></li>
						<li><a href="<?php echo base_url();?>Medicalfilter_Translation/view_medicalfilter"><i class="fa fa-circle-o text-aqua"></i>Medical  Filter Translation</a></li>
						<li><a href="<?php echo base_url();?>Hospitalfilter_Translation/view_hospitalfilter"><i class="fa fa-circle-o text-aqua"></i>Hospital  Filter Translation</a></li>
						<li><a href="<?php echo base_url();?>Doctorprofile_Translation/view_doctorprofile"><i class="fa fa-circle-o text-aqua"></i>  Doctor Profile Translation</a></li>
						<li><a href="<?php echo base_url();?>Hospitalprofile_Translation/view_hospitalprofile"><i class="fa fa-circle-o text-aqua"></i>  Hospital Profile Translation</a></li>
						<li><a href="<?php echo base_url();?>Clinicprofile_Translation/view_clinicprofile"><i class="fa fa-circle-o text-aqua"></i>  Clinic Profile Translation</a></li>
						<li><a href="<?php echo base_url();?>Medicalprofile_Translation/view_medicalprofile"><i class="fa fa-circle-o text-aqua"></i>  Medical Profile Translation</a></li>
						<li><a href="<?php echo base_url();?>Doctor_Translation/view_doctor"><i class="fa fa-circle-o text-aqua"></i> Doctor Translation</a></li>
						<li><a href="<?php echo base_url();?>Hospital_Translation/view_hospital"><i class="fa fa-circle-o text-aqua"></i>Hospital Translation</a></li>
						<li><a href="<?php echo base_url();?>Patient_Translation/view_patient"><i class="fa fa-circle-o text-aqua"></i>  Patient Translation</a></li>
						<li><a href="<?php echo base_url();?>About_Translation/view_about"><i class="fa fa-circle-o text-aqua"></i>  About Translation</a></li>
						<li><a href="<?php echo base_url();?>Terms_Translation/view_terms"><i class="fa fa-circle-o text-aqua"></i>  Terms Translation</a></li>
						<li><a href="<?php echo base_url();?>Booking_Translation/view_booking"><i class="fa fa-circle-o text-aqua"></i>  Booking Translation</a></li>
					  </ul>
					  </ul>
                    </li>
					 <li>
						<a href="<?php echo base_url(); ?>Settings_ctrl/view_settings"><i class="fa fa-wrench" aria-hidden="true"></i><span>Settings</span></a>
                    </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
