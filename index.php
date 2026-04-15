<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Grimório Obsidiana | Engine de RPG Dark Fantasy</title>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..800;1,6..72,300..800&family=Manrope:wght@300..700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --primary: #ffb59a;
    --primary-container: #f95e14;
    --on-primary: #5b1b00;
    --on-primary-container: #4f1700;
    --primary-fixed-dim: #ffb59a;
    --secondary: #d6c692;
    --secondary-container: #544820;
    --on-secondary-container: #c8b885;
    --tertiary: #75d1ff;
    --surface: #131313;
    --surface-dim: #0a0a0a;
    --surface-container: #20201f;
    --surface-container-low: #1c1b1b;
    --surface-container-high: #2a2a2a;
    --surface-container-highest: #353535;
    --surface-bright: #393939;
    --on-surface: #e5e2e1;
    --on-surface-variant: #e3bfb2;
    --outline: #aa8a7e;
    --outline-variant: #5a4138;
  }

  html { scroll-behavior: smooth; }

  body {
    background: var(--surface);
    color: var(--on-surface);
    font-family: 'Manrope', sans-serif;
    overflow-x: hidden;
  }

  .font-headline { font-family: 'Newsreader', serif; }
  .material-symbols-outlined {
    font-family: 'Material Symbols Outlined';
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    font-style: normal;
    line-height: 1;
    display: inline-block;
    vertical-align: middle;
    user-select: none;
  }

  /* ── HEADER ── */
  header {
    position: fixed; top: 0; width: 100%; z-index: 50;
    display: flex; justify-content: space-between; align-items: center;
    padding: 0 2rem; height: 5rem;
    background: rgba(19,19,19,0.85);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(57,57,57,0.3);
    box-shadow: 0 4px 20px rgba(255,181,154,0.07);
  }
  .logo {
    font-family: 'Newsreader', serif;
    font-size: 1.5rem; font-weight: 700;
    color: var(--primary); font-style: italic;
    text-decoration: none; letter-spacing: 0.01em;
  }
  nav { display: flex; align-items: center; gap: 2rem; }
  nav a {
    font-family: 'Newsreader', serif;
    color: var(--secondary); text-transform: uppercase;
    letter-spacing: 0.12em; font-size: 0.78rem;
    text-decoration: none;
    transition: color 0.3s;
    position: relative;
  }
  nav a:hover { color: #f3e2ac; }
  nav a.active {
    color: var(--primary);
    border-bottom: 2px solid var(--primary);
    padding-bottom: 4px;
  }
  .btn-initiative {
    padding: 0.45rem 1.4rem;
    background: var(--primary);
    color: var(--on-primary);
    font-weight: 700; font-size: 0.7rem;
    letter-spacing: 0.18em; text-transform: uppercase;
    border: none; cursor: pointer;
    border-radius: 2px;
    box-shadow: inset 0 1px 1px rgba(255,255,255,0.2);
    transition: transform 0.2s, filter 0.2s;
  }
  .btn-initiative:hover { transform: scale(1.04); filter: brightness(1.1); }
  .header-right { display: flex; align-items: center; gap: 1rem; }

  /* ── HERO ── */
  .hero {
    position: relative; min-height: 100vh;
    display: flex; align-items: center; justify-content: center;
    overflow: hidden; padding: 0 1.5rem;
    padding-top: 5rem;
  }
  .hero-bg {
    position: absolute; inset: 0; z-index: 0;
  }
  .hero-bg img {
    width: 100%; height: 100%;
    object-fit: cover; opacity: 0.38;
    mix-blend-mode: luminosity;
  }
  .hero-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(to top, var(--surface) 0%, rgba(19,19,19,0.55) 55%, transparent 100%);
  }
  .hero-particles {
    position: absolute; inset: 0; z-index: 1; pointer-events: none;
    overflow: hidden;
  }
  .particle {
    position: absolute;
    width: 2px; height: 2px;
    background: var(--primary);
    border-radius: 50%;
    opacity: 0;
    animation: float-particle var(--dur) var(--delay) ease-in-out infinite;
  }
  @keyframes float-particle {
    0% { transform: translateY(100vh) translateX(0) scale(0); opacity: 0; }
    10% { opacity: 0.6; }
    90% { opacity: 0.3; }
    100% { transform: translateY(-10vh) translateX(var(--drift)) scale(1.5); opacity: 0; }
  }
  .hero-content {
    position: relative; z-index: 10;
    text-align: center; max-width: 60rem;
    animation: hero-in 1.2s cubic-bezier(0.16,1,0.3,1) both;
  }
  @keyframes hero-in {
    from { opacity: 0; transform: translateY(32px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .hero-eyebrow {
    display: inline-block;
    font-size: 0.7rem; letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--primary); font-weight: 600;
    margin-bottom: 1.5rem;
    padding: 0.3rem 1rem;
    border: 1px solid rgba(255,181,154,0.25);
    border-radius: 100px;
    background: rgba(255,181,154,0.05);
  }
  .hero h1 {
    font-family: 'Newsreader', serif;
    font-size: clamp(2.8rem, 8vw, 6.5rem);
    line-height: 1.05; letter-spacing: -0.02em;
    color: var(--on-surface);
    margin-bottom: 1.5rem;
  }
  .hero h1 em {
    color: var(--primary); font-style: italic;
    text-shadow: 0 0 60px rgba(255,181,154,0.3);
  }
  .hero p {
    font-family: 'Newsreader', serif;
    font-size: clamp(1rem, 2vw, 1.35rem);
    color: var(--secondary); font-style: italic;
    max-width: 34rem; margin: 0 auto 3rem;
    line-height: 1.6; opacity: 0.9;
  }
  .hero-buttons { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
  .btn-primary {
    padding: 1rem 2.5rem;
    background: var(--primary-container);
    color: var(--on-primary-container);
    font-weight: 700; font-size: 1rem;
    border: none; cursor: pointer; border-radius: 2px;
    box-shadow: 0 8px 24px rgba(249,94,20,0.35), inset 0 1px 1px rgba(255,255,255,0.15);
    transition: filter 0.25s, transform 0.25s, box-shadow 0.25s;
    letter-spacing: 0.02em;
  }
  .btn-primary:hover {
    filter: brightness(1.12); transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(249,94,20,0.45);
  }
  .btn-secondary {
    padding: 1rem 2.5rem;
    background: var(--surface-container-high);
    color: var(--secondary);
    font-weight: 700; font-size: 1rem;
    border: 1px solid rgba(170,138,126,0.25); cursor: pointer; border-radius: 2px;
    transition: background 0.25s, transform 0.25s;
    letter-spacing: 0.02em;
  }
  .btn-secondary:hover { background: var(--surface-bright); transform: translateY(-2px); }

  /* scroll hint */
  .scroll-hint {
    position: absolute; bottom: 2.5rem; left: 50%; transform: translateX(-50%);
    z-index: 10; display: flex; flex-direction: column; align-items: center; gap: 0.4rem;
    opacity: 0.4; animation: bob 2.5s ease-in-out infinite;
  }
  @keyframes bob { 0%,100%{transform:translateX(-50%) translateY(0)} 50%{transform:translateX(-50%) translateY(6px)} }
  .scroll-hint span { font-size: 0.6rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--secondary); }

  /* ── SECTION HEADERS ── */
  .section-label {
    font-size: 0.65rem; letter-spacing: 0.25em; text-transform: uppercase;
    color: var(--primary); font-weight: 600;
    display: block; margin-bottom: 0.75rem;
  }

  /* ── FEATURES BENTO ── */
  .features {
    padding: 7rem 2rem;
    max-width: 90rem; margin: 0 auto;
  }
  .features-header { text-align: center; margin-bottom: 4rem; }
  .features-header h2 {
    font-family: 'Newsreader', serif;
    font-size: clamp(2rem, 4vw, 3.2rem);
    margin-bottom: 0.75rem;
  }
  .features-header p { color: var(--secondary); opacity: 0.6; font-size: 0.85rem; letter-spacing: 0.18em; text-transform: uppercase; }

  .bento {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
    gap: 1.25rem;
  }
  .bento-card {
    background: var(--surface-container);
    border: 1px solid rgba(90,65,56,0.15);
    border-radius: 3px;
    overflow: hidden;
    position: relative;
    transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
  }
  .bento-card:hover {
    border-color: rgba(170,138,126,0.35);
    transform: translateY(-3px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.4);
  }
  .bento-main { grid-column: span 8; }
  .bento-a    { grid-column: span 4; background: #0e0e0e; }
  .bento-b    { grid-column: span 5; }
  .bento-c    { grid-column: span 7; background: #0a0a0a; }

  @media (max-width: 900px) {
    .bento-main, .bento-a, .bento-b, .bento-c { grid-column: span 12; }
  }

  .bento-main img {
    width: 100%; height: 260px; object-fit: cover;
    opacity: 0.45;
    transition: transform 0.8s ease, opacity 0.4s;
  }
  .bento-main:hover img { transform: scale(1.04); opacity: 0.55; }
  .bento-body { padding: 2rem 2.5rem 2.5rem; }
  .bento-body .label { color: var(--primary); font-size: 0.65rem; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; }
  .bento-body h3 {
    font-family: 'Newsreader', serif;
    font-size: clamp(1.4rem, 2vw, 2rem);
    color: var(--on-surface); margin: 0.5rem 0 1rem;
  }
  .bento-body p { color: rgba(214,198,146,0.7); line-height: 1.7; font-size: 0.9rem; max-width: 32rem; }

  /* Card A – ficha */
  .bento-a { display: flex; flex-direction: column; justify-content: space-between; padding: 2.5rem; }
  .bento-a .icon-wrap {
    width: 3rem; height: 3rem;
    background: rgba(249,94,20,0.12);
    display: flex; align-items: center; justify-content: center;
    border-radius: 3px; margin-bottom: 2rem;
  }
  .bento-a .icon-wrap .material-symbols-outlined { color: var(--primary); font-size: 1.8rem; }
  .bento-a h3 {
    font-family: 'Newsreader', serif;
    font-size: 1.5rem; color: var(--on-surface); margin-bottom: 0.75rem;
  }
  .bento-a p { color: rgba(214,198,146,0.65); font-size: 0.85rem; line-height: 1.7; }

  /* Card B – multiplataforma */
  .bento-b {
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    text-align: center; padding: 3rem 2rem;
    position: relative;
  }
  .bento-b .bg-icon {
    position: absolute; bottom: -1.5rem; right: -1.5rem;
    opacity: 0.04; pointer-events: none;
    transition: opacity 0.4s;
    font-size: 11rem !important;
    font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
  }
  .bento-b:hover .bg-icon { opacity: 0.1; }
  .bento-b .main-icon { color: var(--tertiary); font-size: 3.5rem !important; margin-bottom: 1.5rem; }
  .bento-b h3 { font-family: 'Newsreader', serif; font-size: 1.6rem; margin-bottom: 0.75rem; }
  .bento-b p { color: rgba(214,198,146,0.65); font-size: 0.85rem; line-height: 1.7; }

  /* Card C – escriba */
  .bento-c { display: flex; align-items: center; position: relative; min-height: 200px; }
  .bento-c-text { padding: 3rem; z-index: 2; flex: 1; }
  .bento-c-text h3 {
    font-family: 'Newsreader', serif;
    font-size: clamp(1.5rem, 2.2vw, 2.2rem);
    color: var(--primary-fixed-dim); margin-bottom: 1rem;
  }
  .bento-c-text p { color: rgba(214,198,146,0.75); line-height: 1.7; font-size: 0.9rem; max-width: 28rem; }
  .bento-c-img {
    position: absolute; right: 0; top: 0;
    height: 100%; width: 38%;
    overflow: hidden;
  }
  .bento-c-img img { height: 100%; width: 100%; object-fit: cover; opacity: 0.35; }
  .bento-c-img::before {
    content: '';
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to right, #0a0a0a 0%, transparent 50%);
  }
  @media (max-width: 700px) { .bento-c-img { display: none; } }

  /* ── DIVIDER ── */
  .rune-divider {
    text-align: center; padding: 2rem;
    color: rgba(90,65,56,0.6);
    font-size: 1.5rem; letter-spacing: 1.5rem;
  }

  /* ── PRICING ── */
  .pricing { padding: 7rem 2rem; background: #0e0e0e; }
  .pricing-inner { max-width: 58rem; margin: 0 auto; }
  .pricing-header { text-align: center; margin-bottom: 4rem; }
  .pricing-header h2 {
    font-family: 'Newsreader', serif;
    font-size: clamp(2rem, 4vw, 3.2rem);
    margin-bottom: 0.75rem;
  }
  .pricing-header p { color: rgba(214,198,146,0.5); font-size: 0.65rem; letter-spacing: 0.28em; text-transform: uppercase; }

  .pricing-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
  @media (max-width: 640px) { .pricing-grid { grid-template-columns: 1fr; } }

  .plan {
    background: var(--surface);
    border: 1px solid rgba(90,65,56,0.25);
    border-radius: 3px;
    padding: 2.8rem;
    position: relative; overflow: hidden;
    transition: border-color 0.3s, transform 0.3s;
  }
  .plan:hover { border-color: rgba(170,138,126,0.4); transform: translateY(-4px); }
  .plan-bg-icon {
    position: absolute; top: 0; right: 0; padding: 1rem;
    opacity: 0.07; pointer-events: none;
    font-size: 4rem !important;
  }
  .plan h3 { font-family: 'Newsreader', serif; font-size: 2rem; color: var(--secondary); margin-bottom: 0.5rem; }
  .plan-price {
    font-size: 2.8rem; font-weight: 700; font-style: italic;
    color: var(--on-surface); margin-bottom: 2rem;
    line-height: 1;
  }
  .plan-price span { font-size: 0.9rem; font-weight: 400; font-style: normal; color: rgba(214,198,146,0.4); margin-left: 0.35rem; }
  .plan-features { list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; }
  .plan-features li {
    display: flex; align-items: center; gap: 0.75rem;
    color: rgba(214,198,146,0.8); font-size: 0.88rem;
  }
  .plan-features li .material-symbols-outlined { color: var(--primary); font-size: 1.1rem; }
  .plan-btn {
    width: 100%; padding: 1rem;
    border: 1px solid rgba(170,138,126,0.3);
    background: transparent; color: var(--secondary);
    font-weight: 700; font-size: 0.9rem; cursor: pointer;
    border-radius: 2px;
    transition: background 0.25s, border-color 0.25s, transform 0.2s;
    letter-spacing: 0.05em;
  }
  .plan-btn:hover { background: var(--surface-container); border-color: var(--outline); transform: translateY(-1px); }

  /* Premium plan */
  .plan.premium {
    background: var(--surface-container-high);
    border: 2px solid var(--primary-container);
    box-shadow: 0 0 50px rgba(249,94,20,0.12);
  }
  .plan.premium h3 { color: var(--primary); }
  .plan-premium-corner {
    position: absolute; top: -3rem; right: -3rem;
    width: 6rem; height: 6rem;
    background: rgba(249,94,20,0.18);
    transform: rotate(45deg);
  }
  .plan.premium .plan-features li { color: var(--on-surface-variant); }
  .plan.premium .plan-features li .material-symbols-outlined {
    color: var(--primary-container);
    font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
  }
  .plan.premium .plan-btn {
    background: var(--primary-container);
    color: var(--on-primary-container);
    border: none;
    box-shadow: 0 4px 14px rgba(0,0,0,0.45);
  }
  .plan.premium .plan-btn:hover { filter: brightness(1.1); background: var(--primary-container); }
  .plan-badge {
    position: absolute; top: 1.2rem; right: 1.2rem;
    color: var(--primary-container);
    font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    font-size: 1.3rem !important;
  }

  /* ── CTA ── */
  .cta {
    padding: 8rem 1.5rem;
    text-align: center;
    position: relative; overflow: hidden;
  }
  .cta-slash {
    position: absolute; inset: 0;
    background: rgba(255,181,154,0.04);
    transform: skewY(-3deg);
    transform-origin: right;
    pointer-events: none;
  }
  .cta-content { position: relative; z-index: 2; }
  .cta h2 {
    font-family: 'Newsreader', serif;
    font-size: clamp(2rem, 5vw, 3.5rem);
    margin-bottom: 1.25rem;
    max-width: 40rem; margin-left: auto; margin-right: auto;
  }
  .cta p {
    color: var(--secondary); font-style: italic;
    margin-bottom: 3rem; max-width: 30rem;
    margin-left: auto; margin-right: auto;
    line-height: 1.7;
  }
  .cta-btn-wrap {
    display: inline-block;
    padding: 3px;
    background: linear-gradient(135deg, var(--primary), var(--primary-container));
    border-radius: 3px;
  }
  .cta-btn {
    display: block;
    background: var(--surface);
    padding: 1.2rem 3.5rem;
    font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.18em; font-size: 0.85rem;
    color: var(--primary); cursor: pointer;
    border: none; border-radius: 1px;
    transition: background 0.3s, color 0.3s;
  }
  .cta-btn:hover { background: transparent; color: var(--on-primary); }

  /* ── FOOTER ── */
  footer {
    background: #0e0e0e;
    border-top: 1px solid rgba(57,57,57,0.12);
    padding: 4rem 2rem;
    text-align: center;
  }
  footer .f-logo {
    font-family: 'Newsreader', serif;
    font-size: 1.6rem; font-weight: 700; font-style: italic;
    color: var(--primary); margin-bottom: 2rem; display: block;
  }
  footer nav { display: flex; flex-wrap: wrap; justify-content: center; gap: 2.5rem; margin-bottom: 2.5rem; }
  footer nav a {
    font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
    color: rgba(214,198,146,0.35); text-decoration: none;
    transition: color 0.3s;
  }
  footer nav a:hover { color: var(--primary); }
  footer p { font-size: 0.6rem; letter-spacing: 0.2em; text-transform: uppercase; color: rgba(214,198,146,0.3); }

  /* ── MOBILE HEADER ── */
  @media (max-width: 768px) {
    nav.desktop { display: none; }
    .btn-initiative { display: none; }
    header { padding: 0 1.2rem; }
  }

  /* ── SCROLL REVEAL ── */
  .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1), transform 0.8s cubic-bezier(0.16,1,0.3,1); }
  .reveal.visible { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
</style>
</head>
<body>

<!-- HEADER -->
<header>
  <a href="#" class="logo">Grimório Obsidiana</a>
  <nav class="desktop">
    <a href="#" class="active">Grimório</a>
    <a href="#">Campanhas</a>
    <a href="#">Mercado</a>
    <a href="#">Crônicas</a>
  </nav>
  <div class="header-right">
    <button class="btn-initiative">Rolar Iniciativa</button>
    <span class="material-symbols-outlined" style="color:var(--primary);cursor:pointer;font-size:1.8rem;">account_circle</span>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg">
    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfBApsPQqBqI9_ayRcisQNE0lTGea9opBHeMNsX_fRB9qxBt6gwdWgdv9bqAN1NiGiUMOcPnMH33D_Yf_ex5vxKAEHLe6bAs4su6ocLxUfEVeOwcqTX_jZGMJE1ouKedS1A-DcVlngha2PueDKU9k210D7I7J5NaDdMY5FljvPZl31I90esOid9rsRmrWLFtTAQmDEDreeVkNFUT-NyHhdCW8-z_0HYl88dagmKi9ZXjO7u7am3NJERhNntj7pHxG0dyShbP_sB88" alt="Dark fantasy landscape"/>
    <div class="hero-gradient"></div>
  </div>
  <div class="hero-particles" id="particles"></div>
  <div class="hero-content">
    <span class="hero-eyebrow">Engine de RPG Dark Fantasy</span>
    <h1>Forje sua Lenda no <br/><em>Vácuo Obsidiano</em></h1>
    <p>A primeira engine de RPG digital que respira a atmosfera dos clássicos enquanto domina a tecnologia moderna.</p>
    <div class="hero-buttons">
      <button class="btn-primary">Começar Campanha</button>
      <button class="btn-secondary">Ver Grimório</button>
    </div>
  </div>
  <div class="scroll-hint">
    <span class="material-symbols-outlined" style="font-size:1.4rem;color:var(--secondary);">expand_more</span>
    <span>Descer</span>
  </div>
</section>

<!-- FEATURES -->
<section class="features">
  <div class="features-header reveal">
    <span class="section-label">Arsenais do Escriba</span>
    <h2>Tecnologias do Além</h2>
    <p>Cada feitiço, forjado em código</p>
  </div>

  <div class="bento">
    <!-- Main Card -->
    <div class="bento-card bento-main reveal">
      <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSRKIb1It1iOeKcSK87r8FNKySl3oxD5uRoAYZjZ24cJKlxj4Ebz8wkbQbWrtROuMYGwvNGbPqgY-mfFRLxQY_2PBpGx2XidKgmWLtgEMPQYt13mfMog57Hxupza9yTO2Cv8cZqOv7beMwW0a-PrPERUmn3xFEoA-A2oaHB7boUuV5_zoikV-vvYLZy7xkziJXxw46BGD6iFCV4ptkKcqc3ThkQUjnxKX4zJuotWubFSf4vAKFpLGNfek295D9Te2pFFqZD62jt8I" alt="Dungeon map with fog"/>
      <div class="bento-body">
        <span class="label">Tecnologia Arcaica</span>
        <h3>Nevoeiro de Guerra Dinâmico</h3>
        <p>Simulação de luz e sombra em tempo real. Seus jogadores sentirão o peso do desconhecido em cada corredor escuro, com cálculos de linha de visão precisos e atmosféricos.</p>
      </div>
    </div>

    <!-- Card A -->
    <div class="bento-card bento-a reveal reveal-delay-1">
      <div class="icon-wrap">
        <span class="material-symbols-outlined">auto_stories</span>
      </div>
      <div>
        <h3>Fichas com Cálculos Automáticos</h3>
        <p>Esqueça as calculadoras. Do modificador de força ao dano de bolas de fogo maximizadas, nossa engine processa tudo em milissegundos.</p>
      </div>
    </div>

    <!-- Card B -->
    <div class="bento-card bento-b reveal reveal-delay-2">
      <span class="material-symbols-outlined bg-icon">shield</span>
      <span class="material-symbols-outlined main-icon">devices</span>
      <h3>Jogo Multiplataforma</h3>
      <p>Mestre no PC, jogadores no tablet ou celular. O Grimório sincroniza cada rolagem de dados instantaneamente entre todos os dispositivos.</p>
    </div>

    <!-- Card C -->
    <div class="bento-card bento-c reveal reveal-delay-3">
      <div class="bento-c-text">
        <h3>O Escriba Digital</h3>
        <p>Um assistente de IA treinado em narrativas de fantasia para ajudar a criar descrições imersivas, nomes de NPCs e ganchos de aventura em segundos.</p>
      </div>
      <div class="bento-c-img">
        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA_JpuDQU1q38_dXBsRyfdnflwuom2g0Fj8FC_iZRYttM9J5MF2TvQyLXeXnuBIXMGBsgAMw-ffuNl59axbV8XmjrlHxM5tOtJ9FNUXUTT7xldBooWpNBuGzz4McbEK6QN1D9HX4EcrzNX9pXxcIBlLN78Rb4IJ7js7IK-mfYYNxxowKv7UybO_LevpMWZ8TCGwrFzmLdsk2iQ6oDnJD8QPnioeUtwuFqh3RXhVoHhNmUVCARQ9VbA9vp_jlr4xH0Ew34YIYXcf9A" alt="Mystical library"/>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="pricing">
  <div class="pricing-inner">
    <div class="pricing-header reveal">
      <span class="section-label">Pactos de Poder</span>
      <h2>Escolha seu Destino</h2>
      <p>O preço do poder é relativo</p>
    </div>
    <div class="pricing-grid">
      <!-- Free -->
      <div class="plan reveal">
        <span class="material-symbols-outlined plan-bg-icon">directions_walk</span>
        <h3>O Viajante</h3>
        <div class="plan-price">Grátis <span>/eterno</span></div>
        <ul class="plan-features">
          <li><span class="material-symbols-outlined">check_circle</span> Até 3 Campanhas Ativas</li>
          <li><span class="material-symbols-outlined">check_circle</span> 1 GB de Armazenamento de Assets</li>
          <li><span class="material-symbols-outlined">check_circle</span> Compêndio Básico (SRD 5e)</li>
        </ul>
        <button class="plan-btn">Iniciar Jornada</button>
      </div>
      <!-- Premium -->
      <div class="plan premium reveal reveal-delay-1">
        <div class="plan-premium-corner"></div>
        <span class="material-symbols-outlined plan-badge">star</span>
        <h3>O Alto Escriba</h3>
        <div class="plan-price">R$ 60 <span>/mês</span></div>
        <ul class="plan-features">
          <li><span class="material-symbols-outlined">check_circle</span> Campanhas Ilimitadas</li>
          <li><span class="material-symbols-outlined">check_circle</span> 50 GB de Nuvem e Assets 4K</li>
          <li><span class="material-symbols-outlined">check_circle</span> Nevoeiro de Guerra Volumétrico</li>
          <li><span class="material-symbols-outlined">check_circle</span> Customização de Shaders de Mapa</li>
        </ul>
        <button class="plan-btn">Ascender agora</button>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-slash"></div>
  <div class="cta-content reveal">
    <h2>O Vácuo aguarda suas histórias.</h2>
    <p>Junte-se a mais de 10.000 escribas que já estão moldando seus próprios mundos.</p>
    <div class="cta-btn-wrap">
      <button class="cta-btn">Forjar meu Destino</button>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <span class="f-logo">Grimório Obsidiana</span>
  <nav>
    <a href="#">Termos de Uso</a>
    <a href="#">Política de Privacidade</a>
    <a href="#">Suporte Arcano</a>
  </nav>
  <p>© 2024 Eldritch Editorial — Todos os direitos reservados aos escribas.</p>
</footer>

<script>
  /* Particles */
  const container = document.getElementById('particles');
  for (let i = 0; i < 28; i++) {
    const p = document.createElement('div');
    p.className = 'particle';
    p.style.cssText = `
      left: ${Math.random() * 100}%;
      --dur: ${5 + Math.random() * 10}s;
      --delay: ${Math.random() * 8}s;
      --drift: ${(Math.random() - 0.5) * 120}px;
    `;
    container.appendChild(p);
  }

  /* Scroll reveal */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
</body>
</html>