let profile_icon = document.querySelector(".js-drop");

//element.addEventListener("event", callback_function())
profile_icon.addEventListener("click", function() {
    //console.log(this.parentNode.classList.contains("profile-box"));
    //classList methods: add, remove, contains

    if(this.parentNode.classList.contains("expand") == true) {
        this.parentNode.classList.remove('expand');
    } else {
        this.parentNode.classList.add('expand');
    }
});

/*
 DOM: Document Object Model (Tree structure of interpreted HTML document)
      Has, childNoe, parentNode, nextElementSibling etc.
 */