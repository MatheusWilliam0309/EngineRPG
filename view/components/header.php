<header class="fixed top-0 w-full z-50 flex justify-between items-center px-8 h-20 bg-surface/85 backdrop-blur-md border-b border-surface-bright/30">
  <a href="index.php?page=home" class="font-headline text-2xl font-bold text-primary italic no-underline tracking-tight">
    Grimório Obsidiana
  </a>
  
  <nav class="hidden lg:flex items-center gap-8">
    <a href="index.php?page=home" 
       class="font-headline uppercase tracking-[0.12em] text-[0.78rem] no-underline transition-colors <?= (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary' ?>">
       Grimório
    </a>
    <a href="index.php?page=campanhas" 
       class="font-headline uppercase tracking-[0.12em] text-[0.78rem] no-underline transition-colors <?= (isset($_GET['page']) && $_GET['page'] == 'campanhas') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary' ?>">
       Campanhas
    </a>
    <a href="index.php?page=marketplace" 
       class="font-headline uppercase tracking-[0.12em] text-[0.78rem] no-underline transition-colors <?= (isset($_GET['page']) && $_GET['page'] == 'marketplace') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary' ?>">
       Marketplace
    </a>
    <a href="index.php?page=cronicas" 
       class="font-headline uppercase tracking-[0.12em] text-[0.78rem] no-underline transition-colors <?= (isset($_GET['page']) && $_GET['page'] == 'cronicas') ? 'text-primary border-b-2 border-primary pb-1' : 'text-secondary hover:text-primary' ?>">
       Crônicas
    </a>
  </nav>

  <div class="flex items-center gap-4">
    <button class="hidden md:block px-6 py-2 bg-primary text-on-primary font-bold text-[0.7rem] tracking-[0.18em] uppercase rounded-sm shadow-inner transition-all hover:scale-105 cursor-pointer">
      Rolar Iniciativa
    </button>
    <span class="material-symbols-outlined text-primary cursor-pointer text-3xl">account_circle</span>
  </div>
</header>