<?php

include "db.php";

$userMessage = strtolower(trim($_POST['message'] ?? ''));

$botResponse = "";

if(
    strpos($userMessage, "hello") !== false ||
    strpos($userMessage, "hi") !== false
){

    $botResponse =
    "Hello 👋 Welcome to Alfy George Portfolio.";

}
elseif(
    strpos($userMessage, "skills") !== false
){

    $botResponse =
    "Alfy George specializes in PHP, Laravel, CodeIgniter, MySQL, AI-assisted development, dashboards and automation systems.";

}
elseif(
    strpos($userMessage, "project") !== false
){

    $botResponse =
    "Projects include Sales Dashboard, Student Mark Analysis and Employment Management System.";

}
elseif(
    strpos($userMessage, "contact") !== false
){

    $botResponse =
    "You can contact Alfy George at alfygeorge03@gmail.com";

}
elseif(
    strpos($userMessage, "experience") !== false
){

    $botResponse =
    "Experienced in PHP development, admin dashboards, reporting systems and AI-powered solutions.";

}
else{

    $botResponse =
    "I am Alfy George AI Assistant. Ask about skills, projects, experience or contact details.";

}

/* SAVE CHAT */

// $stmt = mysqli_prepare(

//     $conn,

//     "INSERT INTO chats
//     (user_message, bot_response)
//     VALUES (?, ?)"

// );

// mysqli_stmt_bind_param(
//     $stmt,
//     "ss",
//     $userMessage,
//     $botResponse
// );

// mysqli_stmt_execute($stmt);

// echo $botResponse;

$sql = "INSERT INTO chat_history (user_message, bot_response)
VALUES (:user_message, :bot_response)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':user_message' => $userMessage,
    ':bot_response' => $botResponse
]);
echo $botResponse;


?>