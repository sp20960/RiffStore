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

<body>
    <header class="flex flex-row items-center justify-between bg-primary px-10 py-3">
        <div class="cursor-pointer" id="logo">
            <img src="/student023/shop/frontend/images/brand/logo_claro.png" alt="" class="w-10">
        </div>
        <div class="flex gap-5">
            <div class="flex items-center justify-center cursor-pointer bg-secondary rounded-md gap-1 hover:opacity-50 w-45" id="manage-products">
                <i class="fa-regular fa-folder-open text-btn"></i>
                <p class="text-text">Gestionar productos</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-client">
                <i class="fa-regular fa-user text-btn"></i>
                <p class="text-text">Gestionar clientes</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-product">
                <i class="fa-regular fa-clipboard text-btn"></i>
                <p class="text-text">Gestionar ordenes</p>
            </div>
        </div>
        
    </header>