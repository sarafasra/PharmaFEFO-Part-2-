<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PharmaFEFO Dashboard</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<div class="bg-gray-900 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">💊 PharmaFEFO</h1>

    <div class="flex items-center gap-4">
        <span class="text-sm">Admin Dashboard</span>

        <a href="index.php?logout=1"
           class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm">
            Logout
        </a>
    </div>
</div>

<!-- CONTAINER -->
<div class="p-6">

    <!-- CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <div class="bg-white shadow rounded-lg p-5 border-l-4 border-blue-500">
            <h2 class="text-lg font-bold">Utilisateurs</h2>
            <p class="text-gray-500 text-sm mt-1">Gestion des comptes</p>
        </div>

        <div class="bg-white shadow rounded-lg p-5 border-l-4 border-green-500">
            <h2 class="text-lg font-bold">Stock</h2>
            <p class="text-gray-500 text-sm mt-1">Gestion des médicaments</p>
        </div>

        <div class="bg-white shadow rounded-lg p-5 border-l-4 border-red-500">
            <h2 class="text-lg font-bold">Alertes</h2>
            <p class="text-gray-500 text-sm mt-1">Produits expirés</p>
        </div>

    </div>

    <div class="mt-6 bg-white p-6 rounded-lg shadow">

    <h2 class="text-lg font-bold mb-4">
        Ajouter un lot
    </h2>

     <form id="stockForm">

    <input type="number" name="medicament_id" placeholder="ID médicament" class="border p-2 w-full mb-3 rounded">

    <input type="text" name="numero_lot" placeholder="Nom / Lot" class="border p-2 w-full mb-3 rounded">

    <input type="number" name="quantite" placeholder="Quantité" class="border p-2 w-full mb-3 rounded">

    <input type="date" name="date_peremption" class="border p-2 w-full mb-3 rounded">

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Ajouter
    </button>

</form>
</div>

    <!-- TABLE -->
    
            </tbody>
        </table>

    </div>

</div>
<script src="js/app.js"></script>
</body>
</html>