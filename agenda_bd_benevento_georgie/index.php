<?php require 'header.php' ?>
<div class="container">
<div class="form-container">
        <form id="form" method="POST" action="./includes/agenda.php">
            <h2>Contact operations</h2>
            <label for="name">Name:</label>
            <input id="name" name="name" type="text" required>
            <br>
            <br>
            <label for="number">Number:</label>
            <input id="number" name="number" type="number">
            <br>
            <br>
            <button type="submit" name="add-btn">Add contact</button>
            <button type="submit" name="edit-btn">Edit contact</button>
            <button type="submit" name="delete-btn">Delete contact</button>
        </form>
</div>

<div class="contact-container">
    <h2>All contacts</h2>
    <?php
    include 'includes/db.php';
    $sql = 'SELECT * FROM contacts;';

    $stmt= $conn->query($sql);

    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($contacts) {
        foreach ($contacts as $contact) {
            echo 'Name: '.$contact['name'] . ' Number: '. $contact['number']. '<br><br>';
        }
    }
    ?>
</div>
</div>

<?php require 'footer.php' ?>