<?php
if (extension_loaded('locale')) {
    echo 'The Locale extension is installed and enabled.';
} else {
    echo 'The Locale extension is NOT installed or enabled.';
}