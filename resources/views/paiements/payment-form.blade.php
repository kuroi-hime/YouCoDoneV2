<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'YouCoDone') }}</title>
    <!-- <script src="https://js.stripe.com/v3/"></script> -->
</head>
<body>
    <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- <input type="hidden" name="nom_restaut" value="">
    <input type="hidden" name="id_reservation" value="">
    <input type="hidden" name="id_user" value="">
    <input type="hidden" name=""> -->
    <div class="sticky bottom-0">
        <div class="flex gap-4">
            <button type="submit" class="px-6 py-2.5 rounded-lg bg-[#635bff] hover:bg-[#534bb3] text-white font-bold shadow-lg transition-all flex items-center gap-2">
                <span class="material-icons">payments</span>
                Payer
            </button>
        </div>
    </div>
</form>
</body>
</html>

<!-- acompte ou totalite
<div class="bg-slate-50 dark:bg-background-dark/50 p-4 rounded-xl border border-border-light dark:border-border-dark mb-6">
    <label class="block text-sm font-bold mb-3">Option de paiement</label>
    <div class="grid grid-cols-2 gap-4">
        <label class="cursor-pointer">
            <input type="radio" name="payment_type" value="deposit" class="peer hidden" checked>
            <div class="p-3 border rounded-lg peer-checked:border-primary peer-checked:bg-primary/5 text-center transition-all">
                <span class="block font-bold">Acompte</span>
                <span class="text-xs text-slate-500">50 MAD pour réserver</span>
            </div>
        </label>
        <label class="cursor-pointer">
            <input type="radio" name="payment_type" value="full" class="peer hidden">
            <div class="p-3 border rounded-lg peer-checked:border-primary peer-checked:bg-primary/5 text-center transition-all">
                <span class="block font-bold">Totalité</span>
                <span class="text-xs text-slate-500">Paiement complet</span>
            </div>
        </label>
    </div>
</div>
-->