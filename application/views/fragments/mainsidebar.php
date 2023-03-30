<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header"></li> -->
        <li><a href="<?php echo site_url();?>/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		
		<?php
		    $reports = $this->session->userdata('usermenu');
			$reports_type = $this->session->userdata('submenu');
			foreach ($reports as $reportData){
				
		?>
        <li class="treeview">
            <a href="#"><i class="<?php echo $reportData->icon;?>"></i> <span><?php echo $reportData->report_name;?></span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
			
            <ul class="treeview-menu">
			<?php  foreach($reports_type as $reportDataInfo){
					
					if($reportDataInfo->report_type_report_id == $reportData->report_id){
				?>
					<li>
					<a href="<?php echo site_url();?>/<?php echo $reportData->report_link;?>/<?php echo $reportDataInfo->report_type_link;?>"><i class="<?php echo $reportDataInfo->icon;?>"></i>&nbsp; <?php echo $reportDataInfo->report_type_description;?></a>
					</li>
					
			<?php 
					}
			} ?>

            </ul>
        </li>
		<?php } ?>

    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
