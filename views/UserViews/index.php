<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i < count($res["id_user"]); $i++){?>
    <tr>
      <th scope="row"><?= $res["id_user"][$i] ?></th>
      <td><?= $res["first_name"][$i] ?></td>
      <td><?= $res["middle_name"][$i] ?> <?= $res["last_name"][$i] ?></td>
      <td><?= $res["email"][$i] ?></td>
    </tr>
    <?php }?>
  </tbody>
</table>

</div>

