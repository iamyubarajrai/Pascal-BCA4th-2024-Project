let jsDrop = jQuery(".js-drop");

jsDrop.on("click", function() {
    jQuery(this).siblings(".profile-list").slideToggle(300);
});