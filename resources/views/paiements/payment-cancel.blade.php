<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Paiement Annulé - YouCo'Done</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#20df20",
                        "background-dark": "#112111",
                        "surface-dark": "#1a2e1a",
                    },
                    fontFamily: { "display": ["Work Sans", "sans-serif"] }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 dark:bg-background-dark font-display flex items-center justify-center min-h-screen p-6">

    <div class="max-w-md w-full bg-white dark:bg-surface-dark p-8 rounded-2xl shadow-xl text-center border border-slate-200 dark:border-border-dark">
        <div class="w-20 h-20 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="material-icons text-red-500 text-5xl">error_outline</span>
        </div>
        
        <h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Paiement interrompu</h1>
        <p class="text-slate-500 dark:text-slate-400 mb-8">
            La transaction n'a pas pu aboutir. Ne vous inquiétez pas, aucune somme n'a été débitée.
        </p>

        <div class="flex flex-col gap-3">
            <a href="{{ url()->previous() }}" class="block w-full py-3 bg-slate-900 dark:bg-white dark:text-slate-900 text-white font-bold rounded-xl transition-all">
                Réessayer le paiement
            </a>
            <a href="{{ route('home') }}" class="block w-full py-3 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 font-medium rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                Retourner à l'accueil
            </a>
        </div>
    </div>
</body>
</html>