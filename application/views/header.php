<div id="wrapper">
	<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url('home') ?>">Tcclink</a> 
		</div>
		<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                    &nbsp; <a href="<?php echo base_url('login') ?>" class="btn btn-primary square-btn-adjust">Logout</a> 
		</div>
		<div class="col-sm-4 col-md-4 navbar-right" style="padding: 13px 50px 0px 50px;float:right;">
                    <form action="<?php echo base_url('busca'); ?>" method="post">
                    <div class="form-group input-group">      
                    <?php echo form_input(array("name" => "busca","class" => "form-control","type" => "text"));?>
                                 <span class="input-group-btn">
                                     
                    <?php echo form_input(array(
                "class" => "btn btn-default",
                "type" => "submit"
                ),"Buscar");?>
                                   
                                 </span>
                           </form>
                    </div>
		</div>		
        </nav>  
    
    
    
    
    