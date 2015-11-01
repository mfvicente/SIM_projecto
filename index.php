<?php
    session_start();
?>

<html>
    <head>
        <title> index.html </title>
    </head>
    <body>
        <table border = "1" align = "center" width = "100%">
            <TR height = "100">
                <TD colspan = "2" align = "center"><h1>RetFCT</h1></TD>
            </TR>
            <TR>
                <TD colspan = "2">
                    <?php
                        include('menuTabs.php');
                    ?>
                </TD>
            </TR>
            <TR height = "500">
                <TD width = "85%" valign = "top">
                    <?php
                        if(isset($_GET['op'])){
                            switch($_GET['op']){
                                case 'home':
                                    include('homepage.php');
                                    break;
                                case 'login':
                                    include('login.php');
                                    break;
                                case 'reg_paciente':
                                    include('registPatient.php');
                                    break;
                                case 'med_inf':
                                    include('medicalInf.php');
                                    break;
                                case 'reg_staff':
                                    include('registStaff.php');
                                    break;       
                            }
                        }
                        else
                            include('homepage.php');
                    ?>
                </TD>
                <TD width = "15%"><p>Imagens</p></TD>
            </TR>
            <TR>
                <TD colspan = "2"><p>Mapa Site</p></TD>
            </TR>
        </table>
    </body>
</html>