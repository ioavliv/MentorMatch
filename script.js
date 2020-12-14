$(".toggle").click(function() {
    $(".col-sm-6").toggleClass( "d-none" );
  });

  $('a').click(function (event) {
    event.preventDefault();
  });

  if(document.title == "Mentee"){
    $(".Mentee").removeClass( "d-none" );
  }
  if(document.title == "Mentor"){
    $(".Mentor").removeClass( "d-none" );
  }

  