<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Product Management</title>

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
            --card-bg: rgba(15, 23, 42, 0.90);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --input-bg: rgba(15, 23, 42, 0.75);
            --input-border: rgba(148, 163, 184, 0.25);
        }

        /* LIGHT MODE */
        body.light-mode {
            --bg-main: #dbeafe;
            --bg-secondary: #eff6ff;
            --card-bg: rgba(255, 255, 255, 0.96);
            --text-main: #172554;
            --text-muted: #64748b;
            --input-bg: #f8fbff;
            --input-border: #cbd5e1;
        }

        /* DARK MODE */
        body.dark-mode {
            --bg-main: #06132f;
            --bg-secondary: #0b2452;
            --card-bg: rgba(15, 23, 42, 0.90);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --input-bg: rgba(15, 23, 42, 0.75);
            --input-border: rgba(148, 163, 184, 0.25);
        }

        /* =========================
           BODY
        ========================= */

        body {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px;

            color: var(--text-main);

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(37, 99, 235, 0.35),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 80%,
                    rgba(6, 182, 212, 0.25),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    var(--bg-main),
                    var(--bg-secondary)
                );

            transition:
                background 0.4s ease,
                color 0.4s ease;

            overflow: hidden;
        }

        /* =========================
           FLOATING BACKGROUND
        ========================= */

        body::before {
            content: "";

            position: fixed;

            width: 350px;
            height: 350px;

            top: -120px;
            left: -120px;

            border-radius: 50%;

            background: #2563eb;

            filter: blur(100px);

            opacity: 0.25;

            animation: floatingBlue 8s ease-in-out infinite alternate;

            pointer-events: none;
        }

        body::after {
            content: "";

            position: fixed;

            width: 350px;
            height: 350px;

            right: -120px;
            bottom: -120px;

            border-radius: 50%;

            background: #06b6d4;

            filter: blur(100px);

            opacity: 0.25;

            animation: floatingCyan 8s ease-in-out infinite alternate;

            pointer-events: none;
        }

        @keyframes floatingBlue {
            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(50px, 40px);
            }
        }

        @keyframes floatingCyan {
            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(-50px, -40px);
            }
        }

        /* =========================
           THEME BUTTON
        ========================= */

        .theme-toggle {
            position: fixed;

            top: 22px;
            right: 25px;

            width: 50px;
            height: 50px;

            border-radius: 50%;

            border: 1px solid rgba(255, 255, 255, 0.25);

            background: rgba(255, 255, 255, 0.12);

            color: white;

            font-size: 21px;

            cursor: pointer;

            backdrop-filter: blur(12px);

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.15);

            transition:
                transform 0.3s ease,
                background 0.3s ease;

            z-index: 20;
        }

        .theme-toggle:hover {
            transform: rotate(20deg) scale(1.1);

            background: rgba(255, 255, 255, 0.22);
        }

        /* =========================
           REGISTER CONTAINER
        ========================= */

        .register-container {
            width: 100%;
            max-width: 450px;

            position: relative;

            z-index: 5;
        }

        /* =========================
           REGISTER CARD
        ========================= */

        .register-card {
            padding: 42px;

            border-radius: 26px;

            background: var(--card-bg);

            border: 1px solid rgba(255, 255, 255, 0.20);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.35),
                0 0 50px rgba(37, 99, 235, 0.10);

            backdrop-filter: blur(20px);

            transition:
                background 0.4s ease,
                transform 0.3s ease,
                box-shadow 0.3s ease;

            animation: cardAppear 0.7s ease;
        }

        .register-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.40),
                0 0 60px rgba(37, 99, 235, 0.18);
        }

        @keyframes cardAppear {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           LOGO
        ========================= */

        .logo {
            width: 72px;
            height: 72px;

            margin: 0 auto 22px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 21px;

            color: white;

            font-size: 23px;
            font-weight: 800;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #06b6d4
                );

            box-shadow:
                0 12px 35px rgba(37, 99, 235, 0.40);

            animation: logoGlow 3s ease-in-out infinite;
        }

        @keyframes logoGlow {
            0% {
                box-shadow:
                    0 12px 35px rgba(37, 99, 235, 0.35);
            }

            50% {
                box-shadow:
                    0 12px 45px rgba(6, 182, 212, 0.50);
            }

            100% {
                box-shadow:
                    0 12px 35px rgba(37, 99, 235, 0.35);
            }
        }

        /* =========================
           TITLE
        ========================= */

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

            line-height: 1.5;

            margin-bottom: 30px;
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

        input,
        select {
            width: 100%;

            height: 53px;

            padding: 0 16px;

            border: 1px solid var(--input-border);

            border-radius: 12px;

            outline: none;

            background: var(--input-bg);

            color: var(--text-main);

            font-size: 14px;

            transition:
                border-color 0.25s ease,
                box-shadow 0.25s ease,
                transform 0.25s ease,
                background 0.25s ease;
        }

        input::placeholder {
            color: var(--text-muted);
        }

        input:hover,
        select:hover {
            border-color: rgba(6, 182, 212, 0.55);
        }

        input:focus,
        select:focus {
            border-color: #06b6d4;

            background: var(--input-bg);

            box-shadow:
                0 0 0 4px rgba(6, 182, 212, 0.10),
                0 5px 20px rgba(6, 182, 212, 0.08);

            transform: translateY(-1px);
        }

        select {
            cursor: pointer;
        }

        /* =========================
           REGISTER BUTTON
        ========================= */

        .register-btn {
            width: 100%;

            height: 54px;

            margin-top: 5px;

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
                    #7c3aed,
                    #2563eb
                );

            background-size: 300% auto;

            box-shadow:
                0 10px 28px rgba(37, 99, 235, 0.30);

            transition:
                background-position 0.5s ease,
                transform 0.25s ease,
                box-shadow 0.25s ease;
        }

        .register-btn:hover {
            background-position: right center;

            transform: translateY(-2px);

            box-shadow:
                0 15px 35px rgba(6, 182, 212, 0.35);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        /* =========================
           LOGIN LINK
        ========================= */

        .login-text {
            text-align: center;

            margin-top: 25px;

            color: var(--text-muted);

            font-size: 14px;
        }

        .login-text a {
            color: #06b6d4;

            font-weight: 700;

            text-decoration: none;

            transition: 0.2s;
        }

        .login-text a:hover {
            color: #2563eb;

            text-decoration: underline;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 480px) {

            body {
                padding: 20px;
                overflow-y: auto;
            }

            .register-card {
                padding: 32px 25px;
            }

            .theme-toggle {
                width: 45px;
                height: 45px;

                top: 15px;
                right: 15px;
            }

            h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body class="dark-mode">

    <!-- LIGHT / DARK MODE BUTTON -->

    <button
        type="button"
        class="theme-toggle"
        id="themeToggle"
        aria-label="Toggle dark and light mode"
    >
        ☀️
    </button>


    <div class="register-container">

        <div class="register-card">

            <!-- LOGO -->

            <div class="logo">
                PM
            </div>


            <!-- TITLE -->

            <h1>
                Create Account
            </h1>

            <p class="subtitle">
                Register for the Product Management System
            </p>


            <!-- ORIGINAL REGISTER FORM -->

            <form
                action="<?=site_url('auth/register');?>"
                method="post"
            >

                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Username"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="role">
                        Account Role
                    </label>

                    <select
                        name="role"
                        id="role"
                    >

                        <option value="user">
                            User
                        </option>

                        <option value="admin">
                            Admin
                        </option>

                    </select>

                </div>


                <button
                    type="submit"
                    class="register-btn"
                >
                    Register
                </button>

            </form>


            <!-- ORIGINAL LOGIN LINK -->

            <p class="login-text">

                Already have an account?

                <a href="<?=site_url('auth/login');?>">
                    Log in
                </a>

            </p>

        </div>

    </div>


    <!-- DARK / LIGHT MODE SCRIPT -->

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

