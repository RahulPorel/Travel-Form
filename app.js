const muImg = document.getElementById("mu-img");

muImg.addEventListener("click", showMuLocation);

function showMuLocation() {
  window.open(
    "https://www.google.com/maps/dir//Mahatma+Gandhi+Road,+Mantralaya,+Fort,+Mumbai,+Maharashtra+400032/@18.9335269,72.8327203,15.33z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be7d1c31de0a5d9:0x7a593c99f631b64f!2m2!1d72.8309786!2d18.9294242?hl=en&entry=ttu",
    "_blank"
  );
}
