<div class="modal modal-centered fade " id="add_folder" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-left" style="font-weight:bold;color:green" id="modalLabel"> Create New Title <i class="ti-folder-plus"></i></h3>
                <h5 class="close " style="font-weight:bolder;color:green" type="button" data-dismiss="modal">
                 X
                </h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <h4 class="text-left" style="font-weight:bold;color:green">Title *</h4>
                            <input type="text" placeholder="Exam Title" required name="name" class="form-control">
                        </div>
                        <div class="col-md-6 form-group"></div>
                        <div class="col-lg-12 form-group mg-t-8">
                            <button type="submit" name="add_folder" class="btn-fill-lg btn btn-primary btn-block btn-gradient-yellow btn-hover-bluedark">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
                                    include 'connect.php';
                                    if (isset($_POST['add_folder'])) 
                                    {
                                        $name = addslashes($_POST['name']);
                                        $level;
                                        
                                        $query=mysqli_query($mycon,"INSERT INTO exam_table(id,title,level) VALUES ('','$name','$level')");
                                        if ($query)
                                        {
                                            echo '<script>alert("Successfully Created")</script>';
                                        }
                                        else
                                        {
                                            echo mysqli_error($query);
                                        }
                                    }
                                ?>