<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task History</title>
    <link rel="stylesheet" href="task history.css">
</head>
<body>
    

    <section id="tasks" class="task-history">
        <h1>Task History</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date of Completion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Task 1</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Task 2</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Task 3</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
            </tbody>
        </table>

        <div><button class="show-more-button" onclick="showMore()">Show More</button></div>
        <button class="back-button" onclick="goBack()">Back to Profile</button>

    </section>

    <footer>
        <p> All rights reserved.</p>
    </footer>

    <script>
        function goBack() {
            window.location.href = 'profile.php';
        }

        function showMore() {
            const hiddenRows = document.querySelectorAll('.hidden-row');
            hiddenRows.forEach(row => {
                row.style.display = 'table-row';
            });
            document.querySelector('.show-more-button').style.display = 'none';
        }
    </script>
</body>
</html>