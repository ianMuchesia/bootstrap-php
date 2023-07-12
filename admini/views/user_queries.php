<div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">USER QUERIES</h3>
                
                
                <!-- User Queries -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                    <div class="text-end mb-4" >
                        <a href="?seen=all" class="btn tn-dark rounded-pill shadow-none btn-sm">
                            <i class="bi bi-check-all"></i> Mark all read
                        </a>
                        <a href="?del=all" class="btn tn-danger rounded-pill shadow-none btn-sm">
                            <i class="bi bi-trash"></i> Delete all
                        </a>

                    </div>

                        <div class="table-responsive-md"  style="height: 150px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" width="20%">Subject</th>
                                    <th scope="col" width="30%">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        // $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                        // $data = mysqli_query($con,$q);
                                        // $i=1;

                                        // while($row = mysqli_fetch_assoc($data))
                                        // {
                                        //     $seen='';
                                        //     if($row['seen']!=1){
                                        //         $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a> <br>";
                                        //     }
                                        //     $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";

                                        //     echo<<<query
                                        //         <tr>
                                        //             <td>$i</td>
                                        //             <td>$row[name]</td>
                                        //             <td>$row[email]</td>
                                        //             <td>$row[subject]</td>
                                        //             <td>$row[message]</td>
                                        //             <td>$row[date]</td>
                                        //             <td>$seen</td>
                                        //         </tr>
                                        //     query;
                                        //     $i++;
                                        //}
                                    ?> -->
                                </tbody>
                            </table>
                        </div>    

                    </div>
                </div>


            </div>
        </div>
    </div>