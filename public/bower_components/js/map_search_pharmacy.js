let marker_drugs    
map_drugs.on("click", mapClickListenPharmacy)


function mapClickListenPharmacy(e) {
    let pos= e.latlng
    addMarkerPharmacy(pos)
    console.log(e)

    document.querySelector("#"+id_lat_drugs).value = pos.lat
    document.querySelector("#"+id_lon_drugs).value = pos.lng
     const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
               name=response.display_name         
               marker_drugs.bindPopup(name)   
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();

}

function addMarkerPharmacy(pos) {
    if(marker_drugs != undefined){
        map_drugs.removeLayer(marker_drugs)
    }
    marker_drugs=L.marker(pos, {
        draggable: true
    })
    marker_drugs.on("dragend", function(e){
        pos = e.target.getLatLng()
    document.querySelector("#"+id_lat_drugs).value = pos.lat
    document.querySelector("#"+id_lon_drugs).value = pos.lng
    const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
                name=response.display_name         
                marker_drugs.bindPopup(name)             
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();
    })
    // Listen Event dragabble on Marker

    marker_drugs.addTo(map_drugs)

}