<?php
 // created: 2018-05-22 13:17:15
$dictionary['Opportunity']['fields']['date_closed']['required']=false;
$dictionary['Opportunity']['fields']['date_closed']['audited']=false;
$dictionary['Opportunity']['fields']['date_closed']['massupdate']=false;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=true;
$dictionary['Opportunity']['fields']['date_closed']['formula']='maxRelatedDate($revenuelineitems, "date_closed")';
$dictionary['Opportunity']['fields']['date_closed']['enforced']=true;
$dictionary['Opportunity']['fields']['date_closed']['related_fields']=array (
);

 ?>