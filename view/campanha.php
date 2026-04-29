<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Eldritch Editorial - Game Master Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface-variant": "#e3bfb2",
                    "surface-bright": "#393939",
                    "secondary-fixed-dim": "#d6c692",
                    "inverse-surface": "#e5e2e1",
                    "tertiary-fixed-dim": "#75d1ff",
                    "secondary-fixed": "#f3e2ac",
                    "on-primary-fixed-variant": "#802a00",
                    "surface": "#131313",
                    "error": "#ffb4ab",
                    "outline": "#aa8a7e",
                    "surface-container-lowest": "#0e0e0e",
                    "primary-fixed-dim": "#ffb59a",
                    "on-background": "#e5e2e1",
                    "on-tertiary": "#003548",
                    "on-error-container": "#ffdad6",
                    "surface-container-low": "#1c1b1b",
                    "primary-container": "#f95e14",
                    "surface-dim": "#131313",
                    "inverse-primary": "#a83900",
                    "primary": "#ffb59a",
                    "outline-variant": "#5a4138",
                    "inverse-on-surface": "#313030",
                    "secondary": "#d6c692",
                    "tertiary": "#75d1ff",
                    "on-secondary": "#3a3009",
                    "surface-tint": "#ffb59a",
                    "on-surface": "#e5e2e1",
                    "tertiary-container": "#009cce",
                    "secondary-container": "#544820",
                    "on-tertiary-fixed": "#001e2b",
                    "on-primary-container": "#4f1700",
                    "surface-variant": "#353535",
                    "on-tertiary-container": "#002e3f",
                    "tertiary-fixed": "#c2e8ff",
                    "on-primary": "#5b1b00",
                    "error-container": "#93000a",
                    "on-secondary-container": "#c8b885",
                    "on-error": "#690005",
                    "on-secondary-fixed": "#231b00",
                    "on-tertiary-fixed-variant": "#004d67",
                    "primary-fixed": "#ffdbcf",
                    "on-primary-fixed": "#380d00",
                    "on-secondary-fixed-variant": "#51461e",
                    "surface-container-high": "#2a2a2a",
                    "surface-container-highest": "#353535",
                    "surface-container": "#20201f",
                    "background": "#131313"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Newsreader"],
                    "body": ["Manrope"],
                    "label": ["Manrope"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Manrope', sans-serif; background-color: #131313; color: #e5e2e1; }
        .font-serif { font-family: 'Newsreader', serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #0e0e0e; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #393939; border-radius: 2px; }
        .glass-panel { backdrop-filter: blur(12px); }
        .clipped-corner { clip-path: polygon(10% 0, 100% 0, 100% 90%, 90% 100%, 0 100%, 0 10%); }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-[#131313]/80 backdrop-blur-md border-b border-[#393939]/30 shadow-[0_8px_32px_rgba(255,181,154,0.08)] flex justify-between items-center px-8 h-16 w-full">
<div class="text-2xl font-bold font-serif text-[#ffb59a] tracking-tighter">Eldritch Editorial</div>
<div class="hidden md:flex gap-8 items-center h-full">
<a class="font-serif text-[#ffb59a] border-b-2 border-[#ffb59a] pb-1 tracking-wider cursor-pointer active:scale-95 transition-all" href="#">Campanhas</a>
<a class="font-serif text-[#d6c692] hover:text-[#f3e2ac] tracking-wider cursor-pointer active:scale-95 transition-colors" href="#">Grimório</a>
<a class="font-serif text-[#d6c692] hover:text-[#f3e2ac] tracking-wider cursor-pointer active:scale-95 transition-colors" href="#">Marketplace</a>
<a class="font-serif text-[#d6c692] hover:text-[#f3e2ac] tracking-wider cursor-pointer active:scale-95 transition-colors" href="#">Crônicas</a>
</div>
<div class="flex items-center gap-6">
<span class="material-symbols-outlined text-[#ffb59a] cursor-pointer hover:bg-[#20201f] p-2 transition-all duration-300 active:scale-95" data-icon="casino">casino</span>
<span class="material-symbols-outlined text-[#ffb59a] cursor-pointer hover:bg-[#20201f] p-2 transition-all duration-300 active:scale-95" data-icon="notifications">notifications</span>
<div class="h-8 w-8 rounded-sm bg-surface-container-highest border border-outline-variant overflow-hidden">
<img alt="Scribe Profile" class="w-full h-full object-cover" data-alt="close-up portrait of a wise scholar with glasses in a dimly lit library environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBD67whkhSfPy9PgIj06y0VBklh-7-BxRqWYNc16e-piVXp6YFBvCpcDoM6ypUwHVfPUgzDXOVskDPKGz7h1oTE1OIvKtHgZB3BEbaiomX3XzI88ol9LCZnq4r1TyhEYhPoUaq7_z7B-tfl3LpjNA6EUZSia051QoW98op-FESIk_viMTFeuXGS2y6em1J0qzhcHt09XEyFFsMrdpwCXQ3zJqTe_V02hpeGxGivx2WLf27tFbPkgQZeEDfIDCbrBnaaYZ1LG5o8HtY"/>
</div>
</div>
</nav>
<!-- Side Navigation Bar -->
<aside class="h-screen w-64 fixed left-0 top-0 border-r border-[#20201f] bg-[#0e0e0e] flex flex-col h-full pt-20 hidden md:flex">
<div class="px-6 mb-8">
<div class="flex items-center gap-3 mb-4">
<div class="w-10 h-10 bg-surface-container-low border border-outline-variant flex items-center justify-center clipped-corner">
<span class="material-symbols-outlined text-primary text-xl" data-icon="auto_stories">auto_stories</span>
</div>
<div>
<h3 class="font-serif text-sm text-secondary font-bold">Shadow Over Oakhaven</h3>
<p class="text-[10px] text-on-surface-variant uppercase tracking-widest">Act II: The Ritual</p>
</div>
</div>
<button class="w-full bg-primary text-on-primary-container font-bold text-xs uppercase tracking-widest py-3 rounded-sm shadow-inner active:scale-95 transition-all">Roll Initiative</button>
</div>
<nav class="flex-1">
<div class="bg-[#f95e14]/10 text-[#ffb59a] border-l-4 border-[#ffb59a] py-3 px-6 flex items-center gap-4 cursor-pointer">
<span class="material-symbols-outlined text-xl" data-icon="auto_stories">auto_stories</span>
<span class="font-sans text-sm uppercase tracking-widest">Campanhas</span>
</div>
<div class="text-[#d6c692]/60 hover:text-[#d6c692] py-3 px-6 hover:bg-[#131313] transition-colors flex items-center gap-4 cursor-pointer">
<span class="material-symbols-outlined text-xl" data-icon="pets">pets</span>
<span class="font-sans text-sm uppercase tracking-widest">Bestiário</span>
</div>
<div class="text-[#d6c692]/60 hover:text-[#d6c692] py-3 px-6 hover:bg-[#131313] transition-colors flex items-center gap-4 cursor-pointer">
<span class="material-symbols-outlined text-xl" data-icon="auto_fix_high">auto_fix_high</span>
<span class="font-sans text-sm uppercase tracking-widest">Spells</span>
</div>
<div class="text-[#d6c692]/60 hover:text-[#d6c692] py-3 px-6 hover:bg-[#131313] transition-colors flex items-center gap-4 cursor-pointer">
<span class="material-symbols-outlined text-xl" data-icon="map">map</span>
<span class="font-sans text-sm uppercase tracking-widest">World Map</span>
</div>
<div class="text-[#d6c692]/60 hover:text-[#d6c692] py-3 px-6 hover:bg-[#131313] transition-colors flex items-center gap-4 cursor-pointer">
<span class="material-symbols-outlined text-xl" data-icon="history_edu">history_edu</span>
<span class="font-sans text-sm uppercase tracking-widest">Journal</span>
</div>
</nav>
<div class="mt-auto border-t border-[#20201f] py-4">
<div class="text-[#d6c692]/40 hover:text-[#d6c692] py-2 px-6 flex items-center gap-4 cursor-pointer transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="settings">settings</span>
<span class="font-sans text-xs uppercase tracking-widest">Settings</span>
</div>
<div class="text-[#d6c692]/40 hover:text-[#d6c692] py-2 px-6 flex items-center gap-4 cursor-pointer transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="help">help</span>
<span class="font-sans text-xs uppercase tracking-widest">Support</span>
</div>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="pt-20 md:pl-64 min-h-screen px-8 pb-12">
<header class="mb-10 flex justify-between items-end">
<div>
<h1 class="font-serif text-5xl font-extrabold text-on-surface tracking-tight mb-2 italic">The High Scribe's Dashboard</h1>
<p class="font-body text-secondary-fixed-dim text-lg">Welcome back, Weaver of Fates. The shadows are restless tonight.</p>
</div>
<button class="bg-primary px-8 py-4 text-on-primary-container font-bold uppercase tracking-widest rounded-sm hover:brightness-110 active:scale-95 transition-all flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="rocket_launch">rocket_launch</span>
                Launch Campaign
            </button>
</header>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- Central Feed: Recent Game Logs (Span 8) -->
<section class="lg:col-span-8 bg-surface-container-low border border-outline-variant/10 p-8 relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary-container to-transparent opacity-30"></div>
<div class="flex justify-between items-center mb-8">
<h2 class="font-serif text-2xl text-secondary-fixed flex items-center gap-3">
<span class="material-symbols-outlined text-primary" data-icon="menu_book">menu_book</span>
                        Chronicles of the Unseen
                    </h2>
<span class="text-[10px] uppercase tracking-[0.2em] text-outline px-3 py-1 border border-outline-variant/30 rounded-full">Real-time Feed</span>
</div>
<div class="space-y-6 custom-scrollbar max-h-[600px] overflow-y-auto pr-4">
<!-- Log Item 1 -->
<div class="flex gap-6 pb-6 border-b border-outline-variant/10">
<div class="flex flex-col items-center">
<span class="text-[10px] font-bold text-primary mb-1">21:04</span>
<div class="w-px h-full bg-outline-variant/20"></div>
</div>
<div class="flex-1">
<h4 class="font-serif text-lg text-on-surface font-bold">Thistle Thorne rolled Natural 20</h4>
<p class="text-on-surface-variant font-body leading-relaxed">The rogue successfully disarmed the 'Void Siphon' trap in the inner sanctum. No damage taken. Arcane residue detected.</p>
<div class="mt-3 flex gap-2">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest text-secondary rounded-sm">Skill: Stealth</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest text-tertiary rounded-sm">Success</span>
</div>
</div>
</div>
<!-- Log Item 2 -->
<div class="flex gap-6 pb-6 border-b border-outline-variant/10 opacity-80">
<div class="flex flex-col items-center">
<span class="text-[10px] font-bold text-outline mb-1">20:55</span>
<div class="w-px h-full bg-outline-variant/20"></div>
</div>
<div class="flex-1">
<h4 class="font-serif text-lg text-on-surface font-bold">Kaelen Sunstride casted Fireball</h4>
<p class="text-on-surface-variant font-body leading-relaxed">Level 3 slot consumed. 4 Skeletal Guardians eliminated. The environment now carries the 'Scorch' trait.</p>
<div class="mt-3 flex gap-2">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest text-error rounded-sm">Combat</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest text-primary rounded-sm">34 Damage</span>
</div>
</div>
</div>
<!-- Log Item 3 -->
<div class="flex gap-6 pb-6 border-b border-outline-variant/10 opacity-60">
<div class="flex flex-col items-center">
<span class="text-[10px] font-bold text-outline mb-1">20:42</span>
<div class="w-px h-full bg-outline-variant/20"></div>
</div>
<div class="flex-1">
<h4 class="font-serif text-lg text-on-surface font-bold">Initiative Started: The Black Grove</h4>
<p class="text-on-surface-variant font-body leading-relaxed">Scene transition complete. Ambient lighting shifted to 'Eerie Fog'. Soundscape 'The Whispering Pines' activated.</p>
</div>
</div>
</div>
</section>
<!-- Sidebar Column: Players & Dice (Span 4) -->
<div class="lg:col-span-4 space-y-6">
<!-- Dice Tray -->
<section class="bg-surface-container-highest p-6 rounded-sm border border-primary-container/20 shadow-xl">
<h3 class="font-serif text-xl text-primary mb-6 flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="casino">casino</span>
                        The Fateful Roll
                    </h3>
<div class="grid grid-cols-3 gap-3">
<button class="bg-surface-container p-3 flex flex-col items-center border border-outline-variant/30 hover:border-primary transition-all active:scale-90">
<span class="text-2xl font-serif text-secondary mb-1">D4</span>
<span class="text-[10px] text-outline uppercase">Caltrop</span>
</button>
<button class="bg-surface-container p-3 flex flex-col items-center border border-outline-variant/30 hover:border-primary transition-all active:scale-90">
<span class="text-2xl font-serif text-secondary mb-1">D6</span>
<span class="text-[10px] text-outline uppercase">Cuboid</span>
</button>
<button class="bg-surface-container p-3 flex flex-col items-center border border-outline-variant/30 hover:border-primary transition-all active:scale-90">
<span class="text-2xl font-serif text-secondary mb-1">D8</span>
<span class="text-[10px] text-outline uppercase">Shard</span>
</button>
<button class="bg-surface-container p-3 flex flex-col items-center border border-outline-variant/30 hover:border-primary transition-all active:scale-90">
<span class="text-2xl font-serif text-secondary mb-1">D10</span>
<span class="text-[10px] text-outline uppercase">Grit</span>
</button>
<button class="bg-surface-container p-3 flex flex-col items-center border border-outline-variant/30 hover:border-primary transition-all active:scale-90">
<span class="text-2xl font-serif text-secondary mb-1">D12</span>
<span class="text-[10px] text-outline uppercase">Heavy</span>
</button>
<button class="bg-primary-container/20 p-3 flex flex-col items-center border border-primary hover:bg-primary-container/40 transition-all active:scale-90">
<span class="text-2xl font-serif text-primary mb-1">D20</span>
<span class="text-[10px] text-primary uppercase font-bold">Fate</span>
</button>
</div>
<div class="mt-6 p-4 bg-surface-container-lowest border border-outline-variant/10 text-center">
<span class="text-xs text-outline font-body uppercase tracking-widest mb-1 block">Last Global Result</span>
<span class="text-4xl font-serif text-on-surface font-black">17</span>
</div>
</section>
<!-- Active Players -->
<section class="bg-surface-container p-6 border-l-4 border-tertiary">
<div class="flex justify-between items-center mb-6">
<h3 class="font-serif text-xl text-on-surface">The Fellowship</h3>
<span class="flex items-center gap-1 text-[10px] text-tertiary uppercase tracking-widest">
<span class="w-1.5 h-1.5 bg-tertiary rounded-full animate-pulse"></span> 4 Online
                        </span>
</div>
<div class="space-y-4">
<!-- Player 1 -->
<div class="flex items-center gap-4 bg-surface-container-low p-3 border border-outline-variant/10">
<div class="w-10 h-10 overflow-hidden border border-outline-variant/30">
<img alt="Player Portrait" class="w-full h-full object-cover" data-alt="close-up of a rugged male character with a scar over one eye and dark hood" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo4wQI-DLlCL36Cxis_-FnaWfVMjCr392Us3xnHAS4nqQ5RxN-lv7tJTjnVWSzlbZxPK4Xxx07QfUgOq84jaaP1FZt7NgOCCzLQUxbYA0O0cRuWU8LMPP1QuglAiYsuR9UoP2sREpA79qyVM1OF5hGl5ZsIsib-XvxoSqgoJHwriVR8ZKIr3_diRVz814ohAi7heqDRNq8v2yhdUrUkyX5sa1-FaaCV7GlVCHCstGIl92EywLhIfrl2EMDyhDAeNiwtsT2xmobHJc"/>
</div>
<div class="flex-1">
<p class="text-sm font-bold text-on-surface">Thistle Thorne</p>
<p class="text-[10px] text-secondary uppercase tracking-widest">Level 8 Rogue</p>
</div>
<div class="w-16 h-1 bg-surface-container-high relative">
<div class="absolute inset-0 bg-gradient-to-r from-error-container to-error w-[80%]"></div>
</div>
</div>
<!-- Player 2 -->
<div class="flex items-center gap-4 bg-surface-container-low p-3 border border-outline-variant/10">
<div class="w-10 h-10 overflow-hidden border border-outline-variant/30">
<img alt="Player Portrait" class="w-full h-full object-cover" data-alt="portrait of a regal female character with glowing blue patterns on her face and white hair" src="https://lh3.googleusercontent.com/aida-public/AB6AXuACaUr8O9wLfkTNQAx49B8KWs61Hph69tsYh-1tumqlyga4SIzAgXmfBa5S_o0--rCK6HMtsg-YwtdNeRdkZE4CVJWfhsSE9qMMBo8mnzWRmb05wl67g4UZ_y6K-5jjnrJ6yXypHG-tsbJvs_9j0xw0-KtbYvuusXtVbMQfWh57kqbxhsOxwHOI_w3qxGRpij7Hv_rUprk5dHZ9MlNlC1tEm44tHYQNRVFJV9Vc9gsRJ7yAHprMdXFLUQMWwkxWd2sn8mNpU3ysBZw"/>
</div>
<div class="flex-1">
<p class="text-sm font-bold text-on-surface">Kaelen Sunstride</p>
<p class="text-[10px] text-secondary uppercase tracking-widest">Level 8 Wizard</p>
</div>
<div class="w-16 h-1 bg-surface-container-high relative">
<div class="absolute inset-0 bg-gradient-to-r from-tertiary-container to-tertiary w-[45%]"></div>
</div>
</div>
<!-- Player 3 -->
<div class="flex items-center gap-4 bg-surface-container-low p-3 border border-outline-variant/10">
<div class="w-10 h-10 overflow-hidden border border-outline-variant/30 grayscale">
<img alt="Player Portrait" class="w-full h-full object-cover" data-alt="portrait of an armored knight looking solemn in shadows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnY6eE7cr56_FKSEMlOuGygTlzwgyDZQ0gACTvj10Zl2qtYhVm9_Pn11WwPe9sdrg_ELA2Ebm2xqYI6NI6-YJq0pqQ4OH8lDJd3wgnGoyADjgKFG7TpYyab1koe0d8L_MK4DZy848ophrVVxBnU0zcSl6kK34jxkVO3CRDKiz_VqAuyy2liaB06OMLqNNtP-PnUHn0tInWkECXQYo9TFxgD-95vzzhEUMdVek3nZ2v8As0rF5xPyXr1Bq_DuUCi-6cnh7pTPs_Pi0"/>
</div>
<div class="flex-1">
<p class="text-sm font-bold text-on-surface-variant">Sir Alistair</p>
<p class="text-[10px] text-outline uppercase tracking-widest">Unconscious</p>
</div>
<div class="w-16 h-1 bg-surface-container-high relative">
<div class="absolute inset-0 bg-error-container w-[5%]"></div>
</div>
</div>
</div>
</section>
</div>
</div>
<!-- Asymmetric Detail Section -->
<section class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative group cursor-pointer overflow-hidden rounded-sm border border-outline-variant/10">
<div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent z-10"></div>
<img alt="World Map" class="w-full h-64 object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="Ancient hand-drawn map of a sprawling dark fantasy continent with mountains and ruins" data-location="Oakhaven Region" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_3pHNXRPRv8ObPyczCeC81UG72OnlUzIwDrMYAtK29Y1ONxSEdm9v8JBaVeUYEp3oYzqqjUDGk6bK6_ItI1rF9nerPHrRFzrIRljbIrgVRts8yeZ_u3vaX9KnG8WGn0ctUfJtT5Kagy2be5JQR9cHqBD-JygjmmUjo-lNcWKWw7oMGNgfypOU-OwubQ_kT_nzrNQQTyygQIZXufyPRz6m8Pr9rEmkx6Z9MWUou_DTafF6ZHSO81HGFe5EQgjAYhO1Vem1w3h_YhQ"/>
<div class="absolute bottom-6 left-6 z-20">
<h4 class="font-serif text-3xl font-bold text-secondary">Explore Oakhaven</h4>
<p class="font-body text-on-surface-variant">4 Active Quests | 2 Hidden Locations</p>
</div>
<span class="absolute top-6 right-6 z-20 bg-primary/20 backdrop-blur-md p-2 rounded-full border border-primary/30">
<span class="material-symbols-outlined text-primary" data-icon="explore">explore</span>
</span>
</div>
<div class="bg-surface-container-lowest p-10 border border-outline-variant/5 clipped-corner relative">
<div class="absolute -top-4 -right-4 w-24 h-24 bg-primary/5 rounded-full blur-3xl"></div>
<h4 class="font-serif text-2xl text-secondary-fixed-dim mb-6 italic">DM Quick-Notes</h4>
<div class="space-y-4 font-body text-on-surface-variant italic leading-loose">
<p class="border-l-2 border-primary-container pl-4">"The Raven Queen has observed the party's transgression at the altar. Retribution should be subtle, perhaps a lingering shadow in their next rest."</p>
<p class="border-l-2 border-outline-variant pl-4">"Kaelen still holds the Fragment of Xal. Remember to trigger the whispers when they enter the Silent Library."</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 px-8 border-t border-[#20201f] bg-[#0e0e0e] flex flex-col items-center gap-4 text-center">
<div class="text-[#ffb59a] font-bold font-serif text-lg tracking-tighter">Eldritch Editorial</div>
<div class="flex gap-8 flex-wrap justify-center">
<a class="font-serif italic text-xs text-[#d6c692]/40 hover:text-[#f3e2ac] transition-opacity" href="#">Terms of Service</a>
<a class="font-serif italic text-xs text-[#d6c692]/40 hover:text-[#f3e2ac] transition-opacity" href="#">Privacy Scroll</a>
<a class="font-serif italic text-xs text-[#d6c692]/40 hover:text-[#f3e2ac] transition-opacity" href="#">System Reference Document</a>
</div>
<p class="font-serif italic text-xs text-[#d6c692] opacity-50">© 1024 Eldritch Editorial Systems. All rights reserved by the High Scribe.</p>
</footer>
</body></html>