<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | LavaLust</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        :root {
            --bg: #050b18;
            --bg-secondary: #0a1428;
            --card: rgba(12, 27, 52, 0.75);
            --card-solid: #0d1b34;
            --text: #f5f9ff;
            --muted: #9fb1c9;
            --border: rgba(80, 160, 255, 0.20);
            --primary: #1687ff;
            --primary-dark: #075dcc;
            --cyan: #00d9ff;
            --danger: #ff5577;
            --shadow: rgba(0, 0, 0, 0.35);
            --input: rgba(4, 14, 30, 0.75);
            --row-hover: rgba(20, 126, 255, 0.08);
        }

        body.light-mode {
            --bg: #eef6ff;
            --bg-secondary: #dceeff;
            --card: rgba(255, 255, 255, 0.82);
            --card-solid: #ffffff;
            --text: #10213b;
            --muted: #60738d;
            --border: rgba(21, 112, 214, 0.18);
            --primary: #087df5;
            --primary-dark: #0561c4;
            --cyan: #009dcc;
            --danger: #e33f62;
            --shadow: rgba(25, 80, 130, 0.15);
            --input: rgba(240, 248, 255, 0.95);
            --row-hover: rgba(20, 126, 255, 0.06);
        }

        body {
            min-height: 100vh;
            color: var(--text);
            background:
                radial-gradient(circle at 10% 15%, rgba(0, 140, 255, 0.20), transparent 28%),
                radial-gradient(circle at 90% 20%, rgba(80, 60, 255, 0.16), transparent 28%),
                radial-gradient(circle at 50% 100%, rgba(0, 217, 255, 0.10), transparent 35%),
                var(--bg);

            transition:
                background 0.4s ease,
                color 0.3s ease;
        }

        /* Background glow */
        body::before {
            content: "";
            position: fixed;
            width: 320px;
            height: 320px;
            top: 15%;
            left: -120px;
            background: rgba(0, 153, 255, 0.16);
            filter: blur(90px);
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
        }

        body::after {
            content: "";
            position: fixed;
            width: 350px;
            height: 350px;
            bottom: -150px;
            right: -100px;
            background: rgba(87, 63, 255, 0.15);
            filter: blur(100px);
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            min-height: 76px;
            padding: 0 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;

            background: rgba(5, 15, 32, 0.72);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            position: sticky;
            top: 0;
            z-index: 100;
        }

        body.light-mode .navbar {
            background: rgba(255, 255, 255, 0.78);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            border-radius: 13px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #087df5,
                #00c8ff,
                #635bff
            );

            box-shadow:
                0 0 22px rgba(0, 157, 255, 0.35);
            
            font-size: 21px;
        }

        .brand-text h2 {
            font-size: 18px;
            letter-spacing: 0.5px;
        }

        .brand-text span {
            display: block;
            color: var(--muted);
            font-size: 11px;
            margin-top: 2px;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .theme-btn,
        .logout-btn {
            border: 1px solid var(--border);
            background: var(--card);
            color: var(--text);
            padding: 10px 14px;
            border-radius: 11px;
            cursor: pointer;
            text-decoration: none;
            transition: 0.25s ease;
        }

        .theme-btn {
            font-size: 18px;
            width: 43px;
            height: 43px;
            padding: 0;
        }

        .theme-btn:hover,
        .logout-btn:hover {
            transform: translateY(-2px);
            border-color: var(--primary);
            box-shadow: 0 8px 25px rgba(0, 125, 255, 0.16);
        }

        .logout-btn {
            font-size: 13px;
            font-weight: 600;
        }

        /* =========================
           MAIN
        ========================= */

        .container {
            width: 86%;
            max-width: 1250px;
            margin: 0 auto;
            padding: 45px 0 60px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 28px;
        }

        .page-title {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .title-icon {
            width: 55px;
            height: 55px;
            border-radius: 16px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                rgba(8, 125, 245, 0.25),
                rgba(0, 217, 255, 0.12)
            );

            border: 1px solid rgba(0, 180, 255, 0.25);
            font-size: 25px;
        }

        .page-title h1 {
            font-size: 30px;
            line-height: 1.1;
        }

        .page-title p {
            margin-top: 6px;
            color: var(--muted);
            font-size: 13px;
        }

        /* =========================
           ADD / EDIT FORM
        ========================= */

        .form-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 28px;
            margin-bottom: 30px;

            box-shadow: 0 20px 55px var(--shadow);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            transition: 0.3s ease;
        }

        .form-card:hover {
            border-color: rgba(30, 150, 255, 0.32);
        }

        .form-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 23px;
        }

        .form-heading-icon {
            width: 38px;
            height: 38px;
            border-radius: 11px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                var(--primary),
                var(--cyan)
            );

            color: white;
        }

        .form-heading h2 {
            font-size: 19px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group.full {
            grid-column: span 2;
        }

        .form-group label {
            color: var(--muted);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            border: 1px solid var(--border);
            outline: none;

            background: var(--input);
            color: var(--text);

            border-radius: 12px;
            padding: 13px 15px;

            font-size: 14px;

            transition: 0.25s ease;
        }

        .form-group textarea {
            min-height: 105px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary);

            box-shadow:
                0 0 0 3px rgba(0, 135, 255, 0.10),
                0 0 20px rgba(0, 135, 255, 0.08);
        }

        .form-actions {
            grid-column: span 2;
            display: flex;
            justify-content: flex-end;
            margin-top: 4px;
        }

        .submit-btn {
            border: none;
            border-radius: 12px;

            padding: 13px 22px;

            color: white;
            font-weight: 700;
            font-size: 13px;

            cursor: pointer;

            background: linear-gradient(
                135deg,
                var(--primary),
                var(--cyan)
            );

            box-shadow:
                0 8px 25px rgba(0, 125, 255, 0.25);

            transition: 0.25s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px) scale(1.01);

            box-shadow:
                0 12px 32px rgba(0, 125, 255, 0.35);
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        /* =========================
           PRODUCT LIST
        ========================= */

        .list-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 22px;

            overflow: hidden;

            box-shadow: 0 20px 55px var(--shadow);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .list-header {
            padding: 23px 26px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            border-bottom: 1px solid var(--border);
        }

        .list-header h2 {
            font-size: 19px;
        }

        .product-count {
            font-size: 12px;
            color: var(--muted);
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        thead {
            background: rgba(8, 125, 245, 0.07);
        }

        th {
            padding: 15px 17px;
            text-align: left;

            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.7px;

            color: var(--muted);
            font-weight: 700;

            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 17px;
            font-size: 13px;

            border-bottom: 1px solid var(--border);

            transition: 0.2s ease;
        }

        tbody tr {
            transition: 0.25s ease;
        }

        tbody tr:hover {
            background: var(--row-hover);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .id-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 34px;
            height: 28px;

            padding: 0 8px;

            border-radius: 8px;

            background: rgba(0, 135, 255, 0.12);
            color: var(--primary);

            font-size: 11px;
            font-weight: 700;
        }

        .product-name {
            font-weight: 700;
            color: var(--text);
        }

        .description {
            max-width: 250px;
            color: var(--muted);

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .price {
            color: #25b8ff;
            font-weight: 800;
        }

        .quantity {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 38px;
            padding: 6px 10px;

            border-radius: 20px;

            background: rgba(0, 217, 255, 0.09);
            border: 1px solid rgba(0, 217, 255, 0.16);

            color: var(--cyan);

            font-size: 11px;
            font-weight: 700;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            gap: 5px;

            padding: 8px 11px;

            border-radius: 9px;

            text-decoration: none;

            font-size: 11px;
            font-weight: 700;

            transition: 0.25s ease;
        }

        .edit-btn {
            color: var(--primary);
            background: rgba(0, 125, 255, 0.09);
            border: 1px solid rgba(0, 125, 255, 0.15);
        }

        .delete-btn {
            color: var(--danger);
            background: rgba(255, 65, 100, 0.08);
            border: 1px solid rgba(255, 65, 100, 0.14);
        }

        .action-btn:hover {
            transform: translateY(-2px);
        }

        .edit-btn:hover {
            background: rgba(0, 125, 255, 0.16);
            box-shadow: 0 7px 18px rgba(0, 125, 255, 0.12);
        }

        .delete-btn:hover {
            background: rgba(255, 65, 100, 0.14);
            box-shadow: 0 7px 18px rgba(255, 65, 100, 0.12);
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;
            color: var(--muted);
            font-size: 11px;
            padding-top: 30px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .navbar {
                padding: 0 5%;
            }

            .container {
                width: 92%;
                padding-top: 30px;
            }

            .page-header {
                align-items: flex-start;
            }

            .page-title h1 {
                font-size: 25px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full,
            .form-actions {
                grid-column: span 1;
            }

            .form-actions {
                justify-content: stretch;
            }

            .submit-btn {
                width: 100%;
            }
        }

        @media (max-width: 550px) {

            .brand-text {
                display: none;
            }

            .logout-btn {
                font-size: 0;
            }

            .logout-btn::before {
                content: "↪";
                font-size: 18px;
            }

            .page-title {
                gap: 10px;
            }

            .title-icon {
                width: 46px;
                height: 46px;
            }

            .form-card {
                padding: 20px;
            }

            .list-header {
                padding: 19px;
            }
        }
    </style>
</head>

<body class="dark-mode">

    <!-- =========================
         NAVIGATION
    ========================== -->

    <nav class="navbar">

        <div class="brand">

            <div class="brand-icon">
                ✦
            </div>

            <div class="brand-text">
                <h2>LavaLust</h2>
                <span>Product Management</span>
            </div>

        </div>

        <div class="nav-actions">

            <!-- Light / Dark Mode -->
            <button
                type="button"
                class="theme-btn"
                id="themeToggle"
                title="Toggle light/dark mode"
            >
                ☀️
            </button>

            <!-- Original Logout Function -->
            <a
                href="<?= site_url('auth/logout'); ?>"
                class="logout-btn"
            >
                Logout
            </a>

        </div>

    </nav>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="container">

        <!-- Page Header -->

        <div class="page-header">

            <div class="page-title">

                <div class="title-icon">
                    📦
                </div>

                <div>
                    <h1>Products</h1>
                    <p>Manage your products and inventory.</p>
                </div>

            </div>

        </div>


        <?php $is_admin = !empty($is_admin); ?>
        <?php $product = isset($product) && is_array($product) ? $product : []; ?>
        <?php $is_edit = !empty($product); ?>


        <!-- =========================
             ADD / EDIT PRODUCT
        ========================== -->

        <?php if ($is_admin): ?>

        <section class="form-card">

            <div class="form-heading">

                <div class="form-heading-icon">
                    <?= $is_edit ? '✎' : '+'; ?>
                </div>

                <h2>
                    <?= $is_edit ? 'Edit Product' : 'Add New Product'; ?>
                </h2>

            </div>


            <!-- ORIGINAL FORM ACTION -->
            <form
                action="<?= site_url($is_edit ? 'products/edit/' . $product['id'] : 'products/create'); ?>"
                method="post"
            >

                <div class="form-grid">

                    <!-- Product Name -->

                    <div class="form-group">

                        <label for="product_name">
                            PRODUCT NAME
                        </label>

                        <input
                            type="text"
                            id="product_name"
                            name="product_name"
                            placeholder="Enter product name"
                            value="<?= $is_edit ? htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') : ''; ?>"
                            required
                        >

                    </div>


                    <!-- Price -->

                    <div class="form-group">

                        <label for="price">
                            PRICE
                        </label>

                        <input
                            type="number"
                            id="price"
                            name="price"
                            placeholder="Enter price"
                            value="<?= $is_edit ? $product['price'] : ''; ?>"
                            required
                        >

                    </div>


                    <!-- Description -->

                    <div class="form-group full">

                        <label for="description">
                            DESCRIPTION
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            placeholder="Enter product description"
                            required
                        ><?= $is_edit ? htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>

                    </div>


                    <!-- Quantity -->

                    <div class="form-group">

                        <label for="quantity">
                            QUANTITY
                        </label>

                        <input
                            type="number"
                            id="quantity"
                            name="quantity"
                            placeholder="Enter quantity"
                            value="<?= $is_edit ? $product['quantity'] : ''; ?>"
                            required
                        >

                    </div>


                    <!-- Submit -->

                    <div class="form-actions">

                        <button type="submit" class="submit-btn">

                            <?= $is_edit ? '✓ Update Product' : '+ Add Product'; ?>

                        </button>

                    </div>

                </div>

            </form>

        </section>

        <?php endif; ?>


        <!-- =========================
             PRODUCT LIST
        ========================== -->

        <section class="list-card">

            <div class="list-header">

                <h2>
                    Product List
                </h2>

                <span class="product-count">
                    Inventory Records
                </span>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Product Name</th>

                            <th>Description</th>

                            <th>Price</th>

                            <th>Quantity</th>

                            <?php if ($is_admin): ?>

                            <th>Actions</th>

                            <?php endif; ?>

                        </tr>

                    </thead>


                    <tbody>

                        <?php foreach ($this->products as $product): ?>

                        <tr>

                            <!-- ID -->

                            <td>

                                <span class="id-badge">
                                    #<?= $product['id']; ?>
                                </span>

                            </td>


                            <!-- Product Name -->

                            <td>

                                <span class="product-name">
                                    <?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8'); ?>
                                </span>

                            </td>


                            <!-- Description -->

                            <td>

                                <div class="description">
                                    <?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'); ?>
                                </div>

                            </td>


                            <!-- Price -->

                            <td>

                                <span class="price">
                                    ₱<?= $product['price']; ?>
                                </span>

                            </td>


                            <!-- Quantity -->

                            <td>

                                <span class="quantity">
                                    <?= $product['quantity']; ?> pcs
                                </span>

                            </td>


                            <!-- Actions -->

                            <?php if ($is_admin): ?>

                            <td>

                                <div class="actions">

                                    <!-- ORIGINAL EDIT LINK -->
                                    <a
                                        href="<?= site_url('products/edit/' . $product['id']); ?>"
                                        class="action-btn edit-btn"
                                    >
                                        ✎ Edit
                                    </a>


                                    <!-- ORIGINAL DELETE LINK + CONFIRM -->
                                    <a
                                        href="<?= site_url('products/delete/' . $product['id']); ?>"
                                        class="action-btn delete-btn"
                                        onclick="return confirm('Are you sure you want to delete this product?');"
                                    >
                                        🗑 Delete
                                    </a>

                                </div>

                            </td>

                            <?php endif; ?>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- Footer -->

        <div class="footer">
            LavaLust • CRUD Product Management System
        </div>

    </main>


    <!-- =========================
         DARK / LIGHT MODE
    ========================== -->

    <script>

        const themeToggle = document.getElementById("themeToggle");
        const body = document.body;

        /*
         * Theme is saved in localStorage.
         * This does NOT affect CRUD functionality.
         */

        const savedTheme = localStorage.getItem("theme");

        if (savedTheme === "light") {

            body.classList.remove("dark-mode");
            body.classList.add("light-mode");

            themeToggle.textContent = "🌙";

        } else {

            body.classList.remove("light-mode");
            body.classList.add("dark-mode");

            themeToggle.textContent = "☀️";

        }


        themeToggle.addEventListener("click", function () {

            if (body.classList.contains("dark-mode")) {

                body.classList.remove("dark-mode");
                body.classList.add("light-mode");

                themeToggle.textContent = "🌙";

                localStorage.setItem("theme", "light");

            } else {

                body.classList.remove("light-mode");
                body.classList.add("dark-mode");

                themeToggle.textContent = "☀️";

                localStorage.setItem("theme", "dark");

            }

        });

    </script>

</body>
</html>