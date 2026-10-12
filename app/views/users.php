<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #060b0a;
            --panel: #0c1412;
            --panel-dark: #080e0d;

            --teal: #42d9b0;
            --teal-light: #69e6c5;

            --text: #e7efec;
            --text-soft: #96a7a1;
            --text-muted: #61726c;

            --border: rgba(102, 151, 137, 0.16);
            --border-soft: rgba(102, 151, 137, 0.09);
        }

        /* =========================
           PAGE
        ========================== */

        html {
            min-height: 100%;
        }

        body {
            min-height: 100vh;

            padding: 22px;

            font-family: "DM Sans", "Segoe UI", Arial, sans-serif;

            color: var(--text);

            background:
                radial-gradient(
                    circle at 12% 8%,
                    rgba(66, 217, 176, 0.075),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 91% 88%,
                    rgba(66, 217, 176, 0.045),
                    transparent 28%
                ),
                linear-gradient(
                    145deg,
                    #050908 0%,
                    #09110f 52%,
                    #050908 100%
                );

            overflow-x: hidden;
        }

        /* Subtle background circles */

        body::before {
            content: "";

            position: fixed;

            width: 540px;
            height: 540px;

            top: -330px;
            right: -180px;

            border: 1px solid rgba(66, 217, 176, 0.055);

            border-radius: 50%;

            pointer-events: none;

            z-index: -1;
        }

        body::after {
            content: "";

            position: fixed;

            width: 470px;
            height: 470px;

            bottom: -330px;
            left: -170px;

            border: 1px solid rgba(66, 217, 176, 0.045);

            border-radius: 50%;

            pointer-events: none;

            z-index: -1;
        }

        /* =========================
           MAIN CONTAINER
        ========================== */

        .container {
            width: 100%;
            max-width: 1650px;

            margin: 0 auto;

            padding: 36px 48px 30px;

            background:
                linear-gradient(
                    145deg,
                    rgba(15, 25, 23, 0.97),
                    rgba(8, 14, 13, 0.98)
                );

            border: 1px solid var(--border);

            border-radius: 25px;

            box-shadow:
                0 35px 100px rgba(0, 0, 0, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.018);

            animation: pageIn 0.55s ease forwards;
        }

        @keyframes pageIn {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           HEADER
        ========================== */

        .top-section {
            display: flex;

            align-items: center;
            justify-content: space-between;

            gap: 25px;

            margin-bottom: 30px;
        }

        .title-area {
            display: flex;

            align-items: center;

            gap: 16px;
        }

        /* =========================
           MODERN USER ICON
        ========================== */

        .main-icon {
            position: relative;

            width: 62px;
            height: 62px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background:
                linear-gradient(
                    145deg,
                    rgba(66, 217, 176, 0.13),
                    rgba(66, 217, 176, 0.025)
                );

            border: 1px solid rgba(66, 217, 176, 0.22);

            box-shadow:
                0 0 30px rgba(66, 217, 176, 0.055);

            color: var(--teal);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease,
                border-color 0.3s ease;
        }

        .main-icon:hover {
            transform: translateY(-3px);

            border-color: rgba(66, 217, 176, 0.42);

            box-shadow:
                0 0 35px rgba(66, 217, 176, 0.12);
        }

        .main-icon svg {
            width: 31px;
            height: 31px;

            fill: none;

            stroke: currentColor;

            stroke-width: 1.5;

            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* Live indicator */

        .main-icon::after {
            content: "";

            position: absolute;

            width: 8px;
            height: 8px;

            right: -3px;
            top: -3px;

            border-radius: 50%;

            background: var(--teal-light);

            box-shadow:
                0 0 0 4px rgba(66, 217, 176, 0.06),
                0 0 14px rgba(66, 217, 176, 0.65);
        }

        /* =========================
           TITLE
        ========================== */

        .title-content h2 {
            font-size: 28px;

            line-height: 1.15;

            font-weight: 700;

            letter-spacing: -0.8px;

            color: var(--text);
        }

        .title-content p {
            margin-top: 6px;

            font-size: 13px;

            color: var(--text-muted);
        }

        /* =========================
           HEADER RIGHT
        ========================== */

        .header-meta {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .directory-label {
            display: flex;

            align-items: center;

            gap: 8px;

            padding: 11px 14px;

            border: 1px solid var(--border-soft);

            border-radius: 10px;

            background: rgba(255, 255, 255, 0.012);

            color: #657770;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 0.9px;

            text-transform: uppercase;
        }

        .directory-icon {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--teal);

            box-shadow:
                0 0 9px rgba(66, 217, 176, 0.6);
        }

        .counter {
            display: flex;

            align-items: center;

            gap: 9px;

            padding: 11px 15px;

            border: 1px solid rgba(66, 217, 176, 0.18);

            border-radius: 10px;

            background: rgba(66, 217, 176, 0.055);

            color: var(--teal);

            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;
        }

        .counter-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--teal);

            box-shadow:
                0 0 9px rgba(66, 217, 176, 0.65);
        }

        /* =========================
           TABLE CARD
        ========================== */

        .table-card {
            width: 100%;

            overflow: hidden;

            background:
                rgba(5, 10, 9, 0.72);

            border: 1px solid var(--border);

            border-radius: 20px;

            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.012);
        }

        .table-wrapper {
            width: 100%;

            overflow-x: auto;
        }

        /* =========================
           TABLE
        ========================== */

        table {
            width: 100%;

            table-layout: fixed;

            border-collapse: collapse;
        }

        /*
            Column proportions

            ID         = 10%
            First Name = 22%
            Last Name  = 17%
            Email      = 27%
            Username   = 24%
        */

        th:nth-child(1),
        td:nth-child(1) {
            width: 10%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 22%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 17%;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 27%;
        }

        th:nth-child(5),
        td:nth-child(5) {
            width: 24%;
        }

        /* =========================
           TABLE HEADER
        ========================== */

        th {
            height: 52px;

            padding: 0 22px;

            text-align: left;

            background:
                rgba(255, 255, 255, 0.018);

            border-bottom: 1px solid var(--border);

            color: #63756e;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.15px;

            text-transform: uppercase;
        }

        th:first-child {
            padding-left: 28px;
        }

        /* =========================
           TABLE ROWS
        ========================== */

        tbody tr {
            height: 76px;

            transition:
                background 0.25s ease,
                transform 0.25s ease;
        }

        tbody tr:not(:last-child) {
            border-bottom: 1px solid var(--border-soft);
        }

        tbody tr:hover {
            background:
                linear-gradient(
                    90deg,
                    rgba(66, 217, 176, 0.055),
                    rgba(66, 217, 176, 0.018),
                    transparent
                );

            transform: translateX(2px);
        }

        /* IMPORTANT:
           No ::before directly on <tr>.
           This prevents an extra table cell.
        */

        tbody tr td:first-child {
            position: relative;
        }

        /* Hover accent safely attached to first cell */

        tbody tr td:first-child::before {
            content: "";

            position: absolute;

            left: -1px;

            top: 16px;
            bottom: 16px;

            width: 2px;

            border-radius: 0 3px 3px 0;

            background: var(--teal);

            box-shadow:
                0 0 12px rgba(66, 217, 176, 0.55);

            opacity: 0;

            transition: opacity 0.25s ease;
        }

        tbody tr:hover td:first-child::before {
            opacity: 1;
        }

        /* =========================
           CELLS
        ========================== */

        td {
            height: 76px;

            padding: 0 22px;

            vertical-align: middle;

            color: var(--text-soft);

            font-size: 13.5px;

            font-weight: 500;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        td:first-child {
            padding-left: 28px;
        }

        /* =========================
           ID BADGE
        ========================== */

        .id-badge {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 43px;

            height: 30px;

            padding: 0 10px;

            border-radius: 8px;

            border: 1px solid rgba(66, 217, 176, 0.15);

            background:
                rgba(66, 217, 176, 0.045);

            color: var(--teal);

            font-size: 11px;

            font-weight: 700;

            transition:
                transform 0.25s ease,
                background 0.25s ease,
                border-color 0.25s ease;
        }

        tbody tr:hover .id-badge {
            transform: translateY(-1px);

            background:
                rgba(66, 217, 176, 0.09);

            border-color:
                rgba(66, 217, 176, 0.25);
        }

        /* =========================
           NAME
        ========================== */

        .name-cell {
            display: flex;

            align-items: center;

            gap: 13px;

            min-width: 0;

            color: var(--text);

            font-weight: 650;
        }

        /* =========================
           AVATAR
        ========================== */

        .avatar {
            position: relative;

            width: 40px;
            height: 40px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background:
                linear-gradient(
                    145deg,
                    rgba(66, 217, 176, 0.15),
                    rgba(66, 217, 176, 0.035)
                );

            border: 1px solid rgba(66, 217, 176, 0.18);

            color: var(--teal);

            font-size: 12px;

            font-weight: 700;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease,
                background 0.3s ease;
        }

        .avatar::after {
            content: "";

            position: absolute;

            width: 7px;
            height: 7px;

            right: -4px;
            bottom: -4px;

            border: 2px solid #09110f;

            border-radius: 50%;

            background: var(--teal-light);

            box-shadow:
                0 0 9px rgba(66, 217, 176, 0.65);
        }

        tbody tr:hover .avatar {
            transform: translateY(-2px);

            background:
                rgba(66, 217, 176, 0.12);

            box-shadow:
                0 0 18px rgba(66, 217, 176, 0.08);
        }

        /* =========================
           LAST NAME
        ========================== */

        td:nth-child(3) {
            color: #9aa9a4;
        }

        /* =========================
           EMAIL
        ========================== */

        .email {
            color: #82938d;

            transition: color 0.25s ease;
        }

        tbody tr:hover .email {
            color: var(--teal-light);
        }

        /* =========================
           USERNAME
        ========================== */

        .username {
            display: inline-flex;

            align-items: center;

            max-width: 100%;

            padding: 7px 11px;

            border: 1px solid rgba(113, 159, 146, 0.11);

            border-radius: 8px;

            background:
                rgba(255, 255, 255, 0.022);

            color: #84938e;

            font-size: 11.5px;

            font-weight: 600;

            overflow: hidden;

            text-overflow: ellipsis;

            transition:
                color 0.25s ease,
                background 0.25s ease,
                border-color 0.25s ease,
                transform 0.25s ease;
        }

        tbody tr:hover .username {
            color: var(--teal);

            background:
                rgba(66, 217, 176, 0.06);

            border-color:
                rgba(66, 217, 176, 0.18);

            transform: translateY(-1px);
        }

        /* =========================
           EMPTY STATE
        ========================== */

        .empty {
            height: 220px !important;

            text-align: center !important;

            color: var(--text-muted) !important;

            font-size: 13px;

            white-space: normal;

            overflow: visible;
        }

        .empty::before {
            content: "○";

            display: block;

            margin-bottom: 9px;

            color: #33443e;

            font-size: 28px;
        }

        /* =========================
           FOOTER
        ========================== */

        .footer {
            display: flex;

            align-items: center;
            justify-content: space-between;

            margin-top: 17px;

            padding: 0 4px;

            color: #53645e;

            font-size: 11px;

            font-weight: 500;
        }

        .connection {
            display: flex;

            align-items: center;

            gap: 8px;
        }

        .status-dot {
            width: 7px;
            height: 7px;

            flex-shrink: 0;

            border-radius: 50%;

            background: var(--teal);

            box-shadow:
                0 0 0 4px rgba(66, 217, 176, 0.055),
                0 0 10px rgba(66, 217, 176, 0.45);
        }

        .footer-right {
            color: #3e4d48;
        }

        /* =========================
           SCROLLBAR
        ========================== */

        .table-wrapper::-webkit-scrollbar {
            height: 6px;
        }

        .table-wrapper::-webkit-scrollbar-track {
            background: #080d0c;
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background: #294039;

            border-radius: 20px;
        }

        .table-wrapper::-webkit-scrollbar-thumb:hover {
            background: #376055;
        }

        /* =========================
           TABLET
        ========================== */

        @media (max-width: 1000px) {

            body {
                padding: 20px 14px;
            }

            .container {
                padding: 30px 28px 25px;
            }

            .directory-label {
                display: none;
            }

            table {
                min-width: 900px;
            }
        }

        /* =========================
           MOBILE
        ========================== */

        @media (max-width: 650px) {

            body {
                padding: 12px;
            }

            .container {
                padding: 23px 18px 21px;

                border-radius: 20px;
            }

            .top-section {
                margin-bottom: 22px;
            }

            .main-icon {
                width: 50px;
                height: 50px;

                border-radius: 14px;
            }

            .main-icon svg {
                width: 25px;
                height: 25px;
            }

            .title-area {
                gap: 12px;
            }

            .title-content h2 {
                font-size: 21px;
            }

            .title-content p {
                font-size: 10.5px;
            }

            .counter {
                display: none;
            }

            .table-card {
                border-radius: 16px;
            }

            .footer {
                gap: 8px;
            }
        }

        /* =========================
           SMALL MOBILE
        ========================== */

        @media (max-width: 430px) {

            body {
                padding: 8px;
            }

            .container {
                padding: 19px 14px;
            }

            .title-content h2 {
                font-size: 19px;
            }

            .title-content p {
                font-size: 10px;
            }

            .footer {
                flex-direction: column;

                align-items: flex-start;
            }
        }

    </style>
</head>


<body>


    <div class="container">


        <!-- =========================
             HEADER
        ========================== -->

        <div class="top-section">


            <div class="title-area">


                <!-- Modern User Directory Icon -->

                <div class="main-icon">

                    <svg
                        viewBox="0 0 32 32"
                        aria-hidden="true"
                    >

                        <!-- Main user -->

                        <circle
                            cx="16"
                            cy="10"
                            r="4"
                        />

                        <path
                            d="M8.5 25c.8-4.4 3.4-6.8 7.5-6.8s6.7 2.4 7.5 6.8"
                        />

                        <!-- Left user -->

                        <circle
                            cx="6"
                            cy="15"
                            r="2.5"
                        />

                        <path
                            d="M2.5 24.5c.4-2.7 1.6-4.3 3.5-4.8"
                        />

                        <!-- Right user -->

                        <circle
                            cx="26"
                            cy="15"
                            r="2.5"
                        />

                        <path
                            d="M29.5 24.5c-.4-2.7-1.6-4.3-3.5-4.8"
                        />

                    </svg>

                </div>


                <div class="title-content">

                    <h2>Registered Users</h2>

                    <p>
                        Manage and view all registered accounts
                    </p>

                </div>


            </div>


            <div class="header-meta">


                <div class="directory-label">

                    <span class="directory-icon"></span>

                    User Directory

                </div>


                <?php if (!empty($users)): ?>

                    <div class="counter">

                        <span class="counter-dot"></span>

                        <?= count($users); ?> Users

                    </div>

                <?php endif; ?>


            </div>


        </div>


        <!-- =========================
             USER TABLE
        ========================== -->

        <div class="table-card">

            <div class="table-wrapper">


                <table>


                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>First Name</th>

                            <th>Last Name</th>

                            <th>Email</th>

                            <th>Username</th>

                        </tr>

                    </thead>


                    <tbody>


                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <!-- ID -->
                                    <td>

                                        <span class="id-badge">
                                            #<?= html_escape(
                                                $user['id'] ?? ''
                                            ); ?>
                                        </span>
                                    </td>
                                    <!-- FIRST NAME -->
                                    <td>
                                        <div class="name-cell">
                                            <div class="avatar">
                                                <?= strtoupper(
                                                    substr(
                                                        $user['firstname'] ?? 'U',
                                                        0,
                                                        1
                                                    )
                                                ); ?>

                                            </div>


                                            <?= html_escape(
                                                $user['firstname'] ?? ''
                                            ); ?>


                                        </div>

                                    </td>


                                    <!-- LAST NAME -->

                                    <td>

                                        <?= html_escape(
                                            $user['lastname'] ?? ''
                                        ); ?>

                                    </td>


                                    <!-- EMAIL -->

                                    <td>

                                        <span class="email">

                                            <?= html_escape(
                                                $user['email'] ?? ''
                                            ); ?>

                                        </span>

                                    </td>


                                    <!-- USERNAME -->

                                    <td>

                                        <span class="username">

                                            @<?= html_escape(
                                                $user['username'] ?? ''
                                            ); ?>

                                        </span>

                                    </td>


                                </tr>


                            <?php endforeach; ?>


                        <?php else: ?>


                            <tr>

                                <td
                                    colspan="5"
                                    class="empty"
                                >

                                    No users found in the database.

                                </td>

                            </tr>


                        <?php endif; ?>


                    </tbody>


                </table>


            </div>

        </div>


        <!-- =========================
             FOOTER
        ========================== -->

        <div class="footer">


            <div class="connection">

                <span class="status-dot"></span>

                User database connected

            </div>


            <div class="footer-right">

                Registered Accounts

            </div>


        </div>


    </div>


</body>

</html>