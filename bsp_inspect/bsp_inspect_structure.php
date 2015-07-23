<?php
function bsp_inspect_search()
{
    echo "<script>";
    include "libs/jquery/dist/jquery.min.js";
    echo "</script>";
    echo "<script>";
    include "javascript/script.js";
    echo "</script>";
    echo "<style>";
    include "css/bootstrap.min.css";
    echo "</style>";
    echo "<style>";
    include "css/bsp_inspect_style.css";
    echo "</style>";
    echo "
            <a class='bsp_inspect_search'></a>
            <div class='bsp_inspect_container'>
                <div class='row'>
                    <div class='col-lg-2'>
                        <span class='bsp_inspect_label'>Search</span>
                    </div>
                    <div class='col-lg-9'>
                        <a class='bsp_inspect_all_results'>All results</a>
                    </div>
                    <div class='col-lg-1'>
                        <a class='bsp_inspect_close'>close</a>
                    </div>
                </div>
                <input class='bsp_inspect_search_field' type='text'>

                <div class='bsp_inspect_search_results'>";
                    while(have_posts()) {
                        the_post();
                        the_title();
                    }
                echo "</div>
            </div>";
 }