<html>
<head>
 <title>PROGRAM ENKRIPSI</title>
</head>
<body>
<div align="center">
<form action="vigenere_enkripsi.php" method="get">
  <table border="1">
    <tr>
      <td>
        Text : 
      </td>
      <td>
       <input type="text" name="text">
      </td>
    <tr>
      <td>
        Kata Kunci : 
      </td>
      <td>
        <input type="text" name="key"> 
      </td>  
    </tr>
  </table>
 <input type="submit" value="Enkripsi">
 <input type="submit" formaction="vigenere_deskripsi.php" value="Deskripsi">
</form>