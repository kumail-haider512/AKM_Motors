(function(){
    "use strict";
  
$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 500,
      max: 3000,
      values: [ 1000, 2500 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );

})();//End strict Mode
