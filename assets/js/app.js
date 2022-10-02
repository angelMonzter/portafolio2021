console.log('hola');

obtenerProyectos();

function obtenerProyectos(){
    const url = 'http://localhost:4000/proyectos';

    fetch(url)
        .then( respuesta => respuesta.json() )
        .then( resultado => console.log(resultado) )
        .catch( error => console.log(error))
}

var proyecto = document.getElementById("trabajo_individual");

console.log(proyecto);