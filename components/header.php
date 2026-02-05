<?php

$cargo_title = "Desenvolvedor Full Stack";
$subtitle_name = 'echo "Hello World!" Meu nome é Victor Rosário Ishizuka e sou';
$photo_url = "/images/profile.png";

$technologies = [
  ["name" => "GitHub", "color" => "bg-gray-800 text-white"],
  ["name" => "PHP", "color" => "bg-indigo-600 text-white"],
  ["name" => "CSS", "color" => "bg-blue-500 text-white"],
  ["name" => "HTML", "color" => "bg-orange-600 text-white"],
  ["name" => "JavaScript", "color" => "bg-yellow-400 text-black"],
  ["name" => "Docker", "color" => "bg-blue-600 text-white"],
  ["name" => "Laravel", "color" => "bg-red-600 text-white"]
];

$description = [
  "Desenvolvedor Full Stack em constante evolução, focado em construir soluções funcionais que resolvem problemas reais. Tenho experiência prática na manutenção de ERPs, integração de APIs e arquitetura em camadas utilizando PHP (Laravel/CodeIgniter) e Node.js. Acredito que um código bem estruturado e o aprendizado contínuo são as chaves para sistemas escaláveis."
];

?>

<header class="mx-auto max-w-screen-lg bg-gradient-to-br from-slate-800 to-slate-900 px-6 py-12 flex items-center justify-center flex-col gap-6 rounded-lg shadow-2xl">

  <!-- Foto redonda -->
  <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
    <img src="<?= $photo_url ?>" alt="Victor Rosário Ishizuka" class="w-full h-full object-top object-cover">
  </div>

  <!-- Subtitle com fonte Inconsolata -->
  <div class="font-inconsolata text-green-400 text-xl text-center leading-relaxed">
    <?= $subtitle_name ?>
  </div>

  <!-- Cargo com fonte Asap -->
  <h1 class="font-asap text-white text-5xl font-bold text-center leading-tight">
    <?= $cargo_title ?>
  </h1>

  <!-- Descrição com fonte Maven Pro -->
  <p class="font-maven text-gray-300 text-base text-center leading-relaxed max-w-3xl">
    <?= $description[0] ?>
  </p>

  <!-- Tecnologias com tags coloridas -->
  <div class="flex flex-wrap gap-3 justify-center mt-4">
    <?php foreach ($technologies as $technology): ?>
      <span class="font-inconsolata text-xs font-bold px-4 py-2 rounded-full <?= $technology['color'] ?> shadow-md hover:scale-105 transition-transform">
        <?= $technology['name'] ?>
      </span>
    <?php endforeach ?>
  </div>