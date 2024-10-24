<html>
    <head>
        <title>server status</title>
    </head>

    <body>
        <h1>Server Status<br></h1>
        <?php
            # ram
            $memory_usage = memory_get_usage();
            $memory_peak = memory_get_peak_usage();

            # storage
            $disk_free_space = disk_free_space();
            $disk_total_space = disk_free_space();

            # unix time
            $server_time = date('y/m/d H:i:s');

            echo "Information reported at " + $server_time;
            echo "memory: " + $memory_peak + "/ max usg: " + $memory_peak;
            echo "storage: " + $disk_free_space + "/" + $disk_total_space + " avaliable";

            echo "memory installed: 32GB PC3";
            echo "storage drive: 1TB HDD (mirrors.bendaws.net), 256GB SSD (system drive)";
        ?>
    </body>
</html>