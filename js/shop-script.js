$(document).ready(function()
{

$( "#search-link" ).click(function() {
  $( ".auth" ).slideToggle( 400 );
});
$( "#auth-user" ).click(function() {
  $( "#profile" ).slideToggle( 400 );
});
$("#submit-auth").click(function(){

var auth_login =$("#auth_login").val();
var auth_pass  =$("#auth_password").val();

if (auth_login == "" || auth_login.length>30 )
	{
		$("#auth_login").css("borderColor","#FDB6B6");
		send_login = 'no'
	}
else
	{
		$("#auth_login").css("borderColor","#DBDBDB"); send_login ='yes';
	}

if (auth_pass == "" || auth_pass.length>15 )
	{
		$("#auth_password").css("borderColor","#FDB6B6");
		send_pass = 'no'
	}
else
	{
		$("#auth_password").css("borderColor","#DBDBDB"); send_pass ='yes';
	}

if (send_login =='yes' && send_pass == 'yes')
	{
		$("#submit-auth").hide();

			$.ajax({
				type: "POST",
  				url: "auth.php",
				data: {login:auth_login,password:auth_pass},
				dataType: "html",
				cache: false,
				success: function(data)
				{

				  if (data == true)
				  {
				      location.reload();
				  }
				  else
				  {
				      $("#message-auth").slideDown(400);
				      $("#submit-auth").show();

				  }
				}



			});
	}

});
$('#logout').click(function(){

    $.ajax({
  type: "POST",
  url: "logout.php",
  dataType: "html",
  cache: false,
  success: function(data) {

  if (data == true)
  {
      location.reload();
  }

}
});
});
$( "#select-sort" ).click(function() {
  $( "#sorting-list" ).slideToggle( "slow" );
});
});
