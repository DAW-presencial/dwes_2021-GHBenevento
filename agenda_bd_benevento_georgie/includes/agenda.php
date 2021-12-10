<?php
include 'db.php';

class Agenda
{
    public $connection;

    public function __construct($conn)
    {

        $this->connection = $conn;
    }

    public function addContact($name, $number)
    {

        $query = "INSERT INTO contacts(name, number) VALUES (?, ?);";
        $stmt = $this->connection->prepare($query)->execute([$name, $number]);

        if (!$stmt) {
            die("Query failed");
        }
        header("Location: ../index.php");
    }

    public function editContact($name, $number)
    {
        $query = "UPDATE contacts SET number=? WHERE name=?;";
        $stmt = $this->connection->prepare($query)->execute([$number, $name]);
        if (!$stmt) {
            die("Query failed");
        }
        header("Location: ../index.php");
    }

    public function deleteContact($name)
    {

        $query = "DELETE FROM contacts WHERE name=?;";
        $stmt = $this->connection->prepare($query)->execute([$name]);
        if (!$stmt) {
            die("Query failed");
        }
        header("Location: ../index.php");
    }
}

$agenda = new Agenda($conn);

if (isset($_POST['add-btn'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $agenda->addContact($name, $number);
    
    header("Location: ../index.php");
} elseif (isset($_POST['edit-btn'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $agenda->editContact($name, $number);

} elseif (isset($_POST['delete-btn'])) {
    $name = $_POST['name'];
    $agenda->deleteContact($name);
}
