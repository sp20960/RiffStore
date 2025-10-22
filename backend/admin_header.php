<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/security/check_session.php');
$nickname = $_SESSION['user']['firstName'] ?? 'guest';
?>
<?php   ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administracion</title>
    <link href="/student023/shop/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/student023/shop/fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="/student023/shop/src/output.css">
    <link rel="shortcut icon" href="/student023/shop/frontend/images/brand/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex">
    <header class="flex flex-col items-center bg-primary px-10 py-10 min-h-screen">
        <div class="cursor-pointer" id="logo">
            <img src="/student023/shop/frontend/images/brand/logo_claro.png" alt="" class="w-10">
        </div>
        <div class="flex flex-col gap-5 pt-10">
            <div class="flex items-center justify-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-50" id="manage-products">
                <i class="fa-regular fa-folder-open text-btn"></i>
                <p class="text-text">Gestionar productos</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-50" id="add-client">
                <i class="fa-regular fa-user text-btn"></i>
                <p class="text-text">Gestionar clientes</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-50" id="add-product">
                <i class="fa-regular fa-clipboard text-btn"></i>
                <p class="text-text">Gestionar ordenes</p>
            </div>
            <div>
                <h1> <?php echo '<p class="text-text">'.'Hola '.$nickname.'</p>' ?></h1>
            </div>
        </div>  
    </header>