"use strict";

const modal = document.querySelector(".notif");
const openModalBtn = document.querySelectorAll("#buttonCourse");
const yesBtn = document.getElementById("btn--yes");
const noBtn = document.getElementById("btn--no");
const overlay = document.querySelector(".overlay");
const closebtn = document.querySelector(".tombol-silang");


const openModal = function () {
    console.log('clicked');
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
}

const closeModal = function (){
    console.log('clicked');
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
}


closebtn.addEventListener("click", closeModal);
noBtn.addEventListener("click", closeModal);

document.addEventListener("keydown", function (event) {
    console.log(event.key);
    if (event.key === "Escape" && !modal.classList.contains("hidden")) {
        closeModal();
    }
});


