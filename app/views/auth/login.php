<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Product Management</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        :root {
            --bg-main: #06132f;
            --bg-secondary: #0b2452;
            --card-bg: rgba(255,255,255,0.94);
            --text-main: #172554;
            --text-muted: #64748b;
            --input-bg: #f8fbff;
            --input-border: #dbe4ef;
            --blue: #2563eb;
            --cyan: #06b6d4;
            --button-text: #ffffff;
        }

        body.light-mode {
            --bg-main: #dbeafe;
            --bg-secondary: #eff6ff;
            --card-bg: rgba(255,255,255,0.96);
            --text-main: #172554;
            --text-muted: #64748b;
            --input-bg: #f8fbff;
            --input-border: #cbd5e1;
        }

        body.dark-mode {
            --bg-main: #06132f;
            --bg-secondary: #0b2452;
            --card-bg: rgba(15,23,42,0.90);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --input-bg: rgba(15,23,42,0.75);
            --input-border: rgba(148,163,184,0.25);
        }

        body {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 25px;

            color: var(--text-main);

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(37,99,235,.30),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 80%,
                    rgba(6,182,212,.25),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    var(--bg-main),
                    var(--bg-secondary)
                );

            transition: background .4s ease, color .4s ease;
        }

        /* =========================
           THEME BUTTON
        ========================= */

        .theme-toggle {
            position: fixed;

            top: 22px;
            right: 25px;

            width: 48px;
            height: 48px;

            border-radius: 50%;

            border: 1px solid rgba(255,255,255,.25);

            background: rgba(255,255,255,.12);

            color: white;

            font-size: 20px;

            cursor: pointer;

            backdrop-filter: blur(12px);

            transition: .3s;

            z-index: 10;
        }

        .theme-toggle:hover {
            transform: rotate(15deg) scale(1.08);

            background: rgba(255,255,255,.20);
        }

        /* =========================
           CONTAINER
        ========================= */

        .login-container {
            width: 100%;
            max-width: 430px;

            position: relative;
            z-index: 2;
        }

        .login-card {
            padding: 42px;

            border-radius: 24px;

            background: var(--card-bg);

            border: 1px solid rgba(255,255,255,.25);

            box-shadow:
                0 25px 70px rgba(0,0,0,.30);

            backdrop-filter: blur(18px);

            transition:
                background .4s ease,
                transform .3s ease,
                box-shadow .3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 30px 80px rgba(0,0,0,.40);
        }

        /* =========================
           LOGO
        ========================= */

        .logo {
            width: 70px;
            height: 70px;

            margin: 0 auto 22px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            color: white;

            font-size: 22px;
            font-weight: 800;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #06b6d4
                );

            box-shadow:
                0 10px 35px rgba(37,99,235,.40);
        }

        h1 {
            text-align: center;

            color: var(--text-main);

            font-size: 30px;

            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;

            color: var(--text-muted);

            font-size: 14px;

            margin-bottom: 32px;
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;

            color: var(--text-main);

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 8px;
        }

        input {
            width: 100%;

            height: 52px;

            padding: 0 16px;

            border: 1px solid var(--input-border);

            border-radius: 12px;

            outline: none;

            background: var(--input-bg);

            color: var(--text-main);

            font-size: 14px;

            transition: .25s;
        }

        input::placeholder {
            color: var(--text-muted);
        }

        input:focus {
            border-color: #06b6d4;

            box-shadow:
                0 0 0 4px rgba(6,182,212,.10);
        }

        /* =========================
           LOGIN BUTTON
        ========================= */

        .login-btn {
            width: 100%;

            height: 53px;

            border: none;

            border-radius: 12px;

            color: white;

            font-size: 15px;

            font-weight: 700;

            cursor: pointer;

            background:
                linear-gradient(
                    100deg,
                    #2563eb,
                    #06b6d4,
                    #7c3aed
                );

            background-size: 200% auto;

            box-shadow:
                0 10px 25px rgba(37,99,235,.30);

            transition: .3s;
        }

        .login-btn:hover {
            background-position: right center;

            transform: translateY(-2px);

            box-shadow:
                0 15px 35px rgba(6,182,212,.30);
        }

        /* =========================
           REGISTER
        ========================= */

        .register-text {
            text-align: center;

            margin-top: 25px;

            color: var(--text-muted);

            font-size: 14px;
        }

        .register-text a {
            color: #06b6d4;

            font-weight: 700;

            text-decoration: none;
        }

        .register-text a:hover {
            color: #2563eb;

            text-decoration: underline;
        }

        @media (max-width: 480px) {

            .login-card {
                padding: 32px 25px;
            }

            .theme-toggle {
                top: 15px;
                right: 15px;
            }

        }
    </style>
</head>

<body class="dark-mode">

    <!-- DARK / LIGHT MODE BUTTON -->

    <button
        type="button"
        class="theme-toggle"
        id="themeToggle"
        aria-label="Toggle dark and light mode"
    >
        ☀️
    </button>


    <div class="login-container">

        <div class="login-card">

            <div class="logo">
                PM
            </div>

            <h1>
                Welcome Back
            </h1>

            <p class="subtitle">
                Login to your Product Management account
            </p>


            <!-- ORIGINAL LOGIN FUNCTION -->

            <form
                action="<?=site_url('auth/login');?>"
                method="post"
            >

                <div class="form-group">

                    <label>
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Username"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="login-btn"
                >
                    Login
                </button>

            </form>


            <!-- ORIGINAL REGISTER LINK -->

            <p class="register-text">

                Need an account?

                <a href="<?=site_url('auth/register');?>">
                    Register
                </a>

            </p>

        </div>

    </div>


    <!-- THEME SCRIPT -->

    <script>

        const themeToggle =
            document.getElementById("themeToggle");

        const body =
            document.body;

        themeToggle.addEventListener("click", function () {

            if (body.classList.contains("dark-mode")) {

                body.classList.remove("dark-mode");

                body.classList.add("light-mode");

                themeToggle.textContent = "🌙";

            } else {

                body.classList.remove("light-mode");

                body.classList.add("dark-mode");

                themeToggle.textContent = "☀️";

            }

        });

    </script>

</body>
</html>