<?php if(isset($_SESSION["msg"]) && $_SESSION["msg"]["content"]): ?>



<div class="alert alert-<?= $_SESSION['msg']['type'] ?> alert-dismissible fade show" role="alert">
  <strong><?= $_SESSION["msg"]["content"] ?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif;
unset($_SESSION["msg"])

 ?>