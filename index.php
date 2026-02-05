<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap:wght@700&family=Inconsolata:wght@400;700&family=Maven+Pro:wght@400&display=swap" rel="stylesheet">
  <style>
    .font-asap {
      font-family: 'Asap', sans-serif;
    }

    .font-inconsolata {
      font-family: 'Inconsolata', monospace;
    }

    .font-maven {
      font-family: 'Maven Pro', sans-serif;
    }
  </style>
</head>

<body class="bg-slate-900 text-gray-500">
  <?php include('./components/header.php') ?>
  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <section class="space-y-3 py-6" id="projetos">
      <?php include('./components/projetos.php'); ?>
    </section>
  </main>
  <?php include('./components/footer.php'); ?>
</body>

</html>