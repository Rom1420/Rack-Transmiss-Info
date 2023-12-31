function messageAlert() {
    alert("Clique sur l'outil N°");
}

function test() {
    /*alert("VOUS AVEZ CLIQUE !");
    var text = document.getElementById('accès').innerText;
    var selectorMul = document.querySelector('#accès');
    selectorMul.innerHTML = text + 'a';*/
    C1.setAttribute("style", "font-style : italic; border:1px solid red");
}

function actuH() {
    var now = new Date();
    var temps = "Le " + now.getDate() + "/" + (now.getMonth() + 1) + "/" + now.getYear() + " à " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds(); //Ne fonctionne pas
    var selectorMul = document.querySelector('#heure');
    selectorMul.innerHTML = temps;
    setTimeout(actuH, 100);
}

function C1act() {
    var now = new Date();
    if (RFIDdétect1 == 'valeurBadg1') {
        if(mass1M ==masse1T) C1.style.backgroundColor = '#00ff00';
        else C1.style.backgroundColor = '#ff9f38';
    }
    else C1.style.backgroundColor = '#ff0000';
}

function C2act() {
    if (RFIDdétect2 == 'valeurBadg2') {
        if(mass2M ==masse2T) C2.style.backgroundColor = '#00ff00';
        else C2.style.backgroundColor = '#ff9f38';
    }
    else C2.style.backgroundColor = '#ff0000';
}

function C3act() {
    if (RFIDdétect3 == 'valeurBadg3') {
        if(mass3M ==masse3T) C3.style.backgroundColor = '#00ff00';
        else C3.style.backgroundColor = '#ff9f38';
    }
    else C3.style.backgroundColor = '#ff0000';
}


function updateClock() {
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();

    const day = now.getDate();
    const month = now.getMonth() + 1; 
    const year = now.getFullYear();

    const digitalClock = document.getElementById('digital-clock');
    digitalClock.textContent = `${formatTime(hours)}:${formatTime(minutes)} - ${formatDate(day)}/${formatDate(month)}/${year}`;
}

//Pour un format à la bien
function formatTime(time) {
    return time < 10 ? '0' + time : time;
}

//Pour un format à la bien
function formatDate(datePart) {
    return datePart < 10 ? '0' + datePart : datePart;
}


setInterval(updateClock, 1000);

updateClock();


C1.addEventListener('click', C1act);
C2.addEventListener('click', messageAlert);
C3.addEventListener('click', messageAlert);
accès.addEventListener('click', test);
heure.addEventListener('click', actuH())

//Pur le foctionnement, c'est un raffraichissement automatique. Dans la vraie vie tt les 30s ou 1 min. Ici tt les 5s por la fluidité de la démo
