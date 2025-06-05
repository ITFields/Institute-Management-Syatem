<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('db.php'); // Database connection

$session_timeout = 30; // 30 seconds

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    if (!isset($_SESSION['user'])) {
        $query = "SELECT * FROM users WHERE id='$user_id'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            $_SESSION['user'] = $user['username'];
            $_SESSION['course'] = $user['course'];
            $_SESSION['fee'] = $user['fee'];
        }
    }

    $_SESSION['last_activity'] = time(); // 🟢 Last activity update
}
?>

<script>
    let sessionTimeout = 30 * 1000; // 30 seconds
    let logoutTimer;

    function resetTimer() {
        clearTimeout(logoutTimer);
        logoutTimer = setTimeout(() => {
            fetch('logout.php', { method: 'POST' }) // Backend se confirm karega
                .then(response => response.json())
                .then(data => {
                    if (data.status === "logged_out") {
                        alert("Your session has expired. Please login again.");
                        window.location.href = 'login.php';
                    }
                });
        }, sessionTimeout);
    }

    // User activity detect karo aur timer reset karo
    document.addEventListener("mousemove", resetTimer);
    document.addEventListener("keydown", resetTimer);
    document.addEventListener("click", resetTimer);
    document.addEventListener("scroll", resetTimer);

    resetTimer(); // Pehli baar script chalate hi timer start karna
</script>
