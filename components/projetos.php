<?php

require_once __DIR__ . "/../data/projetos-pessoais.php";
require_once __DIR__ . "/../data/experiencias-profissionais.php";
require_once __DIR__ . "/../data/hard-skills.php";

// Função auxiliar para renderizar tags de tecnologias
function renderTechTags($technologies, $colors)
{

  $html = '';
  foreach ($technologies as $tech) {
    $color = $colors[$tech] ?? "bg-gray-600 text-white";
    $html .= '<span class="font-inconsolata text-xs font-bold px-3 py-1 rounded-full ' . $color . ' shadow-sm hover:scale-105 transition-transform">' . $tech . '</span>';
  }
  return $html;
}
?>

<!-- Seção: Experiências Profissionais -->
<div class="mb-16">

  <!-- Título da Seção -->
  <div class="mb-10">
    <h2 class="font-asap text-3xl font-bold text-white mb-2">Experiências Profissionais</h2>
    <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full"></div>
  </div>

  <!-- Timeline de Projetos Profissionais -->
  <div class="space-y-6">

    <?php foreach ($professional_projects as $index => $project): ?>

      <!-- Card do Projeto -->
      <article class="bg-slate-800 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 border border-slate-700">

        <div class="p-6">

          <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-4">

            <div class="flex-1">
              <!-- Título -->
              <h3 class="font-asap text-2xl font-bold text-white mb-2">
                <?= $project['title'] ?>
              </h3>

              <!-- Company e Role -->
              <div class="flex flex-wrap items-center gap-3 mb-3">
                <span class="font-inconsolata text-sm text-blue-400">
                  <?= $project['company'] ?>
                </span>
                <span class="text-slate-600">•</span>
                <span class="font-inconsolata text-sm text-green-400">
                  <?= $project['role'] ?>
                </span>
              </div>
            </div>

            <!-- Período -->
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span class="font-maven text-sm text-slate-400"><?= $project['period'] ?></span>
            </div>

          </div>

          <!-- Descrição -->
          <p class="font-maven text-gray-300 text-sm leading-relaxed mb-4">
            <?= $project['description'] ?>
          </p>

          <!-- Highlights -->
          <?php if (!empty($project['highlights'])): ?>
            <ul class="font-maven text-sm text-gray-400 mb-5 space-y-2 bg-slate-900/50 rounded-lg p-4">
              <?php foreach ($project['highlights'] as $highlight): ?>
                <li class="flex items-start">
                  <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <span><?= $highlight ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <!-- Tecnologias -->
          <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-700">
            <?= renderTechTags($project['technologies'], $colors) ?>
          </div>

        </div>

      </article>

    <?php endforeach; ?>

  </div>

</div>

<!-- Seção: Projetos Pessoais -->
<?php if (!empty($personal_projects)): ?>
  <div>

    <!-- Título da Seção -->
    <div class="mb-10">
      <h2 class="font-asap text-3xl font-bold text-white mb-2">Projetos Pessoais</h2>
      <div class="h-1 w-20 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full"></div>
    </div>

    <!-- Grid de Projetos Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <?php foreach ($personal_projects as $project): ?>

        <!-- Card do Projeto -->
        <article class="bg-slate-800 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-300 border border-slate-700 flex flex-col">

          <!-- Imagem do Projeto -->
          <?php if ($project['image']): ?>
            <div class="h-48 bg-gradient-to-br from-purple-900 to-slate-900">
              <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>" class="w-full h-full object-cover">
            </div>
          <?php else: ?>
            <div class="h-48 bg-gradient-to-br from-purple-900 to-slate-900 flex items-center justify-center">
              <svg class="w-16 h-16 text-white opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
              </svg>
            </div>
          <?php endif; ?>

          <!-- Conteúdo do Card -->
          <div class="p-6 flex-grow flex flex-col">

            <!-- Título -->
            <h3 class="font-asap text-xl font-bold text-white mb-3">
              <?= $project['title'] ?>
            </h3>

            <!-- Descrição -->
            <p class="font-maven text-gray-300 text-sm leading-relaxed mb-4 flex-grow">
              <?= $project['description'] ?>
            </p>

            <!-- Highlights -->
            <?php if (!empty($project['highlights'])): ?>
              <ul class="font-maven text-sm text-gray-400 mb-4 space-y-1">
                <?php foreach ($project['highlights'] as $highlight): ?>
                  <li class="flex items-start">
                    <svg class="w-4 h-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span><?= $highlight ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <!-- Tecnologias -->
            <div class="flex flex-wrap gap-2 mb-4 pt-4 border-t border-slate-700">
              <?= renderTechTags($project['technologies'], $colors) ?>
            </div>

            <!-- Links -->
            <div class="flex gap-3 mt-auto">
              <?php if (isset($project['github_url'])): ?>
                <a href="<?= $project['github_url'] ?>" target="_blank" class="flex items-center gap-2 font-maven text-sm text-gray-300 hover:text-white transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                  </svg>
                  GitHub
                </a>
              <?php endif; ?>

              <?php if (isset($project['live_url']) && $project['live_url']): ?>
                <a href="<?= $project['live_url'] ?>" target="_blank" class="flex items-center gap-2 font-maven text-sm text-gray-300 hover:text-white transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg>
                  Demo
                </a>
              <?php endif; ?>
            </div>

          </div>

        </article>

      <?php endforeach; ?>

    </div>

  </div>
<?php endif; ?>