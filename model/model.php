 <?php
 function getposts(){
      // Connexion à la base de données
      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog', 'password');
      }
      catch(Exception $e){
            die( 'Erreur : '.$e->getMessage()   );
      }
$posts  = [];
      // On récupère les 5 derniers billets
      $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

      while ($donnees = $req->fetch())
      {
        $post = [
            'titre'=> $req['titre'],
            'contenu'=> $req['contenu'],
            'date_creation_fr'=> $req['date_creation_fr']
        ];
        $posts[] =$post; 
        }
        return $posts;
        }
      ?>