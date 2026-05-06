<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Crônicas | Grimório Obsidiana</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..800;1,6..72,300..800&family=Manrope:wght@300..700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="./assets/style.css" rel="stylesheet"/>
</head>
<body class="bg-surface text-on-surface font-body flex flex-col min-h-screen overflow-x-hidden">

    <?php include 'view/components/header.php'; ?>

    <main class="flex-1 pt-32 pb-20 px-6 max-w-[55rem] mx-auto w-full">
        
        <section class="text-center mb-20">
            <h1 class="font-headline text-5xl mb-4">
                Crônicas do <em class="text-secondary italic">Vácuo</em>
            </h1>
            <p class="font-headline text-secondary italic text-lg md:text-xl opacity-80">
                Relatos de escribas, atualizações do sistema e lendas perdidas.
            </p>
        </section>

        <div class="flex flex-col">
            <?php foreach ($posts as $post): ?>
            <article class="py-10 border-b border-outline-variant/20 last:border-0 group">
                
                <div class="flex items-center gap-3 mb-4 text-[0.65rem] font-bold uppercase tracking-[0.2em]">
                    <span class="text-primary-container"><?= $post['categoria'] ?></span>
                    <span class="text-secondary/30">•</span>
                    <span class="text-secondary/50"><?= $post['data'] ?></span>
                </div>
                
                <h2 class="font-headline text-3xl md:text-4xl text-on-surface mb-4 transition-colors group-hover:text-primary cursor-pointer">
                    <?= $post['titulo'] ?>
                </h2>
                
                <p class="text-secondary/70 leading-relaxed text-[0.95rem] mb-6 font-light">
                    <?= $post['resumo'] ?>
                </p>
                
                <a href="index.php?page=post&id=..." class="font-headline italic text-secondary text-[1.1rem] border-b border-transparent hover:border-secondary transition-colors no-underline inline-block pb-0.5">
                    Ler o pergaminho completo...
                </a>

            </article>
            <?php endforeach; ?>
        </div>

    </main>

    <?php include 'view/components/footer.php'; ?>

</body>
</html>