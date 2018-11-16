importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js');




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

