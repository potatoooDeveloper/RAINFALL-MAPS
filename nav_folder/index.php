<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex h-screen">

    <?php include 'sidebar.php'; ?>

    <main class="flex-1 ml-16 transition-all duration-300">
        <?php include 'header.php'; ?>

        <div class="mt-16 p-6">
            <h1 class="text-xl font-bold">Welcome to the Dashboard</h1>
        </div>
    </main>

</body>
</html>
