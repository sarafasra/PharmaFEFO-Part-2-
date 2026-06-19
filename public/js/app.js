
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("stockForm");

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const data = {
                medicament_id: form.querySelector('[name="medicament_id"]').value,
                numero_lot: form.querySelector('[name="numero_lot"]').value,
                quantite: form.querySelector('[name="quantite"]').value,
                date_peremption: form.querySelector('[name="date_peremption"]').value
            };

            fetch("index.php?api=lot_add", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
            .then(res => res.json()) 
            .then(response => {
                console.log("RESPONSE:", response);
                
                alert(response.message);
                
                if (response.success) {
                    form.reset(); 
                }
            })
            .catch(err => {
                console.log("ERROR:", err);
            });
        });
    }
});