function calcularPedido(){
    //entrada de dados
    corte = document.getElementById('corte').value;
    barba = document.getElementById('barba').value;
    depilacao = document.getElementById('depilacao').value;
    //prcessamento
    
    
    //corte
    if (corte == "Tesoura"){
        imagem = "img/corteTesoura.jpg";
        precoCorte = 60.00;
    }
    else if (corte == "Máquina"){
        imagem = "img/";
        precoCorte = 45.00;
    }
    else if (corte == "Tesoura e Máquina"){
        imagem = "img/quarterao.jpg";
        precoCorte = 52.00;     
    }
    else{
        imagem = "img/mcfish.jpg.jpg";
        precoCorte = 0.00;
    }
    
    
    //barba
    if (barba == "Simples"){
        precoBarba = 30.00;        
    }
    else if (barba == "Modelada"){
        precoBarba = 45.00;
    }
    else{
        precoBarba = 0.00;
    }
    
    //depilação
    if (depilacao == "Cera Quente"){
        precoDepilacao = 100.00;
    }
    else if (depilacao == "Cera Fria"){
        precoDepilacao = 80.00;
    }
    else if (depilacao == "Laser"){
        precoDepilacao = 350.00;
    }
    else{
        precoDepilacao = 0.00;
    }
   
    total = precoCorte + precoBarba + precoDepilacao;
    
    //saídas
    document.getElementById('fotoCorte').src = imagem;
    document.getElementById('total').value = total.toFixed(2);
        
}

function finalizar(){
    //entrada
    total = document.getElementById('total').value;
    //processamento
    if(total == 0.00){
        msg = "Você deve selecionar pelo menos 1 elemento da lista."        
    }
    else{
        msg = "Pedidos Cadastrado com Sucesso! \n";
        msg += "Seu Pedido é R$ ";
        msg += total;
    }
    
    //saída
    document.getElementById('msg').value = msg;
    
}