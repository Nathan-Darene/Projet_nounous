<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDKe_Nk3iKTMXl0bc7MVsAPVBu7cQkHMPo",
    authDomain: "messagerie-45aed.firebaseapp.com",
    projectId: "messagerie-45aed",
    storageBucket: "messagerie-45aed.appspot.com",
    messagingSenderId: "465592095154",
    appId: "1:465592095154:web:885e8ee17a959114d6d4ab",
    measurementId: "G-KCJ93E9HGJ"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
