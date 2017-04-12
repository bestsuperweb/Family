<!-- views/index/home.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">
    <h1 style="margin-top: 0"><i><b>Welcome <?= ucfirst($user_type) ?></b></i></h1>
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    		<h3>Updates</h3>
            <table id = "update-table">
                <thead>
                  <tr>
                    <th>Update Title</th>
                    <?php 
                        if($this->aauth->is_member(6)){  
                            ?>
                            <th>User</th>
                            <?php
                            } 
                        ?>
                    <th>Date</th>
                  </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Update Title</th>
                        <?php 
                            if($this->aauth->is_member(6)){  
                                ?>
                                <th>User</th>
                                <?php
                                } 
                            ?>
                        <th>Date</th>
                    </tr>
                    <tr>
                      <th colspan="7" class="ts-pager form-inline">
                        <div class="btn-group btn-group-sm" role="group">
                          <button type="button" class="btn first"><span class="glyphicon glyphicon-step-backward"></span></button>
                          <button type="button" class="btn prev"><span class="glyphicon glyphicon-backward"></span></button>
                        </div>
                        <span class="pagedisplay"></span>
                        <div class="btn-group btn-group-sm" role="group">
                          <button type="button" class="btn next"><span class="glyphicon glyphicon-forward"></span></button>
                          <button type="button" class="btn last"><span class="glyphicon glyphicon-step-forward"></span></button>
                        </div>
                        <select class="form-control input-sm pagesize" title="Select page size">
                          <option selected="selected" value="10">10</option>
                          <option value="20">20</option>
                          <option value="30">30</option>
                          <option value="all">All Rows</option>
                        </select>
                        <select class="form-control input-sm pagenum" title="Select page number"></select>
                      </th>
                    </tr>
                  </tfoot>
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
    		<h3>To do</h3>
            <table id = "task-table">
                <thead>
                  <tr>
                    <th>Task Title</th>
                    <?php 
                        if($this->aauth->is_member(6)){  
                            ?>
                            <th>Deadline</th>                    
                            <th>User</th>
                            <?php
                            } 
                        ?>
                    <th>Status</th> 
                  </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Task Title</th>
                        <?php 
                            if($this->aauth->is_member(6)){  
                                ?>
                                <th>Deadline</th>                    
                                <th>User</th>
                                <?php
                                } 
                            ?>
                        <th>Status</th> 
                    </tr>
                    <tr>
                      <th colspan="7" class="ts-pager form-inline">
                        <div class="btn-group btn-group-sm" role="group">
                          <button type="button" class="btn first"><span class="glyphicon glyphicon-step-backward"></span></button>
                          <button type="button" class="btn prev"><span class="glyphicon glyphicon-backward"></span></button>
                        </div>
                        <span class="pagedisplay"></span>
                        <div class="btn-group btn-group-sm" role="group">
                          <button type="button" class="btn next"><span class="glyphicon glyphicon-forward"></span></button>
                          <button type="button" class="btn last"><span class="glyphicon glyphicon-step-forward"></span></button>
                        </div>
                        <select class="form-control input-sm pagesize" title="Select page size">
                          <option selected="selected" value="10">10</option>
                          <option value="20">20</option>
                          <option value="30">30</option>
                          <option value="all">All Rows</option>
                        </select>
                        <select class="form-control input-sm pagenum" title="Select page number"></select>
                      </th>
                    </tr>
                  </tfoot>
                <tbody>
                <?php 
                    foreach ($tasks as $key => $task) {
                        if(!$this->aauth->is_member(6) && $task['user_task'] == 'HBN'){

                        }else{
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
                    }
                ?>
                </tbody>
            </table>
     
    	</div>
    </div>
    </div>
</div>
