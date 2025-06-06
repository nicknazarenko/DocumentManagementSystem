<hr />

<div class="row">
	<div class="col-sm-3">
	
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-user"></i></div>
			 <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher');?>" 
                    		data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('teacher');?></h3>
                   <p>Total teachers</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-orange">
			<div class="icon"><i class="entypo-user-add"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $this->db->count_all('class');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('Course');?></h3>
                   <p>Total Classes/Courses</p>
		</div>
		
	</div>
	<div class="col-sm-3">
	
		<div class="tile-stats tile-plum">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $this->db->count_all('student');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('student');?></h3>
                   <p>Total students</p>
		</div>
		
	</div>
	<div class="col-sm-3">
	
		<div class="tile-stats tile-pink">
			<div class="icon"><i class="entypo-check"></i></div>
		
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('section');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('Units/Sections');?></h3>
                   <p>Total number of Units</p>
		</div>
		
	</div>
	
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-chat"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $this->db->count_all('message');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('message');?></h3>
                   <p>Total Message</p>
		</div>
		
	</div>
	<div class="col-sm-3">
	
		<div class="tile-stats tile-cyan">
			<div class="icon"><i class="entypo-megaphone"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $this->db->count_all('noticeboard');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('noticeboard');?></h3>
                   <p>Total Events</p>
		</div>
		
	</div>
	<div class="col-sm-3">
	
		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-docs"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $this->db->count_all('document');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('document');?></h3>
                   <p>Total Document</p>
		</div>
		
	</div>
	<div class="col-sm-3">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-rss"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $this->db->count_all('enroll');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('enroll');?></h3>
                   <p>Total Enrolled</p>
		</div>
		
	</div>
</div>








<div class="row">

	<div class="col-md-12">
    	<div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            <?php echo get_phrase('event_schedule');?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	
	
</div>



    <script>
  $(document).ready(function() {
	  
	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 430,
					width:300,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
  </script>

  
