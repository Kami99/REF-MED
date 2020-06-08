let id_lon_pharmacy = document.querySelector('.location_lon_pharmacy').getAttribute('id');
let id_lat_pharmacy = document.querySelector('.location_lat_pharamacy').getAttribute('id');
let marker, myMap
window.onload=()=>{
    myMap = L.map('map_drugs').setView([14.6937000, -17.4440600], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>/ODbl -rendu  <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
myMap.on("click", mapClickListen)

}

function mapClickListen(e) {
    let pos= e.latlng
    addMarker(pos)
    console.log(e)

    document.querySelector("#"+id_lat_pharmacy).value = pos.lat
    document.querySelector("#"+id_lon_pharmacy).value = pos.lng
     const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
               name=response.display_name         
               marker.bindPopup(name)   
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();

}

function addMarker(pos) {
    if(marker != undefined){
        myMap.removeLayer(marker)
    }
    marker=L.marker(pos, {
        draggable: true
    })
    marker.on("dragend", function(e){
        pos = e.target.getLatLng()
    document.querySelector("#"+id_lat_pharmacy).value = pos.lat
    document.querySelector("#"+id_lon_pharmacy).value = pos.lng
    const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
                name=response.display_name         
                marker.bindPopup(name)             
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();
    })
    // Listen Event dragabble on Marker

    marker.addTo(myMap)

}