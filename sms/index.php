<html>
 <body>
   <h1>My SMS form</h1>
   <form method=post action='sendsms.php'>
   <table border=0>
   <tr>
     <td>Recipient</td>
     <td><input type='text' name='recipient'></td>
   </tr>
   <tr>
     <td>Message</td>
     <td><textarea rows=4 cols=40 name='message'></textarea></td>
   </tr>
   <tr>
     <td> </td>
     <td><input type=submit name=submit value=Send></td>
   </tr>
   </table>
   </form>
 </body>
</html>