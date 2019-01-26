<?php

include 'conn/conn.php';
require_once "telerivet-php-client-master/telerivet.php";
   
    $API_KEY = 'GHsVD_LS2MtwJ5kmjh331u5Y6ZTdqR6aBwPN';           // from https://telerivet.com/api/keys
    $PROJECT_ID = 'PJdcdd6e694b061465';
    
    $telerivet = new Telerivet_API($API_KEY);
    
    $project = $telerivet->initProjectById($PROJECT_ID);


if(isset($_POST['submitMessage'])) {
    $contactFormName = $_POST['contactFormName']; 
    $contactFormEmail = $_POST['contactFormEmail']; 
    $contactFormPhoneNumber = $_POST['contactFormPhoneNumber']; 
    $contactFormMessage = $_POST['contactFormMessage']; 

    if(!empty($contactFormName) || !empty($contactFormEmail) || !empty($contactFormPhoneNumber) || !empty($contactFormMessage)){
        // query
        $sql = "INSERT INTO contact_tbl(Sender_Name, Sender_Email, Sender_Phone, Sender_Message) 
        VALUES('$contactFormName','$contactFormEmail','$contactFormPhoneNumber','$contactFormMessage')";

        $result = $conn->query($sql);

        // Send a SMS message
    $project->sendMessage(array(
        'to_number' => $contactFormPhoneNumber,
        'content' => $contactFormMessage
    ));   

    $tr = new Telerivet_API($API_KEY);
    $project = $tr->initProjectById($PROJECT_ID);

    $sent_msg = $project->sendMessage(array(
        'content' => "Thanks for contacting your shopping site", 
        'to_number' => $contactFormPhoneNumber
    ));
    
    // Query contacts  
    // $name_prefix = 'John';
    // $cursor = $project->queryContacts(array(
    //     'name[prefix]' => $name_prefix,
    //     'sort' => 'name',
    // ))->limit(20);
    
    // echo "{$cursor->count()} contacts matching $name_prefix:\n";
    
    // while ($cursor->hasNext())
    // {
    //     $contact = $cursor->next();
    //     echo "{$contact->name} {$contact->phone_number} {$contact->vars->birthdate}\n";        
    // }
    
    // Import a contact
    // $contact = $project->getOrCreateContact(array(
    //     'name' => 'John Smith',
    //     'phone_number' => $contactFormPhoneNumber,
    //     'vars' => array(
    //         'birthdate' => '1981-03-04',
    //         'network' => 'Orange'
    //     )
    // ));
    
    // // Add a contact to a group    
    // $group = $project->getOrCreateGroup('Subscribers');
    // $contact->addToGroup($group);


        echo '<h1>YOUR MESSAGE HAVE BEEN SENT</h1>';
        header('Location: contact.php');
    }else{
        echo '<h1>NO FIELD SHOULD BE EMPTY</h1>';
    }
    
    
    

    
}