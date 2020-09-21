<html lang="en">
<head>
    <!-- encoding -->
    <meta charset="utf-8">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Blanksby</title>
    <!-- favicon -->
	<?php foreach ([32, 128, 152, 167, 180, 192, 196,] as $size) : ?>
		<link href="<?= './src/gfx/favicon/' . $size . '.' . 'png'; ?>" sizes="<?= implode('x', [$size, $size,]); ?>" rel="icon">
	<?php endforeach; ?>
    <!-- style -->
    <link href="./src/css/site.css" rel="stylesheet">
</head>
<body>

    <main>
        <h1>James Blanksby</h1>
        <p>Full Stack Developer</p>
    </main>

</body>
</html>
