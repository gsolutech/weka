

function showProfilSettings() {
    alert('Photo test');

    const profileImage = document.getElementById('profileImage');
    const couvertureImage = document.getElementById('couvertureImage');
    const profil_par_default = document.getElementById('profil_image_default');
    let main_container = document.getElementById('main_container');

    let profil_container = document.getElementById('profil_container');
    let couverture_container = document.getElementById('couverture_image_container');

    if (main_container) {
        // profileImage.classList.remove('hidden');
        // profil_par_default.classList.add('hidden');

        // profil_container.classList.remove('bge-cyan-custom');
        console.log('main_container true');
    } else {
        console.log('profileImage not found');
        test();
    }
}

function test() {
    alert("test réussi ! ");

    const profileImage = document.getElementById('profileImage');
    const couvertureImage = document.getElementById('couvertureImage');

    if (profileImage) {
        console.log('test2 check');
    } else {
        console.log('test2 no check');
    }
}