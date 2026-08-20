<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LavaLust Student Portal</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #031b28, #030246);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            animation: fadeIn 1.5s ease-in-out;
        }
        h1 {
            font-size: 1.5rem;
            color: #ce5b08;
            margin-bottom: 10px;
            margin-right: 20px;
        }
        h2 {
            font-size: 2.27rem;
            margin-bottom: 20px;
            color: #a62a0b;
        }
        p {
            font-size: 1rem;
            margin-bottom: 30px;
            opacity: 0.85;
        }
        .btn {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 8px;
            background: #045732;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background: #872e05;
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LavaLust</h1>
        <h2>Student Portal</h2>
        <p>Welcome back. Access your student profile and manage your academic information seamlessly.</p>
        <a href="<?= site_url('student/profile'); ?>" class="btn">Student Profile</a>
    </div>
</body>
</html>
