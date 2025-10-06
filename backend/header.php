<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administracion</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/student023/shop/frontend/css/common.css">
</head>
<body>
        <header class="flex flex-row items-center justify-between w-screen bg-gray-600">
        <div class="">
            <img src="/student023/shop/frontend/images/LogoClar.png" alt="" class="w-30">
        </div>
        <div class="flex items-center">
            <button class="border-black border-3 rounded-xl px-2 text-white" onclick="window.location.href='/student023/shop/backend/forms/form_product_insert.php'">Añadir producto</button>
            <button class="border-black border-3 rounded-xl px-2 text-white">Añadir cliente</button>
            <button class="border-black border-3 rounded-xl px-2 text-white">Añadir orden</button>
        </div>
   </header>
   