<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/client/css/bootstrap.min.css" />
    <!-- Login css -->
    <link rel="stylesheet" href="/client/css/login.css" />
    <!-- Main css -->
    <link rel="stylesheet" href="/client/css/main.css" />
    <title>DigiKala Login</title>
</head>
<body>
<main class="d-flex flex-column border p-4 rounded">
    <!-- logo -->
    <div class="text-center">
        <img src="/client/assets/logo.svg" alt="digikala logo" />
    </div>
    <h5 class="my-4 fw-bold">ورود | ثبت‌نام</h5>

    <div class="fs-8 text-black-50">
        <p>سلام !</p>
        <p class="my-3">لطفا شماره موبایل یا ایمیل خود را وارد کنید</p>
    </div>
    <div>
        <form
            action="#"
            method="post"
            class="d-flex flex-column align-items-center justify-content-center gap-3 mb-4">
            <input
                type="text"
                minlength="11"
                maxlength="13"
                name="login"
                placeholder=""
                class="w-100 py-2 rounded-3 border border-danger" />
            <input type="submit" value="ورود" class="w-100 py-2 btn btn-danger" />
        </form>

        <hr />

        <div class="row mb-4">
            <div class="col-6 d-flex justify-content-center">
                <button wire.clicke="redirectToProvider"
                    class="d-flex align-content-center gap-3 py-2 px-3 btn btn-outline-secondary">
                    <p class="d-none d-md-block fs-7 fw-bold">ورود با</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                        </svg>
                    </div>
                </button>
            </div>
        </div>

        <p class="fs-8">
            ورود شما به معنای پذیرش <a href="#">شرایط دیجی کالا</a> و
            <a href="#">قوانین حریم خصوصی </a>است
        </p>
    </div>
</main>
</body>
</html>

