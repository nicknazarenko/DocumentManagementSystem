<?php 
$class_info                 = $this->db->get('class')->result_array();
$single_study_material_info = $this->db->get_where('document', array('document_id' => $param2))->result_array();
foreach ($single_study_material_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo get_phrase('edit_study_material'); ?>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php?admin/study_material/update/<?php echo $row['document_id'] ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('date'); ?></label>

                            <div class="col-sm-5">
                                <input type="text" name="timestamp" class="form-control datepicker" data-format="D, dd MM yyyy" 
                                       placeholder="date here" value="<?php echo date("d M, Y", $row['timestamp']); ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('title'); ?></label>

                            <div class="col-sm-5">
                                <input type="text" name="title" class="form-control" id="field-1" value="<?php echo $row['title']; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('description'); ?></label>

                            <div class="col-sm-5">
                                <textarea name="description" class="form-control wysihtml5" data-stylesheet-url="<?php echo base_url(); ?>assets/css/wysihtml5-color.css"
                                          id="field-ta"><?php echo $row['description']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('program'); ?></label>

                            <div class="col-sm-5">
                                <select name="class_id" class="form-control selectboxit">
                                    <option value=""><?php echo get_phrase('select_class'); ?></option>
                                    <?php foreach ($class_info as $row2) { ?>
                                        <option value="<?php echo $row2['class_id']; ?>" <?php if ($row['class_id'] == $row2['class_id']) echo 'selected'; ?>>
                                            <?php echo $row2['name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('year');?></label>
                        
                        <div class="col-sm-5">
                            <select name="year" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="1"><?php echo get_phrase('1');?></option>
                              <option value="2"><?php echo get_phrase('2');?></option>
                              <option value="3"><?php echo get_phrase('3');?></option>
                              <option value="4"><?php echo get_phrase('4');?></option>
                          </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('file'); ?></label>

                        <div class="col-sm-5">

                            <input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> Browse" />

                        </div>
                    </div>


                        <div class="col-sm-3 control-label col-sm-offset-1">
                            <button type="submit" class="btn btn-success"><?php echo get_phrase('update');?></button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
<?php } ?>