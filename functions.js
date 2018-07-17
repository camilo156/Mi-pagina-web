function getPosts(){    
  $.ajax({ url: 'server.php', dataType: 'json', success: verLista       })
}


function verLista(data){
  $('#lista').html('<h5> novedades </h5>')
  $('<ol/>', { id: 'lordenada'}).appendTo('#lista')  
  data.forEach( articulo => {
    $('<li/>', {
      html: `${articulo.titulo} (${articulo.autor})`,      
      'data-target': '#exampleModal',
      'data-toggle': 'modal',
      click: x => { verArticulo(articulo) }
    }).appendTo('#lordenada');
  });
  
}

function verArticulo(art){  
  $('#idblogs').val(art.idblogs)
  $('#autor').val(art.autor)
  $('#titulo').val(art.titulo)
  $('#contenido').val(art.contenido)
  $('#preview').html(`${art.contenido} ...`)
  $('#modalTitle').text(art.titulo)  
}

function guardar(){
  // y enviar con POST
  $.ajax({
    type: 'POST',
    url: 'server.php',  
    data: `idblogs=${$('#idblogs').val()}&autor=${$('#autor').val()}&titulo=${ $('#titulo').val()}&contenido=${ $('#contenido').val()}`,    
    success: d => { console.log(d) }, 
    error: m => { }
  })
  
}