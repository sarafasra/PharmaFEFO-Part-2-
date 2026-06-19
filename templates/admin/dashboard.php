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

    <!-- TABLE -->
    <div class="mt-6 bg-white shadow rounded-lg overflow-hidden">

        <div class="bg-gray-800 text-white px-4 py-3">
            📦 Lots récents
        </div>

        <table class="w-full text-sm">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="p-3">Produit</th>
                    <th class="p-3">Quantité</th>
                    <th class="p-3">Expiration</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-t">
                    <td class="p-3">Paracétamol</td>
                    <td class="p-3">120</td>
                    <td class="p-3">2026-12-01</td>
                    <td class="p-3 text-green-600 font-bold">OK</td>
                </tr>

                <tr class="border-t">
                    <td class="p-3">Amoxicilline</td>
                    <td class="p-3">30</td>
                    <td class="p-3">2026-02-10</td>
                    <td class="p-3 text-yellow-600 font-bold">Alerte</td>
                </tr>

            </tbody>
        </table>

    </div>

</div>
<script src="js/app.js"></script>

</body>
</html>