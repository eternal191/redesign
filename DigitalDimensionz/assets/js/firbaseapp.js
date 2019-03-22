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


$('.nav-icon.linea-music-bell').on('click', function(e){
    messaging.requestPermission().then(function () {
        return messaging.getToken().then(function (token) {
            console.log("here is the token %d", token);
            console.log(token);
        }).catch(function (err) {
            console.log(err);
        });
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