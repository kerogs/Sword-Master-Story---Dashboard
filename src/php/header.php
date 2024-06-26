<?php

$file_name = basename($_SERVER['PHP_SELF']);

?>

<div id="navOpen" class="navButton">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M13 11H5v2h8v3l4-4-4-4v3zM19 3h2v3h-2zM19 8h2v3h-2zM19 13h2v3h-2zM19 18h2v3h-2z"></path>
    </svg>
</div>

<div class="nav <?= $file_name == 'index.php' ? 'animation-slideFromTop' : '' ?>">
    <nav>
        <ul>
            <a href="./">
                <li>Sword Master Story</li>
            </a>
            <hr>
            <a href="./">
                <li class="list <?= $file_name == 'index.php' ? ' active' : '' ?>">
                    <svg style="fill:#5650ca;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z">
                        </path>
                    </svg>
                    Dashboard
                </li>
            </a>
            <a href="./coupons.php">
                <li class="list <?= $file_name == 'coupons.php' ? ' active' : '' ?>">
                    <svg style="fill:#5650ca;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21 5H3a1 1 0 0 0-1 1v4h.893c.996 0 1.92.681 2.08 1.664A2.001 2.001 0 0 1 3 14H2v4a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1v-4h-1a2.001 2.001 0 0 1-1.973-2.336c.16-.983 1.084-1.664 2.08-1.664H22V6a1 1 0 0 0-1-1zM11 17H9v-2h2v2zm0-4H9v-2h2v2zm0-4H9V7h2v2z"></path>
                    </svg>
                    Coupons
                </li>
            </a>
            <a href="./settings.php">
                <li class="list <?= $file_name == 'settings.php' ? ' active' : '' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:#5650ca;">
                        <path d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
                        </path>
                    </svg>
                    Settings
                </li>
            </a>
            <a href="./faq.php">
                <li class="list <?= $file_name == 'faq.php' ? ' active' : '' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:#5650ca;">
                        <path d="M3 4v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm8 3h2v2h-2V7zm0 4h2v6h-2v-6z"></path>
                    </svg>
                    FAQ
                </li>
            </a>
            <a href="https://www.reddit.com/r/SwordMaster_Story/" target="_blank">
                <li class="list">
                    <svg style="fill:#5650ca;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle cx="9.67" cy="13" r="1.001"></circle>
                        <path d="M14.09 15.391A3.28 3.28 0 0 1 12 16a3.271 3.271 0 0 1-2.081-.63.27.27 0 0 0-.379.38c.71.535 1.582.809 2.471.77a3.811 3.811 0 0 0 2.469-.77v.04a.284.284 0 0 0 .006-.396.28.28 0 0 0-.396-.003zm.209-3.351a1 1 0 0 0 0 2l-.008.039c.016.002.033 0 .051 0a1 1 0 0 0 .958-1.038 1 1 0 0 0-1.001-1.001z">
                        </path>
                        <path d="M12 2C6.479 2 2 6.477 2 12c0 5.521 4.479 10 10 10s10-4.479 10-10c0-5.523-4.479-10-10-10zm5.859 11.33c.012.146.012.293 0 .439 0 2.24-2.609 4.062-5.83 4.062s-5.83-1.82-5.83-4.062a2.681 2.681 0 0 1 0-.439 1.46 1.46 0 0 1-.455-2.327 1.458 1.458 0 0 1 2.063-.063 7.145 7.145 0 0 1 3.899-1.23l.743-3.47v-.004A.313.313 0 0 1 12.82 6l2.449.49a1.001 1.001 0 1 1-.131.61L13 6.65l-.649 3.12a7.123 7.123 0 0 1 3.85 1.23 1.46 1.46 0 0 1 2.469 1c.01.563-.307 1.08-.811 1.33z">
                        </path>
                    </svg>
                    Reddit
                    <svg class="linkext" style="fill:#5650ca;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="m13 3 3.293 3.293-7 7 1.414 1.414 7-7L21 11V3z"></path>
                        <path d="M19 19H5V5h7l-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-5l-2-2v7z">
                        </path>
                    </svg>
                </li>
            </a>
            <a href="https://github.com/kerogs/Sword-Master-Story---Dashboard" target="_blank">
                <li class="list">
                    <svg style="fill:#5650ca;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                        </path>
                    </svg>
                    Github
                    <svg class="linkext" style="fill:#5650ca;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="m13 3 3.293 3.293-7 7 1.414 1.414 7-7L21 11V3z"></path>
                        <path d="M19 19H5V5h7l-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-5l-2-2v7z">
                        </path>
                    </svg>
                </li>
            </a>
            <div class="creator">
                By <span class="blue">Kerogs</span>, with <span class="red">love</span>
                <br>
                <a target="_blank" href="https://github.com/kerogs/">Github : <?= $servData['version'] ?></a>
            </div>
        </ul>
    </nav>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navOpenElement = document.getElementById('navOpen');
        const navElement = document.querySelector('.nav');

        navOpenElement.addEventListener('click', function() {
            if (navOpenElement.classList.contains('active')) {
                navOpenElement.classList.remove('active');
                navElement.classList.remove('active');
            } else {
                navOpenElement.classList.add('active');
                navElement.classList.add('active');
            }
        });
    });
</script>