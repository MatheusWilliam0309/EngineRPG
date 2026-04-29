<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Crônicas | Grimório Obsidiana</title>
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
  .btn-initiative { padding: 0.45rem 1.4rem; background: var(--primary); color: var(--on-primary); font-weight: 700; font-size: 0.7rem; border: none; cursor: pointer; border-radius: 2px; }
  .header-right { display: flex; align-items: center; gap: 1rem; }
  footer { background: #0e0e0e; border-top: 1px solid rgba(57,57,57,0.12); padding: 4rem 2rem; text-align: center; margin-top: 4rem;}
  footer .f-logo { font-family: 'Newsreader', serif; font-size: 1.6rem; font-style: italic; color: var(--primary); display: block; margin-bottom: 2rem; }
  footer nav { display: flex; flex-wrap: wrap; justify-content: center; gap: 2.5rem; margin-bottom: 2.5rem; }
  footer nav a { font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(214,198,146,0.35); text-decoration: none; }

  /* --- ESTILOS DAS CRÔNICAS --- */
  .page-header { padding: 9rem 2rem 3rem; text-align: center; }
  .page-header h1 { font-family: 'Newsreader', serif; font-size: clamp(2.5rem, 5vw, 4.5rem); margin-bottom: 1rem; }
  .page-header h1 em { color: var(--secondary); font-style: italic; }
  
  .blog-layout { display: grid; grid-template-columns: 1fr; gap: 2rem; padding: 0 2rem; max-width: 60rem; margin: 0 auto; }
  
  .post-card { display: flex; flex-direction: column; border-bottom: 1px solid rgba(90,65,56,0.2); padding-bottom: 2rem; transition: transform 0.3s; }
  .post-card:hover h2 { color: var(--primary); }
  .post-meta { display: flex; gap: 1rem; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--primary-container); margin-bottom: 0.8rem; font-weight: bold; }
  .post-meta span { color: rgba(214,198,146,0.4); }
  .post-card h2 { font-family: 'Newsreader', serif; font-size: 2rem; color: var(--on-surface); margin-bottom: 1rem; transition: color 0.3s; cursor: pointer; }
  .post-card p { color: rgba(214,198,146,0.7); line-height: 1.7; font-size: 0.95rem; margin-bottom: 1.5rem; }
  .read-more { font-family: 'Newsreader', serif; font-style: italic; color: var(--secondary); text-decoration: none; border-bottom: 1px solid transparent; display: inline-block; width: fit-content; transition: border-color 0.3s; }
  .read-more:hover { border-color: var(--secondary); }
</style>
</head>
<body>

<header>
  <a href="index.php" class="logo">Grimório Obsidiana</a>
  <nav class="desktop">
    <a href="./index.php">Grimório</a>
    <a href="./campanhas.php">Campanhas</a>
    <a href="./marketplace.php">Marketplace</a>
    <a href="./cronicas.php" class="active">Crônicas</a>
  </nav>
  <div class="header-right">
    <button class="btn-initiative">Rolar Iniciativa</button>
    <span class="material-symbols-outlined" style="color:var(--primary);cursor:pointer;font-size:1.8rem;">account_circle</span>
  </div>
</header>

<main>
  <section class="page-header">
    <h1>Crônicas do <em>Vácuo</em></h1>
    <p style="color: var(--secondary); font-style: italic; font-family: 'Newsreader', serif; font-size: 1.2rem;">Relatos de escribas, atualizações do sistema e lendas perdidas.</p>
  </section>

  <section class="blog-layout">
    <article class="post-card">
      <div class="post-meta">Atualização <span>• 24 de Outubro, 2024</span></div>
      <h2>O Despertar do Nevoeiro Volumétrico</h2>
      <p>Nossa última atualização para os Altos Escribas traz um sistema de iluminação totalmente reformulado. Agora, magias de fogo emitirão luz real que interage com as paredes da masmorra, projetando sombras dinâmicas que ocultam os terrores que aguardam seus jogadores.</p>
      <a href="#" class="read-more">Ler o pergaminho completo...</a>
    </article>

    <article class="post-card">
      <div class="post-meta">Dicas do Mestre <span>• 12 de Outubro, 2024</span></div>
      <h2>Como construir tensão usando o Som Ambiente</h2>
      <p>Uma masmorra silenciosa não é assustadora; é apenas morta. O verdadeiro terror reside nos ecos distantes e sussurros no limite da audição. Aprenda como integrar o sistema de trilhas sonoras integradas do Grimório para elevar o batimento cardíaco da mesa.</p>
      <a href="#" class="read-more">Ler o pergaminho completo...</a>
    </article>

    <article class="post-card">
      <div class="post-meta">Lore Comunitária <span>• 05 de Outubro, 2024</span></div>
      <h2>A Queda de Oakhaven: Um Estudo de Caso</h2>
      <p>Entrevistamos o grupo "Lâminas Quebradas" sobre como a campanha deles tomou um rumo drástico quando um teste falho liberou a praga corrompida sobre a cidade central de sua aventura.</p>
      <a href="#" class="read-more">Ler o pergaminho completo...</a>
    </article>
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