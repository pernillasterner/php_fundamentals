<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require('partials/banner.php'); ?>   

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <!-- Form for creating a note -->
    <form method="POST" class="flex flex-col gap-4">
      <label for="body">Add Note</label>
      <textarea name="body" id="body" rows="4" cols="50" placeholder="Write something here..." class="p-2 text-sm"></textarea>
      <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 w-fit">Submit</button>
    </form>

    <p class="mt-6">
      <a href="#" class="text-blue-500 hover:underline">Create Note</a>
    </p>
  </div>
</main>

<?php require("partials/footer.php"); ?>