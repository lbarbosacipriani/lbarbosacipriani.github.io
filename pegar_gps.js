
"use strict";

const status = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    showMessage("A geolocalização não é suportada por este navegador.");
  }
}
    
 
function showPosition(position)
  {
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  const latlon = new google.maps.LatLng(lat, lon);
  const mapholder = document.getElementById('mapholder');
  mapholder.style.height='50%';
  mapholder.style.width='100%';
 
  const myOptions={
  center:latlon,zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  const map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  new google.maps.Marker({position:latlon,map:map,title:"Você está Aqui!"});
  }
 
 
  function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      showMessage("Usuário rejeitou a solicitação de geolocalização.");
      break;
    case error.POSITION_UNAVAILABLE:
      showMessage("Localização indisponível.");
      break;
    case error.TIMEOUT:
      showMessage("O tempo da requisição expirou.");
      break;
    case error.UNKNOWN_ERROR:
      showMessage("Algum erro desconhecido aconteceu.");
      break;
    }
  }

function showMessage(message) {
  const target = status || document.getElementById("mapholder");
  if (target) {
    target.textContent = message;
  }
}






