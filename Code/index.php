<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- darstelungsbefehl -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--<meta name="description" content="Einführung in HTML für Anfänger">     das ist kleine Beschreibung für Suchmaschienen  -->
    <link rel="stylesheet" href="https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css"> <!-- CSS-datei einbinden -->
    <title>Einführung in HTML</title> <!-- Seitentitel -->
    <!-- <input type='text' name='Name' placeholder='Name' required> -->
    <!-- <input type='password' name='password' placeholder=' min. 8 Zeichen' minlength='8' required> -->

</head>
<body>
    <main>
        <header>
            <a href="https://www.haw-hamburg.de" class="logo"><img title="Hochschule für Angewandte Wissenschaften Hamburg" 
                alt="Hochschule für Angewandte Wissenschaften Hamburg" 
                src="HAW_Marke_weiss_RGB.svg" width="191" height="70"></a> 
            <nav class = "navigation">
                <a href="index.php?page=start">Start</a>
                <a href="index.php?page=contact">Kontakte</a>
                <a href="index.php?page=anmelden">Anmelden</a>
                <a href="index.php?page=help">Hilfe</a>
            </nav>
        </header>
    
            <!-- Inhaltsbereich -->
        <section class="sel1">
                <div class="main1">
                    <?php
                    echo "
                        <div class='text'>
                            <h1 class='h1'>Bitte anmelden</h1>
                        </div>
                        
                        <div class='name'>
                            <form action ='?page=contacts' methode ='POST'>
                                <label class='lebel1'>Name: </label>
                                <td>
                                    <input type='text' id='name' placeholder='Name' required class='input_text'> 
                                </td>
                            </form>
                        </div>
    
                        <div class='id'>  
                            <form action ='?page=contacts' methode ='POST'>      
                                <label class='lebel2'>Password: </label>
                                <input type='password' id='password' placeholder=' min. 8 Zeichen' minlength='8' required>
                            </form>
                        </div>
    
                        <div class='button'>
                            <form action ='?page=contacts' methode ='POST'>
                                <input type='button' id= 'but' style='height: 250px; width: 100px;' value='anmelden'>
                                <a href='#' class='classa'> password vergessen? </a>
                            </form>
                        </div> ";
                    ?>
                </div>
            </section>
    
        <form class="form1"></form>
    
        <section class="sel2" id="cars2">
            <form class="loginF" name="loginF" method="post" action="/login.do">
            <table cellspacing="5" cellpadding="0">
            <tbody>
            <div>
            <tr>
                <td>
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr valign="top">
                                <td>
                                    <table width="300" cellspacing="0" cellpadding="0" class="tablefrem">
                                        <tbody>
                                            <tr>
                                                <td class="Anmeldungtd">Anmeldung</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="300" cellspacing="0" cellpadding="0" class="tablecontent">
                                        <tbody>
                                            <tr >
                                                <td align="center" bgcolor="#ffffff" height="30" >Name</td>
                                                <td align="center" bgcolor="#ffffff" height="30">
                                                <input type='text' id='name2' placeholder='Name' required class='input_text'>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="5"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" bgcolor="#ffffff" height="30">Password</td>
                                                <td align="center" bgcolor="#ffffff" height="30">
                                                <input type='password' id='password2' placeholder=' min. 8 Zeichen' minlength='8' required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="right" bgcolor="#ffffff">
                                                    <div class="button1 button_right button_active">
                                                        <div class="button_a_left">&nbsp;</div>
                                                        <div class="button_a_center">
                                                            <a id="login_link" href="#"
                                                                class="button_link">login
                                                            </a>
                                                        </div>
                                                        <div class="button_a_right">&nbsp;</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td> 
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr> 
            </div>                   
            </tbody>
            </table>
            </form>   
        </section>
    
        <form class="form1">
    
        </form>

        <section class="selJS">
            <div class="main3">
                <input type="number" id="Eingabe" value="0" size="3">
                <button type="button" id="los">Quadrat errechnen</button>
            </div>
        </section>
    
    
        <!-- Fußbereich -->
        <footer class="site-footer">
            <nav class="meta-nav">
                <a href="index.php?page=Impressum"><img src="img/policy.svg"> Impressum</a>
                <a href="index.php?page=Datenschultz"><img src="img/security.svg"> Datenschultz</a>
                <a href="index.php?page=Kontakt"><img src="img/contact.svg"> Kontakt</a>
            </nav>
        </footer>
        <script src="skript.js"></script>
    </main>
</body>
</html>