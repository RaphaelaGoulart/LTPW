<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
				Usuário cadastrado com sucesso!
				<button type="button" class="btn-close" data-bs-dismiss="alert" 
                aria-label="Close"></button>
		  	</div>';
			break;
		
		case 2:
			echo '
            <div class="alert alert-info alert-dismissible fade show" role="alert">
				Usuário atualizado com sucesso!
				<button type="button" class="btn-close" data-bs-dismiss="alert" 
                aria-label="Close"></button>
			</div>';
			break;
	}
	$msg=0;
    $msg=1;
}
?>