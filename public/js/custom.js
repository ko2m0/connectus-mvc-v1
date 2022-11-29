// Get the modal
var modalMeet = document.getElementById("ModalMeet");
var modalRefer = document.getElementById("ModalRefer");
var modalInfo = document.getElementById("ModalInfo");

// Get the button that opens the modal
var btn = document.getElementById("MeetBtn");
var btn2 = document.getElementById("ReferBtn");
var btn3 = document.getElementById("InfoBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modalMeet.style.display = "block";
}
btn2.onclick = function () {
    modalRefer.style.display = "block";
}
btn3.onclick = function () {
    modalInfo.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modalMeet.style.display = "none";
}

span2.onclick = function () {
    modalRefer.style.display = "none";
}
span3.onclick = function () {
    modalInfo.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modalMeet) {
        modalMeet.style.display = "none";
    }
}

window.onclick = function (event) {
    if (event.target == modalRefer) {
        modalRefer.style.display = "none";
    }
}

window.onclick = function (event) {
    if (event.target == modalInfo) {
        modalInfo.style.display = "none";
    }
}