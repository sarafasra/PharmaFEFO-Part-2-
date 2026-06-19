document.addEventListener("DOMcontentLoaded",function(){
    const form = document.querySelector("#stokForm");
    if(!form) return;
    form.addEventListener("submit",function(e){
        e.preventDefault();
        fetch("index.php?api4=stock_add",{
            method:"POST"
        })
        .then(response => response.json())
        .json(data => {
            alert(data.message);
        })
        .catch(error => {
            console.log(error);
            alert("Erreur serveur");
        });
    });


});