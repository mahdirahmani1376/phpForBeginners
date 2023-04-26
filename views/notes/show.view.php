<?php require base_path('views/partials/head.php') ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">My Notes</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 underline">Go back...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>
        </div>
    </main>

<?php include base_path("partials/footer.php") ?>