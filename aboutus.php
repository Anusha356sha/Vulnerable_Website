
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerable Website Demonstration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background: linear-gradient(to bottom, #f4f4f4, #e0e0e0);
            margin: 0;
            padding: 0;
        }

        header {
            background: linear-gradient(to right, #333, #555);
            color: #fff;
            padding: 15px 0;
        }

        header h1 {
            text-align: center;
            margin: 0;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        header nav ul li {
            margin: 0 15px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header nav ul li a:hover {
            background: linear-gradient(to right, #555, #777);
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .sub-container {
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .sub-container img {
            border-radius: 50%;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="textarea"] {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #0072ff, #0056b3);
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 15px 0;
            background: linear-gradient(to right, #333, #555);
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Management System</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="retrive.php">Student info</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="sub-container">
            <div class="sub-container content">
                Write about yourself<br>
                in the box
            </div>
            <div class="sub-container user" id="user-comment">
                <img src="Style/user.jpeg" alt="Profile Picture" width="200">
                <div class="sub-container content" id="comment"></div>
            </div>
            <form action="" method="post" id="form">
                <textarea id="comm" rows="5" required></textarea><br><br>
                <input type="submit" value="Add comment">
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; Student Management System</p>
    </footer>
    <script>
        // Get the form and the div element
        const form = document.getElementById('form');
        const displayDiv = document.getElementById('comment');

        // Add an event listener to the form's submit event
        form.addEventListener('submit', (e) => {
            // Prevent the form from submitting
            e.preventDefault();

            // Get the values from the form fields
            const usercomm = document.getElementById('comm').value;

            // Create a string to display the values
            const displayText = usercomm;

            // Set the text content of the div element to the display string
            displayDiv.textContent = displayText;
            displayDiv.style.display = "block";
        });
    </script>
</body>
</html>
