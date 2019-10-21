<!DOCTYPE html> <!-- in this file, you can customize your SEO, CSS, favicon and more -->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="Codeigniter, Metro UI CSS">
		<meta name="author" content="Ronald Avendaño">
		<title>Code Metro - a Custom Codeigniter and Metro UI CSS</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
		<!--METRO CSS-->
		<link href="<?php echo base_url('assets/metro/css/metro-all.css?ver=@@b-version') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/metro/css/schemes/custom.css') ?>" id="color-scheme" rel="stylesheet">
    <style>
        h2 {
            margin-top: 20px;
        }
        .app-bar-menu li {
            list-style: none!important;
        }
    </style>

    <script>
	function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

        function changeSchemeTo(n){
            $("#color-scheme").attr("href", "assets/metro/css/schemes/" + n);
            $("#scheme-name").html(n);
            Metro.utils.addCssRule(Metro.sheet, ".app-bar-menu li", "list-style: none!important;");
			setCookie("scheme", n, 365);
        }


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var scheme = getCookie("scheme");
    if (scheme != "") {
        changeSchemeTo(scheme);
    } else {
        scheme = "";
        if (scheme != "" && scheme != null) {
            setCookie("scheme", scheme, 365);
        }
    }
}		
    </script>
        
	</head>
	<body>
<!--end header.php-->