<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Recrutamento | Grimório Obsidiana</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..800;1,6..72,300..800&family=Manrope:wght@300..700&display=swap" rel="stylesheet"/>
    <link href="./assets/style.css" rel="stylesheet"/>
</head>
<body class="bg-surface text-on-surface font-body flex flex-col min-h-screen">

    <?php include 'view/components/header.php'; ?>

    <main class="flex-1 flex items-center justify-center py-20 px-6">
        <div class="w-full max-w-md bg-surface-container border border-outline-variant/20 p-10 rounded-sm">
            <div class="text-center mb-8">
                <h1 class="font-headline text-4xl mb-2 italic">Novo <em class="text-primary not-italic">Escriba</em></h1>
                <p class="text-secondary/60 text-sm italic">Defina seu papel no Vácuo Obsidiano.</p>
            </div>

            <form action="index.php?page=registrar" method="POST" class="space-y-6">
                <div>
                    <label class="block text-[0.65rem] uppercase tracking-widest text-primary font-bold mb-2">Nome de Invocador</label>
                    <input type="text" name="nome" required class="w-full bg-surface border border-outline-variant/30 p-3 text-sm focus:border-primary outline-none transition-all">
                </div>

                <div>
                    <label class="block text-[0.65rem] uppercase tracking-widest text-primary font-bold mb-2">E-mail Arcano</label>
                    <input type="email" name="email" required class="w-full bg-surface border border-outline-variant/30 p-3 text-sm focus:border-primary outline-none transition-all">
                </div>

                <div>
                    <label class="block text-[0.65rem] uppercase tracking-widest text-primary font-bold mb-2">Sua linhagem (Cargo)</label>
                    <select name="cargo" class="w-full bg-surface border border-outline-variant/30 p-3 text-sm focus:border-primary outline-none transition-all text-secondary">
                        <option value="heroi">Herói (Jogador)</option>
                        <option value="mestre">Mestre (Narrador)</option>
                        <option value="gm">GM (Administrador)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-[0.65rem] uppercase tracking-widest text-primary font-bold mb-2">Senha</label>
                    <input type="password" name="senha" required class="w-full bg-surface border border-outline-variant/30 p-3 text-sm focus:border-primary outline-none transition-all">
                </div>

                <button type="submit" class="w-full py-4 bg-primary text-on-primary font-bold text-xs uppercase tracking-[0.2em] hover:brightness-110 transition-all">
                    Prestar Juramento
                </button>
            </form>

            <p class="mt-8 text-center text-[0.7rem] text-secondary/40 uppercase tracking-widest">
                Já possui acesso? <a href="index.php?page=login" class="text-primary no-underline hover:underline">Retornar ao Portal</a>
            </p>
        </div>
    </main>

    <?php include 'view/components/footer.php'; ?>
</body>
</html>