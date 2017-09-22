<div id="page-wrapper" >
        
            <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h4 class="title-home">Resultado da busca:</h5>
        <hr/>
      </div>
    </div>
   <?php
        if(empty($busca)){
            ?>
                <h4 class="modal-title"> Não foram encontrados resultados.</h4>
        <?php }
        else{        
            foreach ($busca as $resultado)
            { ?>

                     <div class="span3 well">
               <center>
                 <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="foto.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
                 <h3><?php echo $resultado->nome ?></h3>
                 <em>Clique para mais informações</em><br>
                 <form action="<?php echo base_url('seguidor/seguir'); ?>" method="post">                                
                    <?php echo form_input(array("name" => "seguindo","value" =>$resultado->idUsuario ,"type" => "hidden"));?>     
                    <!--<button id="seguindo" value="Seguir" class="btn btn-outline-info" data-dismiss="modal"> Seguindo </button>-->
                    <?php echo form_input(array("class" => "btn btn-info","type" => "submit","id" => "seguir"),"Seguir");?>
                 </form>
               </center>
             </div>
             <!-- Modal -->
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title" id="myModalLabel">Mais informações sobre <?php echo $resultado->nome ?></h4>
                   </div>
                   <div class="modal-body">
                     <center>
                         <img src="foto.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                       <h3 class="media-heading"><?php echo $resultado->nome ?></h3>
                     </center>
                       <hr>
                       <center>
                       <p class="text-left"><strong>Profissao: </strong>
                         <?php echo $resultado->profissao ?>
                     </center>
                     <hr>

                     <span><strong>Interesses: </strong></span>
                     <div style="margin-left:20%; margin-right: 10%;">
                         <h4 style="padding: 15px;">
                             <div style="padding:5px;"> 
                                 <span class="label label-info">interesse</span> <span class="label label-info">interesse</span>
                                 <span class="label label-info">interesse</span> <span class="label label-info">interesse</span>
                                 <span class="label label-info">interesse</span> <span class="label label-info">interesse</span>
                                 <span class="label label-info">interesse</span> <span class="label label-info">interesse</span>
                             </div>
                         </h4>
                     </div>
                   </div>
                   <div class="modal-footer">
                       <form action="<?php echo base_url('seguidor/seguir'); ?>" method="post">                                
                            <?php echo form_input(array("name" => "seguindo","value" =>$resultado->idUsuario ,"type" => "hidden"));?>      
                            <center>
                            <?php echo form_input(array("class" => "btn btn-info","type" => "submit","id" => "seguir"),"Seguir");?>
                       <!--<input type="button" id="seguir" value="Seguir" class="btn btn-info" data-dismiss="modal">-->
                       </form>
                         </center>
                   </div>
                 </div>
               </div>
             </div>
             <hr>
             <?php
             }
          } ?>
         
</div>
         <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
