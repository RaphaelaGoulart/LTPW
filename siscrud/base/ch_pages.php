<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            // ---- ALUNOS ----///
            case 'lista_alu':
                include "sis/aluno/lista_alu.php";
                break;
            
            case 'fadd_alu':
                include "sis/aluno/fadd_alu.php";
                break;
            
            case 'insere_alu':
                include "sis/aluno/insere_alu.php";
                break;
            
            case 'fedita_alu':
                include "sis/aluno/fedita_alu.php";
                break;
                
            case 'view_alu':
                include "sis/aluno/view_alu.php";
                break;
            
            case 'excluir_alu':
                include "sis/aluno/excluir_alu.php";
                break;
            
            case 'atualiza_alu':
                include "sis/aluno/atualiza_alu.php";
                break;
            // ---- USUÁRIOS ----///
            case 'lista_usu':
                include "sis/usuario/lista_usu.php";
                break;
            
            case 'fcad_usu':
                include "sis/usuario/fcad_usu.php";
                break;
            
            case 'insere_usu':
                include "sis/usuario/insere_usu.php";
                break;
            
            case 'fedita_usu':
                include "sis/usuario/fedit_usu.php";
                break;
                
            case 'view_usu':
                include "sis/usuario/view_usu.php";
                break;
            
            case 'atualiza_usu':
                include "sis/usuario/atualiza_usu.php";
                break;
            
            case 'block_usu':
                include "sis/usuario/block_usu.php";
                break;
            
            case 'ativa_usu':
                include "sis/usuario/ativa_usu.php";
                break;

            //CLIENTE   

            case 'lista_cli':
                include "sis/cliente/lista_cli.php";
                break;

            case 'fadd_cli':
                include "sis/cliente/fadd_cli.php";
                break;

                case 'insere_cli':
                    include "sis/cliente/insere_cli.php";
                    break;
                
                case 'fedita_cli':
                    include "sis/cliente/fedita_cli.php";
                    break;
                    
                case 'view_cli':
                    include "sis/cliente/view_cli.php";
                    break;
                
                case 'atualiza_cli':
                    include "sis/cliente/atualiza_cli.php";
                    break;

                case 'excluir_cli':
                    include "sis/cliente/excluir_cli.php";
                   break;

                   //SERVIÇO  

            case 'lista_serv':
                include "sis/servico/lista_serv.php";
                break;

            case 'fadd_serv':
                include "sis/servico/fadd_serv.php";
                break;

                case 'insere_serv':
                    include "sis/servico/insere_serv.php";
                    break;
                
                case 'fedita_serv':
                    include "sis/servico/fedita_serv.php";
                    break;
                    
                case 'view_serv':
                    include "sis/servico/view_serv.php";
                    break;
                
                case 'atualiza_serv':
                    include "sis/servico/atualiza_serv.php";
                    break;

                case 'excluir_serv':
                    include "sis/servico/excluir_serv.php";
                   break;
                    
   
            default:
                include "base/home.php";
                break;
        }
    }
?>