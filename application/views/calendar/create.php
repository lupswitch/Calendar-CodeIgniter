<?php
echo "<h1>" . "Nieuw boek:" . "</h1>";
?>


<fieldset>

<div class="container">
    <form action="<?=URL?>book/createSave/" method="post">
        <label for="person">Boek naam</label>
        <input required type="text" type="text" name="book_name" placeholder="Name"><br>
        <br>
        <br>
        <label>Boek author:</label>
        <input required type="text" type="text" name="book_author" placeholder="Author"><br>
        <br>
        <br>
        <label>Boek Comment</label>
        <input required type="text" name="book_comment" placeholder="Comment">
        <br>
        <br>
        <input type="submit" name="submit" value="Toevoegen">
    
    </form>

</div>

</fieldset>

<p><a href="http://localhost/Framework-php(toets)/">Back to home</a></p>