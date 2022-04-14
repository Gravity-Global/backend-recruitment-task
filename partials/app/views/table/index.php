<h2>Users</h2>
<button onclick="window.location.href='/users/form';">Add user</button>
<table>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Company</th>
        <th></th>
    </tr>
    <?php
    $tableRows = '';
    $i = 0;
    foreach ($data['users'] as $user) {
        $tableRows .= "<tr>
            <td>{$user['name']}</td>
            <td>{$user['username']}</td>
            <td><a href='mailto:{$user['email']}'>{$user['email']}</a></td>
            <td>{$user['address']['street']}, {$user['address']['zipcode']} {$user['address']['city']}</td>
            <td>{$user['phone']}</td>
            <td>{$user['company']['name']}</td>
            <td><button onclick=\"window.location.href='/users/delete/{$i}';\">REMOVE BUTTON</button></td>
        </tr>";
        $i++;
    }
    echo $tableRows;
    ?>
</table>