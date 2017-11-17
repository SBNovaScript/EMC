( function( $ ) {
  wp.customize( 'about_title', function( value ) {
    value.bind( function( to ) {
      $( '.about h1' ).text( to );
    } );
  } );
  wp.customize( 'about_image', function( value ) {
    value.bind( function( to ) {
      if( to == '' )
      {
        $('.about img').hide();
      }
      else
      {
        $('.about img').show();
        $('.about img').attr( 'src', to );
      }
    } );
  });
  wp.customize( 'about_description', function( value ) {
    value.bind( function( to ) {
      $( '.about .details-content p' ).text( to );
    } );
  } );
} )( jQuery );