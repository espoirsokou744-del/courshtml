<!DOCTYPE html>
<html lang="fr" style="background-color: aqua;">
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width,initial">
         <title>Formulaire </title>
         
    </head>    
    <body>
        <script type="text/javascript">
           //var name  = "Espoir"; 
           //document.write("Hello " + name)
          
          //  var prenom= prompt ("Quel est votre prenom ? ")
          // document.write("Hello " + prenom )
       
       //  var prenom="Espoir ";
       //alert("Hello " + prenom);
        
       //function enigme (){
          // var reponse = prompt("Quelle est la capitale de la France ");
            // document.write("Quelle est la capitale de la France " + )
          // if( reponse  !="Paris")
            // alert("Mauvaise réponse");
          // else{ 
            // alert("Bonne réponse" ) }
             
            // while (reponse !="Paris")
            //  var reponse = prompt("Quelle est la capitale de la France ");
          
            // alert("Vous avez été piraté")
       
       </script>
        <h1 style="color:red;">VOS DONNEES </h1>
        <br> Contactez moi
        <a href="index.html">Retour</a>

        <?php
           echo'Hello world';
        ?>
        
        
           <br>
    <form action="mailto: espoirsokou744@gmail.com" 
          method="post" enctype="text/plain">
      <br></br>           
      <br>Veuillez remplir le formulaire ci-dessous. Merci bien à vous.</br><br></br>
       <br><label for="nom">Nom : <input type ="text" name="nom"autofocus tabindex="1" id="nom" required></br>
       <br><label for="prenom">Prénom(s) : <input type ="text" name="prenom"autofocus tabindex="2" id="prenom" required></br>
      <br> Mdp : <input type="passeword"  placeholder="mot de passe " tabindex="3"><br>
      <br>Numéro : <input type="tel" oninput="this.value = this.value.replace(/\D/g, '').replace(/(\d{2})(?=\d)/g, '$1 ').trim()" maxlength="14"></br>
      <br>Email : <input type="email"></br>

       <br>Genre : <input type ="radio" name="genre" value="mr">Mr<input type="radio" 
       name="genre" value="mme">Mme</br>
       <br>Pays : <input type="text" select="Fr"></br>
       <br>Date : <input type="date" min="1960-01-01" max="2026-12-31"></br>
       <br> Message : 
       <textarea required></textarea>
       <!-- <input type="message" maxlenght ="10" ></br>  -->
       <br> <input type="checkbox" name="authorize" >J'autorise la conservation de mes données</br>
        <br></br><br></br><br></br><br></br> <br><input type="submit"value= "ENVOYER"></br>
    </form>
     </body>

<html>