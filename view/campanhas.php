<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Campanhas | Grimório Obsidiana</title>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..800;1,6..72,300..800&family=Manrope:wght@300..700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
  /* --- ESTILOS BASE DO INDEX.PHP --- */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root {
    --primary: #ffb59a; --primary-container: #f95e14; --on-primary: #5b1b00; --on-primary-container: #4f1700;
    --secondary: #d6c692; --surface: #131313; --surface-container: #20201f; --surface-container-high: #2a2a2a;
    --surface-bright: #393939; --on-surface: #e5e2e1; --outline: #aa8a7e;
  }
  body { background: var(--surface); color: var(--on-surface); font-family: 'Manrope', sans-serif; overflow-x: hidden; }
  .material-symbols-outlined { font-family: 'Material Symbols Outlined'; font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; display: inline-block; vertical-align: middle; }
  
  header { position: fixed; top: 0; width: 100%; z-index: 50; display: flex; justify-content: space-between; align-items: center; padding: 0 2rem; height: 5rem; background: rgba(19,19,19,0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(57,57,57,0.3); }
  .logo { font-family: 'Newsreader', serif; font-size: 1.5rem; font-weight: 700; color: var(--primary); font-style: italic; text-decoration: none; }
  nav { display: flex; align-items: center; gap: 2rem; }
  nav a { font-family: 'Newsreader', serif; color: var(--secondary); text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.78rem; text-decoration: none; transition: color 0.3s; }
  nav a:hover { color: #f3e2ac; }
  nav a.active { color: var(--primary); border-bottom: 2px solid var(--primary); padding-bottom: 4px; }
  .btn-initiative { padding: 0.45rem 1.4rem; background: var(--primary); color: var(--on-primary); font-weight: 700; font-size: 0.7rem; letter-spacing: 0.18em; text-transform: uppercase; border: none; cursor: pointer; border-radius: 2px; transition: transform 0.2s, filter 0.2s; }
  .btn-initiative:hover { transform: scale(1.04); filter: brightness(1.1); }
  .header-right { display: flex; align-items: center; gap: 1rem; }

  footer { background: #0e0e0e; border-top: 1px solid rgba(57,57,57,0.12); padding: 4rem 2rem; text-align: center; margin-top: 4rem;}
  footer .f-logo { font-family: 'Newsreader', serif; font-size: 1.6rem; font-weight: 700; font-style: italic; color: var(--primary); margin-bottom: 2rem; display: block; }
  footer nav { display: flex; flex-wrap: wrap; justify-content: center; gap: 2.5rem; margin-bottom: 2.5rem; }
  footer nav a { font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(214,198,146,0.35); text-decoration: none; transition: color 0.3s; }
  footer nav a:hover { color: var(--primary); }
  footer p { font-size: 0.6rem; letter-spacing: 0.2em; text-transform: uppercase; color: rgba(214,198,146,0.3); }

  /* --- ESTILOS ESPECÍFICOS DA PÁGINA --- */
  .page-header { padding: 9rem 2rem 3rem; text-align: center; max-width: 60rem; margin: 0 auto; }
  .page-header h1 { font-family: 'Newsreader', serif; font-size: clamp(2.5rem, 5vw, 4rem); color: var(--on-surface); margin-bottom: 1rem; }
  .page-header h1 em { color: var(--primary); font-style: italic; }
  .page-header p { color: var(--secondary); font-size: 1.1rem; opacity: 0.8; font-family: 'Newsreader', serif; font-style: italic; }
  
  .campaign-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem; padding: 0 2rem; max-width: 80rem; margin: 0 auto; }
  .campaign-card { background: var(--surface-container); border: 1px solid rgba(90,65,56,0.15); border-radius: 3px; overflow: hidden; transition: transform 0.3s, border-color 0.3s; display: flex; flex-direction: column; }
  .campaign-card:hover { transform: translateY(-4px); border-color: rgba(170,138,126,0.35); }
  .campaign-img { height: 160px; background: #0e0e0e; position: relative; }
  .campaign-img img { width: 100%; height: 100%; object-fit: cover; opacity: 0.5; }
  .campaign-status { position: absolute; top: 1rem; right: 1rem; background: var(--primary-container); color: var(--on-primary-container); font-size: 0.6rem; padding: 0.2rem 0.6rem; border-radius: 2px; text-transform: uppercase; font-weight: bold; letter-spacing: 0.1em; }
  .campaign-body { padding: 1.5rem; flex: 1; display: flex; flex-direction: column; }
  .campaign-body h3 { font-family: 'Newsreader', serif; font-size: 1.5rem; margin-bottom: 0.5rem; }
  .campaign-meta { display: flex; gap: 1rem; font-size: 0.8rem; color: rgba(214,198,146,0.6); margin-bottom: 1.5rem; }
  .campaign-meta span { display: flex; align-items: center; gap: 0.3rem; }
  .campaign-meta .material-symbols-outlined { font-size: 1rem; }
  .btn-enter { margin-top: auto; padding: 0.8rem; text-align: center; background: transparent; border: 1px solid rgba(170,138,126,0.3); color: var(--secondary); text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.8rem; cursor: pointer; transition: all 0.2s; text-decoration: none;}
  .btn-enter:hover { background: var(--primary-container); border-color: var(--primary-container); color: var(--on-primary-container); }
  
  .new-campaign { display: flex; flex-direction: column; align-items: center; justify-content: center; border: 2px dashed rgba(90,65,56,0.3); background: transparent; cursor: pointer; min-height: 300px; }
  .new-campaign:hover { border-color: var(--primary); background: rgba(255,181,154,0.02); }
  .new-campaign .material-symbols-outlined { font-size: 3rem; color: var(--primary); margin-bottom: 1rem; }
  .new-campaign h3 { color: var(--secondary); font-family: 'Newsreader', serif; }
</style>
</head>
<body>

<header>
  <a href="index.php" class="logo">Grimório Obsidiana</a>
  <nav class="desktop">
    <a href="./index.php">Grimório</a>
    <a href="./campanhas.php" class="active">Campanhas</a>
    <a href="./marketplace.php">Marketplace</a>
    <a href="./cronicas.php">Crônicas</a>
  </nav>
  <div class="header-right">
    <button class="btn-initiative">Rolar Iniciativa</button>
    <span class="material-symbols-outlined" style="color:var(--primary);cursor:pointer;font-size:1.8rem;">account_circle</span>
  </div>
</header>

<main>
  <section class="page-header">
    <h1>Seus <em>Reinos</em></h1>
    <p>Retorne aos mundos que você forjou ou inicie uma nova lenda no Vácuo.</p>
  </section>

  <section class="campaign-grid">
    <div class="campaign-card new-campaign">
      <span class="material-symbols-outlined">add_circle</span>
      <h3>Forjar Nova Campanha</h3>
    </div>

    <div class="campaign-card">
      <div class="campaign-img">
        <span class="campaign-status">Ativa</span>
        <div style="width:100%; height:100%; background: linear-gradient(45deg, #1a0b0b, #2d1810);"></div>
      </div>
      <div class="campaign-body">
        <h3>Shadow Over Oakhaven</h3>
        <div class="campaign-meta">
          <span><span class="material-symbols-outlined">group</span> 4 Jogadores</span>
          <span><span class="material-symbols-outlined">schedule</span> Próx: Hoje 20:00</span>
        </div>
        <a href="campanha.php" class="btn-enter">Assumir o Manto (Entrar)</a>
      </div>
    </div>

    <div class="campaign-card">
      <div class="campaign-img">
        <span class="campaign-status" style="background:var(--surface-bright); color:var(--on-surface);">Pausada</span>
        <div style="width:100%; height:100%; background: linear-gradient(45deg, #0a1118, #101c24);"></div>
      </div>
      <div class="campaign-body">
        <h3>Lágrimas de Gelo</h3>
        <div class="campaign-meta">
          <span><span class="material-symbols-outlined">group</span> 3 Jogadores</span>
          <span><span class="material-symbols-outlined">schedule</span> Sem data</span>
        </div>
        <a href="campanha.php" class="btn-enter">Ver Registros</a>
      </div>
    </div>
  </section>
</main>

<footer>
  <span class="f-logo">Grimório Obsidiana</span>
  <nav>
    <a href="#">Termos de Uso</a>
    <a href="#">Política de Privacidade</a>
    <a href="#">Suporte Arcano</a>
  </nav>
  <p>© 2024 Eldritch Editorial — Todos os direitos reservados aos escribas.</p>
</footer>
</body>
</html>