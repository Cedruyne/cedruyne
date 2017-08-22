<?php

if (!isset($_GET['page']))
{
    include_once ('controllers/index.php');
} else
{
    switch ($_GET['page'])
    {
        case 'portfolio':
            include_once('controllers/portfolio.php');
            break;
        case 'contact':
            include_once('controllers/contact.php');
            break;
        case 'mail':
            include_once ('controllers/mail.php');
            break;
        default:
            include_once ('controllers/index.php');
            break;
    }
}
