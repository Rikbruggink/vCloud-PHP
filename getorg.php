<?php
include('login.php');
// verify logged in by print out name and href of all the organizations
    $orgRefs = $service->getOrgRefs();
    if (!empty($orgRefs))
    {
        foreach ($orgRefs as $ref)
        {
            echo "href=" . $ref->get_href()  .
                 " name=" . $ref->get_name() . "\n";
        }
    }
include('logout.php')
?>
