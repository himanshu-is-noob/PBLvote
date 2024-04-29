<?php
session_start();
include("connection.php");

// Fetch all candidates/groups from the database
$getGroups = mysqli_query($connect, "SELECT name, photo, votes FROM user WHERE role=2");
$groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);

// Find the candidate/groups with maximum votes
$maxVotes = 0;
$winners = [];
foreach ($groups as $group) {
    if ($group['votes'] > $maxVotes) {
        // Reset winners array if a new maximum is found
        $maxVotes = $group['votes'];
        $winners = [$group['name']];
    } elseif ($group['votes'] == $maxVotes) {
        // Add to winners array if tied with the current maximum
        $winners[] = $group['name'];
    }
}

// Determine result message
if (count($winners) > 1) {
    $resultMessage = "Tied";
} else {
    $resultMessage = "Winner: " . implode(', ', $winners);
}
?>

<html>
<head>
    <title>Admin - Voting Results</title>
    <link rel="stylesheet" href="stylesheet1.css">
</head>
<body>
    <center>
    <div id="headerSection">
        <h1>Voting Results</h1>
        <h2>Admin Page</h2>
    </div>
    </center>
    <hr>
    
    <div id="mainSection">
        <div id="resultsSection">
            <center>
            <h1>CONGRATULATIONS ! </h1><br><br>
            <h2><?php echo $resultMessage; ?></h2>
            <h3>Total Votes: <?php echo $maxVotes; ?></h3>
            <div id="winnerDetails">
                <!-- Display winner(s) details here -->
            </div>
            </center>
        </div>
    </div>
</body>
</html>
