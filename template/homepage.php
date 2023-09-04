<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title>Le blog de l'AVBN</title>
    	<link href="style.css" rel="stylesheet" />
	</head>

	<body>
    	<h1>Le super blog de l'AVBN !</h1>
    	<p>Derniers billets du blog :</p>

    	<?php
    	foreach ($posts as $post) {
    	?>
        	<div class="news">
            	<h3>
                	<?=  htmlspecialchars($post['titre']); ?>
                	<em>le <?=  $post['date_creation_fr']; ?></em>
            	</h3>
            	<p>
                	<?=
                	// We display the post content.
                	 nl2br(htmlspecialchars($post['contenu']));
                	?>
                	<br />
                	<em><a href="#">Commentaires</a></em>
            	</p>
        	</div>
    	<?php
    	} // The end of the posts loop.
    	?>
	</body>
</html>