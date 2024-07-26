let myForm = document.getElementById('myForm');
        let myRegex = /^[a-zA-Z-\s]+$/;

        // fonction pour valider le nom
        myForm.addEventListener('submit', function(e) {
        let myInput = document.getElementById('username');
        if (myInput.value.trim() == "") {
            let myError = document.getElementById("error");
            myError.innerHTML = "Le champs nom est requis."
            e.preventDefault();
        } else if (myRegex.test(myInput.value) == false) {
            let myError = document.getElementById("error");
            myError.innerHTML = "Le nom doit comporter des lettres uniquement"
            e.preventDefault();
        }
        });

        // fonction pour valider le prénom
        myForm.addEventListener('submit', function(e) {
            let myInput = document.getElementById('prenom');
            
            if (myInput.value.trim() == "") {
                let myError = document.getElementById("error2");
                myError.innerHTML = "Le champs prénom est requis."
                e.preventDefault();
            } else if (myRegex.test(myInput.value) == false) {
                let myError = document.getElementById("error2");
                myError.innerHTML = "Le prénom doit comporter des lettres uniquement"
                e.preventDefault();
            }
            });

        
        // fonction pour valider le numéro de telephone
        myForm.addEventListener('submit', function(e) {
            let myInput = document.getElementById('age');
            
            if (myInput.value.trim() == "") {
                let myError = document.getElementById("error3");
                myError.innerHTML = "Saisir un numéro de téléphone."
                e.preventDefault();
            }
        });

        // fonction pour valider l'email
        myForm.addEventListener('submit', function(e) {
            let myInput = document.getElementById('email');
            
            if (myInput.value.trim() == "") {
                let myError = document.getElementById("error4");
                myError.innerHTML = "Saisir un email."
                e.preventDefault();
            }
        });
