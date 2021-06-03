
  var publicSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1v-ptRSzHTk8Z20OP9yG4ajGfsQavXFiL00Tm3d5WPVU/edit?usp=sharing';
  
  function init() {
    Tabletop.init( { key: publicSpreadsheetUrl,
                     callback: showInfo,
                     simpleSheet: true } )
  }

 
function showInfo(data, tabletop) {
data.forEach(function(data) {
    titulo.innerHTML = data.titulo;
    bajada.innerHTML = data.bajada;
    subtitulo1.innerHTML = data.subtitulo1;
    art1.innerHTML = data.art1;
    precio1.innerHTML = data.precio1;
    art2.innerHTML = data.art2;
    precio2.innerHTML = data.precio2;
    art3.innerHTML = data.art3;
    precio3.innerHTML = data.precio3;
    art4.innerHTML = data.art4;
    precio4.innerHTML = data.precio4;
    art5.innerHTML = data.art5;
    precio5.innerHTML = data.precio5;
    art6.innerHTML = data.art6;
    precio6.innerHTML = data.precio6;
    art7.innerHTML = data.art7;
    precio7.innerHTML = data.precio7;
    art8.innerHTML = data.art8;
    precio8.innerHTML = data.precio8;
    art9.innerHTML = data.art9;
    precio9.innerHTML = data.precio9;
    art10.innerHTML = data.art10;
    precio10.innerHTML = data.precio10;
    art11.innerHTML = data.art11;
    precio11.innerHTML = data.precio11;
    art12.innerHTML = data.art12;
    precio12.innerHTML = data.precio12;
    art13.innerHTML = data.art13;
    precio13.innerHTML = data.precio13;
    art14.innerHTML = data.art14;
    precio14.innerHTML = data.precio14;
    art15.innerHTML = data.art15;
    precio15.innerHTML = data.precio15;




});
}
  window.addEventListener('DOMContentLoaded', init)















































