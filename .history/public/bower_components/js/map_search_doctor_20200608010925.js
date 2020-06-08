let marker_doctor
map_doctor.on("click", mapClickListen)
function mapClickListen(e) {
    let pos= e.latlng
    addMarker(pos)
    console.log(e)

    document.querySelector("#"+id_lat_doctor).value = pos.lat
    document.querySelector("#"+id_lon_doctor).value = pos.lng
     const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
               name=response.display_name         
               marker_doctor.bindPopup(name)   
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();

}

function addMarker(pos) {
    if(marker_doctor!= undefined){
        map_doctor.removeLayer(marker_doctor)
    }
    marker_doctor=L.marker(pos, {
        draggable: true
    })
    marker_doctor.on("dragend", function(e){
        pos = e.target.getLatLng()
    document.querySelector("#"+id_lat_doctor).value = pos.lat
    document.querySelector("#"+id_lon_doctor).value = pos.lng
    const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
                name=response.display_name         
                marker_doctor.bindPopup(name)             
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();
    })
    // Listen Event dragabble on Marker

    marker_doctor.addTo(map_doctor)

}