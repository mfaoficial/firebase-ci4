importScripts('https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.2/firebase-messaging.js');

const firebaseConfig = {
    apiKey: "AIzaSyDVAy7er6M7-NKHUAOH6kyCxu6O_yUf1no",
    authDomain: "ci4-firebase-7243a.firebaseapp.com",
    projectId: "ci4-firebase-7243a",
    storageBucket: "ci4-firebase-7243a.appspot.com",
    messagingSenderId: "264081026338",
    appId: "1:264081026338:web:ae7e2ab2883016971ac97b",
    measurementId: "G-8LMXW8XZRP"
};

firebase.initializeApp(firebaseConfig);

const fcm = firebase.messaging();
fcm.getToken({
    vapidKey: 'BD6zRITniH1JCIl984gaKVCIutH526ubgYPfJJd6sX-3l_yCv-pebVe5Dpm32xRWjaeAKYqb5VfEfEs74OoWKyY'
}).then((token) => {
    console.log('getToken: ', token);
});

fcm.onBackgroundMessage((data) => {
    console.log('onBackgroundMessage: ', data);
});