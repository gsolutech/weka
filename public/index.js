// 

const nameS = "";
const priceS = "";

// calendar show
document.getElementById('showCalendarRadio').addEventListener('change', function(event) {
    event.preventDefault();
    if (this.checked) {
        let calendarEl = document.getElementById('calendarDiv');
        calendarEl.value = "";
        console.log("Element : " + calendarEl);

        if (calendarEl) {
            calendarEl.classList.remove('hidden');
            calendarEl.classList.add('flex');
        } else {
            console.error("Element with id 'calendarDiv' not found.");
        }
    } else {
        calendarEl.className = 'none'; 
    }
});

//calendar close
function closeCalendar() {
    let calendarEl = document.getElementById('calendarDiv');
    if (calendarEl) {
        calendarEl.classList.remove('flex');
        calendarEl.classList.add('hidden');

        document.getElementById('dispoCheck').checked = true;
    } else {
        console.error("Element with id 'calendarDiv' not found.");
    }
}

//récupérer la date
function getDateCalendar() {
    let calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        let containerCalendar = document.getElementById('calendarDiv');
        bodySelect.body.classList.add('backdrop-blur'); 
        containerCalendar.classList.add('backdrop-blur');
        let calendarValue = calendarEl.value;
        if (calendarValue == "") {
            let error = document.getElementById('errorDate');
            error.innerHTML = 'Veillez sélectioner une date pour filter';
        } else {
            // alert('Calendar : ' + calendarValue);
            let calendarContainer = document.getElementById('calendarDiv');            
            if (calendarContainer) {
                calendarContainer.classList.remove('flex');
                calendarContainer.classList.add('hidden');
            }
        }
    } else {
        console.log('Calendar not found');
    }
}
// page d'inscription show
function ShowIscription() {
    //alert("closePop read");
    let element = document.getElementById('closePop');
    let bodySelect = document.querySelector('body');
    console.log('Element séléctioné :', element);

    if (element) {
        // element.classList.add('someClass');
        element.classList.remove('hidden');
        element.classList.add('flex'); 
        element.classList.add("backdrop-blur-md")

        bodySelect.body.classList.add('backdrop-blur');  
    } else {
        console.error("closePop not found");
    }
}
function ShowConnexionPage_inscri_visible() {
    //récupérer les id de la page d'inscription et de la connexion
    let inscriptionPage = document.getElementById('inscriptionShow');
    let connexionPage = document.getElementById('showConnexion');

    if (inscriptionPage) {
    //Fermer la page d'inscription
        inscriptionPage.classList.remove('flex');
        inscriptionPage.classList.add('hidden');

    //Afficher la page de connexion
        connexionPage.classList.remove('hidden');
        connexionPage.classList.add('flex');
    }
}
//Afficher la page d'inscription

function showInscriptionPage() {
    let element = document.getElementById('showConnexion');
    let inscrisSshow = document.getElementById('inscriptionShow');
    let bodySelect = document.querySelector('body');
    console.log('Element séléctioné :', element);

    if (element) {
        //fermer la page de connexion
        element.classList.add('hidden');
        element.classList.remove('flex'); 
        element.classList.add("backdrop-blur-md")

        //afficher la page d'inscription
        inscrisSshow.classList.remove('hidden');
        inscrisSshow.classList.add('flex');

        bodySelect.body.classList.add('backdrop-blur');
    } else {
        console.error("closePop not found");
    }

    if (inscrisSshow) {
        alert("Element 2 already" + element2);
        inscrisSshow.classList.add('flex');
        inscrisSshow.classList.remove('hidden');
    } else {
        alert("Element 2 not found " + element)
    }
    
}
//Fermeture de la page de connexion 
function closeInscription() {
    alert("Connection closed")
    let element = document.getElementById('showConnexion');
    element.classList.remove('flex');
    element.classList.add('hidden');
    element.classList.remove("backdrop-blur-md");
}


//afficher bouton filtrer
function showFiltre_recherche() {
    let element = document.getElementById("filtre_recherche");

    if (element) {
        element.classList.remove("hidden");
        element.classList.add("flex");
    } else {
        console.log("btn_search non trouvé");
    }
}
function closeFiltre_rechercher() {
    let element = document.getElementById("filtre_recherche");

    if (element) {
        element.classList.remove("flex");
        element.classList.add("hidden");
    } else {
        console.log("btn_search non trouvé");
    }
}
// document.addEventListener('DOMContentLoaded')
document.addEventListener('DOMContentLoaded', function() {
    let button = document.getElementById('btn_inscrire');
    console.log('Button:', button); // Debugging line
    if (button) {
        button.onclick = ShowIscription;
    } else {
        console.log("Bouton 'btn_inscrire' non trouvé.");
    }

    let closeCalendar = document.getElementById("calendarDiv");
    if (closeCalendar) {
        closeCalendar.onclick = closeCalendar;
    }
})
document.addEventListener("click", function () {
    let inputSearch = document.getElementById("inputSearchId");

    if (inputSearch) {
        // alert("Input checker");

        // let liens = new XMLHttpRequest();
        // liens.open("GET", "../config/PAGES/search.php", true);
        // liens.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // alert("Récu");

        let mainContainer = document.getElementById("mainContainer");
        let filtreContainer = document.getElementById("filtreContainer");

        let closeCalendar = document.getElementById("calendarDiv");
        if (closeCalendar) {
            closeCalendar.onclick = closeCalendar;
        }
    } else {
        console.log("Input not found");
    }

});

//afficher la fénêtre de reservation
function showReservation() {

    alert("modale " + nameS + "  " + priceS);
    let reservation = document.getElementById('showReservationDiv');
    let containerReservation = document.getElementById('container_reservation_show');


    if (reservation) {
        reservation.classList.remove('hidden');
        reservation.classList.add('flex-col');

        containerReservation.classList.remove('hidden');
        containerReservation.classList.add('flex');

    } else {
        console.log('reservation introuvable');
    }
}

//récupérer le prix du service et l'affecter à un input type text
let prix_services;

function reservation_check_price() {
    alert('active : ' + prix_services);
}


const btn_buy = document.querySelectorAll('#button_buy');

btn_buy.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        const main_article = button.closest('#mainArticle');

        const nameService = main_article.querySelector('#nameService');
        const priceService = main_article.querySelector('#priceServiceP');

        const nameS = nameService.textContent;
        const priceS = priceService.textContent;    
        
        alert("Nom : " + nameS  + "        "  +  "Price : " + priceS);

        let prixSet = document.getElementById('prix');
        let serviceNameHide = document.getElementById('serviceNameHide');
        if (prixSet) {
            console.log("prixSet found");
            prixSet.value = priceS;

            if (serviceNameHide) {
                console.log("serviceNameHide found");
                serviceNameHide.value = nameS;
            } else {
                console.log("serviceNameHide not found");
            }

            showReservation();

        } else {
            console.log("prixSet not found");
        }
        
    })
});


let validerReservation = document.getElementById('reservation_check_data');


validerReservation.addEventListener('click', (event) => {
    event.preventDefault();
    alert("valder Reservation");
})