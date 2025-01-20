<?php
// Include the database connection
require_once(__DIR__ . '/../../include/db_connect.php');

// Fetch customer data from the database
$sql = "SELECT firstName, lastName, username, email, created_at, userID FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Logo Section -->
    <div class="absolute top-4 left-4 flex items-center">
        <a href="/petstore/index.php">
            <img src="/petstore/public/uploads/Meowbluebg.png" alt="M2C Logo" class="object-cover h-20 w-56">
        </a>
    </div>
<br>
<br>

    <div class="container mx-auto p-6 mt-10">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Customer List</h1>

        <!-- Customer Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg text-sm mx-auto">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 border-b">First Name</th>
                        <th class="py-3 px-6 border-b">Last Name</th>
                        <th class="py-3 px-6 border-b">Username</th>
                        <th class="py-3 px-6 border-b">Email</th>
                        <th class="py-3 px-6 border-b">Created At</th>
                        <th class="py-3 px-6 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr class='border-b hover:bg-gray-50'>";
                            echo "<td class='py-3 px-6'>{$row['firstName']}</td>";
                            echo "<td class='py-3 px-6'>{$row['lastName']}</td>";
                            echo "<td class='py-3 px-6'>{$row['username']}</td>";
                            echo "<td class='py-3 px-6'>{$row['email']}</td>";
                            echo "<td class='py-3 px-6'>{$row['created_at']}</td>";
                            echo "<td class='py-3 px-6'>
                                    <button class='bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-200' onclick='openModal({$row['userID']})'>Delete</button>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>
                                <td colspan='6' class='py-4 px-6 text-center text-gray-500'>
                                    No customers found.
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Delete Confirmation -->
    <div id="deleteModal" class="modal fixed inset-0 bg-gray-600 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Are you sure you want to delete this customer?</h3>
            <form id="deleteForm" method="POST" action="delete_customer.php">
                <input type="hidden" name="user_id" id="user_id">
                <div class="flex justify-between">
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200">Yes, Delete</button>
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-200" onclick="closeModal()">No, Keep It</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Open the modal and set the user_id
        function openModal(userId) {
            document.getElementById('user_id').value = userId;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        // Close the modal
        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>

<form action="../../views/admin-dashboard.php" method="get">
        <button type="submit" class="bg-gray-500 text-white px-5 py-3 rounded-md shadow-md hover:bg-gray-600 transition duration-200">
            Back to Admin Dashboard
        </button>
    </form>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
