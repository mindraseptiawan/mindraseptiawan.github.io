const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.reg-link');
const btnPopup = document.querySelector('.btnlogin');
const iconClose = document.querySelector('.close-icon');
const konVersi = document.querySelector('.btnservice');
const subScribe = document.querySelector('.subscribe');
const closed = document.querySelector('.close')

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click',()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click',()=> {
    wrapper.classList.remove('active-popup');
});

konVersi.addEventListener('click',()=> {
    subScribe.classList.add('active-topup');
});

closed.addEventListener('click',()=> {
    subScribe.classList.remove('active-topup');
});

function konvert(){
    let nilai = document.getElementById("nilai").value;
    console.log(`Nilai yang diinput : ${nilai}`);
    
    if (nilai >= 80 && nilai <= 100) {
      console.log("Nilai menjadi A");
    } else if (nilai >= 70 && nilai <= 79) {
      console.log("Nilai menjadi B");
    } else if (nilai >= 60 && nilai <= 69) {
      console.log("Nilai menjadi C");
    } else if (nilai >= 40 && nilai <= 59) {
      console.log("Nilai menjadi D");
    } else if (nilai < 40) {
      console.log("Nilai menjadi E");
    } else {
      console.log("Gajelas Nilaimu");
    }
}
