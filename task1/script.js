function onSignIn(googleUser) {
    var auth2 = gapi.auth2.getAuthInstance();
	if (auth2.isSignedIn.get()) {
		profile = googleUser.getBasicProfile();
		$.ajax({
			url:'action.php',
			method:'POST',
			data:{
					signIn:true,
					profileId:profile.getId(),
					name: profile.getName(),
					email: profile.getEmail()
				},
			success:function(data){
				if(data){
					window.location.href='task1allres.php';
				}
			}
		});
	}
}

function start() {
  gapi.load('auth2', function() {
    auth2 = gapi.auth2.init({
      client_id: '710620814605-4qjftp0t4tbq3m3na3nm9aduorj8cbcm.apps.googleusercontent.com',
      // Scopes to request in addition to 'profile' and 'email'
      //scope: 'additional_scope'
    });
  });
}