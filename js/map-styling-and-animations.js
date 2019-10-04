console.log("map page");

document.querySelector("#clicker").addEventListener("click", () => {
    // document.querySelector("#choose-bike-container").style.display = "block";
    document.querySelector("#choose-bike-container").classList.toggle("hidden");
    document.querySelector("#bikeInfo").classList.toggle("hidden");
    document.querySelector("#up-arrow").classList.toggle("hidden");
    document.querySelector("#choose-bike-container").classList.toggle("choose-bike-container-animation");
});