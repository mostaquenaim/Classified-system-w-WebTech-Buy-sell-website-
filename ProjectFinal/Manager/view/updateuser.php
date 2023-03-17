
<html>
<head><link rel="stylesheet" type="text/css" href="../css/mycss.css"></head>
<body>
    <center>
    <form>
        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#2ECC71">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="10" cellspacing="0" align="center">
                    <tr>
                        <td>
                        <font face="arial" size="4" >    
                        <strong>Update / View   information</strong>
                        </font>
                    </td>
                        <td width="30%">&nbsp;</td>
                        <td><a href="">
                        <font face="arial" size="3">
                        <a href="../view/pageone.php">UPDATE</a> 
                        </font>
                        </a>
                        </td>
                        <td>
                        <font face="arial" size="3">    
                        <a href="../view/mypage.php">BACK </a>
                        </font>
                        </td>
                        <!-- delete
                        <td>
                            <form action ="" method="POST">
                                <button type="submit" name="user_delete" value="<?= $row['M_fName'];?>">Delete User</button>

                            </form>
                        </td> -->


                        
    <br/>
</tr>
</table>
</td>
</tr>
</table>
<tr>
            <!-- <td>
                <table border="0" width="85%" cellpadding="10" cellspacing="0" align="center">
                    <tr>
                    <td width="55%" height="90">
                    
        
                    <textarea cols="35" rows="2"> </textarea> 
                    <br></br>
            
                    <input type="button" placeholder="search..." face="arial" size="4" color="#ffffff" value="search"> 
    </td>
                    <td  height="100" align="center" valign="middle" colsapn="2">
                    </table> -->
</form>  


<br>
<label>Find any User</label>

  <input type="text" id="Email" >
  <br>
  <button onclick="showmyuser()">Search</button>

<p id="mytext"></p>
 

<script src="../js/myscript.js"></script>
</center>
</body>
</html>
    