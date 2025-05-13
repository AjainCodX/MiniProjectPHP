<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/heading.php'); ?>

    <main>
        <div class="max-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <p mb-6>
                <a href="/notes" class="text-blue-500 underline">
                    Go Back...
                </a>
            </p>
            <p>
                <?= htmlspecialchars($note['body']) ?>
            </p>

            <footer class="mt-6">
                <a href="/note/edit?id=<?=$note['id']?>" class="text-grey-500 border border-current px-4 py-1 rounded">Edit</a>
            </footer>
        </div>
    </main>
<?php require base_path('views/partials/footer.php'); ?>
<form class="mt-6" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" value="<?= $note['id'] ?>" name="id">
    <button class="text-sm text-red-500">Delete</button>
</form>
