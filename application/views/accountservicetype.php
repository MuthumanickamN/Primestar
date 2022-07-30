<?php  ?> <?php $this->load->view('includes/header3'); ?>
 <html>
 <body>
 <head>
  <title>Account Service Type</title>
</head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title" style="color: green">Maintenance</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Maintenance</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Account Service Type</a>
                  </li>
                 
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="media width-250 float-right">
              <media-left class="media-middle">
                <div id="sp-bar-total-sales"></div>
              </media-left>
              <div class="media-body media-right text-right">
                 <ul class="list-inline mb-0">
            <li><a href="<?php echo site_url('AccountServiceType'); ?>" class="btn btn-primary"   ><b>AccountServiceType List</b></a></li>
          </ul>
                
              </div>
            </div>
          </div>
        </div>
       <div class="content-body"><!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Account Service Type</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                      <div  class="mainbox col-sm-12">
                      <div class="panel panel-info">
          <form id="loginForm" class="form-horizontal" enctype="multipart/form-data"  role="form" name="form" method="POST" style="margin-top: 25px; margin-left: 5px; margin-right: 5px">
         <div class="form-group lg">
                        <div class="col-md-3 control text-left"><strong>Name</strong>*</div>
                        <div class="col-md-3 control text-left">
                        <input type="text" id="Name" name="Name" required=""  class="form-control" value="<?php echo $Name; ?>">
                        </div>
                    </div>
                    <div class="form-group lg">
                        <div class="col-md-3 control text-left"><strong>Account code</strong>*</div>
                        <div class="col-md-3 control text-left">     
                        <input type="text" id="account_code" name="Account_code" required=""  class="form-control" value="<?php echo $Account_code; ?>">

                        </div>
                    </div>

                    <div class="form-group lg">
                        <div class="col-md-3 control text-left"><strong>Type</strong>*</div>
                        <div class="col-md-3 control text-left">     
                        <select name="Type" id="Type" class="form-control" >
                  <option value="">Select</option>
                  <option value="Expenses" <?php if(isset($Type) && $status=='Expenses' ){ echo 'selected';} ?>>Expenses</option>
                  <option value="Income" <?php if(isset($Type) && ($status=='Income' || $status == "") ){ echo 'selected';} ?>>Income</option>
                  </select>

                        </div>
                    </div>


                 
                
                     <div class="form-group lg-btm">
                      <div class="col-md-6 control text-center">
                         <?php if($percentage=="") { ?>
                         <input id="save" type="submit" name="submit" value="Submit"  class="btn btn-secondary onclick="<?php echo base_url('AccountServiceType/add/'); ?>"       class="btn btn-success" /> 
                       <?php } else { ?>
                          
                     <input id="save" type="submit" name="submit" value="Update" class="btn btn-secondary onclick="<?php echo base_url('AccountServiceType/add/'); ?>"       class="btn btn-success" /><?php } ?>

                                 

                        
                         <a href="<?php echo base_url().'AccountServiceType' ?>"     class="btn btn-secondary" >Cancel</a></div></div>
                    
                </form>
            </div>
        </div></div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</body>

</html>  
