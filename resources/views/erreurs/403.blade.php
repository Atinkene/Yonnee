<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès Non Autorisé</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded-lg p-8">
            <h1 class="text-4xl font-bold text-red-500 mb-4">403 - Accès Non Autorisé</h1>
            <p class="text-gray-600">Vous n'avez pas les permissions nécessaires pour accéder à cette page.</p>
            <button onclick="history.back()" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-700">
                Retour en arrière
            </button>
            <a href="{{ route('auth.dashboard') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                Retour à la page d'accueil
            </a>
        </div>
    </div>
</body>
</html>
