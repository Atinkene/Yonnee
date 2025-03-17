@extends('layout')

@section('content')
    <div class="w-full mx-auto p-6 rounded-lg">
       
        <!-- Affichage des détails du besoin -->
        <div class="grid grid-cols-1 gap-4">

            <!-- Articles -->
            <div class="mb-4">
                <label for="items" class="block text-sm font-medium text-gray-700">Articles</label>
                <input type="text" id="items" name="items" value="{{ $besoin->items }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="mt-1 block w-full px-3 py-2 h-20 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>{{ $besoin->description }}</textarea>
            </div>

            <!-- Quantité -->
            <div class="mb-4">
                <label for="quantite" class="block text-sm font-medium text-gray-700">Quantité</label>
                <input type="number" id="quantite" name="quantite" value="{{ $besoin->quantite }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

            <!-- Prix Unitaire -->
            <div class="mb-4">
                <label for="prixUnitaire" class="block text-sm font-medium text-gray-700">Prix Unitaire</label>
                <input type="number" step="0.01" id="prixUnitaire" name="prixUnitaire" value="{{ $besoin->prixUnitaire }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

            <!-- Totaux -->
            <div class="mb-4">
                <label for="totaux" class="block text-sm font-medium text-gray-700">Totaux</label>
                <input type="number" step="0.01" id="totaux" name="totaux" value="{{ $besoin->totaux }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

            <!-- Catégorie -->
            <div class="mb-4">
                <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <input type="text" id="categorie" name="categorie" value="{{ $besoin->categorie }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

            <!-- Personnel -->
            <div class="mb-4">
                <label for="personnel" class="block text-sm font-medium text-gray-700">Personnel</label>
                <input type="text" id="personnel" name="personnel" value="{{ $besoin->user->prenom." ".$besoin->user->nom }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

            <!-- Session -->
            <div class="mb-4">
                <label for="session" class="block text-sm font-medium text-gray-700">Session</label>
                <input type="text" id="session" name="session" value="{{ $besoin->session->intitule }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
            </div>

        </div>

        <!-- Bouton de retour -->
        <div class="mt-6 flex items-center justify-center">
            <a href="{{ route('besoin.personnel.personnel') }}" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 h-10 w-1/3 text-center">
                Retour à la liste
            </a>
        </div>
    </div>
@endsection
