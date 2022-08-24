$('input').on('input',function () {
    $(this).parent().find('.custom-dropdown-menu').show();
    $(this).parent().find('.custom-dropdown-menu').addClass('currentActive');
    var menu = $('.currentActive');
})

$(document).keydown(function(e) {
    if(e.which == 40 || e.which == 38) {
        menu.find("a").css("outline", "none"); // remove the pesky blue outline
        hovered = menu.find("li");
        console.log(hovered);
        // if(hovered[0]) {
          if(e.which == 40) {
            hovered.next().children().focus();
            hovered.children().removeClass('active');
            hovered.next().children().addClass('active');
          } else {
            hovered.prev().children().focus();
            hovered.children().removeClass('active');
            hovered.prev().children().addClass('active');
          }
        // }
        // else{
        //     menu.find("li").first().children().focus();
        //     // menu.find("li").first().children().addClass('active');
        // }

    }
  });

