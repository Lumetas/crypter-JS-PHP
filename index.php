<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>document</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body>
     <script src='ende.js'></script>
<script src='aes.js'></script>
     <script src='md5.js'></script>
<script src='base64.js'></script>
     <script src='ajax.js'></script>



     



<script>
     let str = 'пошёл нахуй, !"№;%:?*()_+';
let key = '12345';
        let a = JSON.stringify(encrypt(str, key));
a = encodeURI(a);

   lumAjax({
           url:'decrypt.php?data=' + a + '&key=' + encodeURI(key),
    success: function(data){
        if (data !== ''){

            console.log(data);
        }
    }

	});


        </script>
     </body>
</html>
