<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Telephone Search</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/lkcentrixreportservice/idverification" ><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Verification Report</li>
        <li class="active">ID Verification Client</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">ID Verification</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo site_url();?>/lkcentrixreportservice/idverification" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
           <!-- Error Alert -->
             <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		   
        <form data-toggle="validator" role="Id Verification form" action="<?php echo site_url();?>/lkcentrixreportservice/idverification" method="post">
            <div class="box-body">
                    <div class="form-group">
                    <label for="Firstname">ID Number</label>
                    <input type="text" required="true" value="<?php echo set_value('idNumber');?>" class="form-control" id="idNumber" name="idNumber" placeholder="Enter ID Number" maxlength="13" autofocus/>
                 </div>
                  <div class="form-group">
                    <label class="col-form-label">Surname</label>
                            <input type="text" class="form-control" value="<?php echo set_value('surname');?>" id="surname" name="surname" placeholder="Enter Surname"/>
                        </div>
                     <div class="form-group">
                     <label class="col-form-label">First Name</label>
                           <input type="text"  class="form-control" value="<?php echo set_value('firstname');?>" id="firstname" name="firstname" placeholder="Enter FirstName"/>
                       </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
