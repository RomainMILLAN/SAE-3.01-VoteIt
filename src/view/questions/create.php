<link rel="stylesheet" href="css/formulaire.css">
<form class="formulaire--container" action="frontController.php?controller=questions&action=created" method="post">
    <div class="formulaire-template">
        <h2 class="title">Création de la question</h2>
        <div>
            <label for="titreQuestion">Titre</label>
            <input type="text" name="titreQuestion" id="titreQuestion" placeholder="Titre de la question" required/>
        </div>
        <div>
            <label for="nbSection">Nombre de sections</label>
            <input type="number" name="nbSection" id="nbSection" placeholder="3" min="3" max="8" required/>
        </div>
        <div>
            <label for="responsableReponse">Responsable de réponse</label>
            <input type="text" name="respReponse" id="respReponse" placeholder="johndoe10@gmail.com, xxx@xxx.fr"">
        </div>
        <div>
            <label for="votant">Utilisateur(s) votant(s)</label>
            <input type="text" name="userVotant" id="userVotant" placeholder="johndoe10@gmail.com, xxx@xxx.fr"">
        </div>
        <div>
            <label for="categorieQuestion">Catégorie</label>
            <select name="categorieQuestion" id="categorieQuestion" required>
                <?php
                foreach ($categories as $categorie){
                    ?><option value="<?php echo(htmlspecialchars($categorie->getNomCategorie())) ?>"><?php echo(htmlspecialchars($categorie->getNomCategorie())) ?></option><?php
                }
                ?>
            </select>
        </div>
        <div class="date--container">
            <H2>Dates</H2>
            <div>
                <label id="title-date" for="ecritureDateDebut">Début d'écriture des réponses</label>
                <input id="date-input" type="date" name="ecritureDateDebut" id="ecritureDateDebut" placeholder="01-01-2001" required/></span>
                <label id="title-date" for="ecritureDateDebut">Fin d'écriture des réponses</label>
                <input id="date-input" type="date" name="ecritureDateFin" id="ecritureDateFin" placeholder="01-01-2001" required/></span>
            </div>


            <div>
                <label id="title-date" for="voteDateDebut">Début des votes</label>
                <input id="date-input" type="date" name="voteDateDebut" id="voteDateDebut" placeholder="01-01-2001" required/></span>
                <label id="title-date" for="voteDateDebut">Fin des votes</label>
                <input id="date-input" type="date" name="voteDateFin" id="voteDateFin " placeholder="01-01-2001" required/></span>
            </div>
        </div>
        <div>
            <input type="hidden" name="controller" value="questions">
            <input type="hidden" name="action" value="created">
            <input type="text" name="autheur" id="autheur" placeholder="JohnDoe10" value="<?php echo(\App\VoteIt\Lib\ConnexionUtilisateur::getLoginUtilisateurConnecte())?>" hidden readonly/>

            <?php
            if($poserQuestion){
                ?>
                <input type="hidden" name="poserQuestion" value="<?php echo($poserQuestion); ?>">
                <input type="submit" value="Poser la question">
                <?php
            }else {
                ?>
                <input type="hidden" name="proposerQuestion" value="<?php echo($proposerQuestion); ?>">
                <input type="submit" value="Proposer la question">
                <?php
            }
            ?>
        </div>
    </div>
</form>