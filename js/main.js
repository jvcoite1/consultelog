$(document).ready(function() {
  
})

$( document ).ready(function(){
	// Auto height
		var auto_height = 0;
		$( ".auto_height" ).each( function(){
			auto_height = 0;
			$( this ).find( ".auto_height_item" ).each( function(){
				if( $( this ).outerHeight() >= auto_height ) {
					auto_height = $( this ).outerHeight();
				}
			} );
			$( this ).find( ".auto_height_item" ).css( "min-height", ( auto_height + 30 ) );
		} );
});


document.addEventListener("DOMContentLoaded", function(e) {
  let urlAtual = window.location.href
  menuUrls = document.getElementsByClassName('nav-link')
  tamanho = menuUrls.length

  for(i = 0; i < tamanho; i++) {
    if(menuUrls[i].href == urlAtual) {
      menuUrls[i].classList.add('active')
    }    
  }

});