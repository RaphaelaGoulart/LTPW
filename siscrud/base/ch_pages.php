<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            // ---- ALUNOS ----///
            case 'lista_alu':
                include "sis/alunos/lista_alu.php";
                break;
            
            case 'fadd_alu':
                include "sis/alunos/fadd_alu.php";
                break;
            
            case 'insere_alu':
                include "sis/alunos/insere_alu.php";
                break;
            
            case 'fedita_alu':
                include "sis/alunos/fedita_alu.php";
                break;
                
            case 'view_alu':
                include "sis/alunos/view_alu.php";
                break;
            
            case 'excluir_alu':
                include "sis/alunos/excluir_alu.php";
                break;
            
            case 'atualiza_alu':
                include "sis/alunos/atualiza_alu.php";
                break;
            // ---- USUÁRIOS ----///
            case 'lista_usu':
                include "sis/usuarios/lista_usu.php";
                break;
            
            case 'fadd_usu':
                include "sis/usuarios/fadd_usu.php";
                break;
            
            case 'insere_usu':
                include "sis/usuarios/insere_usu.php";
                break;
            
            case 'fedita_usu':
                include "sis/usuarios/fedita_usu.php";
                break;
                
            case 'view_usu':
                include "sis/usuarios/view_usu.php";
                break;
            
            case 'atualiza_usu':
                include "sis/usuarios/atualiza_usu.php";
                break;
            
            case 'block_usu':
                include "sis/usuarios/block_usu.php";
                break;
            
            case 'ativa_usu':
                include "sis/usuarios/ativa_usu.php";
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
                   case "lista_serv":
                    include "sis/servicos/lista_serv.php";
                    break;
                case "view_serv":
                    include "sis/servicos/view_serv.php";
                    break;
                case "fedita_serv":
                    include "sis/servicos/fedita_serv.php";
                    break;
                case "atualiza_serv":
                    include "sis/servicos/atualiza_serv.php";
                    break;
                case "excluir_serv":
                    include "sis/servicos/excluir_serv.php";
                    break;
                case "fadd_serv":
                    include "sis/servicos/fadd_serv.php";
                    break;
                case "insere_serv":
                    include "sis/servicos/insere_serv.php";
                    break;

                //servicos
                case "lista_serv":
                    include "sis/servicos/lista_serv.php";
                    break;
                case "view_serv":
                    include "sis/servicos/view_serv.php";
                    break;
                case "fedita_serv":
                    include "sis/servicos/fedita_serv.php";
                    break;
                case "atualiza_serv":
                    include "sis/servicos/atualiza_serv.php";
                    break;
                case "excluir_serv":
                    include "sis/servicos/excluir_serv.php";
                    break;
                case "fadd_serv":
                    include "sis/servicos/fadd_serv.php";
                    break;
                case "insere_serv":
                    include "sis/servicos/insere_serv.php";
                    break;
                //Documentos
                case "lista_doc":
                    include "sis/documento/lista_doc.php";
                    break;
                case "view_doc":
                    include "sis/documento/view_doc.php";
                    break;
                case "fedita_doc":
                    include "sis/documento/fedita_doc.php";
                    break;
                case "atualiza_doc":
                    include "sis/documento/atualiza_doc.php";
                    break;
                case "fadd_doc":
                    include "sis/documento/fadd_doc.php";
                    break;
                case "insere_doc":
                    include "sis/documento/insere_doc.php";
                    break;
                case "excluir_doc":
                    include "sis/documento/excluir_doc.php";
                    break;
                    
   
            default:
                include "base/home.php";
                break;
        }
    }
?>