// calendar show
document.getElementById('showCalendarRadio').addEventListener('change', function(event) {
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
function showInscriptionTwo() {
    let element = document.getElementById('showConnexion');
    let element2 = document.getElementById('inscriptionShow');
    let bodySelect = document.querySelector('body');
    console.log('Element séléctioné :', element);

    if (element) {
        // element.classList.add('someClass');
        element.classList.add('hidden');
        element.classList.remove('flex'); 
        element.classList.add("backdrop-blur-md")

        bodySelect.body.classList.add('backdrop-blur');
    } else {
        console.error("closePop not found");
    }

    if (element2) {
        alert("Element 2 already" + element2);
        element2.classList.add('flex');
        element2.classList.remove('hidden');
    } else {
        alert("Element 2 not found " + element)
    }
    
}

function closeInscription() {
    let element = document.getElementById('inscriptionShow');
    element.classList.remove('flex');
    element.classList.add('hidden');
}

function closeInscription(event) {
    if (event.target.id === 'inscriptionShow' || event.target.classList.contains('close')) {
        let element = document.getElementById('inscriptionShow');
        element.classList.remove('flex');
        element.classList.add('hidden');
        document.body.classList.remove('backdrop-blur');
    }
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

    let buttonClose = document.getElementById("closePop");
    console.log('Button:', buttonClose); // Debugging line
    if (buttonClose) {
        buttonClose.onclick = closeInscription;
    } else {
        console.log("Bouton 'btn_close_pop' non trouvé.");
    }

    let closeCalendar = document.getElementById("calendarDiv");
    if (closeCalendar) {
        closeCalendar.onclick = closeCalendar;
    }


    // let btn_search = document.getElementById('btn_search');
    // if (btn_search) {
    //     btn_search.onclick = showFiltre_recherche();
    //     console.log('btn_search confirmed')
    // } else {
    //     console.log('Filtre non trouvé');
    // }
})
document.addEventListener("click", function () {
    let inputSearch = document.getElementById("inputSearchId");

    if (inputSearch) {
        // alert("Input checker");

        let liens = new XMLHttpRequest();
        liens.open("GET", "../config/PAGES/search.php", true);
        liens.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
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

    let closeConnexion = document.getElementById("closePop");
    if (closeConnexion) {
        closeConnexion.onclick = closeInscription;
    } else {
        console.log("container non trouver ! ");
    }
});

// changer la photo de profil

// document.getElementById("showFilesDialog").addEventListener("change", function (event) {
//     alert("Files");
//     const file = event.target.files[0];
//     if (file) {
//         console.log("fichier trouver");
//         const reader = new FileReader();
//         reader.onload = function (e) {
//         document.getElementById("profileImage").src = e.target.result;
//     };
//     reader.readAsDataURL(file);
//     } else {
//         console.error("Aucun fichier sélectionné.");
//     }
// });
