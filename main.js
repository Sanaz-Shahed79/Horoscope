var btnWrapper = document.getElementById('btnWrapper');

var sparaButton = document.createElement("BUTTON");
sparaButton.innerText = "spara mitt horoskop";
btnWrapper.appendChild(sparaButton);
sparaButton.addEventListener("click", function() {
    var födelsedatum = document.getElementById("födelsedatum").value;
    if (!födelsedatum) {
        alert("Skriv Ditt Födelsedatum");
    } else { 
        const updateRequest = new FormData();
        updateRequest.append("födelsedatum", födelsedatum);
        
        fetch("app/addHoroscope.php", {
            method: "POST",
            body: updateRequest
        })
            .then((response) => response.json())
            .then((obj) => {
                console.log(obj);
                if(obj){
                    get_horoscope();
                }
            
            })  
    }
});

var updateButton = document.createElement("BUTTON");
updateButton.innerText = "uppdatera mitt horoskop"
btnWrapper.appendChild(updateButton);
updateButton.addEventListener("click", function() {
    var födelsedatum = document.getElementById("födelsedatum").value;
    if (!födelsedatum) {
        alert("false");
    } else {
        const updateRequest = new FormData();
        updateRequest.append("födelsedatum", födelsedatum);
        fetch("app/updateHoroscope.php", {
            method: "POST",
            body: updateRequest
        })
        .then(response => response.text())
            .then((obj) => {
                if(obj == "false"){
                    console.log(false);
                    //alert("false")
                } else {
                    var resultat = JSON.parse(obj);
                    console.log(resultat);
                    document.getElementById("resultatImage").src = "image/" + resultat.image;
                    document.getElementById("resultatText").innerText = resultat.namn;
                }
                
            
            })
    }

});

var deleteButton = document.createElement("BUTTON");
deleteButton.innerText = "radera mitt horoskop";
btnWrapper.appendChild(deleteButton);
deleteButton.addEventListener("click", function()  {

        fetch("app/deleteHoroscope.php", {
            method: "DELETE"
        })
        .then(response => response.text())
            .then((obj) => {
                console.log(obj);
                if(obj){
                document.getElementById("resultatText").innerText = "Välj Ditt Födelsedatum";
                
                document.getElementById("resultatImage").src = "https://www.oceanflowyoga.co.uk/wp-content/uploads/2020/01/Astrology.jpg";
                document.getElementById("födelsedatum").value = "";



                /*let sparaButton = document.getElementById('sparaBUTTON');
                sparaButton.disabled = false;
                /*let updateButton = document.getElementById('updateBUTTON');
                let deleteButton = document.getElementById('deleteBUTTON');
                sparaButton.disabled = false;
                updateButton.disabled = true;
                deleteButton.disabled = true;*/
    
                }
            
            })
    
    });



function get_horoscope(){
    fetch("app/viewHoroscope.php")
        .then(response => response.text())
        .then((obj) => {
           //console.log(obj);
            if(obj){
                var resultat = JSON.parse(obj);
                document.getElementById("resultatImage").src = "image/" + resultat.image;
                document.getElementById("resultatText").innerText = resultat.namn;
        



               /* let sparaButton = document.getElementById('sparaBUTTON');
                sparaButton.disabled = true;
                /*let updateButton = document.getElementById('updateBUTTON');
                let deleteButton = document.getElementById('deleteBUTTON');
                sparaButton.disabled = true;
                updateButton.disabled = false;
                deleteButton.disabled = false;*/


        }
    
    })
}
get_horoscope()


/*function disable_button(){
    let button = document.getElementById('sparaBUTTON');
    button.disabled = true;
 }*/


 
 
 function get_data(input){
     return document.getElementById(input).value;
 }

