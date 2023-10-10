if ("serviceWorker" in navigator){
    navigator.serviceWorker.register("sw.js").then(registration =>{
        console.log("SW Registered!");
        console.log(registration);
    }).catch(error =>{
        console.log("SW Registration Failed!");
        console.log(error);
    })
}

function checkData(){
    var dropdownValue = document.getElementById("System").value;
    var dateValue = document.getElementById("DateUser").value;
    if (dropdownValue === "" || dateValue === "") {
        alert("Por favor, completa todos los campos.");
    } else {
       alert("Muy bien");
    }
}