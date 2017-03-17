<!-- views/index/home.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">
    <h1><i><b>Welcome <?= ucfirst($user_type) ?></b></i></h1>
    <?php if($user_type == 'HBN'){ ?>
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    		<h3>Updates</h3>
    	</div>
    	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
    		<h3>Takenlijist</h3>
            <?php if($this->aauth->is_member(6)){ ?>
            <table class="table table-striped task-table">
                <thead>
                  <tr>
                    <th>Task Title</th>
                    <th>Deadline</th>
                    <th>User Name</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($tasks as $key => $task) {
                        ?>
                        <tr>
                            <td><?= $task['title'] ?></td>
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
                            <td>
                            <?php
                                if ($task['status'] == 'complete') {
                            ?>
                                    <b class="text-success">Completed</b>
                            <?php
                                }else{
                            ?>
                                <a href="#" class="btn btn-success complete-task" data-id="<?= $task['id'] ?>">Complete</a>
                            <?php
                                }
                            ?>                            
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
            <?php } ?>
    	</div>
    </div>
    <?php } ?>
    </div>
</div>
