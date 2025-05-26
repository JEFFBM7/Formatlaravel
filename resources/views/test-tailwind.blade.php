@extends('base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Test TailwindCSS</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Card 1</h3>
                <p class="text-gray-600 mb-4">Ceci est un test pour vérifier que TailwindCSS fonctionne correctement.</p>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition duration-200">
                    Bouton Bleu
                </button>
            </div>
            
            <div class="bg-green-50 p-6 rounded-lg shadow-lg border border-green-200">
                <h3 class="text-xl font-semibold text-green-800 mb-4">Card 2</h3>
                <p class="text-green-600 mb-4">Cette carte utilise des classes de couleur verte de TailwindCSS.</p>
                <button class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded transition duration-200">
                    Bouton Vert
                </button>
            </div>
            
            <div class="bg-purple-50 p-6 rounded-lg shadow-lg border border-purple-200">
                <h3 class="text-xl font-semibold text-purple-800 mb-4">Card 3</h3>
                <p class="text-purple-600 mb-4">Cette carte utilise des classes de couleur violette.</p>
                <button class="bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded transition duration-200">
                    Bouton Violet
                </button>
            </div>
        </div>
        
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-8 rounded-lg text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Gradient Background</h2>
            <p class="text-lg mb-6">Ceci démontre un arrière-plan en dégradé avec TailwindCSS.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-600 font-medium py-2 px-6 rounded hover:bg-gray-100 transition duration-200">
                    Action 1
                </button>
                <button class="bg-transparent border-2 border-white text-white font-medium py-2 px-6 rounded hover:bg-white hover:text-blue-600 transition duration-200">
                    Action 2
                </button>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-500">
                Si vous voyez des styles appliqués, TailwindCSS fonctionne correctement !
            </p>
        </div>
    </div>
</div>
@endsection
