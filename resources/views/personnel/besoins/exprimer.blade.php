@extends('layout')

@section('content')
    <div class="w-full mx-auto p-6  rounded-lg ">

        <!-- Formulaire -->
        <form class="grid grid-cols-1 gap-4" action="{{ route('exprimer.besoin.personnel') }}" method="POST">
            @csrf

            <!-- Items -->
            <div class="mb-4">
                <label for="items" class="block text-sm font-medium text-gray-700">Articles</label>
                <input type="text" id="items" name="items" value="{{ old('items') }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('items') border-red-500 @enderror" required>
                @error('items')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="textareal" id="description" name="description" value="{{ old('description') }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('description') border-red-500 @enderror" required>
                @error('description')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Quantité -->
            <div class="mb-4">
                <label for="quantite" class="block text-sm font-medium text-gray-700">Quantité</label>
                <input type="number" id="quantite" name="quantite" value="{{ old('quantite') }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('quantite') border-red-500 @enderror" required>
                @error('quantite')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Prix Unitaire -->
            <div class="mb-4">
                <label for="prixUnitaire" class="block text-sm font-medium text-gray-700">Prix Unitaire</label>
                <input type="number" step="0.01" id="prixUnitaire" name="prixUnitaire" value="{{ old('prixUnitaire') }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('prixUnitaire') border-red-500 @enderror" required>
                @error('prixUnitaire')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Totaux -->
            <div class="mb-4">
                <label for="totaux" class="block text-sm font-medium text-gray-700">Totaux</label>
                <input type="number" step="0.01" id="totaux" name="totaux" value="{{ old('totaux') }}" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('totaux') border-red-500 @enderror" required>
                @error('totaux')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Categorie -->
            <div class="mb-4">
                <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select id="categorie" name="categorie" class="mt-1 block w-full px-3 py-2 h-10 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('categorie') border-red-500 @enderror" required>
                    <option value="">Sélectionner une catégorie</option>
                    <option value="MATERIEL_LABORATOIRE" @selected(old('categorie') == 'MATERIEL_LABORATOIRE')>Matériel de Laboratoire</option>
                    <option value="PRODUITS_LABORATOIRE" @selected(old('categorie') == 'PRODUITS_LABORATOIRE')>Produits de Laboratoire</option>
                    <!-- Ajoute d'autres options ici selon le besoin -->
                </select>
                @error('categorie')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Personnel -->
            <div class="mb-4 hidden">
                <label for="idPersonnel" class="block text-sm font-medium text-gray-700">Personnel</label>
                <input type="text" name="idPersonnel" value="{{ $user->id }}">
                @error('idPersonnel')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Session -->
            <div class="mb-4 hidden">
                <label for="idSession" class="block text-sm font-medium text-gray-700">Session</label>
                <input type="text" name="idSession" value="{{ $session->id }}">
                
                @error('idSession')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-6 flex justify-center">
                <button type="submit" class="px-4 py-5 bg-blue-900 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 h-10 w-1/3">
                    Ajouter le besoin
                </button>
            </div>
        </form>
    </div>
@endsection
