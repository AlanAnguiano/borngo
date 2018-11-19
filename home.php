<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/toolbar.css">
    <title>Borngo</title>
</head>
<body>
    <div class="global">
        <!--Agregar toda la clase Toolbar a un componente externo php para incluirlo en mas lados o con react-->
        <div class="toolbar">
            <div class="logo">Borngo</div>
            <div class="search">
                <div class="searchBox">
                    <input placeholder="Buscar"class="input-box" type="search" name="searchPlace">
                    <div class="results"></div>
                </div>
            </div>
            <div class="menuOptions"> 
                <nav>
                    <ul>
                        <li>Favoritos</li>
                        <li>Mensajes</li>
                        <li>Agregar</li>
                        <li>Visitados</li>
                    </ul>
                </nav>
            </div>
            <div class="profile">
                <div class="icon-profile">
                    <img src="assets/img/profile.png" alt="" width="100%" height="100%">
                </div>
                <!--SE Agregara esto cuando se tenga completa la pagina
                <div class="profile-options">
                
            
                </div>
                -->
            </div>
        </div>
        <!--termina clase toolbar-->
        <div class="mainContent">
            <div class="dashboard">
                <div class="containerTags">
                    <div class="tag">Colima<div class="closeTag">&times</div></div>
                </div>

                <div class="content">
                    <div class="feed">

                    </div>
                    <div class="liked">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>