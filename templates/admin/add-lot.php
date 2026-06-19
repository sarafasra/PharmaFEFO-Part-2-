<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Lot</title>
</head>
<body>
    <h2>Ajouter un lot (Préparateur)</h2>
    
    <form id="addForm">
        <input type="text" id="nom" placeholder="Nom du médicament" required><br><br>
        <input type="number" id="quantite" placeholder="Quantité" required><br><br>
        <input type="date" id="date_peremption" required><br><br>
        <button type="submit">Enregistrer</button>
    </form>

    <script>
    document.getElementById('addForm').addEventListener('submit', function(e) {
        e.preventDefault(); 

        let data = {
            nom: document.getElementById('nom').value,
            quantite: document.getElementById('quantite').value,
            date_peremption: document.getElementById('date_peremption').value
        };

        fetch('../../src/Controller/Api/ApiLotController.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(response => {
            alert(response.message); 
            if(response.success) {
                document.getElementById('addForm').reset();
            }
        })
        .catch(err => console.error("Erreur Fetch:", err));
    });
    </script>
</body>
</html>