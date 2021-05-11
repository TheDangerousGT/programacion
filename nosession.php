<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error!</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
</head>
<body>
<script language="JavaScript">
  function redireccionar() {
    setTimeout("location.href='index.php'", 5000);
  }
  </script>
  <script>
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Usuario no encontrado',
  footer: '<a href>¿No tienes una cuenta? Registrate</a>'
})
</script>
<script>
import Swal from 'sweetalert2'
const Swal = require('sweetalert2')
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
</script>
</body>
</html>