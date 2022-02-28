console.log("javascript funciona");
$("#contenido").append("un texto");
//acceso a datos : con jquery acceder a un fichero xml
//comunicación síncrona : request - responde. me tengo 
//que esperar a la response
//comunicación asíncrona : request - response. no me 
//tengo que esperar a la response: la página no se congela
//request pedir un archivo xml para pintarlo en html: 
//síncrono -asíncrono
//ajas : asíncrono javascript xml : se puede hacer con jquery
//con una función llamada ajax
//pedir el archivo xml con jquery con la dunción ajax y 
//pintarlo en html

$.ajax({//comunicación asíncrona
    type: "get",
    url: "data.xml",
    //data: "data",
    dataType: "xml",
    success: function (response) {//función anónima
        //console.log(response);
        var data = $('item',response).get();
        $(data).each(function () { 
             //console.log($(this));
             var parrafo=document.createElement('h3');
             parrafo.append($(this).find('title').text());
             $("#contenido").append(parrafo);
             //var title = item.find('title).text();

             var descripcon=document.createElement('p');
             descripcon.append($(this).find('desc').text());
             $("#contenido").append(descripcon);

             var foto=document.createElement('img');
             foto.src=($(this).find('image').text());
             $("#contenido").append(foto);

             var enlace=document.createElement('a');
             enlace.append("pincha aquí");
             enlace.href=($(this).find('url').text());
             enlace.target="blank";
             $("#contenido").append(enlace);
             
            
        });
    }//cierra función anónima
});