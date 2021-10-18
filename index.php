<!-- header -->
<?php require __DIR__ . '/PHP/header.php'; ?>

<!-- Content -->
<div class="h-screen flex justify-center content-center items-center mb-5 mt-5">
    <div class="flex justify-center content-center items-center">
        <main class="block">
            <article class="grid justify-items-center place-content-between mb-10 rounded-lg hover:bg-gray-100">
                <div class="text-container">
                    <div class="animation one"></div>
                    <div class="text one">Welcome to</div>
                    <div class="animation two"></div>
                    <div class="text two">Formula 1 facts</div>
                    <div class="emoji">🏎</div>
                    <div class="time-to-race">
                        <p class="sm:text-lg text-xs text-center"><?php echo "Next Race: " . getLocation($races) . " (" . getCircuit($races) . ")"; ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo getTimeToNextRace($races); ?></p>
                    </div>
                </div>
            </article>
        </main>
    </div>
</div>




<!--Sidebar/navbar-->
<?php require __DIR__ . '/PHP/navbar.php'; ?>

<!-- Footer -->
<?php require __DIR__ . '/PHP/footer.php'; ?>