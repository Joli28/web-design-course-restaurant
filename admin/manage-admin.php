<?php 
    include('partials/menu.php');
?>

    <div class="main-content">
       <div class="wrapper">
           <h2>Manage Admin</h2>
            <br>
            
            <a class="btn-primary" href="add-admin.php">Add admin</a>
            
            <br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>User</td>
                    <td>user</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                    <td></td>

                </tr>

                <tr>
                    <td>2.</td>
                    <td>User</td>
                    <td>user</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                    <td></td>

                </tr>

                <tr>
                    <td>3.</td>
                    <td>User</td>
                    <td>user</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                    <td></td>

                </tr>
            </table>

        </div>
    </div>

    <?php 
    include('partials/footer.php');
?>