<select name="name" id="name">

<?php
include('conn.php');

$query = "select * from engineer";
$name = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($name)) {
        ?>

        <option  selected hidden >Choose</option>
        <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
<?php
}
?>
</select>

<style>
#name{
        font-weight: bold;
        text-align: center;
}
</style>