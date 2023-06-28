<h1 class='title'>List of Users! &#128075;</h1>
<table class='table'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Company</th>
        </tr>
    </thead>
    <tbody>

    <?php

    foreach($data AS $user){  
        echo "<tr>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['username'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['address']['street'].' '.$user['address']['zipcode'].' '.$user['address']['city'] . "</td>";
        echo "<td>" . $user['phone'] . "</td>";
        echo "<td>" . $user['company']['name'] . "</td>";
        echo "</tr>";
    }
        
    ?>



    </tbody>
</table>