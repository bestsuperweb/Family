<!-- views/index/home.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">
    <h1><i><b>Welcome <?= ucfirst($user_type) ?></b></i></h1>
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    		<h3>Updates</h3>
            <table class="table table-striped task-table">
                <thead>
                  <tr>
                    <th>Update Title</th>
                    <?php 
                        if($this->aauth->is_member(6)){  
                            ?>
                            <th>User Name</th>
                            <?php
                            } 
                        ?>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($updates as $key => $update) {
                        ?>
                        <tr>
                            <td>
                                <?php 
                                if($this->aauth->is_member(6)){  
                                      echo $update['hbn_update'];
                                    }else{
                                      echo $update['user_update'];
                                    } 
                                ?>                                         
                            </td>
                            <?php 
                            if($this->aauth->is_member(6)){  
                                ?>
                                <td>
                                <?php
                                    $group = $this->aauth->get_user_groups($update['user_id'])[1]->name;
                                    $user = $this->aauth->get_user($update['user_id'])->name; 
                                    $param = urlencode(serialize(array($group, $user)));
                                ?>                                
                                    <a href="<?= base_url('index/profile/5/'.$param) ?>"><?= $update['user_name'] ?></a>                                
                                </td>
                                <?php
                                } 
                            ?>                           
                            <td>
                                <?= $update['created_date'] ?>                         
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
    	</div>
    	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
    		<h3>Takenlijst</h3>
            <table class="table table-striped task-table">
                <thead>
                  <tr>
                    <th>Task Title</th>
                    <?php 
                        if($this->aauth->is_member(6)){  
                            ?>
                            <th>Deadline</th>                    
                            <th>User Name</th>
                            <?php
                            } 
                        ?>
                    <th>Status</th> 
                  </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($tasks as $key => $task) {
                        ?>
                        <tr>
                            <td>
                                <?php 
                                if($this->aauth->is_member(6)){  
                                      echo $task['hbn_task'];
                                    }else{
                                      echo $task['user_task'];
                                    } 
                                ?>                                         
                            </td>
                            
                            <?php 
                            if($this->aauth->is_member(6)){  
                                ?>
                                <td>
                                <?php 
                                      if($task['deadline'] != '0000-00-00'){
                                        echo $task['deadline'];
                                        }else{
                                          echo "&#8734;";
                                        } 
                                    ?>                                
                                </td>
                                <td>
                                <?php
                                    $group = $this->aauth->get_user_groups($task['user_id'])[1]->name;
                                    $user = $this->aauth->get_user($task['user_id'])->name; 
                                    $param = urlencode(serialize(array($group, $user)));
                                ?>                                
                                    <a href="<?= base_url('index/profile/5/'.$param) ?>"><?= $task['user_name'] ?></a>                                
                                </td>                                

                                <?php
                                } 
                            ?>

                            <td>
                                <?php
                                    if ($task['status'] == 'complete') {
                                ?>
                                        <b class="text-success">Completed</b>
                                <?php
                                    }else{
                                          if ($this->aauth->is_member(6)) {
                                              ?>
                                            <a href="#" class="btn btn-success complete-task" data-id="<?= $task['id'] ?>">Complete</a>
                                          <?php
                                          }else{
                                            ?>
                                            <b class="text-primary">Progress</b>
                                          <?php
                                          }
                                          
                                        }
                                ?>                         
                            </td>                            
                            
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
     
    	</div>
    </div>
    </div>
</div>
