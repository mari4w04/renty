console.log("index");

setTimeout(function(){ 
    document.querySelector("#index-loader-container").classList.remove("hidden");
}, 1000);

setTimeout(function(){ 
    window.location.replace("search.php");
}, 2000);
