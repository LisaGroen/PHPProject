<?php

$regel = 9;

for ($i = 0; $i < $regel; $i++) {
    echo "*<br>";
    for ($i = 0; $i < $regel - 1; $i++) {
        echo "**<br>";
        for ($i = 0; $i < $regel - 2; $i++) {
            echo "***<br>";
            for ($i = 0; $i < $regel - 3; $i++) {
                echo "****<br>";
                for ($i = 0; $i < $regel - 4; $i++) {
                    echo "*****<br>";
                    for ($i = 0; $i < $regel - 5; $i++) {
                        echo "******<br>";
                        for ($i = 0; $i < $regel - 6; $i++) {
                            echo "*******<br>";
                            for ($i = 0; $i < $regel - 7; $i++) {
                                echo "********<br>";
                                for ($i = 0; $i < $regel - 8; $i++) {
                                    echo "*********<br>";
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}