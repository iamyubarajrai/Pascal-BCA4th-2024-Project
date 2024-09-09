let jsDrop = document.querySelectorAll(".js-drop");

//element.addEventListener("event", callback_function())
jsDrop.forEach(drop => { //Fat-arrow function: let func_name = () => { ... }
    drop.parentNode.classList.add("drop-wrapper");
    drop.nextElementSibling.classList.add("dropdown");
    drop.addEventListener("click", function(e) {
        if(this.parentNode.classList.contains("expand") == true) {
            this.parentNode.classList.remove('expand');
        } else {
            this.parentNode.classList.add('expand');
        }
    }); 
});
/*
let profile_icon = document.querySelector(".js-drop"); //Single first element
profile_icon.addEventListener("click", function() {
    //console.log(this.parentNode.classList.contains("profile-box"));
    //classList methods: add, remove, contains

    
    if(this.parentNode.classList.contains("expand") == true) {
        this.parentNode.classList.remove('expand');
    } else {
        this.parentNode.classList.add('expand');
    }
    
});
*/

/*
 DOM: Document Object Model (Tree structure of interpreted HTML document)
      Has, childNoe, parentNode, nextElementSibling etc.
 */