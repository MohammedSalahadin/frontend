$('body').delegate('.feedback li', 'click', function () {
  $( ".feedback li" ).each(function( index ) {
    $(this).removeClass('active');
  });
	$(this).addClass('active');
});