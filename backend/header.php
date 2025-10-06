<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administracion</title>
    <link href="/student023/shop/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/student023/shop/fontawesome/css/regular.css" rel="stylesheet">
    <link rel="stylesheet" href="/student023/shop/src/output.css">
</head>

<body>
    <header class="flex flex-row items-center justify-between bg-primary px-5 py-3">
        <div class="cursor-pointer" id="logo">
            <img src="/student023/shop/frontend/images/LogoClar.png" alt="" class="w-30">
        </div>
        <div class="flex gap-10">
                <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50" id="add-product">
                    <i class="fa-regular fa-file text-btn"></i>
                    <p class="text-text">Añadir producto</p>
                </div>
            
                <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50">
                    <i class="fa-regular fa-file text-btn"></i>
                    <p class="text-text">Añadir orden</p>
                </div>

                <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50">
                    <i class="fa-regular fa-file text-btn   "></i>
                    <p class="text-text">Añadir Cliente</p>
                </div>
            </div>
        </div>
    </header>