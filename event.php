<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Jobs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(75deg, #ceac2b, #ffe6cc); /* Yellowish-light orange gradient */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        p {
            margin-bottom: 20px;
            font-size: 16px;
            color: #666;
        }
        input[type="text"],
        input[type="tel"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .job-selection {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .job {
            flex: 1 0 calc(50% - 20px);
            margin: 5px;
            padding: 15px;
            background-color: #fff9f1; /* Light orange */
            border: 2px solid transparent;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            user-select: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: monospace;
            font-weight: 800;
            font-size: 14px;
            transition: background-color 0.2s ease;
        }
        .job:hover {
            background-color: #fffce6; /* Lighter orange on hover */
        }
        .job.selected {
            border-color: #ffac33; /* Orange border for selected */
            background-color: #fff1cc; /* Light yellowish-orange for selected */
        }
        .job img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ffac33; /* Orange */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-size: 16px;
        }
        button:hover {
            background-color: #ffa31a; /* Darker orange on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Add Jobs</h1>
    <p>Please fill in the details below:</p>
    <form action="includes/add.inc.php" method="POST" id="jobForm">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br>
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" placeholder="Enter your location" required><br>
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required><br>
        <label for="message">Text Message:</label><br>
        <textarea id="message" name="message" placeholder="Enter your message" rows="4" required></textarea><br>
        <p>Select one job:</p>
        <div class="job-selection">
            <label class="job">
                <input type="checkbox" name="job" value="Labour"><img src="forced-labour.png" alt="">Labour
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Carpenter"><img src="carpenter.png" alt="">Carpenter
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Rajmistri"><img src="builder.png" alt="">Rajmistri
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Painter"><img src="painter.png" alt="">Painter
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Plumber"><img src="plumber.png" alt="">Plumber
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Halwai"><img src="cooking.png" alt="">Halwai
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Electrician"><img src="electrician.png" alt="">Electrician
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Sweeper"><img src="sweeper.png" alt="">Sweeper
            </label>
            <label class="job">
                <input type="checkbox" name="job" value="Other"><img src="menu.png" alt="">Other
            </label>
        </div>
        <button type="submit">Continue</button>
    </form>
</div>

<script>
    const checkboxes = document.querySelectorAll('input[name="job"]');
    const labels = document.querySelectorAll('.job');
    const maxAllowed = 1;

    labels.forEach(label => {
        label.addEventListener('click', (event) => {
            event.preventDefault();
            const input = label.querySelector('input');
            if (input.checked) {
                input.checked = false;
                label.classList.remove('selected');
            } else {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                    checkbox.parentNode.classList.remove('selected');
                });
                input.checked = true;
                label.classList.add('selected');
            }
        });
    });

    const form = document.getElementById('jobForm');
    form.addEventListener('submit', function(event) {
        if (document.querySelectorAll('input[name="job"]:checked').length === 0) {
            event.preventDefault();
            alert('Please select one job before submitting.');
        }
    });
</script>

</body>
</html>

