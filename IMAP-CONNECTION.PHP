<?php

// Include the Imap class definition (assuming it's in the same file or included)
// require_once 'Imap.php';

// Replace these values with your actual information
$server = 'mail.mdsengg.com';
$port = 993;
$username = 'protrack@mdsengg.com';
$password = 'Protrack';

// Instantiate the Imap class
$imap = new Imap($server, $port, $username, $password);

// Connect to the IMAP server
if ($imap->connect()) {
    echo "Connected to the IMAP server\n";

    // Select the mailbox or folder you want to work with
    $mailbox = 'INBOX'; // Replace with your desired mailbox
    $imap->select_folder($mailbox);

    // Example: Get folder statistics
    $stats = $imap->get_folder_stats();
    print_r($stats);

    // Example: Search for messages with a specific criteria
    $searchResults = $imap->search('UNSEEN');
    print_r($searchResults);

    // Example: Fetch the content of a specific message (replace UID with an actual UID)
    $uid = 1; // Replace with an actual UID
    $messageContent = $imap->get_body($uid);
    print_r($messageContent);

    // Close the connection when done
    $imap->__destruct();
} else {
    echo "Failed to connect to the IMAP server\n";
}
?>
