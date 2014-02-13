<?php
include('login.php');
// create an SDK Admin object
$sdkAdmin = $service->createSDKAdminObj();
// get references to administrative organization entities
$orgRefs = $sdkAdmin->getAdminOrgRefs();

//var_dump($orgRefs[0]->getAdminVdcStorageProfile());
//exit;
$orgs = array(); 
   
foreach($orgRefs as $orgRef):

$sdkOrg = $service->createSDKObj($orgRef);

$orgs[$orgRef->get_name()] = array();

$vdcRefs = $sdkOrg->getAdminVdcs();

foreach ( $vdcRefs as $vdc)
	{
		$vdc_info = array(
			'cpu' =>  $vdc->getComputeCapacity()->getCpu(),
			'memory' =>  $vdc->getComputeCapacity()->getMemory(),
			//'storage' => $vdc->getAdminVdcStorageProfiles(),
		);
	
	
	//echo "href=" . $vdc->get_href()  . " name=" . $vdc->get_name() .  " AllocationModel= " . $vdc->getAllocationModel() . " Resources= " . $vdc->getComputeCapacity() . "\n";

		$orgs[$orgRef->get_name()]['vdc'][ $vdc->get_name()  ] = $vdc_info;  
	}
	

endforeach;

var_dump($orgs);
	
include('logout.php')
?>
