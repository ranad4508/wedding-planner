<!DOCTYPE html>
<html>

<head>
    <title>Wedding Destination</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section id="contact">
        <h2>Thank you for visiting</h2>
        <?php
        include("./form.php");
        ?>
        <form id="contact-form" method="POST" action="">
            <h2>Booking</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="number"  name="phone" required>

            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination">

            <label for="package">Package:</label>
            <select id="package" name="package">
                <option value="None">None</option>
                <option value="Package1">Package 1</option>
                <option value="Package2">Package 2</option>
                <option value="Package3">Package 3</option>
                <option value="Package3">Package 4</option>
                <option value="Package3">Package 5</option>
                <option value="Package3">Package 6</option>
            </select>
            <label for="date" >Date for Booking:</label>
            <input type="date" name="date">

            <label for="budget">Budget:</label>
            <input type="number" id="budget" name="budget" min="0">

            <input type="submit" value="Submit" name="submit">
        </form>
    </section>
</body>
</body>

</html>