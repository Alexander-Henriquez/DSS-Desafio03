<?php

include 'model/db/db_conn.php';


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
            <button type='submit' name='votar' title='Votar por:'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' strokeWidth='2' stroke='currentColor' fill='none' strokeLinecap='round' strokeLinejoin='round'>
                    <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
                    <path d='M6 18L18 6'></path>
                    <path d='M6 6L18 18'></path>
                </svg>
            </button>
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

?>