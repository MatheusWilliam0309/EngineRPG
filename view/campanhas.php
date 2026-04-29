<section class="campaign-grid">
    <div class="campaign-card new-campaign">
      <span class="material-symbols-outlined">add_circle</span>
      <h3>Forjar Nova Campanha</h3>
    </div>

    <?php if(isset($listaCampanhas)): foreach($listaCampanhas as $c): ?>
    <div class="campaign-card">
      <div class="campaign-img">
        <span class="campaign-status"><?= $c['status'] ?></span>
        <div style="width:100%; height:100%; background: <?= $c['gradiente'] ?>;"></div>
      </div>
      <div class="campaign-body">
        <h3><?= $c['titulo'] ?></h3>
        <div class="campaign-meta">
          <span><span class="material-symbols-outlined">group</span> <?= $c['jogadores'] ?> Jogadores</span>
          <span><span class="material-symbols-outlined">schedule</span> <?= $c['proxima'] ?></span>
        </div>
        <a href="index.php?page=campanhas" class="btn-enter">Entrar</a>
      </div>
    </div>
    <?php endforeach; endif; ?>
</section>