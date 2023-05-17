<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/> -->

<!-- Fonts and icons -->
<script src="assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/atlantis.css">
<link rel="stylesheet" href="assets/css/custom.css">

<style>

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

    .window-loading{
        overflow: hidden;
    }

    #loading-container{
        position: absolute;
        display: flex;
        height: 100%;
        width: 100%;
        background-color: white;
        z-index: 9999;
    }
    #loading-screen{
        position: absolute;
        left: 48%;
        top: 48%;
        z-index: 9999;
        text-align: center;
    }
</style>
<link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
