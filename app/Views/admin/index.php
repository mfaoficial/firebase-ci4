<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello</h2>
    <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-messaging.js"></script>
    <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
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
    </script>
</body>
</html>