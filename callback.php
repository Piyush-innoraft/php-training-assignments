<?php

include '/var/www/abc~/vendor/hybridauth/hybridauth/autoload.php';
	include '/var/www/abc~/config.php';

use Hybridauth\Exception\Exception;
use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;


 
    $hybridauth = new Hybridauth($hybridauthConfig);
    

    // Log in the user with a specific provider
    /**
     * When invoked, `authenticate()` will redirect users to provider login page where they
     * will be asked to grant access to your application. If they do, provider will redirect
     * the users back to Authorization callback URL (i.e., this script).
     */

    $hybridauth->authenticate('LinkedIn');

    $adapters = $hybridauth->getConnectedAdapters();

    // these are the only fields returned
    // put these in your database table
    $userInfoLinkedIn = $adapters['LinkedIn']->getUserProfile() ;
    print "<br />identifier: " . $userInfoLinkedIn->identifier;
    print "<br />photoURL: " . $userInfoLinkedIn->photoURL;
    print "<br />displayName: " . $userInfoLinkedIn->displayName;
    print "<br />firstName: " . $userInfoLinkedIn->firstName;
    print "<br />lastName: " . $userInfoLinkedIn->lastName;
    print "<br />email: " . $userInfoLinkedIn->email;

    // ******************************************************
    //  Now that we have data on the user,
    // this is where you would store it in YOUR database
    // ******************************************************

    // logout a user - hardcoded one specific provider
    if (isset($_GET['logout'])) {
        $adapter = $hybridauth->getAdapter('LinkedIn');
        $adapter->disconnect();
    }

    /**
     * Redirects user to home page (i.e., index.php in our case)
     */
    //HttpClient\Util::redirect('piyush.com/indexx.php');
 //catch (Exception $e) {
  //  echo $e->getMessage();
//}
 

?>









