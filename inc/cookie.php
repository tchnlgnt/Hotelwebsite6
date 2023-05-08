<div id="cookie-consent">
  <p>We use cookies to ensure you get the best experience on our website. By continuing to use our site, you consent to our use of cookies.</p>
  <button id="accept-cookies-btn">Accept Cookies</button>
</div>

<style>

  #cookie-consent {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #eee;
  padding: 10px;
  text-align: center;
  z-index: 9999;
}

#cookie-consent p {
  margin: 0;
  font-size: 14px;
  line-height: 1.4;
  color: #555;
  margin-right: 10px;
  display: inline-block;
}

#accept-cookies-btn {
  background-color: #202A44;
  color: #fff;
  border: none;
  padding: 5px 10px;
  font-size: 14px;
  cursor: pointer;
}

#cookie-consent button:hover {
  color: #daa520;
}

</style>

<script>

const cookieConsent = document.getElementById("cookie-consent");
const acceptCookiesBtn = document.getElementById("accept-cookies-btn");

acceptCookiesBtn.addEventListener("click", () => {
  localStorage.setItem("cookiesAccepted", "true");
  cookieConsent.style.display = "none";
});

const cookiesAccepted = localStorage.getItem("cookiesAccepted");

if (cookiesAccepted) {
  cookieConsent.style.display = "none";
} else {
  cookieConsent.style.display = "block";
}


</script>
