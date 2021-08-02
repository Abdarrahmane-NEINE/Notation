window.onload = () => {
  // on va charger le form
  const form = document.querySelector("#comment_form");

  // on va chercher toutes les étoiles
  const stars = document.querySelectorAll(".la-star");

  //on va chercher l'input de user
  let user = document.querySelector("#IdentificationUser");

  //on va chercher l'input de notation
  const note = document.querySelector("#note");

   //on va chercher l'input de Commentaire
   const commentaire = document.querySelector("#Commentaire");

  //on va chercher l'input de Commentaire
  const affiche_error = document.querySelector("#errorname");

  //on va chercher le bouton submit
  const bouton = document.querySelector("#envoyer");


  // on boucle sur les étoiles pour les ajouter un écouteur d'évenements
  for(star of stars){
    //l'écouteur
    star.addEventListener("mouseover", function(){
        // console.log(this);
        resetStars();
        this.style.color = "yellow";
        this.classList.add("las");
        this.classList.remove("lar");

        //l'élément précédent dans le DOM (de meme niveau, balise soeur )
        let previousStar = this.previousElementSibling;

          while(previousStar){
            // on passe l'étoile qui précède en jaune
            previousStar.style.color = "yellow";

            previousStar.classList.add("las");
            previousStar.classList.remove("lar");
            //on récupère l'étoile qui la précède
            previousStar = previousStar.previousElementSibling;
          }
      });
      // on écoute le clic
      star.addEventListener("click", function(){
        note.value = this.dataset.value;

      });
      star.addEventListener("mouseout", function(){
        resetStars(note.value);
      });
  }

// Reset des étoiles en vérifiant la note dans l'input caché
  function resetStars(note = 0){
    for(star of stars){
      if(star.dataset.value > note){
        star.style.color = "black";
        star.classList.add("lar");
        star.classList.remove("las");
      }
      else{
        star.style.color = "yellow";
        star.classList.add("las");
        star.classList.remove("lar");
      }
    }
  }

    form.addEventListener("submit", function(e){
       if(note.value <= 3 && commentaire.value == ""){
           e.preventDefault();
           affiche_error.textContent = 'Commentaire obligatoire';
           affiche_error.style.color = 'red';
        }
        else{
        affiche_error.textContent = '';
        affiche_error.style.color = '';
        }

    });

}
