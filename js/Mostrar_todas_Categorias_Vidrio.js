/*sustraer el contenido de vista personalizada para mostrarla en la vista general */
let tabs01= document.getElementById("VIDRIOS_MONOLÍTICOS").innerHTML;
let tabs02= document.getElementById("VIDRIOS_LAMINADOS").innerHTML;
let tabs03= document.getElementById("VIDRIOS_CÁMARA").innerHTML;
/*insertar el texto de los tabs personalizados a la vista general*/
document.getElementById("tab_VIDRIOS_MONOLÍTICOS").innerHTML=tabs01;
document.getElementById("tab_VIDRIOS_LAMINADOS").innerHTML=tabs02;
document.getElementById("tab_VIDRIOS_CÁMARA").innerHTML=tabs03;
/*diseño de los div generales*/
document.getElementById("tab_VIDRIOS_MONOLÍTICOS").className="div-tabs";
document.getElementById("tab_VIDRIOS_LAMINADOS").className="div-tabs";
document.getElementById("tab_VIDRIOS_CÁMARA").className="div-tabs";