<?php

	require 'User.php';

//User_1
    $user_1 = new User('Mario', 'Rossi', 'mrossi123', "m.rossi@gmail.com", '1221d3254w', 20);

    $user_1_data = $user_1->getData();
    echo '<h3>'.'Nome: '.$user_1_data['nome'].'</h3>';
    echo '<h3>'.'Cognome: '.$user_1_data['cognome'].'</h3>';
    echo '<h3>'.'Username: '.$user_1_data['username'].'</h3>';
    echo '<h3>'.'Email: '.$user_1_data['email'].'</h3>'.'<br>';

//User_2
    $user_2 = new User('Carlo', 'Bianchi', 'cbianchi456', "c.bianchi@gmail.com", '148ryfe478', 27);

    $user_2_data = $user_2->getData();
    echo '<h3>'.'Nome: '.$user_2_data['nome'].'</h3>';
    echo '<h3>'.'Cognome: '.$user_2_data['cognome'].'</h3>';
    echo '<h3>'.'Username: '.$user_2_data['username'].'</h3>';
    echo '<h3>'.'Email: '.$user_2_data['email'].'</h3>'.'<br>';

//User_3
    $user_3 = new User('Marta', 'Verdi', 'mverdi789', "m.verdi@gmail.com", '7385rydggd', 30);

    $user_3_data = $user_3->getData();
    echo '<h3>'.'Nome: '.$user_3_data['nome'].'</h3>';
    echo '<h3>'.'Cognome: '.$user_3_data['cognome'].'</h3>';
    echo '<h3>'.'Username: '.$user_3_data['username'].'</h3>';
    echo '<h3>'.'Email: '.$user_3_data['email'].'</h3>'.'<br>';

//User_4
    $user_4 = new User('Anna', 'Gialli', 'agialli101', "a.gialli@gmail.com", '9845yrydh2', 57);

    $user_4_data = $user_4->getData();
    echo '<h3>'.'Nome: '.$user_4_data['nome'].'</h3>';
    echo '<h3>'.'Cognome: '.$user_4_data['cognome'].'</h3>';
    echo '<h3>'.'Username: '.$user_4_data['username'].'</h3>';
    echo '<h3>'.'Email: '.$user_4_data['email'].'</h3>'.'<br>';

//User_5
    $user_5 = new User('Sara', 'Neri', 'sneri121', "s.neri@gmail.com", '35g67te65t4', 23);

    $user_5_data = $user_5->getData();
    echo '<h3>'.'Nome: '.$user_5_data['nome'].'</h3>';
    echo '<h3>'.'Cognome: '.$user_5_data['cognome'].'</h3>';
    echo '<h3>'.'Username: '.$user_5_data['username'].'</h3>';
    echo '<h3>'.'Email: '.$user_5_data['email'].'</h3>'.'<br>';

?>
