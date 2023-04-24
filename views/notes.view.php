<?php require('partials/head.php') ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>


    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">My Notes</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <li><?= $note['body'] ?></li>
                </a>

            <?php endforeach; ?>

            <p class="mt-6">
                <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
            </p>
        </div>


    </main>

<?php include("partials/footer.php") ?>