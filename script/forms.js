(function(){
    var formulario = document.formulario_reg,
        elementos = formulario.elements;
    
    ///Funciones
    var enviar = function(e){
        if(!validarInputs()){
            e.preventDefault();
        }
        else if(!validarCheck){
            e.preventDefault();
        }else{
            
        }
    }

    
        //Blur y focus
    var focusInput = function(){
        this.parentElement.children[1].className = "label active";           this.parentElement.children[0].className=this.parentElement.children[0].className.replace + " error, '' ";
        
    }
    var blurInput = function(){
        if (this.value <=0){
            this.parentElement.children[1].className = "label";
            this.parentElement.children[0].className=this.parentElement.children[0].className + " error";
            
        }
    }
    
    
    //Eventos
    formulario.addEventListener("submit", enviar);

    for (var i = 0; i < elementos.length; i++) {
    if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
      elementos[i].addEventListener("focus", focusInput);
      elementos[i].addEventListener("blur", blurInput);
    }
  }
}())