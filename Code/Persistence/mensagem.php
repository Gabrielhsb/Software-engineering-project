<?php
//Arquivo utilizado para mensagens do sistema
//Sessão
  session_start();
  if(isset($_SESSION['mensagem'])): ?>
    <script>
    window.onload = function(){
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
    };
  </script>
<?php
endif;
$_SESSION['mensagem'] = NULL;
?>