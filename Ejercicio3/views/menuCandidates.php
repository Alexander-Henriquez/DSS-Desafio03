<?php
if(isset($_SESSION['id'])) {
?>
<link rel="stylesheet" href="styles/styleCandidates.css">
<link rel="stylesheet" href="styles/grid.css">
<?php



$arraytImg = array(
    (object) array(
        "id" => 1,
        "name" => "Martin Price",
        "img" => "assets/martin.jpg",
        "bio" => "<b>Frase Electoral: </b>Mi plan se está realizando, y pronto yo seré la reina del verano."
    ),
    (object) array(
        "id" => 2,
        "name" => "Ralph Wiggum",
        "img" => "assets/ralph.jpg",
        "bio" => "<b>Frase Electoral: </b> Ya sé ir al baño solo."
    ),
    (object) array(
        "id" => 3,
        "name" => "Lisa Simpsons",
        "img" => "assets/lisa.jpg",
        "bio" => "<b>Frase Electoral: </b>Baaaaaaaaart ."
    )
);
echo "<br>";

echo "<div class='parent'>";
for ($i = 0; $i < 3; $i++) {
echo "<div class='container'>       
<div class='profile-wrapper'>
    <div class='profile'>
        <div class='profile-image'>
            <img
                src='" . $arraytImg[$i]->img . "'
                alt='Profile'
            >
        </div>
        <ul class='social-icons'>
            <li>
            <form action='votar.php' method='post'>
            <input type='hidden' name='name' value='" . $arraytImg[$i]->name . "'>
            <input type='hidden' name='voto' value='" . $arraytImg[$i]->id . "'>
        </form>
        
            </li>
        </ul>
        <div class='profile-name'>
            <h2>" . $arraytImg[$i]->name . "</h2>
            <div class='profile-bio'>
                ". $arraytImg[$i]->bio ."</em>.
            </div>
        </div>
    </div>
</div>
</div>";
}
echo "</div>";
?>
<?php
}
else {
    header("Location: index.php");
}
?>