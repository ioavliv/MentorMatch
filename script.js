$(".toggle").click(function() {
    $(".col-sm-6").toggleClass( "d-none" );
  });

  $('.toggle').click(function (event) {
    event.preventDefault();
  });

  $("#type").change(function(){
    var type = this.value;
  if(type=="Mentor")
    $(".topics").removeClass("d-none")
    if(type=="Mentee")
    $(".topics").addClass("d-none")
 });

  if(document.title == "Mentee"){
    $(".Mentee").removeClass( "d-none" );
  }
  if(document.title == "Mentor"){
    $(".Mentor").removeClass( "d-none" );
  } 
