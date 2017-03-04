function mostrarModal(id){
    document.getElementById(id).style.display='block';
    return false;
}


function mostrarLog(id, id0){
    var url="php/phpAjax/mostrarLog.php?N="+id;
    var connection=new XMLHttpRequest();
    connection.onreadystatechange=handleEvents;
    connection.open("GET",url,true);
    connection.send();
    var state=document.getElementById("my_state");
    function handleEvents(){
        switch(connection.readyState){
            case 0:
                state.innerHTML="Not init";
                break;
            case 1:
                state.innerHTML="Loading ...";
                break;
            case 2:
                state.innerHTML="Loaded";
                break;
            case 3:
                state.innerHTML="Not init";
                break;
            case 4:
                state.innerHTML="Partial data";
                document.getElementById(id0).innerHTML=connection.responseText;
                break;
        }
    }
} 

window.addDashes = function addDashes(f) {
    var r = /(\D+)/g,
				cod = '',
        npa = '',
        nxx = '',
        last4 = '';
    f.value = f.value.replace(r, '');
		cod = f.value.substr(0, 3);
    npa = f.value.substr(3, 3);
    nxx = f.value.substr(6, 3);
    last4 = f.value.substr(9, 4);
    f.value ='+' + cod + '-' + npa + '-' + nxx + '-' + last4;
}

function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46-9";
    tecla_especial = false
    for(var i in especiales){
            if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}