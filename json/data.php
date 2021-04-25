<?php

    require_once('config.php');

    $id = ''; 
    if( isset( $_GET['id'])) {
        $id = $_GET['id']; 
    } 
    $msg = '';
    $code = '';

    if (!empty($id))
    {
        //Single data with param id
        $query = mysqli_query($koneksi,"SELECT * FROM menplayers");
        if (mysqli_num_rows($query) > 0) {
            $msg = "Sukses Fren!";
            }else{
                $msg = "Kasian Deh Loh Gaada!"; 
            }
    }else{
        $query = mysqli_query($koneksi,"SELECT * FROM menplayers");
        if (mysqli_num_rows($query) > 0) {
            $msg = "Sukses Fren!";
        }else{
            $msg = "Kasian Deh Loh Gaada!"; 
        }
    };

        //untuk menjalankan perinta sql
        # buat array
        $response = array();
        $response["success"] = true;
        $response["data"] = array();
        $response["message"] = $msg;
            while ($row = mysqli_fetch_assoc($query)) {
                # kerangka format penampilan data json
                $data['id'] = $row["id"];
                $data['fullname'] = $row["fullname"];
                $data['level'] = $row["level"];
                $data['age'] = $row["age"];
                $data['country'] = $row["country"];
                $data['statistic'] = $row["statistic"];
                $data['release_at'] = $row["release_at"];
                array_push($response["data"], $data);
            }
        echo json_encode($response);

?>