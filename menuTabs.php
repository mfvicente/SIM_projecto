<?php
//Faltam as brincadeiras de acessos
//Preciso das bases de dados
    echo "<style>
menu, menu_tab {
    border: 1px solid black;
    border-collapse: collapse;
}
#menu_tab {
    padding: 8px;
}
</style>";

    echo "<table align = 'left' border = '1' id = 'menu'><TR>";
//Para novas celulas: echo "<TD id = 'menu_tab'><a href='index.php?op=home'>Home</a></TD>";
//Mudar op e palavra
    echo "<TD id = 'menu_tab'><a href='index.php?op=home'>Home</a></TD>";
    echo "<TD id = 'menu_tab'><a href='index.php?op=login'>Login</a></TD>";
    echo "<TD id = 'menu_tab'><a href='index.php?op=reg_paciente'>Registar Paciente</a></TD>";
    echo "<TD id = 'menu_tab'><a href='index.php?op=reg_staff'>Registar Staff</a></TD>";
    echo "<TD id = 'menu_tab'><a href='index.php?op=med_inf'>Informacoes Medicas</a></TD>";
//Podemos ter condicoes daqui para a frente para se saber quem e que esta com login feito
//...
    echo "</TR></table>";
?>