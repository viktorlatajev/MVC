<?php

class CModel {
    public function GetData(){
        $mysqli = new mysqli("localhost", "root", "", "blog");

        $result = $mysqli->query("SELECT * FROM news");

        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        // var_dump($arrayResult);

        return $arrayResult;
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel cumque culpa.'
            
        // );
        
    }
}