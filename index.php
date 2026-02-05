<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portfolio</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-900 text-gray-500">
  <?php include('./components/header.php') ?>
  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <section class="space-y-3 py-6" id="projetos">
      <?php include('./components/projetos.php'); ?>
    </section>
  </main>
</body>

</html>