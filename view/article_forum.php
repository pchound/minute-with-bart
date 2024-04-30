


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-l0HbCFGhjz1s8sZvoS65OU4sO51fd2lAHsD4P4OfxoXEsViRg2XSbdh3LwOcVI3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Add News Article</h1>
        <form action="add_article.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="url" class="form-control" id="link" name="link" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="alert alert-success mt-3" role="alert">
                Article added successfully!
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
