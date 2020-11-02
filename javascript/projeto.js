function exibircategoria(categoria){
    //alert(categoria)
    let elementos = document.getElementsByClassName("colunaprodutos")
    console.log(elementos)
   
    for(var i=0; i < elementos.length; i++){
        console.log(elementos[i].id)
        if(categoria == elementos[i].id)
        elementos[i].style = 'display: block;'
        else 
        elementos[i].style = 'display: none;'
    }
}

    let todos = () => {
        let elementos = document.getElementsByClassName("colunaprodutos")
        
        for(var i=0; i < elementos.length; i++){
        elementos[i].style = 'display: block;'
    }
}

    let destaque = (imagem) =>{
    console.log(imagem)
    if(imagem.width == 250)
        imagem.width= 200
    else    
        imagem.width= 250;
    }        