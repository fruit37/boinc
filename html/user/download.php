<?php

require_once("db.inc");
require_once("util.inc");
require_once("download.inc");

    init_session();
    db_init();

    page_head("Download BOINC software");
    if (!get_logged_in_user(false, "")) {
        echo "
            <h3>Download BOINC software</h3>
            <font color=ff0000>
            <b>First-time ".PROJECT." participants</b>:
            <br>Don't download BOINC software now.
            <a href=create_account_form.php>Create an account</a>
            before you download.
            </font>
            <p>
            If you're a returning ".PROJECT." user:
        ";
    }
    echo "Select your computer type:<p>\n";
    print_download_links();
    echo "
        <p>
        Instructions for installing and running BOINC are
        <a href=http://boinc.berkeley.edu/client.php>here</a>.
        <p>
        BOINC can be customized for
        <a href=http://boinc.berkeley.edu/language.php>languages other than English</a>
        <p>
        <font size=-1>
        <a href=http://boinc.berkeley.edu>BOINC</a>
        is distributed computing software
        developed at the University of California by
        the SETI@home project.
        </font>
    ";
    page_tail();
?>
