importScripts(
  "https://www.gstatic.com/firebasejs/9.2.0/firebase-app-compat.js"
);
importScripts(
  "https://www.gstatic.com/firebasejs/9.2.0/firebase-messaging-compat.js"
);

firebase.initializeApp({
  apiKey: "AIzaSyDp1V3q9jvV5TA-uIL4wBmjkHXWJjYGSbs",
  authDomain: "lido-career-notification.firebaseapp.com",
  projectId: "lido-career-notification",
  storageBucket: "lido-career-notification.appspot.com",
  messagingSenderId: "468852111537",
  appId: "1:468852111537:web:6efa0d2b75117e3f188a90",
  measurementId: "G-VXB58PPQZR",
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
  console.log(
    "[firebase-messaging-sw.js] Received background message ",
    payload
  );
  // Customize notification here
  const notificationTitle = payload.notification.title;
  const notificationOptions = {
    body: payload.notification.body,
    icon: payload.notification.icon,
  };

  self.registration.showNotification(notificationTitle, notificationOptions);
});
