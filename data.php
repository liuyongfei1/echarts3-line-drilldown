<?php
    // 这里的接口代码伪代码大概如下:
    function getInterfaceData($month) {
        // 1.写查询语句,这里只是写伪代码,自己做防sql注入
        $sql =  "select ... from table where month = $month";
        // 2.连接数据库,查询结果为$data
        // 3.对查询的结果进行组装,返回json格式的数组
        $chartResult = [];
        // 4.取出x轴的值
        $chartResult['xAxis'] = $data['report_date'];
        // 5.为第一个series赋值，我们这里的demo只有一条折线
        $yAxisArr['yAxis'][0] = $data['data0'];

        // 如果有多条折线的情况下,可以这样写
        // $yAxisArr['yAxis'][1] = $data['data1'];
        // $yAxisArr['yAxis'][2] = $data['data2'];

        // 6.为y轴赋值
        $chartResult['yAxis'] = $yAxisArr;
        // 7.返回json格式的数据
        exit(json_encode($chartResult));
    }
?>