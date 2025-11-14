<?php
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/includes/admin_header.php');
?>

<main class="bg-secondary w-[calc(100vw-320px)] flex flex-col p-20 gap-5">
    <div class="flex w-full gap-5 justify-center">
        <section class="bg-primary/90 w-140 flex flex-col pt-5 py-10 gap-5 items-center shadow-2xl rounded-2xl hover:scale-101 transition-all">
            <h2 class="text-center text-text font-latobold text-2xl">Maria Vicente</h2>
            <form action="">
                <label for="upload-image">
                    <div class="rounded-full">
                        <img src="/student023/shop/assets/images/customers/default.png" width="300" alt="" class="cursor-pointer hover:opacity-40 transition-all">
                    </div>

                </label>
                <input type="file" id="upload-image" class="hidden">
            </form>
        </section>
        <section class="col-start-2 col-end-4 row-start-1 w-220 bg-primary/90 shadow-2xl rounded-2xl flex flex-col hover:scale-101 transition-all p-5">
            <h3 class="text-text text-2xl font-latobold">Account Details</h3>
            <form id="form-update-customer-info" action="" class="flex gap-10 py-7 px-10">
                <div class="flex flex-col gap-5 w-80">
                    <div class="flex flex-col">
                        <label for="first-name" class="text-text font-latoregular">Name</label>
                        <input type="text" id="first-name" name="firstName" class="border-b-1 outline-none border-text text-text font-latoregular">
                    </div>
                    <div class="flex flex-col">
                        <label for="nif" class="text-text font-latoregular">NIF</label>
                        <input type="text" name="NIF" id="nif" class="border-b-1 outline-none border-text text-text font-latoregular">
                    </div>
                    <div class="flex flex-col">
                        <label for="phone" class="text-text font-latoregular">Phone</label>
                        <input type="text" id="phone" name="phone" class="border-b-1 outline-none border-text text-text font-latoregular">
                    </div>
                </div>
                <div class="flex flex-col gap-5 w-80">
                    <div class="flex flex-col">
                        <label for="last-name" class="text-text font-latoregular">Last Name</label>
                        <input type="text" id="last-name" name="lastName" class="border-b-1 outline-none border-text text-text font-latoregular">
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-text font-latoregular">Email*</label>
                        <input type="email" id="email" name="email" class="border-b-1 outline-none border-text text-text font-latoregular" required>
                    </div>
                </div>
            </form>
            <div class="flex justify-center pt-5">
                <button class="bg-btn text-text font-latobold px-10 py-2 cursor-pointer hover:opacity-60 rounded-sm" type="submit" form="form-update-customer-info">Save</button>
            </div>
        </section>
    </div>
    <section class="bg-primary/90 w-200 h-50 rounded-2xl shadow-2xl hover:scale-101 transition-all p-5">
        <h2 class="text-text text-2xl font-latobold pb-5">Edit Addresses</h2>
        <div class="border border-black rounded bg-text w-50 p-2 hover:opacity-60">
            <button id="button-no-address" class="cursor-pointer"><i class="fa-regular fa-plus"></i>Añade una direccion</button>
        </div>
    </section>
    <div id="container-no-address" class="absolute hidden h-200 w-150 bg-primary/98 top-18 right-100 z-30000 flex-col p-5 gap-10">
        <h3 class="text-text font-latobold text-xl">Add address</h3>
        <form action="" class="flex flex-col gap-10">
            <div class="flex flex-col">
                <input type="text" id="address-number" name="firstName" placeholder="Address and number *" class="pl-5 border-b-1 h-12 rounded outline-none bg-text font-latoregular" required>
            </div>
            <div class="flex flex-col">
                <input type="text" id="address-number" name="firstName" placeholder="Additional data" class="pl-5 border-b-1 h-12 rounded outline-none bg-text font-latoregular">
            </div>
            <div>
                <label for="additional-data" class="text-text font-latoregular">Additional Data</label>
                <input type="text" id="additional-data" name="firstName" class="border-b-1 outline-none border-text text-text font-latoregular">
            </div>
            <div class="flex">

            </div>
        </form>
    </div>
    <script src="/student023/shop/js/my_profile.js"></script>
</main>


<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/includes/footer.php'); ?>