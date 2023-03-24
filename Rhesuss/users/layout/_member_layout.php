<style>
    th{
        background color:white;
    }

</style><div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($users)): $i++;?>
            <table class="table table-condensed" border=1>
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Blood group</th>
                <th>Gender</th>

                <th>phone</th>
                <th>City</th>
                <th>hospital</th>
                </thead>
                <?php foreach($users as $u): $i++;?>
                <tr class="<?php if($i%2==0){echo $bg_background;}else{echo 'bg-danger';} ?>">
                    <td><?= $u['pname']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['bloodgroup']; ?></td>
                    <td><?= $u['gender']; ?></td>
                    <td><?= $u['phone']; ?></td>
                    <td><?= $u['city']; ?></td>
                    <td><?= $u['hospital']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>