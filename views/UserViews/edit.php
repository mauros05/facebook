<div class="p-2">
    <form action="user.php" method="post">
      <div class="form-group">
        <label for="exampleInputFirsName">First Name</label>
        <input type="text" name="first_name" class="form-control" placeholder="Jon Doe" value="<?= isset($res["first_name"])? $res["first_name"] : "" ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputMiddleName">Middle Name</label>
        <input type="text" name="middle_name" class="form-control" value="<?= isset($res["middle_name"])? $res["middle_name"] : "" ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputLastName">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="<?= isset($res["last_name"])? $res["last_name"] : "" ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="email" class="form-control" value="<?= isset($res["email"])? $res["email"] : "" ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">Password</label>
        <input type="password" name="password" class="form-control" value="<?= isset($res["password"])? $res["password"] : "" ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">User Name</label>
        <input type="text" name="username" class="form-control" value="<?= isset($res["username"])? $res["username"] : "" ?>">
      </div>

      <input type="text" name="id_user" value="<?= $res["id_user"] ?>" hidden>

      <button type="submit" name="edit_user" class="btn btn-primary mt-2">Edit User</button>
    </form>
</div>
