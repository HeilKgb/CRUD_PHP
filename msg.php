<?php
//sessao 
session_start();
if (isset($_SESSION['mensagem'])) : ?>
  <script>
    //o onload aqui serve para indicar q deve carregar apenas apos toda a pagina ser carregada
    window.onload = function() {
      M.toast({
        html: '<?php echo $_SESSION['mensagem']; ?>',
      })
    };
  </script>
<?php
endif;
session_unset();
?>