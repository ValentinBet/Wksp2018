<?php
require_once 'header.php';
?>
    <main class="quiz">

        <form action="" method="post">
            <div class="col-md-offset-2 col-md-8">
                <h1>Quizz! (En version)</h1>


                <p>Une seule réponse par question !</p>
                <section class="question">

                    <h5>Vous avez naturellement la peau : </h5>

                    <label>
                        <input type="checkBox" name="aw[]" value="1">
                        Séche </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="2">
                        Normale </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="3">
                        Mixte </label>

                </section>
                <section class="question">
                    <h5>Avez-vous une peau sensible ? </h5>

                    <label>
                        <input type="checkBox" name="aw[]" value="1">
                        Oui, j’ai la peau irritée, qui tiraille, avec des rougeurs </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="2">
                        Non, aucun problème </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="3">
                        Oui, je suis sujette à l’acné, l’eczéma ou le psoriasis </label>

                </section>
                <section class="question">
                    <h5> Vous appliquez sur votre peau de la crème hydratante </h5>

                    <label>
                        <input type="checkBox" name="aw[]" value="1">
                        Matin et soir, je ne peux pas vivre sans </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="2">
                        1 à 2 fois par semaine </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="3">
                        jamais </label>

                </section>
                <section class="question">
                    <h5>Pour vous, le packaging du savon, ou le flacon est </h5>

                    <label>
                        <input type="checkBox" name="aw[]" value="1">
                        aussi important que le savon lui-même </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="2">
                        je n’y prête pas vraiment attention </label> <br>
                    <label>
                        <input type="checkBox" name="aw[]" value="3">
                        pas important du tout, ce sont les principes actifs qui le sont </label>

                </section>


                <input type="submit" name="submit" value="submit"/>
            </div>

        </form>
    </main>


<?php
$first = null;
$second = null;
$third = null;


if (isset($_POST['submit'])) {
    if (!empty($_POST['aw'])) {
        foreach ($_POST['aw'] as $selected) {

            switch ($selected) {
                case '1' :
                    $first = $first + 1;
                    break;
                case '2' :
                    $second++;
                    break;
                case '3' :
                    $third++;
                    break;
                default :
                    echo 'ERREUR';
                    break;
            }

        }

        if (($first + $second + $third) < 4 || ($first + $second + $third) > 4) { // VALEUR A CHANGER SI RAJOUT DE QUESTIONS
            echo 'Une réponse par question :)';
        } else
            if ($first > $second && $first > $third) {
                echo 'Fuyez les savons classiques ou gels douche !';
                echo '</br>';
                echo 'Votre peau ne doit surtout pas être agressée, bien au contraire il est temps de prendre soin d’elle !';
                echo '</br>';
                echo 'Pour nourrir votre peau, votre premier geste beauté doit être le nettoyage en douceur de votre visage ou de votre corps avec un savon naturel,';
                echo '</br>';
                echo 'un savon bio ou un savon sur-gras. Optez pour le 100% naturel. Ces savons respectent le Ph et ne dénaturent pas votre film hydro-lipidique.';
            } else if ($second > $first && $second > $third) {
                echo 'Votre peau peut accepter les savons classiques ou les gels douche. ';
                echo '</br>';
                echo 'Attention quand même aux produits qui contiennent des ingrédients chimiques nocifs, et favorisez le savon bio. Votre peau garde naturellement son équilibre. Les savons ne provoquent pas chez vous de dessèchement ou tiraillement particulier.';
                echo '</br>';
                echo 'Essayez un savon naturel, vous verrez la différence ! Votre peau sera plus souple et l’environnement vous remerciera !';
                echo '</br>';
            } else if ($third > $second && $third > $first) {
                echo 'Changement de cap ! Si vous n’utilisez que des savons classiques ou gels douche, il est grand temps d’arrêter !';
                echo '</br>';
                echo 'Ces produits vous irritent la peau et créent un déséquilibre majeur. Les crèmes hydratantes ou les soins quotidiens que vous utilisez ne suffisent pas à la rééquilibrer. L’agression est trop forte pour votre peau. Il est urgent de changer.';
                echo '</br>';
                echo 'Vous devez opter pour des savons bio qui seront beaucoup plus doux. Vous aurez une peau toute propre qui vous dira merci ! Et choisir en complément des soins corps bio adaptés pour nourrir intensément votre peau.';
                echo '</br>';
                echo 'Le savon naturel, et en particulier le savon Alep, vous aidera à combattre vos problèmes d’acné, d’eczéma ou de psoriasis.';
            } else if ($first = $second) {
                echo '<strong>' . 'Vous avez autant de réponse 1 que 2' . '</strong>';  //TODO: Crée réponse intermédiaire
            }
            else if ($first = $third){
                echo '<strong>' . 'Vous avez autant de réponse 1 que 3' . '</strong>';  //TODO: Crée réponse intermédiaire
            }
            else if($second = $third) {
                echo '<strong>' . 'Vous avez autant de réponse 2 que 3' . '</strong>';  //TODO: Crée réponse intermédiaire
            }

    }

}


require_once 'footer.php';
?>