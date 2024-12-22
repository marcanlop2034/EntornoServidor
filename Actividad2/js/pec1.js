


function ocultarSpinner(){
    console.log('Inicio funcion ocularSpinner');
    let elemento = document.getElementById('spinner1');
    let lineas=0;
    while(lineas == 0 || lineas==null){
        lineas = document.getElementsByTagName('td');
        console.log(lineas);
    }
    elemento.setAttribute('class','spinner-border  text-primary');
    //spinner-border
   
}


function inicio(){
    //ocultarSpinner();
  let ele =  document.getElementById('btnMostrar').addEventListener('click',ocultarSpinner,false);
}

document.addEventListener('DOMContentLoaded',inicio,false);

