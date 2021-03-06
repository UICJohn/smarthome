<div class="modal fade" id="add_task_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        	<div class="modal-content">
			<div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                <h4 class='modal-title' id='myModalLabel'>New Task</h4>
                        </div>
                        <form class='form-horizontal' action = '<?=site_url("task/add_task/".$this->uri->segment(3))?>' method='post'>
                        <div class='modal-body'>
                                
                                        <div class='form-group'>
                                                <label class='col-sm-4 control-label' for='title'>Title</label>
                                                <div class = 'col-sm-6'>
                                                        <input id='title' name='title' class='form-control'/>
                                                </div>
                                        </div>
                                        <div class='form-group'>
                                                <label class='col-sm-4 control-label' for='time'>Running Time</label>
                                                <div class = 'col-sm-6'>
                                                        <input id='time' type='text' readonly class='form-control form_datetime' name='time' placeholder='YY-MM-DD hh:mm'/>
                                                </div>
                                        </div>
                                        <div class='form-group'>
                                                <label class='col-sm-4 control-label' for='annotation'>Annotation</label>
                                                <div class = 'col-sm-6'>
                                                        <input id='annotation' name='annotation' class='form-control'/>
                                                </div>
                                        </div>
                                        <div class='form-group'>
                                                <label class='col-sm-4 control-label' for='annotation'>Parameters</label>
                                                <div class = 'col-sm-6'>
                                                        <input id='parameters' name='params' class='form-control'/>
                                                </div>
                                        </div>
                                
                        </div>
                            
                        <div class='modal-footer'>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                <input type='submit' class='btn btn-primary' value='Apply'>
                        </div>
                        </form> 
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
