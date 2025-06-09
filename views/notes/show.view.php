<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>  

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mt-8">
      <a href="/notes" class="underline text-blue-500">go back...</a>
    </p>

    <p>
      <?= htmlspecialchars($note['body']) ?>
    </p>

    <footer class="mt-6">
      <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Edit
      </a>
    </footer>

  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>