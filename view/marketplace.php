<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Marketplace Arcano | Grimório Obsidiana</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..800;1,6..72,300..800&family=Manrope:wght@300..700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="./assets/style.css" rel="stylesheet"/>
</head>
<body class="bg-surface text-on-surface font-body overflow-x-hidden">

<?php include 'view/components/header.php'; // Recomendo extrair o header para um componente futuramente ?>

<main class="pt-32 pb-20 px-6 max-w-[80rem] mx-auto">
    <section class="text-center mb-16">
        <h1 class="font-headline text-5xl mb-4">Mercado <em class="text-primary italic">Arcano</em></h1>
        <p class="text-secondary italic font-headline text-lg opacity-80">Recursos forjados por mestres para elevar suas narrativas.</p>
    </section>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($itensLoja as $item): ?>
        <div class="bg-surface-container border border-outline-variant/20 rounded-sm flex flex-col group hover:border-primary/50 transition-all">
            <div class="h-48 bg-surface-bright flex items-center justify-center relative overflow-hidden">
                <span class="material-symbols-outlined text-6xl text-primary/20 group-hover:scale-110 transition-transform"><?= $item['icone'] ?></span>
                <span class="absolute bottom-3 left-3 px-2 py-0.5 bg-primary/10 text-primary text-[0.6rem] font-bold uppercase tracking-widest rounded-xs">
                    <?= $item['categoria'] ?>
                </span>
            </div>

            <div class="p-6 flex-1 flex flex-col">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-headline text-xl text-on-surface"><?= $item['titulo'] ?></h3>
                    <span class="font-bold text-primary"><?= $item['preco'] ?></span>
                </div>
                <p class="text-secondary/70 text-xs uppercase tracking-tighter mb-6">Por: <?= $item['autor'] ?></p>
                
                <button class="mt-auto w-full py-3 border border-outline/30 text-secondary text-[0.7rem] font-bold uppercase tracking-[0.2em] transition-all hover:bg-primary hover:text-on-primary hover:border-primary">
                    Adquirir Recurso
                </button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'view/components/footer.php' ?>

</body>
</html>