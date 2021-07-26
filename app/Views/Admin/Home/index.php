<?php echo $this->extend('Admin/layout/principal'); ?>

<?php echo $this->section('titulo'); ?><?php echo $titulo; ?><?php echo $this->endSection(); ?>

<!-- Aqui enviamos para o template principal os estilos -->
<?php echo $this->section('estilos'); ?>
 
<?php echo $this->endSection(); ?>





<!-- Aqui enviamos para o template principal o conteudos -->
<?php echo $this->section('conteudo'); ?>
    
<?php echo $titulo; ?>

<?php echo $this->endSection(); ?>









<!-- Aqui enviamos para o template principal os sctipts -->
<?php echo $this->section('sctipts'); ?>
    



<?php echo $this->endSection(); ?>