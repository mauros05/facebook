<div class="p-2">
    <div>
        <a href="user.php?ac=c" class="btn btn-danger">Add new User</a>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < count($res["id_user"]); $i++){?>
            <tr>
            <th scope="row"><?= $res["id_user"][$i] ?></th>
            <td><?= $res["first_name"][$i] ?></td>
            <td><?= $res["middle_name"][$i] ?> <?= $res["last_name"][$i] ?></td>
            <td><?= $res["email"][$i] ?></td>
            <td><a href="user.php?ac=s&idu=<?= $res["id_user"][$i] ?>"  class="btn btn-success">Show</a></td>
            <td><a href="user.php?ac=de&idu=<?= $res["id_user"][$i] ?>" class="btn btn-danger">Delete</a></td>
            <td></td>
            </tr>
        <?php }?>
    </tbody>
    </table>
</div>

