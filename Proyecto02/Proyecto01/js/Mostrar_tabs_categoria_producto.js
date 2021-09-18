/*funcion para mostrar los tabs de categoria espesifica*/
function MostrarTabs(id){
switch (id) {
    case "t1":
        document.getElementById("categoria").style.display="block";
        document.getElementById("test1").style.display="block";
        document.getElementById("test2").style.display="none";
        document.getElementById("test3").style.display="none";
        document.getElementById("Catalogo").style.display="none";
        document.getElementById("test4").style.display="none";
        break;
    case "t2":
        document.getElementById("categoria").style.display="block";
        document.getElementById("test1").style.display="none";
        document.getElementById("test2").style.display="block";
        document.getElementById("test3").style.display="none";
        document.getElementById("Catalogo").style.display="none";
        document.getElementById("test4").style.display="none";
        break;
    case "t3":
        document.getElementById("categoria").style.display="block";
        document.getElementById("test1").style.display="none";
        document.getElementById("test2").style.display="none";
        document.getElementById("test3").style.display="block";
        document.getElementById("Catalogo").style.display="none";
        document.getElementById("test4").style.display="none";
        break;
    default:
        document.getElementById("categoria").style.display="none";
        break;
}
};
/*funcion para mostrar los tabs de categoria espesifica*/
/*ocultar todos los tabs de categoria espesifica y mustre todo lo general Catalogo*/
function OcultarTabs(){
    document.getElementById("categoria").style.display="none";
    document.getElementById("test1").style.display="none";
    document.getElementById("test2").style.display="none";
    document.getElementById("test3").style.display="none";
    document.getElementById("Catalogo").style.display="block";
    document.getElementById("test4").style.display="block";
    
};