<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
						Usuário cadastrado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		
		case 2:
			echo '	<div class="alert alert-info alert-dismissible fade show" role="alert">
						Usuário atualizado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 3:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Usuário bloqueado  com sucesso! Este Usuário agora está INATIVO!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 4:
			echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
						Usuário sem permissão de acesso para o conteúdo!<br>Por favor, acesse com a permissão necessária.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 5:
			echo '	<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Usuário desbloqueado  com sucesso! Este Usuário agora está ATIVO!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 6:
			echo '	<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Erro ao acessar a Base de dados! Contate o administrdor!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
	}
	$msg = 0;
}
?>