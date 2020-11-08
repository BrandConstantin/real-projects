
/* MAPA */
var map = L.map('mapa').setView([36.70899, -4.423735], 15); // el 15 es el zum

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([36.70899, -4.423735]).addTo(map)
    .bindPopup('Puerto Málaga.<br> En un barco abandonado vivo yo.')
    .openPopup()
    .bindTooltip('Que cosa!!') // pasar el ratón por encima del pin
    .openTooltip(); 