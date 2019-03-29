<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prototyp</title>

    <style>

      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
      }

      /* latin-ext */
      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }
      * {
        font-family: Roboto;
      }
      .main {
        display: block;
        margin-left: auto;
        margin-right: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

      }

      img {
        border: none;
        margin: -50px;
        padding: 0px;
      }

      ul{
        list-style: none;
      }

      nav li{
        display: inline-block;
      }

      nav a {
        color: #000000;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 180%;
        background-color: #DDD;
        box-shadow: 0px 2px 10px #aaaaaa;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 300%);
        padding: 5px 20px 5px 20px;

      }


      form button:hover, form input:hover, nav a:hover, .signup:hover {
        background-color: #CCC;
      }

    </style>
  </head>
  <body>

    <div class="main">
      <img src="/images/faith.png" alt="">

      <nav>
        <ul><li><a href="shop.php">Shop</a></li></ul>
      </nav>

    </div>





  </body>
</html>
