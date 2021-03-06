<?php 

add_category_admin();
?>
<h1 class="page-header">
  Product Categories

</h1>


<div class="col-md-4">
<h3><?php display_message(); ?></h3>
    <form action="" method="post">

        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name="cat_title" class="form-control">
        </div>

        <div class="form-group">

            <input type="submit" class="btn btn-primary" name="add_category" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
        <thead>

            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>


        <tbody>
            <?php show_categories_in_admin (); ?>
        </tbody>

    </table>

</div>

















</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
