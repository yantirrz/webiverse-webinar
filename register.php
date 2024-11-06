
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            min-height: 100vh;
            background-color: #f7fafc;
            color: #1a202c;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        
        .container {
            max-width: 1000px;
            margin: 20px;
            background-color: white ;
            backdrop-filter: blur(15px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            border-radius: 8px;
        }

        .form-container {
            width: 40%;
            padding: 40px;
            height: 60vh;
        }
        
        .form-title {
            font-size: 24px;
            font-weight: 800;
            text-align: center;
        }
        
        .form {
            margin-top: 20px;
            max-width: 300px;
            margin: 0 auto;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e0;
            border-radius: 8px;
            margin-top: 16px;
            font-size: 14px;
        }

        .input-field:focus {
            outline: none;
            border-color: #a0aec0;
            background-color: white;
        }

        .custom-select {
            width: 100%;
            padding: 16px 32px;
            font-weight: 500;
            background-color: #f3f4f6;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            color: #6b7280;
            font-size: 0.875rem;
            margin-top: 20px;
        }

        .custom-select:focus {
            outline: none;
            border-color: #9ca3af;
            background-color: #ffffff;
        }

        .submit-button {
            width: 100%;
            padding: 12px;
            background-color: #5a67d8;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 16px;
        }

        .submit-button:hover {
            background-color: #434190;
        }

        .terms {
            margin-top: 16px;
            font-size: 12px;
            text-align: center;
            color: #718096;
        }

        .terms a {
            color: #4a5568;
            text-decoration: dotted underline;
        }

        .side-image {
            flex: 1;
            background-color: #ebf4ff;
            display: none;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
        }

        .side-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 1024px) {
            .side-image {
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h1 class="form-title">Sign Up</h1>
            <form action="proses/auth/register_proses.php" method="post" id="signup-form" class="form">
                <input type="text" placeholder="Username" name="username" required class="input-field" />
                <input type="password" placeholder="Password" name="password" required class="input-field" />
                <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" required class="input-field" />
                <select class="custom-select" aria-label="Default select example" name="level" id="level">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

                <button type="submit" name="submit" class="submit-button">Sign Up</button>
                <div class="terms">
                    I agree to abide by WebiVerse
                    <a href="#">Terms of Service</a> and its <a href="#">Privacy Policy</a>.
                </div>
            </form>
        </div>
        <div class="side-image">
            <img src="assets\images\gambar1.jpg" alt="Online presentation">
        </div>
    </div>

</body>

</html>