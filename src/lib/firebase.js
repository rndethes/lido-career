import { initializeApp } from "firebase/app";
import {
  getMessaging,
  getToken,
  onMessage,
  deleteToken,
} from "firebase/messaging";

import axios from "axios";

const firebaseConfig = {
  apiKey: "AIzaSyDp1V3q9jvV5TA-uIL4wBmjkHXWJjYGSbs",
  authDomain: "lido-career-notification.firebaseapp.com",
  projectId: "lido-career-notification",
  storageBucket: "lido-career-notification.appspot.com",
  messagingSenderId: "468852111537",
  appId: "1:468852111537:web:6efa0d2b75117e3f188a90",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Firebase Cloud Messaging and get a reference to the service
const messaging = getMessaging(app);

// On Message Handler
onMessage(messaging, (payload) => {
  const noteTitle = payload.notification.title;
  const noteOptions = {
    body: payload.notification.body,
    icon: payload.notification.icon,
    url: site_url(),
  };
  new Notification(noteTitle, noteOptions);
});

function sendTokenToServer(user_id, token) {
  if (!isTokenSentToServer()) {
    console.log("Sending token to server...");

    const form = new FormData();

    form.append("user_id", user_id);
    form.append("token", token);

    axios
      .post(site_url("notification/save-token"), form)
      .then((response) => {
        console.log("Token sent to server ");

        setTokenSentToServer(true);
      })
      .catch((error) => {
        console.error(error);
        setTokenSentToServer(false);
      });
  } else {
    console.log(
      "Token already sent to server so won't send it again " +
        "unless it changes"
    );
  }
}

function clientDeleteToken() {
  // Delete registration token.
  getToken(messaging)
    .then((currentToken) => {
      deleteToken(messaging)
        .then(() => {
          console.log("Token deleted.");
          setTokenSentToServer(false);
          // Once token is deleted update UI.
          initFirebaseMessagingRegistration();
        })
        .catch((err) => {
          console.log("Unable to delete token. ", err);
        });
    })
    .catch((err) => {
      console.log("Error retrieving registration token. ", err);
    });
}

function isTokenSentToServer() {
  return window.localStorage.getItem("sentToServer") === "1";
}

function setTokenSentToServer(sent) {
  window.localStorage.setItem("sentToServer", sent ? "1" : "0");
}

function requestPermission() {
  console.log("Requesting permission...");
  Notification.requestPermission().then((permission) => {
    if (permission === "granted") {
      console.log("Notification permission granted.");

      initFirebaseMessagingRegistration();
    } else {
      console.log("Unable to get permission to notify.");
    }
  });
}

function initFirebaseMessagingRegistration() {
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker
      .register(site_url("firebase-messaging-sw.js"))
      .then((registration) => {
        getToken(messaging, {
          serviceWorkerRegistration: registration,
          vapidKey:
            "BNDs88fkv82h_8WQcM4emkKA1Pqk-Xn2AILDMPWjl1wd1tjpVy_p7Kl78binbcV6S62ed7ay-23jk3T9OUNL1a4",
        })
          .then((currentToken) => {
            if (currentToken) {
              const user_id = localStorage.getItem("user_id");
              sendTokenToServer(user_id, currentToken);
            } else {
              // Show permission request UI
              console.log(
                "No registration token available. Request permission to generate one."
              );

              setTokenSentToServer(false);
            }
          })
          .catch((err) => {
            console.log("An error occurred while retrieving token. ", err);
            setTokenSentToServer(false);
          });
      });
  } else {
    console.error("Service worker not supported.");
  }
}

if (
  typeof WINDOW_SKIP_FIREBASE !== "undefined" &&
  WINDOW_SKIP_FIREBASE === true
) {
  console.info("Skip firebase service init...");
} else {
  initFirebaseMessagingRegistration();
}
