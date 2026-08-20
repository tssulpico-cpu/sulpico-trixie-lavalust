<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #031b28, #030246);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .card {
            background: rgba(255,255,255,0.05);
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(228, 235, 237, 0.58);
            max-width: 500px;
            animation: fadeInUp 1.5s ease;
        }
        h1 {
            font-size: 1.8rem;
            color: #a0650bd8;
            margin-bottom: 15px;
        }
        p {
            margin: 6px 0;
            font-size: 1rem;
            font-weight: bold;
            color: #ffffff;
            text-align: left;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 8px;
            background: #045732;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background: #b9090f;
            transform: scale(1.05);
        }
        @keyframes fadeInUp {
            from {transform: translateY(20px); opacity: 0;}
            to {transform: translateY(0); opacity: 1;}
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Information</h1>
        <p>Student ID: <?php echo isset($student_id) ? $student_id : 'N/A'; ?></p>
        <p>Name: <?php echo isset($name) ? $name : 'N/A'; ?></p>
        <p>Course: <?php echo isset($course) ? $course : 'N/A'; ?></p>
        <p>Year: <?php echo isset($year) ? $year : 'N/A'; ?></p>
        <p>Section: <?php echo isset($section) ? $section : 'N/A'; ?></p>
        <p>Email: <?php echo isset($email) ? $email : 'N/A'; ?></p>
        <a href="<?= site_url('student'); ?>" class="btn">← Back to Home</a>
    </div>
</body>
</html>
