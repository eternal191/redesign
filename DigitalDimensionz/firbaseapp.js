var config = {
    apiKey: "AIzaSyBQr_c1GQBe94jeypqukvJIUtS054nRZR4",
    authDomain: "firetest-32b8b.firebaseapp.com",
    databaseURL: "https://firetest-32b8b.firebaseio.com",
    projectId: "firetest-32b8b",
    storageBucket: "firetest-32b8b.appspot.com",
    messagingSenderId: "451259986637"
};

firebase.initializeApp(config);
const messaging = firebase.messaging();
// Add the public key generated from the console here.
messaging.usePublicVapidKey("BGWENTDjFt3go46YJHeWBndKl4RxpjOhThrKITpfm1GvyO0BHRLrxL0OvO1XVAovQzWs9O1qejobylMezJ7xS0U");


$('.nav-icon.linea-music-bell').on('click', function(e){
    messaging.requestPermission().then(function () {

        if ( isTokenSentToServer() ){
            console.log('token already sent');
        } else {
            return messaging.getToken().then(function (token) {
                window.firekey = token;
                console.log(token);

                saveToken(token);

            }).catch(function (err) {
                console.log(err.browserErrorMessage);
            });
        }
    }).catch(function (err) {
        console.log(err);
    });
});





messaging.onMessage(function (payload) {
    console.log('onMessage', payload);
});

messaging.onTokenRefresh(function(newToken){
    console.log(newToken);
})

function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
}


function isTokenSentToServer() {
    window.localStorage.getItem('sentToServer') === 1;

}

function saveToken(currentToken) {

    $.ajax({
        url:'./DbConnecttwo.php',
        method:'post',
        data:'token=' + currentToken
    }).done(function (result) {
        console.log(result);
    });

}