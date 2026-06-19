# 💊 PharmaFEFO - Application de gestion de stock pharmaceutique

## 📌 Description

PharmaFEFO est une application web de gestion de stock pharmaceutique basée sur une architecture MVC et API-Ready.
Elle permet la gestion des médicaments, des lots, des alertes de péremption et l’optimisation du stock selon la méthode FEFO (First Expired, First Out).

L’application est développée en PHP avec une interface dynamique en JavaScript (Fetch API) et un design moderne avec TailwindCSS.

---

## 🚀 Fonctionnalités

### 🔐 Authentification
- Login / Logout sécurisé
- Gestion des rôles (ADMIN / PREPARATEUR / PHARMACIEN)

### 📦 Gestion des lots
- Ajout d’un lot via API asynchrone
- Stockage en base de données MySQL
- Validation côté serveur

### ⚠️ Alertes
- Détection des produits proches de péremption
- Classification (OK / WARNING / EXPIRED)

### 📊 Dashboard
- Vue admin centralisée
- Statistiques des stocks
- Table des lots récents

---

## ⚙️ Technologies utilisées

- PHP (MVC Architecture)
- MySQL
- JavaScript ES6 (Fetch API)
- HTML5 / CSS3
- TailwindCSS

---

## 📁 Structure du projet


pharmafefo/
│
├── config/
│ └── Database.php
│
├── public/
│ ├── index.php
│ ├── js/
│ │ └── app.js
│
├── src/
│ ├── Controller/
│ │ ├── Web/
│ │ └── Api/
│ ├── Repository/
│ └── Service/
│
└── README.md


---

## 🛠️ Installation

### 1️⃣ Cloner le projet
```bash
git clone https://github.com/your-repo/pharmafefo.git
2️⃣ Importer la base de données
Importer le fichier SQL fourni
Créer la base : pharmafefo2
3️⃣ Configurer la base de données

Modifier config/Database.php :

$host = "localhost";
$db   = "pharmafefo2";
$user = "root";
$pass = "";
4️⃣ Lancer le projet

Utiliser XAMPP :

http://localhost/PharmaFEFO/public
📡 API Endpoints
➕ Ajouter un lot
POST /index.php?api=lot_add

Body (FormData):

medicament_id
numero_lot
quantite
date_peremption

Response:

{
  "message": "Lot ajouté avec succès"
}
🔐 Sécurité
Protection des routes via session
Vérification des rôles utilisateur
Requêtes préparées (PDO)
👩‍💻 Auteur

Projet réalisé dans le cadre d’un brief pédagogique :

Développement d’une application MVC API-Ready
Gestion de stock pharmaceutique FEFO
📌 Objectif pédagogique
Passer d’une application PHP classique à une architecture moderne
Utilisation de Fetch API (asynchrone)
Séparation Web / API
Bonne pratique MVC


