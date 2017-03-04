// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}

  function openTab(evt,tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " w3-green";
  }

  function openAccion(evt, accion, div, tab) {
    var i, x, tablinks;
    x = document.getElementsByClassName(div);
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName(tab);
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
    }
    document.getElementById(accion).style.display = "block";
    evt.currentTarget.className += " w3-blue";
  }


function mostrarHistorial(id, table){
    var url="../phpAjax/mostrarHistorial.php?N="+id;
    var connection=new XMLHttpRequest();
    connection.onreadystatechange=handleEventshist;
    connection.open("GET",url,true);
    connection.send();
    var state=document.getElementById("my_state_historial");
    function handleEventshist(){
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
                document.getElementById(table).innerHTML=connection.responseText;
                break;
        }
    }
} 