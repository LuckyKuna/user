<?php
require './php/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <title>Телефонна книга Рівненських шкіл</title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<div id="main">

    <div class="menu">
        <div class="menu_item home">
            <a href="index.php">
                <div class="home_title">Головна</div>
                <div class="home_icon">
                    <svg viewBox="0 0 24 24" width="32px" height="32px" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.2796 3.71579C12.097 3.66261 11.903 3.66261 11.7203 3.71579C11.6678 3.7311 11.5754 3.7694 11.3789 3.91817C11.1723 4.07463 10.9193 4.29855 10.5251 4.64896L5.28544 9.3064C4.64309 9.87739 4.46099 10.0496 4.33439 10.24C4.21261 10.4232 4.12189 10.6252 4.06588 10.8379C4.00765 11.0591 3.99995 11.3095 3.99995 12.169V16C3.99995 16.9456 4.0005 17.6047 4.03569 18.1205C4.07028 18.6275 4.13496 18.9227 4.22832 19.148C4.5328 19.8831 5.11682 20.4672 5.8519 20.7716C6.07729 20.865 6.37249 20.9297 6.8794 20.9643C7.3953 20.9995 8.05439 21 8.99995 21H15C15.9455 21 16.6046 20.9995 17.1205 20.9643C17.6274 20.9297 17.9226 20.865 18.148 20.7716C18.8831 20.4672 19.4671 19.8831 19.7716 19.148C19.8649 18.9227 19.9296 18.6275 19.9642 18.1205C19.9994 17.6047 20 16.9456 20 16V12.169C20 11.3095 19.9923 11.0591 19.934 10.8379C19.878 10.6252 19.7873 10.4232 19.6655 10.24C19.5389 10.0496 19.3568 9.87739 18.7145 9.3064L13.4748 4.64896C13.0806 4.29855 12.8276 4.07463 12.621 3.91817C12.4245 3.7694 12.3321 3.7311 12.2796 3.71579ZM11.1611 1.79556C11.709 1.63602 12.2909 1.63602 12.8388 1.79556C13.2189 1.90627 13.5341 2.10095 13.8282 2.32363C14.1052 2.53335 14.4172 2.81064 14.7764 3.12995L20.0432 7.81159C20.0716 7.83679 20.0995 7.86165 20.1272 7.88619C20.6489 8.34941 21.0429 8.69935 21.3311 9.13277C21.5746 9.49916 21.7561 9.90321 21.8681 10.3287C22.0006 10.832 22.0004 11.359 22 12.0566C22 12.0936 22 12.131 22 12.169V16.0355C22 16.9373 22 17.6647 21.9596 18.2567C21.918 18.8654 21.8305 19.4037 21.6194 19.9134C21.1119 21.1386 20.1385 22.1119 18.9134 22.6194C18.4037 22.8305 17.8654 22.9181 17.2566 22.9596C16.6646 23 15.9372 23 15.0355 23H8.96443C8.06267 23 7.33527 23 6.74326 22.9596C6.13452 22.9181 5.59624 22.8305 5.08654 22.6194C3.8614 22.1119 2.88803 21.1385 2.38056 19.9134C2.16943 19.4037 2.08187 18.8654 2.04033 18.2567C1.99994 17.6647 1.99995 16.9373 1.99995 16.0355L1.99995 12.169C1.99995 12.131 1.99993 12.0936 1.99992 12.0566C1.99955 11.359 1.99928 10.832 2.1318 10.3287C2.24383 9.90321 2.42528 9.49916 2.66884 9.13277C2.95696 8.69935 3.35105 8.34941 3.87272 7.8862C3.90036 7.86165 3.92835 7.83679 3.95671 7.81159L9.22354 3.12996C9.58274 2.81064 9.89467 2.53335 10.1717 2.32363C10.4658 2.10095 10.781 1.90627 11.1611 1.79556Z"
                            fill="#ffffff"></path>
                    </svg>
                </div>
            </a>
        </div>
        <div class="menu_item search">
            <form class="form_area" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="item">
                    <input type="text" name="find" class="input" required="true" placeholder="Запит">
                    <button type="submit" name="search" value="Search" class="submit button">
                        <svg fill="#000000" width="32px" height="32px" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m14.91 13.09-3.68-3.21a4.86 4.86 0 0 0 .86-2.77A5.34 5.34 0 0 0 6.59 2a5.35 5.35 0 0 0-5.5 5.15 5.34 5.34 0 0 0 5.5 5.15 5.71 5.71 0 0 0 3.82-1.44L14.08 14zM6.59 11a4.09 4.09 0 0 1-4.25-3.9 4.09 4.09 0 0 1 4.25-3.9 4.09 4.09 0 0 1 4.25 3.9A4.08 4.08 0 0 1 6.59 11z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="menu_item count">
            <div class="count_title">Всього запитів</div>
            <div class="count_icon">
                <svg viewBox="0 0 24 24" width="32px" height="32px" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="transparent">

                    <path
                        d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                        id="MingCute" fill-rule="nonzero"> </path>
                    <path
                        d="M15,14 C17.6887316,14 19.8818169,16.1223292 19.9953804,18.7831122 L20,19 L20,21 C20,21.5523 19.5523,22 19,22 C18.48715,22 18.0644908,21.613973 18.0067275,21.1166239 L18,21 L18,19 C18,17.402275 16.7511226,16.096336 15.1762773,16.0050925 L15,16 L7,16 C5.40232321,16 4.09633941,17.2488774 4.00509271,18.8237227 L4,19 L4,21 C4,21.5523 3.55228,22 3,22 C2.48716857,22 2.06449347,21.613973 2.0067278,21.1166239 L2,21 L2,19 C2,16.3112684 4.12231026,14.1181831 6.78311066,14.0046196 L7,14 L15,14 Z M21,13 C21.5523,13 22,13.4477 22,14 C22,14.5523 21.5523,15 21,15 L20,15 C19.4477,15 19,14.5523 19,14 C19,13.4477 19.4477,13 20,13 L21,13 Z M11,2 C13.7614,2 16,4.23858 16,7 C16,9.76142 13.7614,12 11,12 C8.23858,12 6,9.76142 6,7 C6,4.23858 8.23858,2 11,2 Z M21,10 C21.5523,10 22,10.4477 22,11 C22,11.5523 21.5523,12 21,12 L19,12 C18.4477,12 18,11.5523 18,11 C18,10.4477 18.4477,10 19,10 L21,10 Z M11,4 C9.34315,4 8,5.34315 8,7 C8,8.65685 9.34315,10 11,10 C12.6569,10 14,8.65685 14,7 C14,5.34315 12.6569,4 11,4 Z M21,7 C21.5523,7 22,7.44772 22,8 C22,8.51283143 21.613973,8.93550653 21.1166239,8.9932722 L21,9 L18,9 C17.4477,9 17,8.55228 17,8 C17,7.48716857 17.386027,7.06449347 17.8833761,7.0067278 L18,7 L21,7 Z"
                        id="形状" fill="#ffffff"> </path>
                </svg>
            </div>
            <div class="count_items">: <?php echo $count; ?></div>
        </div>
        <?php if(isset($_SESSION['username'])){ ?>
        <div class="menu_item add">
            <label for="checkbox_add" class="l_checkbox_add">
                <svg fill="#fff" viewBox="0 0 24 24" width="32px" height="32px" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2,21h8a1,1,0,0,0,0-2H3.071A7.011,7.011,0,0,1,10,13a5.044,5.044,0,1,0-3.377-1.337A9.01,9.01,0,0,0,1,20,1,1,0,0,0,2,21ZM10,5A3,3,0,1,1,7,8,3,3,0,0,1,10,5ZM23,16a1,1,0,0,1-1,1H19v3a1,1,0,0,1-2,0V17H14a1,1,0,0,1,0-2h3V12a1,1,0,0,1,2,0v3h3A1,1,0,0,1,23,16Z">
                    </path>
                </svg>
            </label>
            <input type="checkbox" name="checkbox" id="checkbox_add" value="value">
            <div class="add_contact">
                <form class="form_area" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <?php foreach ($form as $outerKey => $outerValue) { ?>
                    <div class="item">
                        <label><?php echo $outerKey; ?></label>
                        <input type="text" name="<?php echo $outerValue; ?>" class="input" required="true"
                            placeholder="<?php echo $outerKey; ?>">
                    </div>
                    <?php } ?>
                    <div class="submit">
                        <button type="submit" name="add" value="Add" class="button">Додати</button>
                    </div>
                </form>
            </div>
        </div>
        <?php }  ?>
        <div class="menu_item login">
            <?php if(isset($_SESSION['username'])){ ?>
            <a href="?logout">
                <div class="logout_title">Вийти</div>
                <div class="logout_icon">
                    <svg viewBox="0 0 24 24" width="32px" height="32px" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2 6.5C2 4.01472 4.01472 2 6.5 2H12C14.2091 2 16 3.79086 16 6V7C16 7.55228 15.5523 8 15 8C14.4477 8 14 7.55228 14 7V6C14 4.89543 13.1046 4 12 4H6.5C5.11929 4 4 5.11929 4 6.5V17.5C4 18.8807 5.11929 20 6.5 20H12C13.1046 20 14 19.1046 14 18V17C14 16.4477 14.4477 16 15 16C15.5523 16 16 16.4477 16 17V18C16 20.2091 14.2091 22 12 22H6.5C4.01472 22 2 19.9853 2 17.5V6.5ZM18.2929 8.29289C18.6834 7.90237 19.3166 7.90237 19.7071 8.29289L22.7071 11.2929C23.0976 11.6834 23.0976 12.3166 22.7071 12.7071L19.7071 15.7071C19.3166 16.0976 18.6834 16.0976 18.2929 15.7071C17.9024 15.3166 17.9024 14.6834 18.2929 14.2929L19.5858 13L11 13C10.4477 13 10 12.5523 10 12C10 11.4477 10.4477 11 11 11L19.5858 11L18.2929 9.70711C17.9024 9.31658 17.9024 8.68342 18.2929 8.29289Z"
                            fill="#ffffff"></path>
                    </svg>
                </div>
            </a>
            <?php } ?>
            <?php if(!isset($_SESSION['username'])){ ?>
            <label for="checkbox_login">
                <div class="login_title">Увійти</div>
                <div class="login_icon">
                    <svg viewBox="0 0 24 24" width="32px" height="32px" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 6C8 3.79086 9.79086 2 12 2H17.5C19.9853 2 22 4.01472 22 6.5V17.5C22 19.9853 19.9853 22 17.5 22H12C9.79086 22 8 20.2091 8 18V17C8 16.4477 8.44772 16 9 16C9.55228 16 10 16.4477 10 17V18C10 19.1046 10.8954 20 12 20H17.5C18.8807 20 20 18.8807 20 17.5V6.5C20 5.11929 18.8807 4 17.5 4H12C10.8954 4 10 4.89543 10 6V7C10 7.55228 9.55228 8 9 8C8.44772 8 8 7.55228 8 7V6ZM12.2929 8.29289C12.6834 7.90237 13.3166 7.90237 13.7071 8.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L13.7071 15.7071C13.3166 16.0976 12.6834 16.0976 12.2929 15.7071C11.9024 15.3166 11.9024 14.6834 12.2929 14.2929L13.5858 13L5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11L13.5858 11L12.2929 9.70711C11.9024 9.31658 11.9024 8.68342 12.2929 8.29289Z"
                            fill="#ffffff"></path>
                    </svg>
                </div>
            </label>
            <input type="checkbox" name="checkbox" id="checkbox_login" value="value">
            <div class="login_menu">
                <form class="form_area" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="item">
                        <label>Логін</label>
                        <input type="text" name="username" class="input" required="true" placeholder="Login">
                    </div>
                    <div class="item">
                        <label>Пароль</label>
                        <input type="password" name="password" class="input" required="true" placeholder="Password">
                    </div>
                    <div class="submit">
                        <button type="submit" name="submit" value="Submit" class="button">Увійти</button>
                    </div>
                </form>
            </div>
            <?php }  ?>
        </div>
    </div>

    <div class="table_cover">
        <table class="table">
            <tr>
                <th><a href="<?php echo sortorder('Id'); ?>" class="sort">Id</a></th>
                <th><a href="<?php echo sortorder('ПІБ'); ?>" class="sort">ПІБ</a></th>
                <th><a href="<?php echo sortorder('Телефон'); ?>" class="sort">Телефон</a></th>
                <th>Операції</th>
            </tr>
            <?php 

        $count = 1;
        $result = mysqli_query($dbcon,$query);
	    while($row = mysqli_fetch_assoc($result)){?>


            <tr class="contact">
                <td><?php echo $count;?></td>
                <td><?php echo $row["ПІБ"];?></td>
                <td><?php echo $row["Телефон"];?></td>
                <td>
                    <div class="show_options option">
                        <label for="checkbox_show_options_<?php echo $count; ?>" class="l_show_option">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 5C14 6.10457 13.1046 7 12 7C10.8954 7 10 6.10457 10 5C10 3.89543 10.8954 3 12 3C13.1046 3 14 3.89543 14 5Z"
                                    fill="#000000"></path>
                                <path
                                    d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z"
                                    fill="#000000"></path>
                                <path
                                    d="M12 21C13.1046 21 14 20.1046 14 19C14 17.8954 13.1046 17 12 17C10.8954 17 10 17.8954 10 19C10 20.1046 10.8954 21 12 21Z"
                                    fill="#000000"></path>
                            </svg>
                        </label>
                        <input type="checkbox" name="checkbox" id="checkbox_show_options_<?php echo $count; ?>"
                            class="checkbox_show_options" value="value">
                        <div class="options">
                            <div class="show option">
                                <label for="checkbox_show_<?php echo $count; ?>">
                                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path id="Stroke 1" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.1643 12.0519C15.1643 13.7979 13.7483 15.2139 12.0023 15.2139C10.2563 15.2139 8.84033 13.7979 8.84033 12.0519C8.84033 10.3049 10.2563 8.88989 12.0023 8.88989C13.7483 8.88989 15.1643 10.3049 15.1643 12.0519Z"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                        <path id="Stroke 3" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.75024 12.052C2.75024 15.332 6.89224 19.354 12.0022 19.354C17.1112 19.354 21.2542 15.335 21.2542 12.052C21.2542 8.769 17.1112 4.75 12.0022 4.75C6.89224 4.75 2.75024 8.772 2.75024 12.052Z"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </label>
                                <input type="checkbox" name="checkbox" id="checkbox_show_<?php echo $count; ?>"
                                    class="checkbox_show" value="value">
                                <div class="show_contact">
                                    <?php foreach ($show as $outerValue) { ?>
                                    <div class="info">
                                        <div class="contact_title"><?php echo $outerValue; ?></div>
                                        <div class="contact_info"><?php echo $row["$outerValue"];?></div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <a href="mailto:<?php echo $row["Email"]; ?>" id="msg" class="option">
                                <svg height="32px" width="32px" version="1.1" id="_x32_"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" fill="#000000">
                                    <path
                                        d="M510.746,110.361c-2.128-10.754-6.926-20.918-13.926-29.463c-1.422-1.794-2.909-3.39-4.535-5.009 c-12.454-12.52-29.778-19.701-47.531-19.701H67.244c-17.951,0-34.834,7-47.539,19.708c-1.608,1.604-3.099,3.216-4.575,5.067 c-6.97,8.509-11.747,18.659-13.824,29.428C0.438,114.62,0,119.002,0,123.435v265.137c0,9.224,1.874,18.206,5.589,26.745 c3.215,7.583,8.093,14.772,14.112,20.788c1.516,1.509,3.022,2.901,4.63,4.258c12.034,9.966,27.272,15.45,42.913,15.45h377.51 c15.742,0,30.965-5.505,42.967-15.56c1.604-1.298,3.091-2.661,4.578-4.148c5.818-5.812,10.442-12.49,13.766-19.854l0.438-1.05 c3.646-8.377,5.497-17.33,5.497-26.628V123.435C512,119.06,511.578,114.649,510.746,110.361z M34.823,99.104 c0.951-1.392,2.165-2.821,3.714-4.382c7.689-7.685,17.886-11.914,28.706-11.914h377.51c10.915,0,21.115,4.236,28.719,11.929 c1.313,1.327,2.567,2.8,3.661,4.272l2.887,3.88l-201.5,175.616c-6.212,5.446-14.21,8.443-22.523,8.443 c-8.231,0-16.222-2.99-22.508-8.436L32.19,102.939L34.823,99.104z M26.755,390.913c-0.109-0.722-0.134-1.524-0.134-2.341V128.925 l156.37,136.411L28.199,400.297L26.755,390.913z M464.899,423.84c-6.052,3.492-13.022,5.344-20.145,5.344H67.244 c-7.127,0-14.094-1.852-20.142-5.344l-6.328-3.668l159.936-139.379l17.528,15.246c10.514,9.128,23.922,14.16,37.761,14.16 c13.89,0,27.32-5.032,37.827-14.16l17.521-15.253L471.228,420.18L464.899,423.84z M485.372,388.572 c0,0.803-0.015,1.597-0.116,2.304l-1.386,9.472L329.012,265.409l156.36-136.418V388.572z">
                                    </path>
                                </svg></a>
                            <a href="<?php echo "https://".$row["Веб-сторінка"]; ?>" id="web" class="option"
                                target=”_blank>
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="vector"
                                        d="M7.8 12L7.05 12L7.8 12ZM16.2 12H16.95H16.2ZM12 16.2V16.95V16.2ZM14.1729 22.2749L14.3273 23.0088L14.1729 22.2749ZM9.82712 22.2749L9.67269 23.0088L9.82712 22.2749ZM2.27554 8.03225L1.58122 7.74867H1.58122L2.27554 8.03225ZM1.7251 14.1729L0.991173 14.3273L1.7251 14.1729ZM9.82712 1.7251L9.67269 0.991173L9.82712 1.7251ZM14.1729 1.7251L14.3273 0.991174L14.1729 1.7251ZM21.6399 8.07014L21.8576 8.78785L21.6399 8.07014ZM2.35887 8.06976L2.14116 8.78747L2.35887 8.06976ZM21.0312 8.3185C21.4944 9.45344 21.75 10.6959 21.75 12H23.25C23.25 10.4983 22.9553 9.06352 22.42 7.75174L21.0312 8.3185ZM21.75 12C21.75 12.6927 21.6779 13.3678 21.541 14.0184L23.0088 14.3273C23.167 13.5757 23.25 12.7972 23.25 12H21.75ZM21.541 14.0184C20.7489 17.7827 17.7828 20.7489 14.0184 21.541L14.3273 23.0088C18.6735 22.0943 22.0943 18.6735 23.0088 14.3273L21.541 14.0184ZM14.0184 21.541C13.3678 21.6779 12.6927 21.75 12 21.75V23.25C12.7972 23.25 13.5757 23.167 14.3273 23.0088L14.0184 21.541ZM12 21.75C11.3072 21.75 10.6322 21.6779 9.98156 21.541L9.67269 23.0088C10.4242 23.167 11.2028 23.25 12 23.25V21.75ZM2.25 12C2.25 10.6949 2.50601 9.45149 2.96986 8.31584L1.58122 7.74867C1.0451 9.06127 0.75 10.4971 0.75 12H2.25ZM9.98156 21.541C6.21724 20.7489 3.25112 17.7827 2.45903 14.0184L0.991173 14.3273C1.90571 18.6735 5.32647 22.0943 9.67269 23.0088L9.98156 21.541ZM2.45903 14.0184C2.32213 13.3678 2.25 12.6927 2.25 12H0.75C0.75 12.7972 0.83303 13.5757 0.991173 14.3273L2.45903 14.0184ZM2.96986 8.31584C4.17707 5.36016 6.79381 3.1298 9.98155 2.45903L9.67269 0.991173C5.99032 1.76602 2.97369 4.33941 1.58122 7.74867L2.96986 8.31584ZM9.98155 2.45903C10.6322 2.32213 11.3072 2.25 12 2.25V0.75C11.2028 0.75 10.4242 0.83303 9.67269 0.991173L9.98155 2.45903ZM12 2.25C12.6927 2.25 13.3678 2.32213 14.0184 2.45903L14.3273 0.991174C13.5757 0.833031 12.7972 0.75 12 0.75V2.25ZM14.0184 2.45903C17.2071 3.13 19.8245 5.3615 21.0312 8.3185L22.42 7.75174C21.0281 4.34096 18.0108 1.76625 14.3273 0.991174L14.0184 2.45903ZM13.4584 1.95309C13.7482 2.8614 14.8215 6.35621 15.2615 9.5682L16.7476 9.36461C16.289 6.01664 15.1813 2.41835 14.8874 1.49712L13.4584 1.95309ZM15.2615 9.5682C15.3795 10.4292 15.45 11.2568 15.45 12L16.95 12C16.95 11.1681 16.8715 10.269 16.7476 9.36461L15.2615 9.5682ZM21.4222 7.35242C20.2692 7.70212 18.1033 8.3164 15.8685 8.72886L16.1407 10.204C18.4546 9.7769 20.6809 9.14473 21.8576 8.78785L21.4222 7.35242ZM15.8685 8.72886C14.5129 8.97904 13.1579 9.15 12 9.15L12 10.65C13.2874 10.65 14.743 10.4619 16.1407 10.204L15.8685 8.72886ZM15.45 12C15.45 13.1009 15.2954 14.3808 15.0647 15.671L16.5413 15.935C16.7797 14.6019 16.95 13.2252 16.95 12L15.45 12ZM15.0647 15.671C14.5591 18.4992 13.7097 21.2593 13.4584 22.0469L14.8874 22.5029C15.145 21.6956 16.0181 18.8613 16.5413 15.935L15.0647 15.671ZM22.0469 13.4584C21.2593 13.7097 18.4992 14.5591 15.671 15.0647L15.935 16.5413C18.8613 16.0181 21.6956 15.145 22.5029 14.8874L22.0469 13.4584ZM15.671 15.0647C14.3808 15.2954 13.1009 15.45 12 15.45L12 16.95C13.2252 16.95 14.6019 16.7797 15.935 16.5413L15.671 15.0647ZM12 15.45C10.8991 15.45 9.61923 15.2954 8.32897 15.0647L8.06496 16.5413C9.39807 16.7797 10.7748 16.95 12 16.95L12 15.45ZM8.32897 15.0647C5.50076 14.5591 2.74066 13.7097 1.95309 13.4584L1.49712 14.8874C2.30437 15.145 5.13873 16.0181 8.06496 16.5413L8.32897 15.0647ZM7.05 12C7.05 13.2252 7.22032 14.6019 7.45867 15.935L8.93526 15.671C8.70456 14.3808 8.55 13.1009 8.55 12L7.05 12ZM7.45867 15.935C7.98188 18.8613 8.85504 21.6956 9.11261 22.5029L10.5416 22.0469C10.2903 21.2593 9.44094 18.4992 8.93526 15.671L7.45867 15.935ZM9.11261 1.49712C8.81867 2.41835 7.711 6.01664 7.25235 9.36461L8.73846 9.5682C9.17849 6.35621 10.2518 2.8614 10.5416 1.95309L9.11261 1.49712ZM7.25235 9.36461C7.12846 10.269 7.05 11.1681 7.05 12L8.55 12C8.55 11.2568 8.62052 10.4292 8.73846 9.5682L7.25235 9.36461ZM12 9.15C10.8421 9.15 9.4871 8.97904 8.13152 8.72886L7.85929 10.204C9.25697 10.4619 10.7126 10.65 12 10.65L12 9.15ZM8.13152 8.72886C5.89586 8.31625 3.72921 7.70168 2.57657 7.35205L2.14116 8.78747C3.3175 9.14428 5.54457 9.77675 7.85929 10.204L8.13152 8.72886ZM21.38 7.3695C21.3919 7.3633 21.4065 7.35719 21.4222 7.35242L21.8576 8.78785C21.933 8.76498 22.0039 8.73569 22.0712 8.70074L21.38 7.3695ZM1.88425 8.67209C1.96322 8.72038 2.04888 8.75948 2.14116 8.78747L2.57657 7.35205C2.60983 7.36214 2.64048 7.3763 2.66683 7.39242L1.88425 8.67209Z"
                                        fill="#000000"></path>
                                    <defs>
                                        <clipPath id="clip0_1_1825">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="tel:+380 362<?php echo $row["Телефон"]; ?>" id="call" class="option">
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z"
                                        stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"></path>
                                </svg>
                            </a>
                            <?php if(isset($_SESSION['username'])){ ?>
                            <div class="update option">
                                <label for="checkbox_update_<?php echo $count; ?>" class="l_checkbox_update">
                                    <svg viewBox="0 0 24 24" width="32" height="32" fill="#ffff00"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13"
                                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z"
                                            stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.91 4.1499C15.58 6.5399 17.45 8.4099 19.85 9.0899" stroke="#292D32"
                                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </label>
                                <input type="checkbox" name="checkbox" id="checkbox_update_<?php echo $count; ?>"
                                    class="checkbox_update" value="value">
                                <div class="update_contact">
                                    <form class="form_area" action="?updateid=<?php 
                                        foreach ($form as $outerKey => $outerValue){
                                            $link_update .= "&$outerValue=".$row["$outerKey"];
                                        }
                                        echo $row["Id"].$link_update; ?>" method="POST">
                                        <?php foreach ($form as $outerKey => $outerValue) { ?>
                                        <div class="item">
                                            <label><?php echo $outerKey; ?></label>
                                            <input type="text" name="<?php echo $outerValue; ?>" class="input"
                                                placeholder="<?php echo $row["$outerKey"];?>">
                                        </div>
                                        <?php } ?>
                                        <div class="submit">
                                            <button type="submit" name="update" value="Update"
                                                class="button">Оновити</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <a href="?deleteid=<?php echo $row["Id"]; ?>" id="del" class="option"
                                Onclick="return ConfirmDelete()">
                                <svg fill="#ff0000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px"
                                    viewBox="0 0 482.43 482.43">
                                    <path
                                        d="M381.163,57.799h-75.094C302.323,25.316,274.686,0,241.214,0c-33.471,0-61.104,25.315-64.85,57.799h-75.098 c-30.39,0-55.111,24.728-55.111,55.117v2.828c0,23.223,14.46,43.1,34.83,51.199v260.369c0,30.39,24.724,55.117,55.112,55.117 h210.236c30.389,0,55.111-24.729,55.111-55.117V166.944c20.369-8.1,34.83-27.977,34.83-51.199v-2.828 C436.274,82.527,411.551,57.799,381.163,57.799z M241.214,26.139c19.037,0,34.927,13.645,38.443,31.66h-76.879 C206.293,39.783,222.184,26.139,241.214,26.139z M375.305,427.312c0,15.978-13,28.979-28.973,28.979H136.096 c-15.973,0-28.973-13.002-28.973-28.979V170.861h268.182V427.312z M410.135,115.744c0,15.978-13,28.979-28.973,28.979H101.266 c-15.973,0-28.973-13.001-28.973-28.979v-2.828c0-15.978,13-28.979,28.973-28.979h279.897c15.973,0,28.973,13.001,28.973,28.979 V115.744z">
                                    </path>
                                    <path
                                        d="M171.144,422.863c7.218,0,13.069-5.853,13.069-13.068V262.641c0-7.216-5.852-13.07-13.069-13.07 c-7.217,0-13.069,5.854-13.069,13.07v147.154C158.074,417.012,163.926,422.863,171.144,422.863z">
                                    </path>
                                    <path
                                        d="M241.214,422.863c7.218,0,13.07-5.853,13.07-13.068V262.641c0-7.216-5.854-13.07-13.07-13.07 c-7.217,0-13.069,5.854-13.069,13.07v147.154C228.145,417.012,233.996,422.863,241.214,422.863z">
                                    </path>
                                    <path
                                        d="M311.284,422.863c7.217,0,13.068-5.853,13.068-13.068V262.641c0-7.216-5.852-13.07-13.068-13.07 c-7.219,0-13.07,5.854-13.07,13.07v147.154C298.213,417.012,304.067,422.863,311.284,422.863z">
                                    </path>
                                </svg>
                            </a>
                            <?php } ?>
                        </div>

                </td>
            </tr>
            <?php $count++; } ?>
        </table>
    </div>

    <?php if(isset($_SESSION['error'])){ ?>
    <div class="error">
        <?php if($_SESSION['error'] == 'log_error'){ ?>
        Неправильний логін або пароль!
        <?php }elseif ($_SESSION['error'] == 'cont_error'){ ?>
        Введені некоректні дані!
        <?php } ?>
    </div>
    <?php 
    unset($_SESSION['error']);
    } ?>
</div>

<script>
function ConfirmDelete() {
    return confirm("Do you want to delete?");
}
</script>