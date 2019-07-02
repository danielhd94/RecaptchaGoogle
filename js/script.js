var inputFields = $(".input-field input");
inputFields.focus(function() {
    var postfix = $( this ).siblings('.postfix');
    if(postfix)  postfix.addClass("active");
});
inputFields.blur( function() {
    var postfix = $( this ).siblings('.postfix');
    if(postfix)  postfix.removeClass("active");
});