const localStorage = window.localStorage;

function guardar(clave,valor){
    localStorage.setItem(clave,valor)
}
function obtener(clave){
    return localStorage.getItem(clave)
}

function eliminarElemento(clave){
    localStorage.removeItem(clave)
}

/* 
export default function obtener(clave){
    return localStorage.getItem(clave)
}

export default function limpiar(){
    localStorage.clear()
}

export default function eliminarElemento(clave){
    localStorage.removeItem(clave)
} */