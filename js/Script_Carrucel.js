M.AutoInit();
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel')
    var instances = M.Carousel.init(elems,{
    	duration:200,
    	numVisible:2,
    	indicators:true,
    	padding: 5,
        pressed:true,
        fullWidth:true

    })

  });
  //inicialiciacion de hacer zoom en la img del carrusel
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, {
        onOpenStart:true,
        inDuration:275,
        outDuration:200
    });
  });