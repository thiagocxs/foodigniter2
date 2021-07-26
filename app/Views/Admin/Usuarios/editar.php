<?php echo $this->extend('Admin/layout/principal'); ?>

<?php echo $this->section('titulo'); ?><?php echo $titulo; ?><?php echo $this->endSection(); ?>

<!-- Aqui enviamos para o template principal os estilos -->
<?php echo $this->section('estilos'); ?>


<?php echo $this->endSection(); ?>




<!-- Aqui enviamos para o template principal o conteudos -->
<?php echo $this->section('conteudo'); ?>
    

<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
           
               <div class="card-header bg-primary pb-0 pt-4 text-">
                   
                    <h4 class="card-title text-white"><?php echo esc($titulo); ?></h4>

               </div>


                <div class="card-body">

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>


                </div>


          </div>
       </div>

  </div>




<?php echo $this->endSection(); ?>



<!-- Aqui enviamos para o template principal os sctipts -->
<?php echo $this->section('scripts'); ?>
  

<?php echo $this->endSection(); ?>