<?php

/*
Copyright [2016] [Shujaat Hussain]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

*/

?><?php   
print_r($_GET);
exit;

$divFlag=11;
//print_r(getRecommendation(39,'2015 05 04 00:30:01','2015 05 04 23:30:01'));
$result=json_decode(getRecommendation(39,'2015 05 04 00:30:01','2015 05 04 23:30:01'),true);


if(count($result))
{
 for($i=0;$i<count($result);$i++){

	?>         
<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#plus_<?php echo $result[$i]['recommendationID']?>"> <strong>Recommendation</strong>:  <?php echo $result[$i]['recommendationDescription'];?></a> </h4>
                          </div>
                          <div id="plus_<?php echo $result[$i]['recommendationID'];?>" class="panel-collapse collapse">
                            <div class="panel-body"><strong>Reason</strong>:  <?php  echo getsituationDescription($result[$i]['situationID']);?></div>
                             <div class="panel-body"><strong>Feedback</strong>:  <?php  echo getRecommendationFeedbackbyID($result[$i]['recommendationID']);?></div>
                          </div>
                        </div>
                        
                        <?php
                        	}//for loop
							}//if cond
							
							else{
							
							                           
										?>
										
										<div class="panel panel-default">
									  <div class="panel-heading">
										<h4 class="panel-title"> <a  data-parent="#accordion" href="#plus_"> <strong>No Recommendations</strong>:  </a> </h4>
									  </div>
									 
									</div>
										
                            <?php
                            
							}
							?>