<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelayakan Search</title>
</head>
<body>
    <h2>Kelayakan Search</h2>
    <form action="<?= site_url('kelayakan/search') ?>" method="post">
        <input type="text" name="keyword" placeholder="Enter keyword">
        <button type="submit">Search</button>
    </form>
</body>
</html>