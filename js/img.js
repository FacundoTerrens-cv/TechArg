window.addEventListener('scroll', function(){
    var imagen = document.querySelectorAll('.fade_up');

    for(var i = 0; i<imagen.length; i++){
        var altura = window.innerHeight/1.3;
        var distancia = imagen[i].getBoundingClientRect().top;
        console.log(altura);
        console.log(distancia);
        if(distancia <= altura){
            imagen[i].classList.add('aparece');
        }else{
            imagen[i].classList.remove('aparece');
        }
    }
})