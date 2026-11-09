
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon Blog</title>

    <link rel="stylesheet" href="css/components.css">
</head>

<body>

    <header>
        <h1>Mon Blog</h1>
    </header>

    <main>

        <h2>Nos derniers articles</h2>

        <div class="liste-cartes">

            <?php foreach ($articles as $article): ?>

                <article class="carte">

                    <div class="carte-contenu">

                        <?php if ($article['id'] == 1): ?>
                            <small class="badge-special">
                                ⭐ À la une
                            </small>
                        <?php endif; ?>

                        <h3>
                            <a href="article.php?id=<?= $article['id'] ?>">
                                <?= htmlspecialchars($article['titre']) ?>
                            </a>
                        </h3>

                        <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">

                            <?= htmlspecialchars($article['categorie_libelle']) ?>

                        </span>

                        <p>
                            <?= htmlspecialchars(substr($article['contenu'], 0, 100)) ?>...
                        </p>

                        <div class="carte-meta">

                            <span>
                                <?= date('d M Y', strtotime($article['date_creation'])) ?>
                            </span>

                            <span>5 min</span>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </main>

</body>
</html>
