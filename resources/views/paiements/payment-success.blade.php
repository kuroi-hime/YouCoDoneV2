<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Paiement Réussi - YouCo'Done</title>
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
        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="material-icons text-primary text-5xl">check_circle</span>
        </div>
        
        <h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Paiement Confirmé !</h1>
        <p class="text-slate-500 dark:text-slate-400 mb-8">
            Félicitations, votre restaurant a été publié avec succès sur YouCo'Done.
        </p>

        <div class="space-y-4">
            <a href="{{ route('home') }}" class="block w-full py-3 bg-primary hover:bg-primary-dark text-[#0d1b0d] font-bold rounded-xl transition-all shadow-lg shadow-primary/20">
                Aller à l'accueil
            </a>
            <p class="text-xs text-slate-400">
                Redirection automatique dans <span id="countdown">5</span> secondes...
            </p>
        </div>
    </div>

    <script>
        let seconds = 5;
        setInterval(() => {
            seconds--;
            document.getElementById('countdown').innerText = seconds;
            if(seconds <= 0) window.location.href = "{{ route('home') }}";
        }, 1000);
    </script>
</body>
</html>