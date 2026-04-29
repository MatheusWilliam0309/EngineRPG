<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Marketplace Arcano | Grimório Obsidiana</title>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..800;1,6..72,300..800&family=Manrope:wght@300..700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
  /* --- ESTILOS BASE DO INDEX.PHP (Simplificado) --- */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root { --primary: #ffb59a; --primary-container: #f95e14; --on-primary: #5b1b00; --on-primary-container: #4f1700; --secondary: #d6c692; --surface: #131313; --surface-container: #20201f; --surface-container-high: #2a2a2a; --on-surface: #e5e2e1; }
  body { background: var(--surface); color: var(--on-surface); font-family: 'Manrope', sans-serif; overflow-x: hidden; }
  .material-symbols-outlined { font-family: 'Material Symbols Outlined'; font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; display: inline-block; vertical-align: middle; }
  
  header { position: fixed; top: 0; width: 100%; z-index: 50; display: flex; justify-content: space-between; align-items: center; padding: 0 2rem; height: 5rem; background: rgba(19,19,19,0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(57,57,57,0.3); }
  .logo { font-family: 'Newsreader', serif; font-size: 1.5rem; font-weight: 700; color: var(--primary); font-style: italic; text-decoration: none; }
  nav { display: flex; align-items: center; gap: 2rem; }
  nav a { font-family: 'Newsreader', serif; color: var(--secondary); text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.78rem; text-decoration: none; transition: color 0.3s; }
  nav a.active { color: var(--primary); border-bottom: 2px solid var(--primary); padding-bottom: 4px; }
  .btn-initiative { padding: 0.45rem 1.4rem; background: var(--primary); color: var(--on-primary); font-weight: 700; font-size: 0.7rem; letter-spacing: 0.18em; text-transform: uppercase; border: none; cursor: pointer; border-radius: 2px; }
  .header-right { display: flex; align-items: center; gap: 1rem; }
  footer { background: #0e0e0e; border-top: 1px solid rgba(57,57,57,0.12); padding: 4rem 2rem; text-align: center; margin-top: 4rem;}
  footer .f-logo { font-family: 'Newsreader', serif; font-size: 1.6rem; font-style: italic; color: var(--primary); display: block; margin-bottom: 2rem; }
  footer nav { display: flex; flex-wrap: wrap; justify-content: center; gap: 2.5rem; margin-bottom: 2.5rem; }
  footer nav a { font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(214,198,146,0.35); text-decoration: none; }

  /* --- ESTILOS DO MERCADO --- */
  .page-header { padding: 9rem 2rem 3rem; text-align: center; }
  .page-header h1 { font-family: 'Newsreader', serif; font-size: clamp(2rem, 4vw, 3.5rem); margin-bottom: 1rem; }
  .page-header h1 em { color: var(--primary); font-style: italic; }
  
  .filters { display: flex; justify-content: center; gap: 1rem; margin-bottom: 3rem; flex-wrap: wrap; }
  .filter-btn { padding: 0.5rem 1.5rem; background: var(--surface-container); border: 1px solid rgba(170,138,126,0.2); color: var(--secondary); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; cursor: pointer; border-radius: 100px; transition: all 0.3s; }
  .filter-btn.active, .filter-btn:hover { background: var(--primary); color: var(--on-primary); border-color: var(--primary); }

  .store-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; padding: 0 2rem; max-width: 80rem; margin: 0 auto; }
  .store-card { background: var(--surface-container); border: 1px solid rgba(90,65,56,0.15); border-radius: 3px; overflow: hidden; transition: transform 0.3s; display: flex; flex-direction: column; }
  .store-card:hover { transform: translateY(-4px); border-color: var(--primary); }
  .store-img { height: 180px; background: #0a0a0a; display: flex; align-items: center; justify-content: center; position: relative; }
  .store-img .badge { position: absolute; top: 10px; left: 10px; background: rgba(19,19,19,0.8); padding: 4px 8px; font-size: 0.6rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--primary); border: 1px solid var(--primary); border-radius: 2px;}
  .store-body { padding: 1.5rem; flex: 1; display: flex; flex-direction: column; }
  .store-body h3 { font-family: 'Newsreader', serif; font-size: 1.2rem; margin-bottom: 0.3rem; }
  .store-author { font-size: 0.75rem; color: rgba(214,198,146,0.5); margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.05em; }
  .store-footer { display: flex; justify-content: space-between; align-items: center; margin-top: auto; border-top: 1px solid rgba(90,65,56,0.15); padding-top: 1rem; }
  .price { font-family: 'Newsreader', serif; font-size: 1.4rem; font-style: italic; color: var(--secondary); }
  .btn-buy { padding: 0.5rem 1rem; background: var(--surface-container-high); border: 1px solid rgba(170,138,126,0.3); color: var(--primary); font-size: 0.8rem; cursor: pointer; border-radius: 2px; transition: background 0.3s; }
  .btn-buy:hover { background: var(--primary-container); color: var(--on-primary-container); border-color: var(--primary-container); }
</style>
</head>
<body>

<header>
  <a href="index.php" class="logo">Grimório Obsidiana</a>
  <nav class="desktop">
    <a href="index.php">Grimório</a>
    <a href="campanhas.php">Campanhas</a>
    <a href="mercado.php" class="active">Marketplace</a>
    <a href="cronicas.php">Crônicas</a>
  </nav>
  <div class="header-right">
    <button class="btn-initiative">Rolar Iniciativa</button>
    <span class="material-symbols-outlined" style="color:var(--primary);cursor:pointer;font-size:1.8rem;">account_circle</span>
  </div>
</header>

<main>
  <section class="page-header">
    <h1>Marketplace <em>Arcano</em></h1>
    <p style="color: var(--secondary); font-style: italic; font-family: 'Newsreader', serif; font-size: 1.2rem;">Expanda seu mundo com mapas, tokens e suplementos.</p>
  </section>

  <div class="filters">
    <button class="filter-btn active">Tudo</button>
    <button class="filter-btn">Mapas de Batalha</button>
    <button class="filter-btn">Tokens</button>
    <button class="filter-btn">Módulos de Aventura</button>
  </div>

  <section class="store-grid">
    <div class="store-card">
      <div class="store-img">
        <span class="badge">Mapa</span>
        <span class="material-symbols-outlined" style="font-size: 4rem; color: #393939;">map</span>
      </div>
      <div class="store-body">
        <h3>Ruínas de Xal</h3>
        <span class="store-author">Por Eldritch Editorial</span>
        <div class="store-footer">
          <span class="price">Grátis</span>
          <button class="btn-buy">Adquirir</button>
        </div>
      </div>
    </div>

    <div class="store-card">
      <div class="store-img">
        <span class="badge">Tokens</span>
        <span class="material-symbols-outlined" style="font-size: 4rem; color: #393939;">pest_control</span>
      </div>
      <div class="store-body">
        <h3>Pack: Bestas Abissais</h3>
        <span class="store-author">Por ArtScribe</span>
        <div class="store-footer">
          <span class="price">R$ 15</span>
          <button class="btn-buy">Adquirir</button>
        </div>
      </div>
    </div>

    <div class="store-card">
      <div class="store-img">
        <span class="badge">Módulo</span>
        <span class="material-symbols-outlined" style="font-size: 4rem; color: #393939;">menu_book</span>
      </div>
      <div class="store-body">
        <h3>O Sussurro do Pinheiro Negro</h3>
        <span class="store-author">Por Mestre Kaelen</span>
        <div class="store-footer">
          <span class="price">R$ 29</span>
          <button class="btn-buy">Adquirir</button>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <span class="f-logo">Grimório Obsidiana</span>
  <nav>
    <a href="#">Termos de Uso</a>
    <a href="#">Política de Privacidade</a>
  </nav>
  <p>© 2024 Eldritch Editorial — Todos os direitos reservados aos escribas.</p>
</footer>
</body>
</html>