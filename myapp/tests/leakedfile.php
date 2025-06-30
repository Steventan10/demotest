<?php
// leak_example.php

// ❌ Hardcoded database password
$db_password = "MySuperSecretPassword123";

// ❌ Hardcoded API key
$api_key = "sk_test_51H8r7Y3YXzK4fEXAMPLE1234567890";

// ❌ Hardcoded AWS secret access key
$aws_secret_access_key = "wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY";

function connectDatabase() {
    global $db_password;
    echo "Connecting to database with password: $db_password\n";
}

function useApi() {
    global $api_key;
    echo "Using API key: $api_key\n";
}

function useAws() {
    global $aws_secret_access_key;
    echo "AWS Secret Access Key: $aws_secret_access_key\n";
}

connectDatabase();
useApi();
useAws();
?>
