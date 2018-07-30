<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php foreach($students as $v){echo $v." <br>";} ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php for($i=1;$i<32;$i++){
        ?><option><?php echo $i; ?></option>
       <?php } ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php for($i=1;$i<13;$i++){?>
          <option><?php echo $i ?></option>
        <?php } ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php for($i=1960;$i<2019;$i++){ ?>
        <option><?php echo $i ?></option>
        <?php } ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php if(isset($_GET["sexe"])){ ?>
      <?php if($_GET["sexe"]=="fille"){ ?>
     <p>
       Je suis une fille
     </p>
   <?php } elseif($_GET["sexe"]=="garçon"){ ?>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <p>
       Je suis un garçon
     </p>
  <?php }} else { ?>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <p>
       Je suis indéfini
     </p>
  <?php }  ?>
  </body>
</html>